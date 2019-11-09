<?php 
require '../koneksi.php';
$query = "DELETE FROM jadwal WHERE id_jadwal='$_GET[id]'";
$hapus = mysqli_query($conn, $query);

if($hapus){
	echo "<script>alert
			('Data berhasil dihapus');</script>";
				echo "<script>var timer = setTimeout(function()
				{ window.location= '?page=Jadwal'}, 500)</script>";
			}else{
				echo "<script>alert('Data gagal dihapus');</script>";
				echo "<script>var timer = setTimeout(function()
				{ window.location= '?page=Jadwal'}, 500)</script>";
			}
	   
 ?>