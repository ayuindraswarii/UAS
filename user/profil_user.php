<?php 
session_start();
  include "../konek.php";
  $sql_profil = mysqli_query($koneksi,"SELECT * FROM admin");
  $d=mysqli_fetch_array($sql_profil);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>PROFILE KASIR</title>
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
            <li><a class="logout" href="#"><i class="fa fa-shopping-cart"> <span class="label label-success">0</span></i></a></li>
            <li>
              <?php 
              if (isset($_SESSION["username"])) {
                echo "<button class='logout' href='../login.php' disabled>LOGIN</button>";
              } else {
                echo "<li><a class='logout' >LOGIN</a></li>";
              }
             ?>
            <li><a class="logout" href="../logout.php">LOGOUT</a></li>
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
                  <h5 class="centered">Kasir <?php echo @$_SESSION['username'];?></h5>
                    
                  <li class="mt">
                      <a href="../index.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Buku</span>
                      </a>
                      <ul class="sub">
                          <li><a href="dongeng.php">Dongeng</a></li>
                          <li><a href="komik.php">Komik</a></li>
                          <li><a href="kamus.php">Kamus</a></li>
                          <li><a href="novel.php">Novel</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a class="active" href="profil_user.php">
                          <i class="fa fa-user"></i>
                          <span>Profil</span>
                      </a>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

      <section id="main-content">
          <section class="wrapper">
            <div class="white-panel pn">
              <br>
              <h2>DATA PROFIL</h2>
            <form action="proses_profil_user.php" method="post">
            <table class="table table-striped" cellpadding="10" align="center" style="width: 40%;">
              <input type="hidden" name="id_admin" value="<?php echo $d['id_admin'];?>">
              <tr>
                <td><p align="left">Nama</p> <input type="text" class="form-control placeholder-no-fix" required name="nama_admin" value="<?php echo $d['nama_admin'];?>"></td>
              </tr>
              <tr>
                <td><p align="left">Email</p> <input type="text" class="form-control placeholder-no-fix" required name="email" value="<?php echo $d['email'];?>"></td>
              </tr>
              <tr>
                <td><p align="left">Telepon</p><input type="text" class="form-control placeholder-no-fix" required name="telp" maxlength="14" value="<?php echo $d['telp'];?>"></td>
              </tr>
              <tr>
                <td><p align="left">Alamat</p><input type="text" class="form-control placeholder-no-fix" required name="alamat" value="<?php echo $d['alamat'];?>"></td>
              </tr>
              <tr>
                <td><p align="left">Jenis Kelamin</p>
                  <select name="jenis_kelamin" required class="form-control placeholder-no-fix">
                    <?php 
                      if ($d['jenis_kelamin']=='Laki-Laki') {
                        echo "<option value='Laki-Laki' selected>Laki-Laki</option>
                              <option value='Perempuan'>Perempuan</option>";  
                      } else {
                        echo "<option value='Perempuan' selected>Perempuan</option>
                              <option value='Laki-Laki'>Laki-Laki</option>";
                      }
                     ?>
                  </select>
                </td>
              </tr>
              <tr>
                <td><p align="left">Level</p><input type="text" class="form-control placeholder-no-fix" required name="level" value="<?php echo $d['level'];?>" disabled></td>
              </tr>
              <tr>
                <td><p align="left">Username</p><input type="text" class="form-control placeholder-no-fix" required name="username" value="<?php echo $d['username'];?>"></td>
              </tr>
               <tr>
                <td><p align="left">Password</p><input type="text" class="form-control placeholder-no-fix" required name="password" value="<?php echo $d['password'];?>"></td>
              </tr>
              <tr align="center">
                <td>
                  <a href="profil_user.php"><button class="btn btn-default" type="button">Cancel</button></a>
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
