    <?php 

  	include '../koneksi.php';

  	$ambil = mysqli_query($conn,"SELECT * FROM contact");

   ?>
  <div class="row">
	 <div class="col-lg-12">
	 	<h1>Contact
	 		<small>Admin</small></h1>
	 		<ol class="breadcrumb">
	 			<li><a href="?page=Dashboard"><i class="fa fa-dashboard"></i>	Dashboard</a>
                </li>
                <li class="active"><i class="fa fa-edit"></i> Contact</li>
	 		</ol>
	 </div>
  </div>

  	<a href="?page=tambah_contact"><button style="margin-bottom: 10px;" type="submit" class="btn btn-success"><i class="fas fa-plus"></i> Tambah Data</button></a>
 
<!--   </div> -->
    <div class="row">
	  <div class="col-lg-12">
		 	<div class="table-responsive"></div>
		 	<div class="container-fluids">
		 		<table style="margin-top: 15px; width: 100%;" id="dtHorizontalVerticalScrollExample" class="table table-bordered table-striped">
		 			<thead >
			 			<tr >
			 				<th width="10">No</th>
			 				<th style="text-align: center;">No Whatsapp</th>
			 				<th style="text-align: center;">Facebook</th>
			 				<th style="text-align: center;">Instagram</th>
			 				<th>Opsi</th>
			 			</tr>
		 			</thead>
		 			<tbody>
		 				<?php 
		 					$no = 1;
		 					while ($data = mysqli_fetch_assoc($ambil)) {
		 					
		 				 ?>
			 			<tr>
			 				<td><?php echo $no++; ?></td>
			 				<td><?php echo $data['no_whatsapp']; ?></td>
			 				<td><?php echo $data['facebook']; ?></td>
			 				<td><?php echo $data['instagram']; ?></td>
			 				<td>
			 					<a href="?page=edit_contact&id=<?php echo $data['id_contact']; ?>"><button type="button" class="btn btn-info"><i class="fas fa-edit"></i></button></a>
			 					<a href="?page=hps_contact&id=<?php echo $data['id_contact']; ?>"><button type="button" class="btn btn-danger" name="Hapus"><i class="fas fa-trash-alt"></i>
			 					</button></a>

			 				</td>
			 			</tr>
			 			<?php } ?>
			 		</tbody>
		 		</table>

	 	</div>
	 </div>
  		