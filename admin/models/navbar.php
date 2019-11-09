      <?php 
      include '../koneksi.php';
  // $id = isset($_GET['id']) ? $_GET['id'] : '';
  // $ambil = mysqli_query($conn,"SELECT * FROM user WHERE id_user= $id");

      $admin = "SELECT * FROM user WHERE level ='1'";

      $sql1 = mysqli_query($conn,$admin);
      $data1 = mysqli_fetch_assoc($sql1);
      ?>
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a style="color: white;" class="navbar-brand" href="?page=Dashboard">ADMIN</a>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li><a style="color: white;" href="?page=Dashboard"><i class="text fa-2x fas fa-tachometer-alt"></i> Dashboard</a></li>
            <li><a style="color: white;" href="?page=Contact"><i class="fa-2x fas fa-user-circle"></i> Contact</a></li>
            <li><a style="color: white;" href="?page=Jadwal"><i class=" fa-2x fas fa-user-clock" ></i> Daftar Jadwal</a></li>
            
            <li class="dropdown">
              <a style="color: white;" href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa-2x fas fa-balance-scale"></i> Data Transaksi <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a style="color: white;" href="?page=Booking"> Booking Masuk</a></li>
                <li><a style="color: white;" href="?page=Laporan"> Laporan</a></li>
               <!--  <li><a style="color: white;" href="?page=Laporanlaba"> Laporan Laba/Rugi</a></li> -->
              </ul>
            </li>
            <li class="dropdown">
              <a style="color: white;" href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa-2x fas fa-database"></i> Master data <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a style="color: white;" href="?page=User">Data User</a></li>
                <li><a style="color: white;" href="?page=Studio">Data Studio</a></li>
               
              </ul>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown user-dropdown">
              <a style="color: white;" href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $data1['username']; ?> <b class="caret"></b></a>
              <ul class="dropdown-menu" style="background: url('img/aqua-d9b59c89.png');">
                <li><a href="?page=adminprof"><i class="fa fa-user"></i> Profile</a></li>
                
                <li class="divider"></li>
                <li><a href="../content/logout.php"><i class="fa fa-power-off"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
