	<?php 
	include '../koneksi.php';
	// $id = isset($_GET['id']) ? $_GET['id'] : '';
	// $ambil = mysqli_query($conn,"SELECT * FROM user WHERE id_user= $id");
	$ambil = "SELECT * FROM user WHERE id_user = '$_GET[id]'";
	$sql = mysqli_query($conn,$ambil);
	$data = mysqli_fetch_assoc($sql);

 ?>
 <div class="row">
    <div class="col-lg-12">
	   <h1 class="page-header"><i class="fa fa-book"></i>
			Form Edit
	   </h1>
       <ol class="breadcrumb">
       </ol>
        <form  method="post" enctype="multipart/form-data" action="">
		  <div class="form-group">
          	<input type="hidden" name="id_user" value="<?php echo $data['id_user'] ?>">
		    <label for="formGroupExampleInput">Username</label>
		    <input type="text" class="form-control" id="formGroupExampleInput" name="Nama" value="<?php echo $data['username']; ?>" required>
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput">Nama</label>
		    <input type="text" class="form-control" id="formGroupExampleInput" name="Nama2" value="<?php echo $data['nama']; ?>" required>
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput">Email</label>
		    <input type="text" class="form-control" id="formGroupExampleInput" name="Username" value="<?php echo $data['email']; ?>" required>
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput">No. Telp</label>
		    <input type="text" class="form-control" id="formGroupExampleInput" name="No" value="<?php echo $data['no_telp']; ?>" required>
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Password</label>
		    <input type="password" class="form-control" id="formGroupExampleInput2" name="Password" value="<?php echo $data['pass']; ?>" required>
		  </div>
		  <div class="form-group">
			      <label class="mr-3" for="inlineFormCustomSelect">Level</label>
			      <!-- <select class="custom-select mr-3" name="Level" id="inlineFormCustomSelect"  value="<?php echo $data['level'] ?>" style="height: 30px;">
			        <option selected>--pilih--</option>
			        <option value="Admin">Admin</option>
			        <option value="User">User</option>
			      </select> -->
			      <input name="level" class="form-control" id="inlineFormCustomSelect" value="<?php echo $data['level']; ?>">
		  </div>
		  <button type="submit" class="btn btn-success" name="simpan"><i class="fas fa-edit"></i> Update</button>
		</form>
		<?php 
	        		If(isset($_POST['simpan'])){
	        		$nama = $_POST['Nama'];
	        		$Nama2 = $_POST['Nama2'];
	        		$user = $_POST['Username'];
	        		$telp = $_POST['No'];
	        		$pass = $_POST['Password'];
	        		$level = $_POST['level'];
	        		$query = "UPDATE user SET username = '$nama', password = sha1('$pass'), email = '$user', no_telp = '$telp', nama = '$Nama2', level = '$level' WHERE id_user = '$_GET[id]'";
	        		$save = mysqli_query($conn, $query);
	        		if($save){
	        			echo "<script>alert('Data berhasil disimpan');</script>";
	        			echo "<script>var timer = setTimeout(function()
	        			{ window.location= '?page=User'}, 500)</script>";
	        		}else{
	        			echo "<script>alert('Data gagal disimpan');</script>";
	        		}
	        	}
	     ?>
    </div>
 </div>