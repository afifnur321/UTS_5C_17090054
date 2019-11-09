	<?php 
	include '../koneksi.php';
	// $id = isset($_GET['id']) ? $_GET['id'] : '';
	// $ambil = mysqli_query($conn,"SELECT * FROM user WHERE id_user= $id");
	$ambil = "SELECT * FROM user WHERE id_user = '$_GET[id]'";
	$sql = mysqli_query($conn,$ambil);
	$data = mysqli_fetch_assoc($sql);

 ?>
 <div class="contaainer-fluid">
 <div class="row">
    <div class="col-lg-12">
	   <h1 class="page-header"><i class="fa fa-book"></i>
			Form Edit
	   </h1>
       <ol class="breadcrumb">
       </ol>
        <form  method="post" enctype="multipart/form-data" action="">
		  <div class="form-group">
		    <label for="formGroupExampleInput">Password</label>
		    <input type="Password" class="form-control" id="formGroupExampleInput" name="Tanya" value="<?php echo $data['pass']; ?>" required>
		  </div>
  		  
	</div>
		  <button type="submit" class="btn btn-success" style="margin-left: 16px;" name="Ubah"><i class="fas fa-edit"></i> Update</button>
		</form>
		<?php 
	        		If(isset($_POST['Ubah'])){
	        		$nama = $_POST['Tanya'];
	        		$query = "UPDATE user SET password = sha1('$nama') WHERE id_user = '$_GET[id]'";
	        		$save = mysqli_query($conn, $query);
	        		if($save){
	        			echo "<script>alert('Data berhasil diubah');</script>";
	        			echo "<script>var timer = setTimeout(function()
	        			{ window.location= '?page=adminprof'}, 500)</script>";
	        		}else{
	        			echo "<script>alert('Data gagal disimpan');</script>";
	        		}
	        	}
	     ?>
    </div>
 </div>
 </div>