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
    <title>DATA ADMIN - ADMIN</title>
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
                      <a  class="active" href="tampil_data_admin.php">
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
                      <a href="tampil_data_buku_admin.php">
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
              <h2>DATA ADMIN</h2>
              <button class="btn-primary">
                <a data-toggle="modal" href="#tambah"><i class="fa fa-plus"></i></a>
              </button>
              </center>
              <br/>
              <table class="table" cellpadding="10" align="center" border="1" >
                <tr>
                  <th>ID</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Telepon</th>
                  <th>Alamat</th>
                  <th>Jenis Kelamin</th>
                  <th>Level</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th width="150px">Opsi</th>
                </tr>
                <?php 
                  include '../konek.php';
                  $data = mysqli_query($koneksi, "SELECT * from admin");
                  while ($d = mysqli_fetch_array($data)) {
                ?>
                  <tr>
                    <td align="center"><?php echo $d['id_admin']; ?></td>
                    <td><?php echo $d['nama_admin']; ?></td>
                    <td><?php echo $d['email']; ?></td>
                    <td><?php echo $d['telp']; ?></td>
                    <td><?php echo $d['alamat']; ?></td>
                    <td><?php echo $d['jenis_kelamin']; ?></td>
                    <td><?php echo $d['level']; ?></td>
                    <td><?php echo $d['username']; ?></td>
                    <td><?php echo $d['password']; ?></td>
                    <td align="center">
                      <button class="btn-warning"><a href="modal_ubah_admin.php?id_admin=<?php echo $d['id_admin'];?>"><i class="fa fa-edit"></i></a></button>
                      <button class="btn-danger"><a href="hapus_admin.php?id_admin=<?php echo $d['id_admin'];?>"><i class="fa fa-trash-o"></i></a></button>
                    </td>
                  </tr>   
                  <?php  
                  }
                  ?>
              </table>
              <br>

              <!-- MODAL -->
              <!-- ######################################################################################## -->
              <!-- TAMBAH -->

              <div aria-hidden="true" role="dialog" tabindex="-1" id="tambah" class="modal fade">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <h4 class="modal-title">Tambah Data Pengguna</h4>
                          </div>
                          <form action="tambah_admin.php" method="post" enctype="multipart/form-data">
                          <div class="modal-body">
                              <input type="text" required name="nama_admin" value="" placeholder="Nama" autocomplete="off" class="form-control placeholder-no-fix">
                              <br>
                              <input type="text" required name="email" value="" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
                              <br>
                              <input type="text" required name="telp" value="" placeholder="Telepon" autocomplete="off" class="form-control placeholder-no-fix" maxlength="14">
                              <br>
                              <input type="text" required name="alamat" value="" placeholder="Alamat" autocomplete="off" class="form-control placeholder-no-fix">
                              <br>
                              <select name="jenis_kelamin" required class="form-control placeholder-no-fix">
                                <option value="" disabled>Jenis Kelamin</option>
                                <option value="laki-laki">Laki-Laki</option>
                                <option value="perempuan">Perempuan</option>
                              </select>
                              <br>
                              <select name="level" required class="form-control placeholder-no-fix">
                                <option value="" disabled>Level</option>
                                <option value="kasir">Kasir</option>
                                <option value="administrator">Administrator</option>
                              </select>
                              <br>
                              <input type="text" required name="username" value="" placeholder="Username" autocomplete="off" class="form-control placeholder-no-fix">
                              <br>
                              <input type="text" required name="password" value="" placeholder="Password" autocomplete="off" class="form-control placeholder-no-fix">
    
                          </div>
                          <div class="modal-footer">
                              <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                              <button class="btn btn-theme" type="submit">Submit</button>
                          </div>
                        </form>
                      </div>
                  </div>
              </div>

              <!-- ######################################################################################## -->


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
