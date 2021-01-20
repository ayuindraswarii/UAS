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
    <title>NOVEL</title>
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
          <section class="wrapper site-min-height">
            <h3><i class="fa fa-angle-right"></i> NOVEL</h3>
            <div class="row mt">
              <div class="col-lg-12">
                <! -- ROW 1 OF PANELS -->
                <div class="row">            
                  <! --PANEL 1-->
                  <?php 
                  include '../konek.php';
                  $data = mysqli_query($koneksi, "SELECT * from buku where id_kategori='4'");
                  while ($d = mysqli_fetch_array($data)) {
                  ?>
                  <a href="detail_buku.php?id_buku=<?php echo $d['id_buku'];?>">
                  <div class="col-lg-2 col-md-2 col-sm-2 mb">
                    <div class="content-panel pn">
                      <div id="profile-02">
                        <?php echo "<img src='../assets/img/buku/$d[foto]' width='100%'/>";?>
                      </div>
                      <div class="pr2-social centered">
                       <b><?php echo $d['judul_buku']; ?></b><br>
                        <?php echo $d['penulis']; ?><br><br>
                        <button class="btn-warning"><a href="detail_buku.php?id_buku=<?php echo $d['id_buku'];?>">Pinjam</a></button>
                      </div>
                    </div><! --/panel -->
                  </div><!--/ col-md-4 -->
                  </a>
                  <?php  
                      }
                      ?>
                </div><! --/END ROW 1 OF PANELS -->
              </div>
            </div>
        </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

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
