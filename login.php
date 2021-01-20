<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>LOGIN</title>

    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
  </head>

  <body>

	  <div id="login-page">
	  	<div class="container">
	  	
		      <form class="form-login" action="login_proses.php" method="post">
		        <h2 class="form-login-heading">sign in</h2>
		        <div class="login-wrap">
		            <input type="text" name="username" class="form-control" placeholder="Username" autofocus>
		            <br>
		            <input type="password" name="password" class="form-control" placeholder="Password">
                    <br>
                    <select name="level" class="form-control">
                        <option value="kasir">Kasir</option>
                        <option value="administrator">Administrator</option>    
                    </select>
		            <label class="checkbox">
		                <span class="pull-right">
		                	<?php echo @$pesan;?>
		                </span>
		            </label>
		            <button class="btn btn-theme btn-block" name="login" value="login" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
		        </div>
		      </form>	  	
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("assets/img/login-bg.jpg", {speed: 500});
    </script>


  </body>
</html>
