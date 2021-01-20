<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>DETAIL BUKU</title>
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
    <a href="index.html" class="logo"><b>PERPUSTAKAAN AYU</b></a>
    <!--logo end-->
    <div class="top-menu">
      <ul class="nav pull-right top-menu">
            <li><a class="logout" href="#"><i class="fa fa-shopping-cart"> <span class="label label-success">0</span></i></a></li>
            <li>
              <?php 
              if (isset($_SESSION["username"])) {
                echo "<button class='logout' href='../login.php' disabled>LOGIN</button>";
              } else {
                echo "<li><a class='logout' href='../login.php'>LOGIN</a></li>";
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
                  <p class="centered"><a href="profile.html"><img src="../assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
                  <h5 class="centered">Kasir <?php echo @$_SESSION['username'];?></h5>
                    
                  <li class="mt">
                      <a href="../index.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a class="active" href="javascript:;" >
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
                      <a href="profil_user.php">
                          <i class="fa fa-user"></i>
                          <span>Profil</span>
                      </a>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
            <div class="white-panel pn">
              <center><br>
                <h2>DETAIL BUKU</h2>
              </center>
              <br/>
              <table class="table table-striped" cellpadding="10" align="center" style="width: 60%;text-align: left;font-size: 14px;">
                <?php 
                  $id_buku=$_GET['id_buku'];
                  include '../konek.php';
                  $data = mysqli_query($koneksi, "SELECT * from buku where id_buku='$id_buku'");
                  while ($d = mysqli_fetch_array($data)) {
                ?>
                <tr>
                  <td rowspan="4"><?php echo "<img src='../assets/img/buku/$d[foto]' height='250' />";?></td>
                </tr>  
                <tr>
                  <td>Judul Buku</td>
                  <td><?php echo $d['judul_buku']; ?></td>
                </tr>
                <tr>
                  <td>Penulis</td>
                  <td><?php echo $d['penulis']; ?></td>
                </tr>
                <tr>
                  <td>Stok</td>
                  <td><?php echo $d['stok']; ?></td>
                </tr>  
                <tr>
                  <td></td>
                  <td align="right">
                  <?php 
                    if (isset($_SESSION["username"])) {
                      echo "<button style='width: 120px;height: 30px;' class='btn-danger'><a href='#'><i>Pinjam</i></a></button>";
                    } else {
                      echo "<button style='width: 120px;height: 30px;' class='btn-danger'><a href='../login.php'><i>Login Dulu</i></a></button>";
                    }
                   ?>
                  </td>
                  <td align="right">
                    <button style="width: 150px;height: 30px;" class="btn-danger"><a href="../index.php"><i>Kembali ke Home</i></a></button>
                  </td>  
                </tr>
                    
                  </tr>   
                  <?php  
                  }
                  ?>
              </table>
            </div>
            <br>
          </section>
        </section>

      <!--main content end-->
      <!--footer start-->
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
