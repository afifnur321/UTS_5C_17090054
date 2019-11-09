<?php 

  	include '../koneksi.php';

   ?>

  <div class="row">
	 <div class="col-lg-12">
	 	<h1>Data Transaksi
	 		<small>Laporan</small></h1>
	 		<ol class="breadcrumb">
	 			<li><a href="?page=Dashboard"><i class="fa fa-dashboard"></i>	Dashboard</a>
                </li>
                <li class="active"><i class="fa fa-edit"></i> Laporan</li>
	 		</ol>
	 </div>
  </div>
  <div class="container-fluid">
 

<?php
	
    $halaman = 10; /* page halaman*/
    $page    =isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
    $mulai    =($page>1) ? ($page * $halaman) - $halaman : 0;

 	$result = mysqli_query($conn, "SELECT * FROM booking");
 	$total = mysqli_num_rows(@$result);
    $pages = ceil($total/$halaman);
    $tampil= mysqli_query($conn, "SELECT * FROM booking LIMIT $mulai, $halaman");
    $no    =$mulai+1;

 ?>
<a href="./cetak_lp.php"><button style="margin-top: 18px; float: right;" type="button" class="btn btn-info"><i class="fas fa-print"></i> Cetak Data</button></a>
 <div class="row">
	  <div class="col-lg-12">
		 	<div class="table-responsive"></div>
		 		<table style="margin-top: 19px;" class="table table-bordered table-striped">
		 			<thead>
			 			<tr >
			 				<th width="10">No</th>
			 				<th style="text-align: center;">Nama Band</th>
			 				<th style="text-align: center;">Judul Ruangan</th>
			 				<th style="text-align: center;">Jam Mulai</th>
			 				<th style="text-align: center;">Lama Sewa</th>
			 				<th style="text-align: center;">No Rekening</th>
			 				
			 			</tr>
		 			</thead>
		 			<tbody>
		 				<?php 
		 					$no = 1;
		 					while ($data = mysqli_fetch_assoc(@$tampil)) {
		 					
		 				 ?>
			 			<tr>
			 				<td><?php echo $no++; ?></td>
			 				<td><?php echo $data['nama']; ?></td>
			 				<td><?php echo $data['judul_ruangan']; ?></td>
			 				<td><?php echo $data['jam_mulai']; ?></td>
			 				<td><?php echo $data['lama_sewa']; ?></td>
			 				<td><?php echo $data['no_rekening']; ?></td>
			 				
			 				<?php }?>
			 				<?php 
			 				if(mysqli_num_rows(@$tampil)==0){
			 					echo "<tr><td colspan=\"6\"align=\"center\">Data Tidak Ditemukan</td></tr>";
			 				
			 			 ?>
			 			</tr>
			 			
			 		</tbody>
		 		</table>
		 		<?php 
		 			}else{
		 				unset($_POST['Proses']);
		 			}

		 		 ?>
		 		 <div style="font-weight:bold;">
			        Halaman :
			        <?php
			            for ($i=1; $i<=$pages ; $i++){
			        ?>
			            <a href="?page=Laporan&halaman=<?php echo $i; ?>" style="text-decoration:none">   <u><?php echo $i; ?></u></a>
			        <?php
			            }
			        ?>
    </div>

	 	</div>
	 </div>
	</div>