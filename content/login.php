<!-- <?php 

require '../koneksi.php';
 
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width , initial-scale=1">
    <link rel="stylesheet" href="../assets/css/style.css"> <!-- pemanggilan file css untuk style pada file index-1.html -->
  </head>
  <body id="login">

      <div class="center"><!-- div dengan class center bertujuan untuk membuat posisi tag form yang akan dibuat akan menjadi rata tengah -->
        <h2>LOGIN</h2> <!-- membuat judul pembuka -->
        
        <?php 
        if(isset($_GET['pesan'])){
          if($_GET['pesan']=="gagal"){
            echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
          }
        }
        ?>
          
          <form action="../content/cek_sesi.php" class="fl" action="" method="post">
            <input class="itpw" type="text" name="username" autocomplete="off" placeholder="Username / Email"><br>
            <input class="itpw" type="password" name="password" placeholder="Password"><br>
            <input class="its" type="submit" name="login" value="LOGIN">
          </form>

          <p><a href="../content/daftar.php">Created an account</a></p>

      </div>

  </body>
</html>
 -->