<?php 
	include './koneksi.php';
	$Kategori = mysqli_query($conn,"SELECT * FROM tb_kategori");
	$tipe = mysqli_query($conn,"SELECT * FROM tipe_sewa");
	$tipetunda = mysqli_query($conn,"SELECT * FROM tipe_sewa");
 ?>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<div class="pasang_product">
	<div class="container">
		<div class="panel">
			<div class="text-h1">
				<center>Pasang Product</center>
			</div>
			<hr>
			
			<form method="post" enctype="multipart/form-data">
				<div class="form-row container-fluid mt-5">
			    	


			    	<div class="form-group col-md-4">
			    		<label for="inputKategori">Kategori</label>
			      		<select id="inputKategori" class="form-control" name="kategori" required>
					        <option value="">--select--</option>
					        <?php while ($kat = mysqli_fetch_assoc($Kategori)) { ?>
					        <option value="<?php echo $kat['kategori']; ?>"><?php echo $kat['kategori']; ?></option>
					        <?php } ?>
					    </select>
			    	</div>
			    
			    
			    	<div class="form-group col-md-8">
					    <label for="inputNama">Nama Properti</label>
					    <input type="text" class="form-control" id="inputNama" name="nama" autocomplete="off" placeholder="Masukkan Nama Product" required>
			    		<div class="invalid-feedback">
			    			Please provide a valid Nama Properti
			    		</div>
			  		</div>
			  		
			  		<div class="form-group col-md-12">
					    <label for="inputSpesifikasi">Spesifikasi</label>
					    <textarea class="form-control" id="inputSpesisfikasi" autocomplete="off" name="spesifikasi" rows="3" required></textarea>
					    <div class="invalid-feedback">
			    			Please provide a valid Deskripsi
			    		</div>
			  		</div>

			  		
			  		<div class="form-group col-md-4">
					    <label for="inputTipe">Tipe Sewa</label>
					    <select id="inputTipe" class="form-control" name="tipe_sewa" required>
					        <option value="">--select--</option>
					        <?php while ($tp = mysqli_fetch_assoc($tipe)) { ?>
					        <option value="<?php echo $tp['nama']; ?>"><?php echo $tp['nama']; ?></option>
					   		<?php } ?>
				      	</select>
			    	</div>
			    
			    	<div class="form-group col-md-4">
			      		<label for="inputTunda">Periode Tunda</label>
			      		<input type="text" class="form-control" id="inputTunda" autocomplete="off" name="periode_tunda" required>

			      		<!-- <select id="inputTunda" class="form-control" name="periode_tunda" required>
					        <option value="">--select--</option>
					        <?php while ($tp = mysqli_fetch_assoc($tipetunda)) { ?>
					        <option value="<?php echo $tp['nama']; ?>"><?php echo $tp['nama']; ?></option>
					   		<?php } ?>
			      		</select> -->
			      		
			    		</div>


			  
			  		<div class="form-group col-md-4">
					    <label for="inputTelp">No. Telepon</label>
					    <input type="text" class="form-control" id="inputTelp" name="no_telp" autocomplete="off" placeholder="Masukkan No.Telepon" onkeypress="return hanyaAngka(event)" required>
					    <div class="invalid-feedback">
					    	Please provide a valid No. Telepon
					    </div>
			  		</div>
			  
			  		<div class="form-group col-md-12">
					    <label for="inputAlamat">Alamat</label>
					    <textarea class="form-control" id="inputAlamat" name="alamat"  rows="3" autocomplete="off" placeholder="Masukkan Alamat" required></textarea>
					    <div class="invalid-feedback">
					    	Please provide a valid Alamat
					    </div>
			  		</div>

			  		<div class="form-group col-md-4">
					    <label for="inputNama">Biaya Operasional</label>
					    <input type="text" class="form-control" id="inputNama" name="biaya_operasional" autocomplete="off" placeholder="Masukkan Biaya Operasional" onkeypress="return hanyaAngka(event)" required>
			    		<div class="invalid-feedback">
			    			Please provide a valid Nama Properti
			    		</div>
			  		</div>

			  		<div class="form-group col-md-4">
					    <label for="inputimg">Gambar Product</label>
					    <input type="file" class="form-control-file" name="foto" id="inputimg" required>
					    <div class="invalid-tooltip">
					    	Please provide a valid File Images
					    </div>
			  		</div>

			  		<div class="form-group col-md-4" hidden>
			      		<label for="inputStatus">Status</label>
			      		<select id="inputStatus" class="form-control" name="status">
			        		<option value="Non-Aktif">Tidak Aktif</option>
			      		</select>
			    	</div>

			    	<div class="form-group col-md-4" hidden>
					    <label for="inputid_user">id_user</label>
					    <input type="text" class="form-control" id="inputid_user" name="id_user" value="<?php echo $_SESSION['id']; ?>">
			  		</div>
			  		
			  		<div class="form-group col-md-12">
			  			<div class="form-check">
			  				<input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
			  				<label class="form-check-label" for="invalidCheck">
			  					Dengan ini saya menyatakan bahwa saya mengisi data dengan sejujur-jujurnya.
			  				</label>
			  			</div>
			  		</div>
			  		

				</div>

					<div class="form-group col-md-4">
			  			<button type="simpan" class="btn btn-success" name="simpan">Pasang</button>
					</div>
			
			</form>



			<?php 
	

	if(isset($_POST['simpan']))
		{
			$syarat = array('png','jpg');
	        $gambar = $_FILES['foto']['name'];
	        $x = explode('.', $gambar);
	        $ekstensi = strtolower(end($x));
	        $ukuran = $_FILES['foto']['size'];
	        $temp = $_FILES['foto']['tmp_name'];
	        if(in_array($ekstensi, $syarat) == true){
	        	if($ukuran<1044070){
	        		move_uploaded_file($temp, "./assets/images/produk/".$gambar);
					$nama = $_POST['nama'];
					$kategori = $_POST['kategori'];
					$spesifikasi = $_POST['spesifikasi'];
					$tipe_sewa = $_POST['tipe_sewa'];
					$periode_tunda = $_POST['periode_tunda'];
					$no_telp = $_POST['no_telp'];
					$alamat = $_POST['alamat'];
					$biaya_operasional = $_POST['biaya_operasional'];
					$status = $_POST['status'];
					$id_user = $_POST['id_user'];
				

		$query = "INSERT INTO data_item(nama, kategori, spesifikasi, tipe_sewa, periode_tunda, no_telp, alamat, biaya_operasional, gambar, status, id_user) VALUES('$nama', '$kategori', '$spesifikasi', '$tipe_sewa', '$periode_tunda', '$no_telp', '$alamat', '$biaya_operasional', '$gambar', '$status','$id_user')";


		$save = mysqli_query($conn,$query);

			if($save){
				echo "<script>alert('Data Berhasil Tersimpan');</script>";
				echo "<script>var timer = setTimeout(function(){ window.location = '?page=pasang_kamar'}, 500);
				</script>";
			}else{
				echo "<script>alert('Data Gagal Tersimpan');</script>";
				echo "<script>var timer = setTimeout(function(){ window.location = '?page=pasang'}, 500);
				</script>";
			}

		}else{
	    	echo "<script>alert('Ukuran file terlalu besar')</script>";
	    }
	    
	    }else{
	    	echo "<script>alert('Ekstensi file tidak diperbolehkan')</script>";

	    }
	}

 ?>
			

		</div>
	</div>
</div>

<script>
	function hanyaAngka(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57))
 
		    return false;
		  return true;
		}	
</script>
