<html>
	<head>
		<script src="<?= base_url();?>AssetBioskop/js/jquery-3.2.1.js"></script>
		<script src="<?= base_url();?>AssetBioskop/js/bootstrap.js"></script>
		<link rel="stylesheet" type="text/css" href="<?= base_url();?>AssetBioskop/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url();?>AssetBioskop/style_login.css">
		<title>Register</title>
	</head>
	<body>
	<div class="row" style="margin-top: 10%;">
	<div class="col-md-3 col-md-offset-5">
		<h1 class="text-center" style="color: white;">Cin38</h1>
		<div class="panel panel-default" style="background:white;border-radius:20px;">
		<div class="panel-heading" style="background:transparent;
	">
    <h3 class="text-center">Register</h3>
    <?php 
    if($this->session->flashdata('pesan')!=null){
    echo "<div class='alert alert-danger'>".$this->session->flashdata('pesan')."</div>";
    }
  ?>
  </div>
  <div class="panel-body">
  <form action="<?= base_url()?>index.php/Hello/prosesRegister" method="POST">
    <div class="input-group">
		<input type="text" name="username" class="form-control" placeholder="Username">
		<span class="input-group-addon"><span class="glyphicon glyphicon-info-sign"></span></span>
		</div>
		<br>
		<div class="input-group">
		<input type="text" name="nama" class="form-control" placeholder="Nama">
		<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
		</div>
		<br>
		<div class="input-group">
		<textarea class="form-control" name="alamat" placeholder="Alamat"></textarea>
		<span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
		</div>
		<br>
		<div class="input-group">
		<input type="password" name="password" class="form-control" placeholder="Password">
		<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
		</div>
		<br>
		<center>
			<input type="submit" name="register" class="btn btn-primary" value="Register"/></center>
	</form>
		<br>
		<center>Sudah punya akun? <a href="<?= base_url();?>index.php/Hello/login">Login</a></center>
  </div>
</div>
	</div>
	</div>
	<br>
	
	</body>
</html>