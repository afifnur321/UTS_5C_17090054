<?php 
	include '../koneksi.php';
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
		    <label for="formGroupExampleInput">No. Whatsapp</label>
		    <input type="text" class="form-control" id="formGroupExampleInput" name="Whatsapp" autocomplete="off" required>
		  </div>
		  
		  <div class="form-group">
		    <label for="formGroupExampleInput">Facebook</label>
		    <input type="text" class="form-control" id="formGroupExampleInput" name="Facebook" autocomplete="off" required>
		  </div>
		  
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Instagram</label>
		    <input type="text" class="form-control" id="formGroupExampleInput2" name="Instagram" autocomplete="off" required>
		  </div>
		  
		  <button type="submit" class="btn btn-success" name="simpan">Simpan</button>
		</form>
	        <?php 
	        		If(isset($_POST['simpan'])){
	        				$data_contact = mysqli_query($conn , "INSERT INTO contact VALUES (NULL,
	        				'".$_POST['Whatsapp']."',	
	        				'".$_POST['Facebook']."',
	        				'".$_POST['Instagram']."')");
	        			
	        			if($data_contact){
	        			echo "<script>alert('Data berhasil disimpan');</script>";
	        			echo "<script>var timer = setTimeout(function()
	        			{ window.location= '?page=Contact'}, 500)</script>";
	        			}else{
	        			echo "<script>alert('Data gagal disimpan');</script>";
	        			}
	        		}
	         ?>
    </div>
 </div>