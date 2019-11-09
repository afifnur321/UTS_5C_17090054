<?php 
	include './koneksi.php';

		// $kamar = mysqli_query($conn,"SELECT harga FROM tb_kamar WHERE id_item = 1");
		// $kmr = mysqli_fetch_assoc($kamar);
		$Kategori = mysqli_query($conn, "SELECT * FROM studio");

	
 ?>
<div class="product" id="product">
	<div class="container">
		<div class="header">
		<br>
		<a class="text-h1"><center>PRODUK STUDIO</center></a>
   		 <?php 

   			if (isset($_POST['submit1'])) {

   				$detail = mysqli_query($conn, "SELECT * FROM studio WHERE status='kosong'");

   				echo "<br>";
   				echo "<a href='?page=product' class='mr-sm-12 m-2 btn btn-success' data-value='detail_produk'>View All Product</a>";

   			}else{
   				$per_laman = 6;
				$laman_sekarang = 1;
				
				if (isset($_GET['laman'])) {
					$laman_sekarang = $_GET['laman'];
					$laman_sekarang = ($laman_sekarang > 1) ? $laman_sekarang : 1;
				}
					$total_data = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM studio WHERE status='kosong' GROUP BY judul_ruangan ORDER BY id_studio DESC"));
				
					$total_laman = ceil($total_data/$per_laman);
					$awal  = ($laman_sekarang - 1) * $per_laman;

   				$detail = mysqli_query($conn, "SELECT * FROM studio WHERE status='kosong' GROUP BY judul_ruangan ORDER BY id_studio DESC LIMIT $per_laman OFFSET $awal");
   			}

   		  ?>


	</div>

	<div class="container">
		
		<div class="row justify-content-center mt-5 pb-5">
			<?php if(mysqli_num_rows($detail)) { ?>
			<?php while ($data = mysqli_fetch_assoc($detail)) { ?>	
			<div class="col-12 col-md-4 col-sm-12 mt-5">
				<div class="card shadow" style="width: 20rem;">
					<div class="inner">
					<a href="index.php?page=pesan&id=<?php echo $data['id_studio']; ?>">
						<img class="card-img-top" style="height: 200px;" src="./assets/images/produk/<?php echo $data['gambar']; ?>" alt="Card image cap">
					</a>
					</div>
					<div class="card-body">
					    <h5 class="card-title" style="height: 50px"><strong><?php echo $data['judul_ruangan']; ?></strong></h5>
					    
					    <div class="price-box orange">
					    	
							<span>Rp. <?php echo number_format($data['harga']); ?> / <?php echo $data['tipe'] ?></span>
					
						</div>

					    <p class="card-text"><?php echo $data['detail']; ?></p>
					    <a href="index.php?page=pesan&id=<?php echo $data['id_studio']; ?>" class="btn btn-success" data-value="detail_produk">Booking Studio</a>
					</div>
				</div>
			</div>
			<?php } ?>
			<?php } ?>
		</div>
	</div>

	<?php if(isset($total_laman)) { ?>
	<?php if($total_laman > 1) { ?>
    <br>
    <nav class="text-center">
    	<div class="container">
    		<div class="row justify-content-center">
    		<ul class="pagination">
        		<?php if($laman_sekarang > 1) {?>
          		<li class="page-item">
            		<a class="page-link" href="?page=product&laman=<?php echo $laman_sekarang - 1 ?>" aria-label="Sebelumnya">Sebelumnya
            		</a>
          		</li>
        		<?php }else { ?>
		        <li class="disabled">
		        	<a class="page-link" aria-label="Sebelumnya">Sebelumnya
            		</a>
		            <!-- <button type="simpan" class="btn btn-success disabled mr-2" name="simpan">Sebelumnya</button> --><!--  <span aria-hidden="true">Sebelumnya</span> -->
		        </li>
        		<?php } ?>

        		<?php for($i=1; $i<=$total_laman; $i++) {?>
        			<li class="page-item">
        				<a class="page-link" href="?page=product&laman=<?php echo $i ?>"><?php echo $i ?></a>
        			</li>
        		<?php } ?>

        		<?php if($laman_sekarang < $total_laman) {?>
          		<li class="page-item">
	            	<a class="page-link" href="?page=product&laman=<?php echo $laman_sekarang + 1 ?>" aria-label="Selanjutnya">Selanjutnya
	              	<!-- <button type="simpan" class="btn btn-success" data-value="product" name="simpan">Selanjutnya</button> --><!-- <span aria-hidden="true">Selanjutnya</span> -->
	            	</a>
          		</li>
        		<?php }else {?>
          		<li class="disabled">
          			<a class="page-link" aria-label="Selanjutnya">Selanjutnya
          			</a>
          			<!-- <button type="simpan" class="btn btn-success disabled" name="simpan">Selanjutnya</button> -->
           			<!--  <span aria-hidden="true">Selanjutnya</span> -->
          		</li>
        		<?php } ?>
      		</ul>
  		</div>		
    	</div>
    	
    </nav>
  	<?php } ?>
	<?php } ?>
	
	</div>
	
</div>