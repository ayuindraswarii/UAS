<?php 
  session_start();
  
  if(empty($_SESSION['username']) or empty($_SESSION['level'])){ 
    echo "<script language='javascript' type='text/javascript'>";
    echo "alert('Anda belum login sebagai Admin!');";
    echo "</script>";
    $URL="login.php";
    echo "<script>location.href='$URL'</script>";}
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>DATA ADMIN - ADMIN</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    <script src="assets/js/chart-master/Chart.js"></script>
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
            <li><a class="logout" href="logout.php">Logout</a></li>
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
              
                  <p class="centered"><a href="#"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
                  <h5 class="centered">Admin <?php echo @$_SESSION['username'];?></h5>
                    
                  <li class="mt">
                      <a class="active" href="index_admin.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="admin/tampil_data_admin.php">
                        <i class="fa fa-user"></i>
                        <span>Data Pengguna</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="admin/tampil_data_anggota_admin.php">
                        <i class="fa fa-user"></i>
                        <span>Data Anggota</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="admin/tampil_data_buku_admin.php">
                          <i class="fa fa-book"></i>
                          <span>Data Buku</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="admin/tampil_data_kategori.php">
                        <i class="fa fa-list"></i>
                        <span>Data Kategori</span>
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
              <h2 align="center"><br>SELAMAT DATANG ADMIN <br> <?php echo @$_SESSION['username'];?></h2><br>
            </div>    
          </section>
      </section>

      <!--main content end-->
      <!--footer start-->
      <?php 
        include 'footer.php';
       ?>
      <!--footer end-->
  </section>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>
    <script src="assets/js/common-scripts.js"></script>
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>
    <script src="assets/js/sparkline-chart.js"></script>    
    <script src="assets/js/zabuto_calendar.js"></script> 
  </body>
</html>
