<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="<?= base_url();?>AssetBioskop/js/jquery-3.2.1.js"></script>
  <script src="<?= base_url();?>AssetBioskop/js/bootstrap.js"></script>
  <link rel="stylesheet" type="text/css" href="<?= base_url();?>AssetBioskop/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url();?>AssetBioskop/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url();?>AssetBioskop/style.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url();?>AssetBioskop/css/fixed-left-right-navbar.css">
  <title><?= $Judul; ?></title>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3 col-lg-2"><!-- Brand and toggle get grouped for better mobile display -->
        <nav class="navbar navbar-inverse navbar-fixed-side">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#" style="color:white"><span class="glyphicon glyphicon-film"></span>	Cin38</a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li>
                <?php 
                if($this->session->userdata('login')==FALSE){?>
                <a href="<?= base_url();?>index.php/Hello/Login">Login</a>
                <?php }
                else{ ?>
                  <center><img src="<?= base_url()?>AssetBioskop/<?php if($this->session->userdata('foto')==NULL||$this->session->userdata('foto')==""){ echo "unknown_profile_image.jpg"; } else{ echo $this->session->userdata('foto');}?>" class="img-responsive img-circle" style="width: 125px;height: 125px;margin: 20px 0;"></center>
                <ul class="dropdown-menu">
                <li><a href="<?=base_url()?>index.php/Hello/Profil"><p style="color:white;"><?= $this->session->userdata('nama');?></p></a></li>
                <li><a href="#">Edit Profil</a></li>
                <li><a href="<?= base_url();?>index.php/Hello/Logout">Logout</a></li>
              </ul>
                <?php
                }
                ?>
              </li>            
              <li id="film">
                <a href="<?= base_url()?>index.php/hello/film"><span class="glyphicon glyphicon-list-alt"></span> Daftar Film</a>
              </li>
             <?php
             if($this->session->userdata('login')==TRUE){?>
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-credit-card"></span> Checkout <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li style="margin-left:25px;color:white;"><b>Rp. <?= $this->cart->total()?></b></li>
                <li><a href="<?=base_url()?>index.php/Cart">Bayar</a></li>
                <li><a href="<?=base_url()?>index.php/Hello/HistoryPesanan">Lihat Histori Belanja</a></li>
              </ul>
            </li>
            <?php }?>
            <li class="dropdown">
              <ul class="dropdown-menu" role="menu">
                <li id="kritik"><a href="<?= base_url();?>index.php/Hello/KritikSaran">Kritik dan Saran</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>
    </div><!-- /.container-fluid --> 
    <div class="col-sm-9 col-lg-10">
      <?php $this->load->view($konten); ?>