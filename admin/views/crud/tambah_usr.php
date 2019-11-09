<?php 
	include '../koneksi.php'	;

 ?>
 <div class="row">
    <div class="col-lg-12">
	   <h1 class="page-header"><i class="fa fa-book"></i>
			Form Tambah
	   </h1>
       <ol class="breadcrumb">
       </ol>
        <form  method="post" enctype="multipart/form-data" action="">
          <div class="form-group">
		    <label for="formGroupExampleInput">Username</label>
		    <input type="text" class="form-control" id="formGroupExampleInput" name="Nama" autocomplete="off" required>
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput">Email</label>
		    <input type="text" class="form-control" id="formGroupExampleInput" name="Username" autocomplete="off" required>
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput">No. Telp</label>
		    <input type="text" class="form-control" id="formGroupExampleInput" name="No" autocomplete="off" required>
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Password</label>
		    <input type="password" class="form-control" id="formGroupExampleInput2" name="Password" autocomplete="off" required>
		  </div>
		  <div class="form-group">
			      <label class="mr-3" for="inlineFormCustomSelect">Level</label>
			      <select class="custom-select mr-3" name="Level" id="inlineFormCustomSelect" style="height: 30px;">
			        <option selected>--pilih--</option>
			        <option value="Admin">Admin</option>
			        <option value="User">User</option>
			      </select>
			    
		  </div>
		  <button type="submit" class="btn btn-success" name="simpan">Simpan</button>
		</form>
	        <?php 
	        	If(isset($_POST['simpan'])){
	        		$data_usr = mysqli_query($conn , "INSERT INTO user VALUES (NULL,
	        				'".$_POST['Nama']."',	
	        				'".$_POST['Username']."',
	        				'".$_POST['No']."',
	        				sha1('".$_POST['Password']."'),
	        				'".$_POST['Password']."',
	        				'".$_POST['Level']."')");
	        		if($data_usr){
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