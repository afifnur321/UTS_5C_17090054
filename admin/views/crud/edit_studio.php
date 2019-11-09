	<?php 
	include '../koneksi.php';
	// $id = isset($_GET['id']) ? $_GET['id'] : '';
	// $ambil = mysqli_query($conn,"SELECT * FROM user WHERE id_user= $id");
	$ambil = "SELECT * FROM studio WHERE id_studio = '$_GET[id]'";
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
            <label for="formGroupExampleInput">Judul Ruangan</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="Judul" value="<?php echo $data['judul_ruangan']; ?>" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Detail</label>
            <textarea type="text" class="form-control" id="formGroupExampleInput2" name="Detail" required><?php echo $data['detail']; ?></textarea>
          </div>
          <div class="form-group">
            <label for="exampleFormControlFile1">Gambar</label>
            <div style="padding-bottom">
            <img src="../assets/images/produk/<?php echo $data['gambar'] ?>" width="80px" id="pict" style="margin-bottom: 10px;">
            
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file-1" value="<? echo $data['gambar'];?>" required>
            </div>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Harga</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" name="Harga" value="<?php echo $data['harga']; ?>">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Tipe Sewa</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="Tipe" value="<?php echo $data['tipe']; ?>" required>
          </div>
		  
          <div class="form-group">
            <label for="formGroupExampleInput">Status</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="Status" value="<?php echo $data['status']; ?>" required>
          </div>
  		  
	</div>
		  <button type="submit" class="btn btn-success" style="margin-left: 16px;" name="simpan">Simpan</button>
          <a href="?page=Profil" class="btn btn-warning">Batal</a>
		</form>
		<?php
    If(isset($_POST['simpan'])){
                    $Judul = $_POST['Judul'];
                    $Detail = $_POST['Detail'];
                    $Harga = $_POST['Harga'];
                    $Tipe = $_POST['Tipe'];
                    $Status = $_POST['Status'];
        if(isset($_FILES['file-1'])&&($_FILES['file-1'])){
        $name    =$_FILES['file-1']['name'];
        $temp    =$_FILES['file-1']['tmp_name'];
        $size    =$_FILES['file-1']['size'];
        @unlink("../assets/images/".$data['logo']);
        move_uploaded_file($temp, "../assets/images/produk/$name");
    }
    $update = mysqli_query($conn, "UPDATE studio set judul_ruangan = '$Judul', detail = '$Detail', gambar ='$name', harga = '$Harga', tipe = '$Tipe', status = '$Status' where id_studio = '$_GET[id]'");
    if($update){
        echo "<script>alert('Berhasil Di Ubah')</script>";
        echo "<script>var timer = setTimeout(function()
                        { window.location= '?page=Studio'}, 500)</script>";
    }else{
        echo "<script>alert('gagal)</script>";
    }
      }        
    ?>
    </div>
 </div>
 </div>