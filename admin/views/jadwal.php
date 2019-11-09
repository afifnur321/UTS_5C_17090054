    <?php 

  	include '../koneksi.php';

  	$ambil = mysqli_query($conn,"SELECT * FROM jadwal");

   ?>
  <div class="row">
	 <div class="col-lg-12">
	 	<h1>Daftar Jadwal
	 		<small>Admin</small></h1>
	 		<ol class="breadcrumb">
	 			<li><a href="?page=Dashboard"><i class="fa fa-dashboard"></i>	Dashboard</a>
                </li>
                <li class="active"><i class="fa fa-edit"></i> Daftar Jadwal</li>
	 		</ol>
	 </div>
  </div>

  	<a href="?page=tambah_jadwal"><button style="margin-bottom: 10px;" type="submit" class="btn btn-success"><i class="fas fa-plus"></i> Tambah Data</button></a>
 
<!--   </div> -->
    <div class="row">
	  <div class="col-lg-12">
		 	<div class="table-responsive"></div>
		 	<div class="container-fluids">
		 		<table style="margin-top: 15px; width: 100%;" id="dtHorizontalVerticalScrollExample" class="table table-bordered table-striped">
		 			<thead >
			 			<tr >
			 				<th width="10">No</th>
			 				<th style="text-align: center;">Judul Ruangan</th>
			 				<th style="text-align: center;">Jam Mulai</th>
			 				<th style="text-align: center;">Jam Selesai</th>
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
			 				<td><?php echo $data['judul_ruangan']; ?></td>
			 				<td><?php echo $data['jam_mulai']; ?></td>
			 				<td><?php echo $data['jam_selesai']; ?></td>
			 				<td>
			 					<a href="?page=edit_jadwal&id=<?php echo $data['id_jadwal']; ?>"><button type="button" class="btn btn-info"><i class="fas fa-edit"></i></button></a>
			 					<a href="?page=hps_jadwal&id=<?php echo $data['id_jadwal']; ?>"><button type="button" class="btn btn-danger" name="Hapus"><i class="fas fa-trash-alt"></i>
			 					</button></a>

			 				</td>
			 			</tr>
			 			<?php } ?>
			 		</tbody>
		 		</table>

	 	</div>
	 </div>
  		