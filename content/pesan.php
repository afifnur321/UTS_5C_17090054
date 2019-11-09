	<?php 
	include './koneksi.php';
	$st = mysqli_query($conn, "SELECT * FROM studio WHERE id_studio = '$_GET[id]'");
		
 ?>

<div class="pesan_product">
	<div class="container">
		<div class="panel">
			
			<form name="form1" id="form1" method="post" action="" enctype="multipart/">
				<div class="text-h1">
						<center>BOOKING</center>
					</div>

				<div class="form-row container-fluid">
					<?php while ($data = mysqli_fetch_assoc($st)) { ?>
					<div class="form-group col-md-2">
					    <label for="inputstudio">Judul Ruangan</label>
					    <input type="text" class="form-control" id="inputKmr" name="Judul" value="<?php echo $data['judul_ruangan']; ?>" readonly>
			  		</div>

			  		<div class="form-group col-md-8">
					    <label for="inputNama">Nama</label>
					    <input type="text" autocomplete="off" class="form-control" id="inputNama" name="Nama" placeholder="Masukkan Nama Lengkap">
			  		</div>

			  		<div class="form-group col-md-2">
					    <label for="inputNama">Jam Mulai</label>
					    <input type="text" autocomplete="off" class="form-control" id="inputNama" name="Mulai" placeholder="Masukan Jam Mulai">
			  		</div>

			  		<div class="form-group col-md-2">
					    <label for="inputHarga">Lama Sewa</label>
					    <input type="text" class="form-control" id="inputHarga" name="Sewa" autocomplete="off" placeholder="Hitungan per-Jam">
			  		</div>
			  		
			  		
			  		<div class="form-group col-md-2">
					    <label for="inputHarga">No. Rekening</label>
					    <input type="text" class="form-control" id="inputHarga" name="Rekening" autocomplete="off" placeholder="Masukan No Rekening">
			  		</div>

			  		<?php } ?>
					
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
			  			<button type="simpan" class="btn btn-success" name="simpan">Kirim</button>
					</div>
			
			</form>
			<?php 

			If(isset($_POST['simpan']))
		{	

			$Judul = $_POST['Judul'];
			$Mulai = $_POST['Mulai'];
			$Sewa = $_POST['Sewa'];
			$Nama = $_POST['Nama'];
			$NoRek = $_POST['Rekening'];


		$query = "INSERT INTO booking(nama, judul_ruangan, jam_mulai, lama_sewa, no_rekening) VALUES('$Nama', '$Judul', '$Mulai','$Sewa', '$NoRek')";
		$save = mysqli_query($conn,$query);

		if($save){
			echo "<script>alert('Booking Studio telah selesai, Terima Kasih');</script>";
			echo "<script>var timer = setTimeout(function(){ window.location = '?page=product'}, 500);
			</script>";
		}else{
			echo "<script>alert('Booking Studio gagal!');</script>";
			// echo "<script>var timer = setTimeout(function(){ window.location = '?page=pesan'}, 500);
			// </script>";
		}
	}

			 ?>
			
		</div>
	</div>
</div>


<script>
	function 
</script>