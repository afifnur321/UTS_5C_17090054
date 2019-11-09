<?php 
		include './koneksi.php';
		$item = mysqli_query($conn,"SELECT * FROM data_item WHERE id_item IN(SELECT MAX(id_item) FROM data_item)");
		$data = mysqli_fetch_assoc($item);


		if(isset($_POST['simpan']))
		{	
			$nama_kamar = $_POST['nama_kamar'];
			$tipe_sewa = $_POST['tipe_sewa'];
			$harga_kamar = $_POST['harga_kamar'];
			$status_kamar = $_POST['status_kamar'];
			$deskripsi_kamar = $_POST['deskripsi_kamar'];
			$id_item = $_POST['id_item'];

			$gambar = $_FILES['gambar_kamar']['name'];
			$target= "./assets/images/produk/";
			$count = 0;
			foreach ($_FILES['gambar_kamar']['name'] as $filename) 
				
            {
                $temp=$target;
                $tmp=$_FILES['gambar_kamar']['tmp_name'][$count];
                $count=$count + 1;
                $temp=$temp.basename($filename);
                move_uploaded_file($tmp,$temp);
                $temp='';
                $tmp='';
            }
	        // move_uploaded_file($temp,"./assets/images/".$gambar);
			


			foreach($nama_kamar as $key => $val){
	//		$query ="INSERT INTO mhs (nim,nama,telp) VALUES ('$nim[$key]','$nama[$key]','$telp[$key]')";
	    
			$query = "INSERT INTO tb_kamar(kamar, tipe_sewa, harga, status_kamar, deskripsi, gambar_kamar, id_item) VALUES('$nama_kamar[$key]','$tipe_sewa[$key]','$harga_kamar[$key]', '$status_kamar[$key]', '$deskripsi_kamar[$key]', '$gambar[$key]', '$id_item[$key]')";
			
			$save = mysqli_query($conn,$query);

			}if($save){
				echo "<script>alert('Data Berhasil Tersimpan');</script>";
				echo "<script>var timer = setTimeout(function(){ window.location = '?page=product'}, 500);
				</script>";

			}else{
				echo "<script>alert('Data Gagal Tersimpan');</script>";
				echo "<script>var timer = setTimeout(function(){ window.location = '?page=product'}, 500);
				</script>";
			}
	        			
		}
 ?>

<div class="pasang_kamar">
	<div class="container">
		<div class="panel">
			
<!-- 			<form method="get" name="frm" action="">
				
			  	<input type="submit" name="btnJumlah" value="Ok" />
		  	</form>
 -->		  	
				
			
				<form method="post" action="#" enctype="multipart/form-data" >
					<label>Jumlah Product</label>
					<br>
					<input name="jumlah" type="text" autocomplete="off" placeholder="Enter Jumlah Kamar"/>
					<input type="submit" class="btn btn-success" name="btnJumlah" value="Ok" />	

		  		</form><hr>
		  			
		  			<?php 
		  				// if ($_POST['jumlah']) {
		  			if (isset($_POST['jumlah'])&& $_POST['jumlah']>0) {
		  		 	?>
			
				 <form method="post" enctype="multipart/form-data">
				 	
				 	<?php
				 		$jumlah = $_POST['jumlah'];	
				 			
				 		for($i=1; $i<=$jumlah; $i++){
				 	 ?>
				 	
			
				<div class="form-row container-fluid">
					<div class="form-group col-md-12 mt-2">
						<h3>Product <?php echo $i; ?></h3>
					</div>
								  		
				    <div class="form-group col-md-2">
                        <label for="inputSewa">Nama Product</label>
                        <input type="text" class="form-control" autocomplete="off" name="nama_kamar[]" id="inputSewa" value="<?php echo $i; ?>" readonly>	
                    </div>

                    <div class="form-group col-md-2">
                        <label for="inputTipe">Tipe Sewa</label>
                        <input type="text" class="form-control" autocomplete="off" name="tipe_sewa[]" id="inputTipe" value="<?php echo $data['tipe_sewa']; ?>" readonly>	
                    </div>

                    <div class="form-group col-md-4">
                        <label for="inputSewa">Harga Sewa</label>
                        <input type="text" class="form-control" autocomplete="off" name="harga_kamar[]" id="inputSewa" placeholder="Masukkan Harga Sewa" onkeypress="return hanyaAngka(event)" required>
                        		
                    </div>
                
              
                    <div class="form-group col-md-4">
                        <label for="inputStatusKmr">Status Product</label>
                        <select id="inputStatusKmr" class="form-control" name="status_kamar[]" required>
                            <option value="">--select--</option>
                            <option value="available">available</option>
                            <option value="not-available">not-available</option>
                        </select>
                    </div>
                
                    
                    <div class="form-group col-md-12">
                        <label for="inputDeskripsi">Deskripsi Product</label>
                        <textarea class="form-control" autocomplete="off" id="inputDeskripsi" name="deskripsi_kamar[]" rows="3" required></textarea>
                    </div>
              
                   
                    <div class="form-group col-md-4">
                        <label for="inputimg">Gambar Product</label>
                        <input type="file" class="form-control-file" name="gambar_kamar[]" id="inputimg" multiple='multiple' required>
                    </div>
	
                    <div class="form-group col-md-4" hidden>
                        <label for="inputIdItem">id_item</label>
                        <input type="text" class="form-control" name="id_item[]" id="inputIdItem" value="<?php echo$data['id_item']; ?>">
                    </div>

				</div>

				<br>
				<hr>
				<?php } ?>
			

					<div class="form-group col-md-12">
			  			<div class="form-check">
			  				<input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
			  				<label class="form-check-label" for="invalidCheck">
			  					Dengan ini saya menyatakan bahwa saya mengisi data dengan sejujur-jujurnya.
			  				</label>
			  			</div>
			  		</div>

					<div class="form-group col-md-4">
			  			<button type="simpan" class="btn btn-success" name="simpan">Pasang</button>
					</div>
			
			</form>
		<?php } ?>
			

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