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

      <center><br>
      <h2>DAFTAR STOK BUKU</h2>
      </center>
      <br/>
      <table class="table" cellpadding="10" border="1" align="center">
        <tr>
          <th>ID Buku</th>
          <th>Judul Buku</th>
          <th>Penulis</th>
          <th>Kategori</th>
          <th>Stok</th>
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
          </tr>   
          <?php  
          }
          ?>
      </table>
      <br>

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
    <script>window.print();</script>  
  </body>
</html>
