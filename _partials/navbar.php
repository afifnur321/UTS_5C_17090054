<?php 
	include './koneksi.php';
	
 ?>
<header>
	



<div class="navbar1">
	<nav class="navbar navbar-expand-lg" style="background-color: #8A2BE2; width: 100%; height: ">
	<div class="container-fluid">
		<div class="col-12 col-md-4 header-center">
			<img style="background-size: cover;" src="./assets/images/Logo1.png" width="370" height="110">	
		</div>
		
		
		<div class="col-md-4 header-center">
		    <a target="new" class="header-center far fa-envelope" style="cursor: pointer; color: white; border: 1px dotted; padding: 5px; border-radius: 100px;"> ilhamalvaro72@gmail.com</a>
		    <a target="new" class="header-center fab fa-whatsapp" style="cursor: pointer; color: white; border: 1px dotted; padding: 5px; border-radius: 100px;"> 082119421058</a>
		</div>
	</div>
  
</nav>	
</div>

	
<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="mr-md-6 mr-sm-12 ml-5 mr-5">
		<img style="width: 200px; height: 75px; background-size: cover;" src="./assets/images/<?php echo $lg['logo'] ?>">
	</div>

	<div class="row">
	<div class="fa-2x mr-md-6 mr-sm-12 ml-5 mr-2">
		<a href="" class="nav-link2 fas fa-envelope" style="border: 1px dotted; padding: 5px; border-radius: 100px;"></a>
	</div>
	<a class="nav-text mr-sm-12"></a>
	<div class="box-text" style="font-size: 14px;">
		<div class="text-heading">
			<strong>Mail Us @</strong>
		</div>
		<div class="text-content">
			<?php echo $data['email'] ?>
		</div>
	</div>

		<div class="fa-2x mr-md-6 mr-sm-12 ml-5 mr-2">
		<a href="<?php echo $data['link_whatsapp'] ?>" target="new"  class="nav-link2 fab fa-whatsapp" style="border: 1px dotted; padding: 5px; border-radius: 100px;"></a>
	</div>
	<a class="nav-text mr-sm-12"></a>
	<div class="box-text" style="font-size: 14px;">
		<div class="text-heading">
			<strong>WhatsApp</strong>
		</div>
		<div class="text-content">
			<?php echo $data['whatsapp'] ?>			
		</div>
	</div>

	</div>
	
	
	

</nav> -->
	

  

<nav class="navbar navbar-expand-lg">	
  	
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigasi" aria-controls="navigasi" aria-expanded="false"aria-label="Toggle navigation"><i class="fas fa-align-justify"></i>
	</button>
	<div class="collapse navbar-collapse" id="navigasi">  
		<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
	      	<li class="nav-item">
				<a href="index.php" class="nav-link">HOME<span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a href="index.php?page=product" class="nav-link">STUDIO</a>
			</li>
			<li class="nav-item">
				<a href="index.php?page=jadwal" class="nav-link">JADWAL STUDIO</a>
			</li>
			
			<li class="nav-item">
				<a href="index.php?page=contact" class="nav-link">CONTACT US</a>
			</li>
			<?php if (isset($_SESSION['level'])){
				if($_SESSION['level']=='pemilik'){?>
					<li class="nav-item">
					<a href="index.php?page=pasang" class="nav-link">PASANG PRODUCT</a>
					</li>
			
				<?php }} else{?>
				<li class="nav-item" hidden>
					<a href="./content/login.php" class="nav-link">PASANG PRODUCT</a>
				</li>
			<?php } ?>
		</ul>
		
		<ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown user-dropdown mr-5">
            	<?php if (isset($_SESSION['level'])): ?>
              <a style="color: white;" href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['username']; ?></a>
              <ul class="dropdown-menu" style="background-color: #008080; border: none;">
              	<?php if($_SESSION['level']=='pemilik'){?>
					<li><a class="nav-link fas fa-database" href="./pemilik/index.php"> Dashboard </a></li>
				<?php } else{?>
					<li hidden><a class="nav-link fas fa-database">Dashboard </a></li>
              	<?php } ?>
              	<li><a class="nav-link fas fa-sign-in-alt" href="./content/logout.php"> LOGOUT</a></li>
			<?php else : ?>
				<li><a class="nav-link fas fa-sign-in-alt" href="./content/login.php"> LOGIN</a></li>	
			<?php endif ?>
              </ul>

  	
</nav>

</header>