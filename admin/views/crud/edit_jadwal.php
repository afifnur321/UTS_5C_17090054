	<?php 
	include '../koneksi.php';
	// $id = isset($_GET['id']) ? $_GET['id'] : '';
	// $ambil = mysqli_query($conn,"SELECT * FROM user WHERE id_user= $id");
	$ambil = "SELECT * FROM jadwal WHERE id_jadwal = '$_GET[id]'";
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
		    <label for="formGroupExampleInput">Judul Ruangan</label>
		    <input type="text" class="form-control" id="formGroupExampleInput" name="Judul" value="<?php echo $data['judul_ruangan']; ?>" required>
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Jam Mulai</label>
		    <input type="text" class="form-control" id="formGroupExampleInput2" name="Mulai" value="<?php echo $data['jam_mulai']; ?>" required>
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput">Jam Selesai</label>
		    <input type="text" class="form-control" id="formGroupExampleInput" name="Selesai" value="<?php echo $data['jam_selesai']; ?>" required>
		  </div>
		  
	</div>
		  <button style="margin-left: 15px" type="submit" class="btn btn-success" name="simpan"><i class="fas fa-edit"></i> Update</button>
		</form>
		<?php 
	        		If(isset($_POST['simpan'])){
	        		$Judul = $_POST['Judul'];
	        		$Mulai = $_POST['Mulai'];
	        		$Selesai = $_POST['Selesai'];
	        		
	        		$query = "UPDATE jadwal SET judul_ruangan = '$Judul', jam_mulai = '$Mulai', jam_selesai = '$Selesai' WHERE id_jadwal = '$_GET[id]'";
	        		$save = mysqli_query($conn, $query);
	        		if($save){
	        			echo "<script>alert('Data berhasil diubah');</script>";
	        			echo "<script>var timer = setTimeout(function()
	        			{ window.location= '?page=Jadwal'}, 500)</script>";
	        		}else{
	        			echo "<script>alert('Data gagal disimpan');</script>";
	        		}
	        	}
	     ?>
    </div>
 </div>