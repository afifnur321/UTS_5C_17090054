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
<form method="post" enctype="multipart/form-data" action="">
  <div class="form-group">
        <label for="formGroupExampleInput">Judul Ruangan</label>
        <input type="text" class="form-control" id="formGroupExampleInput" name="Judul" autocomplete="off" required>
      </div>
  <div class="form-group">
        <label for="formGroupExampleInput">Detail</label>
        <textarea type="text" class="form-control" id="formGroupExampleInput" name="Detail" autocomplete="off" required></textarea>
      </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Gambar</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file-1">
  </div>
  <div class="form-group">
        <label for="formGroupExampleInput">Harga</label>
        <input type="text" class="form-control" id="formGroupExampleInput" name="Harga" autocomplete="off" required>
      </div>
  <div class="form-group">
        <label for="formGroupExampleInput">Tipe Sewa</label>
        <input type="text" class="form-control" id="formGroupExampleInput" name="Tipe" autocomplete="off" required>
      </div>  
  <div class="form-group">
        <label for="formGroupExampleInput">Status</label>
        <input type="text" class="form-control" id="formGroupExampleInput" name="Status" autocomplete="off" required>
      </div>
 <button type="submit" class="btn btn-success" name="simpan">Simpan</button>
    </form>
          <?php 
            If(isset($_POST['simpan'])){
              // $syarat = array('png','jpg','jpeg','gif');
              
              $nama = $_FILES['file-1']['name'];
              $x = explode('.', $nama);
              $ekstensi = strtolower(end($x));
              $ukuran = $_FILES['file-1']['size'];
              $temp = $_FILES['file-1']['tmp_name'];
              // if(in_array($ekstensi & $ekstensi2, $syarat) == true){
                if($ukuran||$ukuran2<1044070){
                  move_uploaded_file($temp, '../assets/images/produk/'.$nama);
                  $data_usr = mysqli_query($conn , "INSERT INTO studio VALUES (NULL,'".$_POST['Judul']."',
                  '".$_POST['Detail']."',
                  '$nama',
                  '".$_POST['Harga']."',
                  '".$_POST['Tipe']."',
                  '".$_POST['Status']."'
                  )");
                if($data_usr){
                echo "<script>alert('Data berhasil disimpan');</script>";
                echo "<script>var timer = setTimeout(function()
                { window.location= '?page=Studio'}, 500)</script>";
                }else{
                echo "<script>alert('Data gagal disimpan');</script>";
                }
                }else{
                  echo "<script>alert('Ukuran file terlalu besar')</script>";
                }
                // }else{
                //   echo "<script>alert('Ekstensi file tidak diperbolehkan')</script>";
                
            } 
           ?>
         </div>
       </div>