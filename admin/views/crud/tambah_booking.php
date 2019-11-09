<?php 
  include '../koneksi.php'  ;

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
        <label for="formGroupExampleInput">Nama Band</label>
        <input type="text" class="form-control" id="formGroupExampleInput" name="Band" autocomplete="off" required>
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Judul Ruangan</label>
        <input type="text" class="form-control" id="formGroupExampleInput" name="Judul" autocomplete="off" required>
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Jam Mulai</label>
        <input type="text" class="form-control" id="formGroupExampleInput" name="Mulai" autocomplete="off" required>
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Lama Sewa</label>
        <input type="text" class="form-control" id="formGroupExampleInput" name="Lama" autocomplete="off" required>
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">No. Rekening</label>
        <input type="text" class="form-control" id="formGroupExampleInput" name="Rekening" autocomplete="off" required>
      </div>

      <button type="submit" class="btn btn-success" name="simpan">Simpan</button>
    </form>
          <?php 
            If(isset($_POST['simpan'])){
              
              $data_usr = mysqli_query($conn , "INSERT INTO booking VALUES (NULL,
                  '".$_POST['Band']."',  
                  '".$_POST['Judul']."',
                  '".$_POST['Mulai']."',
                  '".$_POST['Lama']."',
                  '".$_POST['Rekening']."')");
              if($data_usr){
                echo "<script>alert('Data berhasil disimpan');</script>";
                echo "<script>var timer = setTimeout(function()
                { window.location= '?page=Booking'}, 500)</script>";
              }else{
                echo "<script>alert('Data gagal disimpan');</script>";
              }
            }
           ?>
    </div>
 </div>