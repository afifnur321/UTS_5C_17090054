<?php 
require '../koneksi.php';
$query = "DELETE FROM user WHERE id_user='$_GET[id]'";
$hapus = mysqli_query($conn, $query);

if($hapus){
	echo "<script>alert
			('Data berhasil dihapus');</script>";
				echo "<script>var timer = setTimeout(function()
				{ window.location= '?page=User'}, 500)</script>";
			}else{
				echo "<script>alert('Data gagal dihapus');</script>";
			}
	   
 ?>
