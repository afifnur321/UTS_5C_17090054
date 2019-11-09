<?php 
		include './koneksi.php';
		$detail = mysqli_query($conn, "SELECT * FROM data_item WHERE id_item = '$_GET[id]'");
		$kamar = mysqli_query($conn, "SELECT * FROM tb_kamar WHERE id_item = '$_GET[id]'");
 ?>

<div class="detail-product">
	<div class="container">
		<?php while ($data = mysqli_fetch_assoc($detail)) { ?>
		<div class="text-h1">
			<center><?php echo $data['nama']; ?></center>
		</div>
		<br>
		
		<br>
		
		<div class="card-group mt-5">
			
			<div class="card">
				<div class="card-body">
      				
      				<p class="card-title"><strong>Lokasi Product</strong></p>
   					<div class="table-responsive">
                   		<table class="table borderless listingDetailLokasinJenis">
                        	<tbody>
	                            <tr>
	                                <td class="col-md-4">Alamat</td>
	                                <td class="col-md-1">:</td>
	                                <td class="col-md-7"><?php echo $data['alamat']; ?></td>
	                            </tr>
	                            <tr>
	                                <td>No.Telp</td>
	                                <td>:</td>
	                                <td><?php echo $data['no_telp']; ?></td>
	                            </tr>
	                        </tbody>
                   		</table>
       				</div>

			        <p class="card-title"><strong>Tipe Product</strong></p>
			        <div class="table-responsive">
                        <table class="table borderless listingDetailLokasinJenis">
                            <tbody>
                                <tr>
                                    <td class="col-md-4">Kategori Kost</td>
                                    <td class="col-md-1">:</td>
                                    <td class="col-md-7"><?php echo $data['kategori']; ?></td>
                                </tr>
                                <tr>
                                    <td>Spesifikasi</td>
                                    <td>:</td>
                                    <td><?php echo $data['spesifikasi']; ?></td>
                                </tr>
                                <tr>
                                    <td>Tipe Sewa</td>
                                    <td>:</td>
                                    <td><?php echo $data['tipe_sewa']; ?></td>
                                </tr>
                                <tr>
                                    <td>Periode Tunda</td>
                                    <td>:</td>
                                    <td><?php echo $data['periode_tunda']; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

    			</div>		
			</div>
		
			<div class="card">
	    		<div class="card2 shadow">
		    		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		  				 <ol class="carousel-indicators">
						    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						</ol>
		  				<div class="carousel-inner">	
		    				<div class="carousel-item active">
		      					<img class="d-block w-100 h-100" src="./assets/images/produk/<?php echo $data['gambar']; ?>" alt="First slide">      
						    </div>

						    <div class="carousel-item">
						    	<img class="d-block w-100 h-100" src="./assets/images/produk/<?php echo $data['gambar']; ?>" alt="First slide">      
						    </div>

						    <div class="carousel-item">
						    	<img class="d-block w-100 h-100" src="./assets/images/produk/<?php echo $data['gambar']; ?>" alt="First slide">      
						    </div>
		  				</div>
	  			
			  			<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				    		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    		<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
			  			</a>
					</div>
				</div>
			</div>

		</div>
		<div class="form-group col-md-6 col-sm-12">
        	<a target="new" href="https://wa.me/<?php echo $data['no_telp']; ?>"><button type="call" class="btn btn-primary col-md-12" name="call">Hubungi Pemilik</button></a>
    	</div>
		<hr>

		

		<?php while ($kmr = mysqli_fetch_assoc($kamar)) { ?>
		<div class="card-group mt-5">
			<div class="container">
				<div class="text-h1">
					<center>Product <?php echo $kmr['kamar']; ?></center>
				</div>
				<br>
				<div class="price2-box orange">
					<span><strong> Rp. <?php echo number_format($kmr['harga']); ?> / <?php echo $data['tipe_sewa']; ?></strong></span>
				</div>
				<br>
			
				<div class="card-group mt-5">
					
					<div class="card">
						
						<div class="card-body">
							<div class="status-box orange">
								<span><strong><?php echo $kmr['status_kamar']; ?></strong></span>
							</div>
							<br><br>
		      				<p><?php echo $kmr['deskripsi'] ?></p>
		   					

		    			</div>
					</div>
				
					<div class="card">
			    		<div class="card2 shadow">
				    		<div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">
				  				 <ol class="carousel-indicators">
								    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
								    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
								    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
								</ol>
				  				<div class="carousel-inner">	
				    				<div class="carousel-item active">
				      					<img class="d-block w-100 h-100" src="./assets/images/produk/<?php echo $kmr['gambar_kamar']; ?>" alt="First slide">      
								    </div>

								    <div class="carousel-item">
								    	<img class="d-block w-100 h-100" src="./assets/images/produk/<?php echo $kmr['gambar_kamar']; ?>" alt="First slide">      
								    </div>

								    <div class="carousel-item">
								    	<img class="d-block w-100 h-100" src="./assets/images/produk/<?php echo $kmr['gambar_kamar']; ?>" alt="First slide">      
								    </div>
					  			</div>
				  			
					  			<a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
						    		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    		<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
								    <span class="carousel-control-next-icon" aria-hidden="true"></span>
								    <span class="sr-only">Next</span>
					  			</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<?php 

			if ($kmr['status_kamar']=='available'){?>
				<div class="form-group col-md-12 mt-2">
	        		<a href="index.php?page=pesan&id=<?php echo $kmr['id_kamar']; ?>" class="btn btn-success col-md-12" data-value="pesan">Pesan</a>
	    		</div>
			<?php }else{?>
				<div class="form-group col-md-12 mt-2" disabled>
	        		<a class="btn btn-success col-md-12" data-value="pesan">Pesan</a>
	    		</div>
			<?php } ?>
			

    	</div>
    	<hr>
    

	<?php } ?>
	<?php } ?>
	</div>
</div>


