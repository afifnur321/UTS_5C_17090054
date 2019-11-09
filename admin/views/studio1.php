  <?php 

  	include '../koneksi.php'; 
  	$sql_studio = mysqli_query($conn, "SELECT * FROM studio WHERE status = 'kosong'");
    if(isset($_POST['status'])){
      $id = $_POST['id'];
      $status = $_POST['status'];
      $result = mysqli_query($conn, "UPDATE studio SET status = '$status' WHERE id_studio = '$id'");
      echo "<script> window.location='?page=Studio'</script>";
    }
    ?>
  <div class="row">
	 <div class="col-lg-12">
	 	<h1>Master Data
	 		<small>Data Studio</small></h1>
	 		<ol class="breadcrumb">
	 			<li><a href="?page=Dashboard"><i class="fa fa-dashboard"></i>	Dashboard</a>
                </li>
                <li class="active"><i class="fa fa-edit"></i> Data Item</li>
	 		</ol>
	 </div>
  </div>

  <div class="container-fluid">

    <a href="?page=tambah_studio"><button style="margin-bottom: 10px;" type="submit" class="btn btn-success"><i class="fas fa-plus"></i> Tambah Data</button></a>

    <h4><label style="margin-bottom: -8px;">Daftar Studio</label></h4>
    <br>

    <div class="row justify-content-center">
    <?php while ($data = mysqli_fetch_assoc($sql_studio)) { ?>  
      <div class="col-md-3" style="margin-bottom: 3%;">
       <div class="card" style="width: 26rem;">
        <img class="card-img-top mb-7" src="../assets/images/produk/<?php echo $data['gambar']; ?>" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title" style="margin-top: 10px; margin-bottom: -20px; height: 80px;"><?php echo $data['judul_ruangan']; ?></h5>
          <p class="card-text" style="overflow: hidden; height: 200px;">
            Harga : <?php echo $data['harga']; ?><br>
            Tipe Sewa : <?php echo $data['tipe']; ?><br>
            Detail : <?php echo $data['detail']; ?><br>
            Status : <?php echo $data['status']; ?><br>
          </p>
       <hr>
        <div class="card-footer">
          <a href="?page=edit_studio&id=<?php echo $data['id_studio']; ?>" class="btn btn-primary">Edit</a>
          <a href="?page=hps_studio&id=<?php echo $data['id_studio']; ?>" class="btn btn-danger">Hapus</a>
          <!-- <hr style="margin-bottom: 5px;">
          <label style="margin-left: 5px;">Ubah Status ?</label>
          <form method="post" action="">
            <input type="hidden" name="id" value="<?php echo $data['id_item']; ?>">
            <button type="submit" name="status_itm" value="<?php echo $data['status'] == 'Aktif' ? 'Non-Aktif' : 'Aktif'; ?>"><?php echo $data['status'] == 'Aktif' ? 'Non-Aktif' : 'Aktif'; ?></button>
          </form> -->
        </div>
        </div>
      </div>
      </div>
      <?php } ?>
    </div>
  </div>
