<body>
	<?php require '_partials/navbar.php'?>
 	
	<!-- Page Content -->
	<?php
	$content = (isset($_GET["page"])) ? $_GET["page"] : "" ;		
		switch ($content) {
 			
			case 'product':
 				echo"<title>Product</title>";
 				require 'content/product.php';
 				break;
 			case 'jadwal':
 				echo"<title>Jadwal Studio</title>";
 				require 'content/jadwal.php';
 				break;
 			case 'faq':
 				echo"<title>faq</title>";
 				require 'content/faq.php';
 				break;
 			case 'contact':
 				echo"<title>Contact</title>";
 				require 'content/contact.php';
 				break;
 			case 'daftar':
 				echo"<title>Register</title>";
 				require 'content/daftar.php';
 				break;
 			// case 'login':
 			// 	echo"<title>Login</title>";
 			// 	require 'content/login.php';
 			// 	break;
 			case 'pasang':
 				echo"<title>Pasang Product</title>";
 				require 'content/pasang_product.php';
 				break;
 			case 'pasang_kamar':
 				echo"<title>Pasang Product Kamar</title>";
 				require 'content/pasang_product2.php';
 				break;
 			case 'detail_produk':
 				echo"<title>Detail</title>";
 				require 'content/detail_produk.php';
 				break;
 			case 'pesan':
 				echo"<title>Pesan</title>";
 				require 'content/pesan.php';
 				break;
 			case 'pesan2':
 				echo"<title>Transaksi</title>";
 				require 'content/pesan2.php';
 				break;
 			default:
 				echo"<title>Home</title>";
 				require 'content/home.php';
 				break;
		}
	?>
	 	<!-- /.row -->
	 	
	<!-- /.container -->
	<?php require '_partials/footer.php'; ?>
	
</body>