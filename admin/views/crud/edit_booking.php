	<?php 
	include '../koneksi.php';
	// $id = isset($_GET['id']) ? $_GET['id'] : '';
	// $ambil = mysqli_query($conn,"SELECT * FROM user WHERE id_user= $id");
	$ambil = "SELECT * FROM booking WHERE id_booking = '$_GET[id]'";
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
		    <label for="formGroupExampleInput">Nama Band</label>
		    <input type="text" class="form-control" id="formGroupExampleInput" name="Band" value="<?php echo $data['nama']; ?>" required>
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Judul Ruangan</label>
		    <input type="text" class="form-control" id="formGroupExampleInput2" name="Judul" value="<?php echo $data['judul_ruangan']; ?>" required>
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Jam Mulai</label>
		    <input type="text" class="form-control" id="formGroupExampleInput2" name="Mulai" value="<?php echo $data['jam_mulai']; ?>" required>
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Lama Sewa</label>
		    <input type="text" class="form-control" id="formGroupExampleInput2" name="Lama" value="<?php echo $data['lama_sewa']; ?>" required>
		  </div>
		  <div class="form-group">No. Rekening</label>
		    <input type="text" class="form-control" id="formGroupExampleInput2" name="Rekening" value="<?php echo $data['no_rekening']; ?>" required>
		  </div>
  		  
	</div>
		  <button type="submit" class="btn btn-success" style="margin-left: 16px;" name="simpan"><i class="fas fa-edit"></i> Update</button>
		</form>
		<?php 
	        		If(isset($_POST['simpan'])){
	        		$nama = $_POST['Band'];
	        		$Judul = $_POST['Judul'];
	        		$Mulai = $_POST['Mulai'];
	        		$Lama = $_POST['Lama'];
	        		$Rekening = $_POST['Rekening'];
	        		$query = "UPDATE booking SET nama = '$nama', judul_ruangan = '$Judul', jam_mulai = '$Mulai', lama_sewa = '$Lama', no_rekening = '$Rekening' WHERE id_booking = '$_GET[id]'";
	        		$save = mysqli_query($conn, $query);
	        		if($save){
	        			echo "<script>alert('Data berhasil diubah');</script>";
	        			echo "<script>var timer = setTimeout(function()
	        			{ window.location= '?page=Booking'}, 500)</script>";
	        		}else{
	        			echo "<script>alert('Data gagal disimpan');</script>";
	        		}
	        	}
	     ?>
    </div>
 </div>
 </div>