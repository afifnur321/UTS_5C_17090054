<?php 

include './koneksi.php';
$jadwal = mysqli_query($conn, "SELECT * FROM jadwal inner join booking on jadwal.jam_mulai=booking.jam_mulai");

$no = 1;

 ?>


<div class="jadwal">
	<div class="container">
		<div class="panel shadow">
			<div class="text-h1">
				<center>JADWAL STUDIO</center>
			</div>
			<br>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">NO</th>
      <th scope="col">JUDUL RUANGAN</th>
      <th scope="col">JAM MULAI</th>
      <th scope="col">JAM SELESAI</th>
    </tr>
  </thead>
  <?php while($hw = mysqli_fetch_assoc($jadwal)){ ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $no++; ?></th>
      <td><?php echo $hw['judul_ruangan']; ?></td>
      <td><?php echo $hw['jam_mulai']; ?></td>
      <td><?php echo $hw['jam_selesai']; ?></td>
    </tr>
  </tbody>
  <?php } ?>
</table>

			</div>
		</div>
		
	</div>
</div>