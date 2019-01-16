<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="<?= base_url()?>AssetBioskop/js/jquery-3.2.1.js"></script>
  <script src="<?= base_url()?>AssetBioskop/js/bootstrap.js"></script>
  <link rel="stylesheet" type="text/css" href="<?= base_url()?>AssetBioskop/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url()?>AssetBioskop/css/font-awesome.min.css">
  <title>Home</title>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?= base_url()?>" style="color:white"><span class="glyphicon glyphicon-film"></span>	
      </a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li><a href="#daftarfilm"><span class="glyphicon glyphicon-list-alt"></span> Daftar Film</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
	  <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-credit-card"></span> Checkout <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li style="margin-left:20px;"><b>Rp. 0</b></li>
            <li><a href="#">Bayar</a></li>
            <li class="divider"></li>
            <li><a href="#">Lihat Daftar Belanja</a></li>
          </ul>
        </li>
        <li><a href="<?= base_url()?>AssetBioskop/login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		<li><a href="#"><span class="glyphicon glyphicon-plus"></span> Register</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>