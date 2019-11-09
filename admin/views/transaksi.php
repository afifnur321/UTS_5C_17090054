  <?php 

  	include '../koneksi.php'; 
    ?>
  <div class="row">
	 <div class="col-lg-12">
	 	<h1>Data Pemesanan
	 		<small>Admin</small></h1>
	 		<ol class="breadcrumb">
	 			<li><a href="?page=Dashboard"><i class="fa fa-dashboard"></i>	Dashboard</a>
                </li>
                <li class="active"><i class="fa fa-edit"></i> Data Pemesanan</li>
	 		</ol>
	 </div>
  </div>
 <!--  <div class="row mb-3">
  	<div class="col-lg-12"> -->

  	<!-- <a href="?page=tambah_dt"><button style="margin-bottom: 15px;" type="submit" class="btn btn-success"><i class="fas fa-plus"></i> Tambah Data</button></a> -->
 			
<!--   </div> -->
	<form method="post" name="postform">
	<tr>
		<div class="row" style="margin-bottom: 10px;">
			<div class="col-md-2">
		<td width="125"><b>Dari Tanggal</b></td>
		<td colspan="2" width="150">: <input type="date" class="form-control" name="awal" style="width:180px;" /></td>
		</div>
			<div class="col-md-2">
		<td width="125"><b>Sampai Tanggal</b></td>
		<td colspan="2" width="150">: <input type="date" class="form-control" name="akhir" style="width:180px;" /></td>
			</div>
		<div class="col-md-2">
		<td colspan="2"><input type="submit" value="Proses" style="margin-top: 20px; height: 32.8px;" name="Proses"></td>
		</div>
		</div>
	</tr>
	</form>
	<?php
	$halaman = 10; /* page halaman*/
    $page    =isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
    $mulai    =($page>1) ? ($page * $halaman) - $halaman : 0;

 	$result = mysqli_query($conn, "SELECT tb_pesan.id_pesan, tb_pesan.id_kamar, tb_pesan.j_item , tb_pesan.nama_penyewa, tb_pesan.hrg_sewa, tb_pesan.telp, tb_pesan.tgl_awal, tb_pesan.tgl_akhir, tb_pesan.total_harga, tb_transaksi.status, tb_transaksi.via_pembayaran FROM tb_pesan INNER JOIN tb_transaksi ON tb_pesan.id_pesan = tb_transaksi.id_pesan");
 	$total = mysqli_num_rows(@$result);
    $pages = ceil($total/$halaman);
    $tampil= mysqli_query($conn, "SELECT tb_pesan.id_pesan, tb_pesan.id_kamar, tb_pesan.j_item , tb_pesan.nama_penyewa, tb_pesan.hrg_sewa, tb_pesan.telp, tb_pesan.tgl_awal, tb_pesan.tgl_akhir, tb_pesan.total_harga, tb_transaksi.status, tb_transaksi.via_pembayaran FROM tb_pesan INNER JOIN tb_transaksi ON tb_pesan.id_pesan = tb_transaksi.id_pesan LIMIT $mulai, $halaman");
    $no    =$mulai+1;
	if(isset($_POST['Proses'])){
		$tgl_awal = @$_POST['awal'];
		$tgl_akhir = @$_POST['akhir'];
		if(empty($tgl_awal)||empty($tgl_akhir)){
		echo "<script>alert('Harap isi tanggalnya gan');</script>";
		}else{echo "<b>Informasi : </b></br> Hasil pencarian data berdasarkan periode Tanggal <b>
		{$_POST['awal']}</b> s/d <b>{$_POST['akhir']}</b>";
            $tampil = mysqli_query($conn, "SELECT tb_pesan.id_pesan, tb_pesan.id_kamar, tb_pesan.j_item , tb_pesan.nama_penyewa, tb_pesan.hrg_sewa, tb_pesan.telp, tb_pesan.tgl_awal, tb_pesan.tgl_akhir, tb_pesan.total_harga, tb_transaksi.status, tb_transaksi.via_pembayaran FROM tb_pesan INNER JOIN tb_transaksi ON tb_pesan.id_pesan = tb_transaksi.id_pesan where tgl_awal and tgl_akhir between '$tgl_awal' and '$tgl_akhir'");
         }   
		}
	 ?>

    <div class="row">
	  <div class="col-lg-12">
		 	<div class="table-responsive"></div>
		 		<table style="margin-top: 15px; width: 100%;" class="table table-bordered table-striped" id="dtHorizontalVerticalScrollExample" cellspacing="0">
		 			<thead>
			 			<tr>
			 				<th>No</th>
			 				<th>ID Item</th>
			 				<th>Jenis Item</th>
			 				<th>Nama Penyewa</th>
			 				<th>No Telp</th>
			 				<th>Tanggal Pesan</th>
			 				<th>Sampai Tanggal</th>
			 				<th>Total Harga</th>
			 				<th>Status</th>
			 				<th>Via Pembayaran</th>
			 				<th>Opsi</th>
			 			</tr>
		 			</thead>	
		 			<tbody>
		 				 <?php 
		 				 	
		 					while ($data  = mysqli_fetch_array(@$tampil)){
		 					
		 				 ?>
			 			<tr>
			 				<td><?php echo $no++; ?>.</td>
			 				<td>ITM_<?php echo $data['id_kamar']; ?></td>
			 				<td><?php echo $data['j_item'] ?></td>
			 				<td><?php echo $data['nama_penyewa']; ?></td>
			 				<td><?php echo $data['telp']; ?></td>
			 				<td><?php echo $data['tgl_awal']; ?></td>
			 				<td><?php echo $data['tgl_akhir']; ?></td>
			 				<td>Rp.<?php echo number_format($data['total_harga']); ?></td>
			 				<td><?php echo $data['status']; ?></td>
			 				<td><?php echo $data['via_pembayaran']; ?></td>
			 				<td>
			 					<a href="?page=edit_dt&id=<?php echo $data['id_pesan']; ?>""><button type="button" class="btn btn-info"><i class="fas fa-edit"></i></button></a>
			 					<a href="?page=hapus_dt&id=<?php echo $data['id_pesan']; ?>""><button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button></a>
			 				</td>
			 				<?php }?>
			 				<?php 
			 				if(mysqli_num_rows(@$tampil)==0){
			 					echo "<tr><td colspan=\"11\"align=\"center\">Data Tidak Ditemukan</td></tr>";
			 				
			 			 ?>
			 			</tr>
			 				
			 		</tbody>
		 		</table>
		 		<?php 
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
	 		
	 	