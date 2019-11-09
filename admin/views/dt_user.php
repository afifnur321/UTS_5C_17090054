  <?php 

  	include '../koneksi.php';

  	$ambil = mysqli_query($conn,"SELECT * FROM user");

   ?>
  <div class="row">
	 <div class="col-lg-12">
	 	<h1>Data User
	 		<small>Admin</small></h1>
	 		<ol class="breadcrumb">
	 			<li><a href="?page=Dashboard"><i class="fa fa-dashboard"></i>	Dashboard</a>
                </li>
                <li class="active"><i class="fa fa-edit"></i> Data User</li>
	 		</ol>
	 </div>
  </div>
 <!--  <div class="row mb-3">
  	<div class="col-lg-12"> -->

  	<a href="?page=tambah_usr"><button style="margin-bottom: 10px;" type="submit" class="btn btn-success"><i class="fas fa-plus"></i> Tambah Data</button></a>
 
<!--   </div> -->
    <div class="row">
	  <div class="col-lg-12">
		 	<div class="table-responsive">
		 	<div class="container-fluids">
		 		<table style="margin-top: 15px; width: 100%;" id="dtHorizontalVerticalScrollExample" class="table table-bordered table-striped" cellspacing="0">
		 			<thead>
			 			<tr>
			 				<th style="width: 10px">No</th>
			 				<th style="width: 110px">Username</th>
			 				<th>Nama</th>
			 				<th>Email</th>
			 				<th>No. Telp</th>
			 				<th>Level</th>
			 				<th style="width: 80px">Opsi</th>
			 			</tr>
		 			</thead>
		 			<tbody>
		 				<?php 
		 					$no = 1;	
		 					while ($data = mysqli_fetch_assoc($ambil)) {
		 					
		 				 ?>
			 			<tr>
			 				<td><?php echo $no++; ?></td>
			 				<td><?php echo $data['username']; ?></td>
			 				<td><?php echo $data['nama']; ?></td>
			 				<td><?php echo $data['email']; ?></td>
			 				<td><?php echo $data['no_telp']; ?></td>
			 				<td><?php echo $data['level']; ?></td>
			 				<td>
			 					<a href="?page=edit_user&id=<?php echo $data['id_user']; ?>"><button type="button" class="btn btn-info"><i class="fas fa-edit"></i></button></a>
			 					<a href="?page=hps_user&id=<?php echo $data['id_user']; ?>"><button type="button" class="btn btn-danger" name="Hapus"><i class="fas fa-trash-alt"></i>
			 					</button></a>

			 				</td>
			 			</tr>
			 			<?php } ?>
			 		</tbody>
		 		</table>
		 	</div>
	 	</div>
	 </div>
  		