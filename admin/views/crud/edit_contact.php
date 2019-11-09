	<?php 
	include '../koneksi.php';
	// $id = isset($_GET['id']) ? $_GET['id'] : '';
	// $ambil = mysqli_query($conn,"SELECT * FROM user WHERE id_user= $id");
	$ambil = "SELECT * FROM contact WHERE id_contact = '$_GET[id]'";
	$sql = mysqli_query($conn,$ambil);
	$data = mysqli_fetch_assoc($sql);

	// $kategori = mysqli_query($conn,"SELECT * FROM tb_kategori");
	// $tipe = mysqli_query($conn,"SELECT * FROM tipe_sewa");
	// $status = mysqli_query($conn,"SELECT * FROM status");

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
		    <label for="formGroupExampleInput">No. Whatsapp</label>
		    <input type="text" class="form-control" id="formGroupExampleInput" name="Whatsapp" value="<?php echo $data['no_whatsapp']; ?>"  required>
		  </div>
		  <div class="form-group">
			      <label class="mr-3" for="inlineFormCustomSelect">Facebook</label><br>
			      <input type="text" class="form-control" id="formGroupExampleInput" name="Facebook" value="<?php echo $data['facebook']; ?>"  required>
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput">Instagram</label>
		    <input type="text" class="form-control" id="formGroupExampleInput" name="Instagram" value="<?php echo $data['instagram']; ?>"  required>
		  </div>
		  
  		  
	</div>
		  <button type="submit" class="btn btn-success" style="margin-left: 16px;" name="simpan"><i class="fas fa-edit"></i> Update</button>
		</form>
		<?php 
	        		If(isset($_POST['simpan'])){

	        		$Whatsapp = $_POST['Whatsapp'];
	        		$Facebook = $_POST['Facebook'];
	        		$Instagram = trim($_POST['Instagram']);
	        		$query = "UPDATE contact SET no_whatsapp = '$Whatsapp', facebook = '$Facebook', instagram = '$Instagram' WHERE id_contact = '$_GET[id]'";
	        		
	        		$save = mysqli_query($conn, $query);
	        		
	        		if($save){
	        			echo "<script>alert('Data berhasil diubah');</script>";
	        			echo "<script>var timer = setTimeout(function()
	        			{ window.location= '?page=Contact'}, 500)</script>";
	        		}else{
	        			echo "<script>alert('Data gagal disimpan');</script>";
	        		}
	        	}
	     ?>
    </div>
 </div>
 </div>