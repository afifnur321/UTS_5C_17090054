<?php 

include './koneksi.php';
$contact = mysqli_query($conn, "SELECT * FROM contact");

$no = 1;

 ?>


<div class="jadwal">
	<div class="container">
		<div class="panel shadow">
			<div class="text-h1">
				<center>Contact Us</center>
			</div>
			<br>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">NO</th>
      <th scope="col">No. Whatsapp</th>
      <th scope="col">Facebook</th>
      <th scope="col">Instagram</th>
    </tr>
  </thead>
  <?php while($hw = mysqli_fetch_assoc($contact)){ ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $no++; ?></th>
      <td><?php echo $hw['no_whatsapp']; ?></td>
      <td><?php echo $hw['facebook']; ?></td>
      <td><?php echo $hw['instagram']; ?></td>
    </tr>
  </tbody>
  <?php } ?>
</table>

			</div>
		</div>
		
	</div>
</div>