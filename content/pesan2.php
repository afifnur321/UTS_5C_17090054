	<?php 
	include './koneksi.php';
	$pesan = mysqli_query($conn,"SELECT * FROM tb_pesan WHERE id_pesan IN(SELECT MAX(id_pesan) FROM tb_pesan)");

 ?>



<div class="pesan_product">
	<div class="container">
		<div class="panel">
			
			<form name="form1" id="form1" method="post" action="" enctype="multipart/">
				<div class="text-h1">
						<center>SEWA</center>
					</div>

				<div class="form-row container-fluid">
					<?php while ($psn = mysqli_fetch_assoc($pesan)) { ?>
			
					<div class="form-group col-md-4">
					    <label for="inputHasil">Total</label>
					    <input type="text" class="form-control" id="inputHasil" name="hasil1" value="<?php echo number_format($psn['total_harga']) ?>" readonly>
			  		</div>

			  		<div class="form-group col-md-4" hidden>
					    <label for="inputHasil">Total</label>
					    <input type="text" class="form-control" id="inputHasil" name="hasil" value="<?php echo $psn['total_harga'] ?>" readonly>
			  		</div>


			  		<div class="form-group col-md-4">
			    		<label for="inputKategori">Status</label>
			      		<select id="inputKategori" class="form-control" name="status" >
					        <option value="">--select--</option>
					        <option value="BOOKING">BOOKING</option>
					        <option value="CASH">CASH</option>
			      		</select>
			    	</div>

			    	<!-- <?php 
			    	// if ($status == 'CASH' AND $_POST['bayar'] != $_POST['hasil']) {
			    	// 	echo "<script>alert('Jumlah Pembayaran');</script>";
			    	// 	echo "<script>var timer = setTimeout(function(){ window.location = '?page=pesan2'}, 500);</script>";
			    	// }else{
			    	// 	echo "<script>alert('berhasil');</script>";
			    	// }
			    	?> -->

			    	<div class="form-group col-md-2">
					    <label for="inputBayar">Uang Di Bayar</label>
					    <input type="text" autocomplete="off" class="form-control" id="inputBayar" name="bayar" onkeypress="return hanyaAngka(event)">
			  		</div>




					<div class="form-group col-md-4">
			    		<label for="inputVia">Via Pembayaran</label>
			      		<select id="inputVia" class="form-control" name="via" >
					        <option value="">--select--</option>
					        <option value="CASH">CASH</option>
					        <option value="Transfer">Transfer</option>
			      		</select>
			    	</div>			  		

			    	<div class="form-group col-md-4" hidden>
					    <label for="inputidPesan">id pesan</label>
					    <input type="text" class="form-control" id="inputidPesan" name="id_pesan" value="<?php echo $psn['id_pesan']; ?>">
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

			If(isset($_POST['simpan'])){

				$hasil = $_POST['hasil'];
				$status = $_POST['status'];
				$bayar = $_POST['bayar'];
				$via = $_POST['via'];
				$id_pesan = $_POST['id_pesan'];				
				if ($status == 'CASH' AND $_POST['bayar'] >= $_POST['hasil'] OR $status == 'BOOKING' AND $_POST['bayar'] <= $_POST['hasil']) {
			    		echo "<script>var timer = setTimeout(function(){ window.location = '?page=product'}, 500);</script>";

					$query = "INSERT INTO tb_transaksi(total_harga, status, dibayar, via_pembayaran, id_pesan) VALUES('$hasil', '$status', '$bayar', '$via', '$id_pesan')";
					$save = mysqli_query($conn,$query);

				    if($save){
						echo "<script>var timer = setTimeout(function(){ window.location = '?page=product'}, 500);
						</script>";

				    	if($via == 'Transfer'){
								echo "<script>alert('Bayar melalui Rekening BCA atas Nama : Jimmy Himawan ac, No rekening : 0461542084');</script>";
								echo "<script>var timer = setTimeout(function(){ window.location = '?page=product'}, 500);</script>";
						}elseif ($via == 'CASH') {
								echo "<script>alert('Sukses');</script>";
								echo "<script>var timer = setTimeout(function(){ window.location = '?page=product'}, 500);</script>";	
						}

					
					}else{
						echo "<script>alert('Data Gagal Tersimpan');</script>";
						echo "<script>var timer = setTimeout(function(){ window.location = '?page=pesan2'}, 500);
						</script>";
					}

				}else{
					echo "<script>alert('Jumlah Uang Yang Dimasukkan Salah');</script>";
					echo "<script>var timer = setTimeout(function(){ window.location = '?page=pesan2'}, 500);</script>";
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