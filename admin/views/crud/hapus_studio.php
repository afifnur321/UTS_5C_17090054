<?php 
require '../koneksi.php';
$b=mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM studio where id_studio='$_GET[id]'"));
$query = "DELETE FROM studio WHERE id_studio='$_GET[id]'";
$hapus = mysqli_query($conn, @$query);
@unlink("../assets/images/produk/".$b['gambar']);

if($hapus){
	echo "<script>alert
			('Data berhasil dihapus');</script>";
			echo "<script>var timer = setTimeout(function()
                        { window.location= '?page=Studio'}, 500)</script>";
			}else{
				echo "<script>alert('Data gagal dihapus');</script>";
			}
	   
 ?>