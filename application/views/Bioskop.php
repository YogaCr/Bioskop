<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="<?= base_url()?>AssetBioskop/js/jquery-3.2.1.js"></script>
		<script src="<?= base_url()?>AssetBioskop/js/bootstrap.js"></script>
		<link rel="stylesheet" type="text/css" href="<?= base_url()?>AssetBioskop/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url()?>AssetBioskop/css/font-awesome.min.css">	
		<link rel="stylesheet" type="text/css" href="<?= base_url()?>AssetBioskop/styleindex.css">
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
        <?php 
        if($this->session->userdata('login')==FALSE){?>
        <li><a href="<?= base_url()?>index.php/Hello/Login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		<li><a href="<?= base_url()?>index.php/Hello/Register"><span class="glyphicon glyphicon-plus"></span> Register</a></li><?php }
		else{
			?><li><a href="<?= base_url()?>index.php/Hello/Profil">Hello, <?= $nama;?></a></li> <li><a href="<?=base_url()?>index.php/Hello/Logout">Logout</a></li><?php
		}
		?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="jumbotron">
  <div class="container">
  <p align="center" style="color:white;margin-top:25%;font-size:100px;">Cin38</p>
  <p align="center" style="color:white;font-size:30px;"><i>Low Price with High Quality</i></p>
  </div>
</div>
<div class="container jarak-atas">
	<section id="daftarfilm">
		<h2 align="center">Daftar Film</h2>
		<div class="row">
			<div class="col-md-3">
				<img src="<?= base_url()?>AssetBioskop/Poster2.jpg"><h4>THOR : Ragnarok</h4>
			</div>
			<div class="col-md-3">
				<img src="<?= base_url()?>AssetBioskop/Poster1.jpg"><h4>Spiderman Homecoming</h4>
			</div>
			<div class="col-md-3">
				<img src="<?= base_url()?>AssetBioskop/Poster3.jpg"><h4>Fireworks</h4>
			</div>
			<div class="col-md-3">
				<img src="<?= base_url()?>AssetBioskop/Poster4.jpg"><h4>Logan</h4>
			</div>
			<div class="col-md-12">
				<a href="<?= base_url();?>index.php/Hello/film"><button type="button" class="btn btn-info">Lihat Selengkapnya ></button></a>
			</div>
		</div>
	</section>
</div>
<section id="keunggulan">
		<div class="container-fluid">
	<div class="row">
		<div class="col-lg-3"><h3>Kenapa harus memilih kami?</h3></div>
		<div class="col-lg-3"><i class="fa fa-money fa-5x" aria-hidden="true"></i><h4>Biaya murah</h4></div>
		<div class="col-lg-3"><i class="fa fa-film fa-5x" aria-hidden="true"></i><h4>Beragam pilihan film</h4></div>
		<div class="col-lg-3"><i class="fa fa-handshake-o fa-5x" aria-hidden="true"></i><h4>Sudah menjadi bioskop paling populer sejak tahun 2010</h4></div>
	</div>
</div>
	</section>
	<section id="keunggulan2">
		<div class="container-fluid">
		<div class="row">

			<div class="col-lg-5" style="float:right;"><img src="<?= base_url()?>AssetBioskop/tiket.jpg" style="width:100%;margin-right: -6%;"></div>
			<div class="col-lg-4" style="margin-left: 10%;">
			<i class="fa fa-money fa-5x" aria-hidden="true" style="margin-top: 10%;"></i>
			<h2>Biaya Murah</h2>
			<p>Kami menyediakan tiket film dengan harga yang bisa dijangkau oleh kalangan manapun</p>
			</div>
		</div>
		<section id="keunggulan3">
			<div class="row">
			<div class="col-lg-5" style="float:left;"><img src="<?= base_url()?>AssetBioskop/car1.jpg" style="width:100%;"></div>
			<div class="col-lg-4" style="margin-left: 10%;">
			<i class="fa fa-film fa-5x" aria-hidden="true" style="margin-top:10%;"></i><h2>Beragam pilihan film</h2>
			<p>Kami memiliki banyak pilihan film yang bisa anda tonton bersama teman atau keluarga anda.</p>
			<a href="#daftarfilm" style="color:white;"><button type="button" style="border-radius: 10px;background: transparent;padding: 10px;border:1px solid white;">Cek Daftar Film</button></a>
			</div>
		</div>
	</section>
	<section id="keunggulan4">
		<div class="row">
			<div class="col-lg-12"><i class="fa fa-handshake-o fa-5x" aria-hidden="true" style="margin-top: 10%;"></i><h2>Sudah menjadi bioskop paling populer sejak tahun 2010</h2><p style="margin-bottom: 13%;">Sejak tahun 2010 sampai sekarang,pengunjung di bioskop kami masih tetap banyak dan menjadi bioskop terfavorit.</p></div>
		</div>
	</section>
	</div>
	</section>
<section id="palingbawah">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12" >
				<h2 align="center">Enjoy the Movies <br>and <br>Don't Forget to Invite Your Friends Too</h2>
			</div>
		</div>
	</div>
</section>
<div class="panel-footer"><p align="right">Copyright <span class="glyphicon glyphicon-copyright-mark"></span> Yoga Cahya Romadhon, All Right Reserved.</p></div>
	</body>
</html>
<script>
	var acuan =$(".jumbotron").height();
	
	var menu=function(){
		var scroll=$(window).scrollTop();
		if(scroll<=acuan){
			$(".navbar-default").addClass("berubah-menu");
			$(".navbar-default .navbar-collapse, .navbar-default .navbar-form").css("border-color","transparent");
		}
		else{
			$(".navbar-default").removeClass("berubah-menu");
			$(".navbar-default .navbar-collapse, .navbar-default .navbar-form").css("border-color","#e7e7e7");
		}
	}
	menu();
	$(window).scroll(function(){
	menu();
	}
	);
</script>