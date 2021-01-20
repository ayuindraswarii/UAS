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
    <title>DATA BUKU - ADMIN</title>
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
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
            <div class="white-panel pn">
              <center><br>
              <h2>DATA BUKU</h2>
              <button class="btn-primary">
                <a data-toggle="modal" href="#tambah"><i class="fa fa-plus"></i></a>
              </button>
              </center>
              <br/>
              <table class="table" cellpadding="10" border="1" align="center">
                <tr>
                  <th>ID Buku</th>
                  <th>Judul Buku</th>
                  <th>Penulis</th>
                  <th>Kategori</th>
                  <th>Stok</th>
                  <th>Foto</th>
                  <th width="150px">Opsi</th>
                </tr>
                <?php 
                  include '../konek.php';
                  $data = mysqli_query($koneksi, "SELECT * from buku, kategori_buku where buku.id_kategori=kategori_buku.id_kategori order by id_buku asc");
                  while ($d = mysqli_fetch_array($data)) {
                  ?>
                  <tr>
                    <td align="center"><?php echo $d['id_buku']; ?></td>
                    <td><?php echo $d['judul_buku']; ?></td>
                    <td><?php echo $d['penulis']; ?></td>
                    <td><?php echo $d['nama_kategori']; ?></td>
                    <td><?php echo $d['stok']; ?></td>
                    <td><?php echo "<img src='../assets/img/buku/$d[foto]' width='70' height='90' />";?></td>
                    <td align="center">
                      <button class="btn-warning"><a href="modal_ubah_buku.php?id_buku=<?php echo $d['id_buku'];?>"><i class="fa fa-edit"></i></a></button>
                      <button class="btn-danger"><a href="hapus_buku.php?id_buku=<?php echo $d['id_buku'];?>"><i class="fa fa-trash-o"></i></a></button>
                    </td>
                  </tr>   
                  <?php  
                  }
                  ?>
              </table>
              <br>
            </div>

            <!-- MODAL -->
            <!-- ######################################################################################## -->
            <!-- TAMBAH -->

            <div aria-hidden="true" role="dialog" tabindex="-1" id="tambah" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Tambah Data Buku</h4>
                        </div>
                        <form action="tambah_buku.php" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <input type="text" required name="judul_buku" value="" placeholder="Judul Buku" autocomplete="off" class="form-control placeholder-no-fix">
                            <br>
                            <input type="text" required name="penulis" value="" placeholder="Penulis" autocomplete="off" class="form-control placeholder-no-fix">
                            <br>
                            <select name="id_kategori" required class="form-control placeholder-no-fix">
                                <option value="" disabled selected>Pilih Kategori</option>
                                <option value="1">Dongeng</option>
                                <option value="2">Komik</option>
                                <option value="3">Kamus</option>
                                <option value="4">Novel</option>
                              </select>
                            <br>
                            <input type="text" required name="stok" value="" placeholder="Stok" autocomplete="off" class="form-control placeholder-no-fix">
                            <br>
                            <p>Gambar Buku</p>
                            <input type="file" required name="foto" id="foto">
                            <br>
                        </div>
                        <div class="modal-footer">
                            <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                            <button class="btn btn-theme" name="save" type="submit">Submit</button>
                        </div>
                      </form>
                    </div>
                </div>
            </div>     
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
