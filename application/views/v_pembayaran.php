<div class="container" style="background: white; padding: 30px 0">
<center><h2>Pembayaran</h2>
<h4 style="color:red;">Total Bayar : Rp. <?= $total;?><br></h4>
Transfer ke Rekening BCA an. Yoga Cahya Romadhon<br>
No. rekening : 044232322424	
<br>
<?php if ($bukti!=null) {?>
<div class='alert alert-success'>Silahkan tunggu konfirmasi admin</div>
<?php }else{?><a href="<?=base_url()?>index.php/cart/confirm/<?=$this->uri->segment(3)?>" class="btn btn-danger">Upload Bukti</a><?php }?>
</center>
</div>