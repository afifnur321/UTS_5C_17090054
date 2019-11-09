<?php 
  include '../koneksi.php';

  If(isset($_POST['simpan']))
        {
           
            $username = $_POST['username'];
            $password = $_POST['password'];
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $telp = $_POST['no_telp'];
            $level = $_POST['level'];

        $query = "INSERT INTO user(username, password, nama, email, no_telp, level) VALUES('$username', sha1('$password'), '$nama', '$email','$no_telp','$level')";
        $save = mysqli_query($conn,$query);

        if($save){
            echo "<script>alert('Data Berhasil Tersimpan');</script>";
            echo "<script>var timer = setTimeout(function(){ window.location = '../content/login.php'}, 0);
            </script>";
        }else{
            echo "<script>alert('Data Gagal Tersimpan');</script>";
            echo "<script>var timer = setTimeout(function(){ window.location = '../content/daftar.php'}, 500);
            </script>";
        }
    }


 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Daftar</title>
    <meta name="viewport" content="width=device-width , initial-scale=1">
    <link rel="stylesheet" href="../assets/css/style.css"> <!-- pemanggilan file css untuk style pada file index-1.html -->
  </head>
  <body id="login">

      <div class="center"><!-- div dengan class center bertujuan untuk membuat posisi tag form yang akan dibuat akan menjadi rata tengah -->
        <h2>DAFTAR</h2> <!-- membuat judul pembuka -->
        
        
          
          <form class="fl" action="" method="post">
            <input class="itpw" type="text" name="nama" autocomplete="off" placeholder="Nama Lengkap"><br>
            <input class="itpw" type="text" name="username" autocomplete="off" placeholder="Username"><br>
            <input class="itpw" type="text" name="email" autocomplete="off" placeholder="Email"><br>
            <input class="itpw" type="text" name="no_telp" autocomplete="off" placeholder="No_Telp"><br>
            <input class="itpw" type="password" name="password" placeholder="Password"><br>
            <select id="inputLevel" class="itpw2" name="level" required>
              <option value=""><center>--Gabung Sebagai--</center></option>
              <option value="0">Pencari</option>
            </select>
            <button type="simpan" class="its" name="simpan">Daftar</button>
            <!-- <input class="its" type="simpan" name="simpan" value="Daftar"> -->
          </form>

          <p><a href="../content/login.php">Already have an account?</a></p>

      </div>

  </body>
</html>
