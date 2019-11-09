<header>
	<?php 
	include './koneksi.php';
	require '_partials/slider.php';
	echo "<br>";
	
	echo "<br>";
	
	$st = mysqli_query($conn, "SELECT * FROM studio WHERE status='kosong'");
	 ?>

<div class="product" id="product">
	<div class="header">
		<a class="text-h1"><center>PRODUK STUDIO</center></a>
	</div>
	
	<div class="container">
		
		

		<div class="row justify-content-center">
			<?php while ($data = mysqli_fetch_assoc($st)) { ?>
			<div class="col-md-4 col-sm-12 mt-5">
				<div class="card shadow" style="width: 20rem;">
					<div class="inner">
						<img class="card-img-top" style="height: 200px;" src="./assets/images/produk/<?php echo $data['gambar']; ?>" alt="Card image cap">
					</div>
					<div class="card-body">
					    <h5 class="card-title"><strong><?php echo $data['judul_ruangan']; ?></strong></h5>
					    
					    <div class="price-box orange">
					    	
							<span>Rp. <?php echo number_format($data['harga']); ?></span>
					
						</div>

					    <p class="card-text"><?php echo $data['detail']; ?></p>
					    <a href="index.php?page=pesan&id=<?php echo $data['id_studio']; ?>" class="btn btn-success" data-value="detail_produk">Booking Studio</a>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>

		<div class="mt-5 row justify-content-center">
			<a href="index.php?page=product" class="btn btn-success">View All Product</a>	
		</div>
		<br>
		

	</div>

</div>

	
</header>
<!-- isi -->