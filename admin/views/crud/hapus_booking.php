<?php 
require '../koneksi.php';
$query = "DELETE FROM booking WHERE id_booking ='$_GET[id]'";
$hapus = mysqli_query($conn, $query);

if($hapus){
	echo "<script>alert
			('Data berhasil dihapus');</script>";
				echo "<script>var timer = setTimeout(function()
				{ window.location= '?page=Booking'}, 500)</script>";
			}else{
				echo "<script>alert('Data gagal dihapus');</script>";
			}
	   
 ?>