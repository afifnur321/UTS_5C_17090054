<body>
    <div id="wrapper">
      <?php
        require 'models/navbar.php';
      ?>
      <div id="page-wrapper">
        <?php 
          if(@$_GET['page']=='Dashboard' || @$_GET['page']==''){
            include "views/dash.php";
          }elseif (@$_GET['page']=='Contact') {
            include "views/contact.php";
          }elseif (@$_GET['page']=='edit_contact') {
            include "views/crud/edit_contact.php";
          }elseif (@$_GET['page']=='tambah_contact') {
            include "views/crud/tambah_contact.php";
          }elseif (@$_GET['page']=='hps_contact') {
            include "views/crud/hapus_contact.php";
          }elseif (@$_GET['page']=='Jadwal') {
            include "views/jadwal.php";
          }elseif (@$_GET['page']=='hps_jadwal') {
            include "views/crud/hapus_jadwal.php";
          }elseif (@$_GET['page']=='tambah_jadwal') {
            include "views/crud/tambah_jadwal.php";
          }elseif (@$_GET['page']=='edit_jadwal') {
            include "views/crud/edit_jadwal.php";
          }elseif (@$_GET['page']=='Booking') {
            include "views/booking.php";
          }elseif (@$_GET['page']=='tambah_booking') {
            include "views/crud/tambah_booking.php";
          }elseif (@$_GET['page']=='edit_booking') {
            include "views/crud/edit_booking.php";
          }elseif (@$_GET['page']=='hps_booking') {
            include "views/crud/hapus_booking.php";
          }elseif (@$_GET['page']=='tambah_usr') {
            include "views/crud/tambah_usr.php";
          }elseif (@$_GET['page']=='edit_user') {
            include "views/crud/edit_usr.php";
          }elseif (@$_GET['page']=='Studio') {
            include "views/studio1.php";
            }elseif (@$_GET['page']=='tambah_studio') {
            include "views/crud/tambah_studio.php";
            }elseif (@$_GET['page']=='edit_studio') {
            include "views/crud/edit_studio.php";
            }elseif (@$_GET['page']=='hps_studio') {
            include "views/crud/hapus_studio.php";
          
          }elseif (@$_GET['page']=='tambah_dt') {
            include "views/crud/tambah_dt.php";
          }elseif (@$_GET['page']=='edit_dt') {
            include "views/crud/edit_dt.php";
          }elseif (@$_GET['page']=='Profil') {
            include "views/profil.php";
          
          }elseif (@$_GET['page']=='User') {
            include "views/dt_user.php";
          }elseif (@$_GET['page']=='Kategori') {
            include "views/kategori.php";
          }elseif (@$_GET['page']=='Konsumen') {
            include "views/pemilik.php";
          
          }elseif (@$_GET['page']=='tambah_ktg') {
            include "views/crud/tambah_ktg.php";
          }elseif (@$_GET['page']=='edit_ptnjk') {
            include "views/how_to_order.php";
          }elseif (@$_GET['page']=='hps_user') {
            include "views/crud/hapus_user.php";
          }elseif (@$_GET['page']=='edit_ktg') {
            include "views/crud/edit_ktg.php";
          }elseif (@$_GET['page']=='hapus_ktg') {
            include "views/crud/hapus_ktg.php";
          }elseif (@$_GET['page']=='hapus_dt') {
            include "views/crud/hapus_dt.php";
          }elseif (@$_GET['page']=='cont_us') {
            include "views/cont_us.php";
          
          
          
          
          
          
          
          }elseif (@$_GET['page']=='tambah_slide') {
            include "views/crud/tambah_slide.php";
          }elseif (@$_GET['page']=='Laporan') {
            include "views/data_laporan.php";
          }elseif (@$_GET['page']=='Laporanlaba') {
            include "views/lp_laba.php";
          }elseif (@$_GET['page']=='edit_about') {
            include "views/crud/edit_about.php";
          }elseif (@$_GET['page']=='hps_about') {
            include "views/crud/hapus_about.php";
          }elseif (@$_GET['page']=='tambah_about') {
            include "views/crud/tambah_about.php";
          }elseif (@$_GET['page']=='Kamar') {
            include "views/kamar.php";
          
          }elseif (@$_GET['page']=='edit_jadwal') {
            include "views/crud/edit_jadwal.php";
          

          }elseif (@$_GET['page']=='tambah_kamar') {
            include "views/crud/tambah_kamar.php";
          }elseif (@$_GET['page']=='edit_kamar') {
            include "views/crud/edit_kamar.php";
          }elseif (@$_GET['page']=='hapus_kamar') {
            include "views/crud/hapus_kamar.php";
          }elseif (@$_GET['page']=='edit_slide') {
            include "views/crud/edit_slide.php";
          }elseif (@$_GET['page']=='hps_slide') {
            include "views/crud/hapus_slide.php";
          }elseif (@$_GET['page']=='adminprof') {
            include "views/admin_prof.php";
          }elseif (@$_GET['page']=='ubah_nama') {
            include "views/crud/edit_nama.php";
          }elseif (@$_GET['page']=='ubah_username') {
            include "views/crud/edit_username.php";
          }elseif (@$_GET['page']=='ubah_email') {
            include "views/crud/edit_email.php";
          }elseif (@$_GET['page']=='ubah_pass') {
            include "views/crud/edit_pass.php";
          }elseif (@$_GET['page']=='judul') {
            include "views/crud/judul_utama.php";
          }elseif (@$_GET['page']=='ubah_dash') {
            include "views/crud/edit_dash.php";
          }elseif (@$_GET['page']=='ubah_web') {
            include "views/crud/edit_web.php";
          }elseif (@$_GET['page']=='Semua') {
            include "views/kamar3.php";
          }


         ?>
      </div>
    </div>
    <script src="include/js/jquery-1.10.2.js"></script>
    <script src="include/js/bootstrap.js"></script> 
    <script type="text/javascript" src="include/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="include/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="include/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="include/js/responsive.bootstrap4.min.js"></script>
    <script type="text/javascript" src="include/js/script.js"></script>

</body>