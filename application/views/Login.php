<html>
	<head>
		<script src="<?= base_url();?>AssetBioskop/js/jquery-3.2.1.js"></script>
		<script src="<?= base_url();?>AssetBioskop/js/bootstrap.js"></script>
		<link rel="stylesheet" type="text/css" href="<?= base_url();?>AssetBioskop/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url();?>AssetBioskop/style_login.css">
		<title>Login</title>
	</head>
	<body>
	<div class="row" style="margin-top: 10%;">
	<div class="col-md-3 col-md-offset-5">
		<h1 class="text-center" style="color: white;">Cin38</h1>
		<div class="panel panel-default" style="background: white;border-radius: 20px;">
		<div class="panel-heading" style="background:transparent;
	">
    <h3 class="text-center">Login</h3>
  </div>
  <div class="panel-body" >
  	<?php 
  		if($this->session->flashdata('pesan')!=null){
  			?> 
  			<div class="alert alert-danger"><?= $this->session->flashdata('pesan');?></div>
  			<?php
  		}
  	?>
  	<form action="<?= base_url()?>index.php/Hello/ProsesLogin" method="POST">
    <div class="input-group">
		<input type="text" name="username" class="form-control" placeholder="Username">
		<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
		</div>
		<br>
		<div class="input-group">
		<input type="password" name="password" class="form-control" placeholder="Password">
		<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
		</div>
	
		<br><center>
		<input type="submit" name="login" id="login" class="btn btn-primary" value="Login" style="margin-bottom: 10px;" /></form>
		<br>
		Belum punya akun? <a href="<?= base_url();?>index.php/Hello/Register">Daftar</a>
  </div>
</div>
	</div>
	</div>
	<br>
	
	</body>
</html>

<script>
	$("#warning").hide();
	
	$("#login").on("click",function(){
		$("#warning").show('fade');
		$("#warning").html('Sukses Login');
		setTimeout(function(){location.href="index.html";},1000);
		
	})
</script>