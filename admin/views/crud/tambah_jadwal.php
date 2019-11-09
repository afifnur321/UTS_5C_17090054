<?php 
	include '../koneksi.php'	;

 ?>
 <div class="row">
    <div class="col-lg-12">
	   <h1><i class="fa fa-book"></i>
			Form Tambah
	   </h1>
       <ol class="breadcrumb">
       </ol>
        <form  method="post" enctype="multipart/form-data" action="">
          <div class="form-group">
		    <label for="formGroupExampleInput">Judul Ruangan</label>
		    <input type="text" class="form-control" id="formGroupExampleInput" name="Judul" autocomplete="off" required>
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput">Jam Mulai</label>
		    <input type="text" class="form-control" id="formGroupExampleInput" name="Mulai" autocomplete="off" required>
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput">Jam Selesai</label>
		    <input type="text" class="form-control" id="formGroupExampleInput" name="Selesai" autocomplete="off" required>
		  </div>
		  
		  <button type="submit" class="btn btn-success" name="simpan">Simpan</button>
		</form>
	        <?php 
	        	If(isset($_POST['simpan'])){
	        		
	        		$data_usr = mysqli_query($conn , "INSERT INTO jadwal VALUES (NULL,
	        				'".$_POST['Judul']."',	
	        				'".$_POST['Mulai']."',
	        				'".$_POST['Selesai']."')");
	        		if($data_usr){
	        			echo "<script>alert('Data berhasil disimpan');</script>";
	        			echo "<script>var timer = setTimeout(function()
	        			{ window.location= '?page=Jadwal'}, 500)</script>";
	        		}else{
	        			echo "<script>alert('Data gagal disimpan');</script>";
	        		}
	        	}
	         ?>
    </div>
 </div>