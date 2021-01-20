<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>EDIT DATA BUKU - ADMIN</title>
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="../assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="../assets/lineicons/style.css">    
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/style-responsive.css" rel="stylesheet">
    <script src="../assets/js/chart-master/Chart.js"></script>
  </head>

  <body>

  <section id="container" >
  <!--HEADER-->
  <header class="header black-bg">
    <div class="sidebar-toggle-box">
      <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
    </div>
    <!--logo start-->
    <a href="#" class="logo"><b>PERPUSTAKAAN AYU</b></a>
    <!--logo end-->
    <div class="top-menu">
      <ul class="nav pull-right top-menu">
            <li><a class="logout" href="../logout.php">Logout</a></li>
      </ul>
    </div>
  </header>
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">  
              
                  <p class="centered"><a href="#"><img src="../assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
                  <h5 class="centered">Admin <?php echo @$_SESSION['username'];?></h5>
                    
                  <li class="mt">
                      <a href="../index_admin.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="tampil_data_admin.php">
                        <i class="fa fa-user"></i>
                        <span>Data Pengguna</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="tampil_data_anggota_admin.php">
                        <i class="fa fa-users"></i>
                        <span>Data Anggota</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a class="active" href="tampil_data_buku_admin.php">
                          <i class="fa fa-book"></i>
                          <span>Data Buku</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="tampil_data_kategori.php">
                        <i class="fa fa-list"></i>
                        <span>Data Kategori</span>
                      </a>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>

      <section id="main-content">
          <section class="wrapper">
            <div class="white-panel pn">
              <br>
            <?php
            $id_buku=$_GET['id_buku'];
            include "../konek.php";
            $datapst=mysqli_query($koneksi,"SELECT * from buku where id_buku='$id_buku'");
            $d=mysqli_fetch_array($datapst);
            ?>

            <form action="ubah_buku.php" method="post">
            <table class="table" cellpadding="10" align="center" style="width: 40%;background-color: #f2f2f2" >
              <tr>
                <th>Edit Data Buku</th>
              </tr>
              <input type="hidden" name="id_buku" value="<?php echo $d['id_buku'];?>">
              <tr>
                <td><p align="left">Judul Buku</p> <input type="text" class="form-control placeholder-no-fix" required name="judul_buku" value="<?php echo $d['judul_buku'];?>"></td>
              </tr>
              <tr>
                <td><p align="left">Penulis</p><input type="text"class="form-control placeholder-no-fix" required name="penulis" value="<?php echo $d['penulis'];?>"></td>
              </tr>
              <tr>
                <td>
                  <p align="left">Kategori</p>
                  <select name="id_kategori" required class="form-control placeholder-no-fix">
                       <?php 
                      if ($d['id_kategori']=='1') {
                        echo "<option value='1' selected>Dongeng</option>
                              <option value='2'>Komik</option>
                              <option value='3'>Kamus</option>
                              <option value='4'>Novel</option>";  
                      } else if ($d['id_kategori']=='2'){
                        echo "<option value='2' selected>Komik</option>
                              <option value='1'>Dongeng</option>
                              <option value='3'>Kamus</option>
                              <option value='4'>Novel</option>";
                      } else if ($d['id_kategori']=='3'){
                        echo "<option value='3' selected>Kamus</option>
                              <option value='1'>Dongeng</option>
                              <option value='2'>Komik</option>
                              <option value='4'>Novel</option>";
                      } else {
                        echo "<option value='4' selected>Novel</option>
                              <option value='1'>Dongeng</option>
                              <option value='2'>Komik</option>
                              <option value='3'>Kamus</option>";
                      }
                     ?>
                  </select>
                </td>
              </tr>
              <tr>
                <td><p align="left">Stok</p><input type="text" class="form-control placeholder-no-fix" required name="stok" maxlength="10" value="<?php echo $d['stok'];?>"></td>
              </tr>
              <tr>
                <td><p align="left">Foto</p>
                  <input type="file" class="form-control placeholder-no-fix" required name="foto" value="<?php echo $d['foto'];?>" disabled></td>
              </tr>
              <tr align="center">
                <td>
                  <a href="tampil_data_buku_admin.php"><button class="btn btn-default" type="button">Cancel</button></a>
                  <input class="btn btn-theme" type="submit" name="simpan" value="Simpan">
                </td>
              </tr>
            </table>
            </form>
            <br>
          </section>
        </section>
      </div>

        <?php 
          include '../footer.php';
         ?>
        <!--footer end-->
</section>

    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/jquery-1.8.3.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="../assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="../assets/js/jquery.scrollTo.min.js"></script>
    <script src="../assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="../assets/js/jquery.sparkline.js"></script>
    <script src="../assets/js/common-scripts.js"></script>
    <script type="text/javascript" src="../assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="../assets/js/gritter-conf.js"></script>
    <script src="../assets/js/sparkline-chart.js"></script>    
    <script src="../assets/js/zabuto_calendar.js"></script> 
    
  </body>
</html>
