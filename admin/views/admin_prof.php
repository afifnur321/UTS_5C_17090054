 	<?php 
	include '../koneksi.php';
	// $id = isset($_GET['id']) ? $_GET['id'] : '';
	// $ambil = mysqli_query($conn,"SELECT * FROM user WHERE id_user= $id");
	$ambil = "SELECT * FROM user WHERE level='1'";
	$sql = mysqli_query($conn,$ambil);
	$data = mysqli_fetch_assoc($sql);
	?>
  <div class="row">
	 <div class="col-lg-12">
	 	<h1><i class="fas fa-address-card"></i>	Profil
	 		<small>Admin</small></h1>
	 		<ol class="breadcrumb">
	 			<li><a href="?page=Dashboard"><i class="fa fa-dashboard"></i>	Dashboard</a>
                </li>
                <li class="active"><i class="fa fa-edit"></i> Profil</li>
	 		</ol>
	 </div>
  </div>

  <div class="row">
  	<div class="container-fluid">
	  	
		  <div class="form-group">
		    <label for="formGroupExampleInput">Username</label>
		    <p><?php echo $data['username']; ?></p>
		    <a href="?page=ubah_nama&id=<?php echo $data['id_user']; ?>">Ubah</a>
		  </div>
		
		
		  <div class="form-group">
		    <label for="formGroupExampleInput">Password</label>
		    <p>*************</p>
		    <a href="?page=ubah_pass&id=<?php echo $data['id_user']; ?>">Ubah</a>
		  </div>
		  </div>
	</div>
