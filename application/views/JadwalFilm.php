
<h2 align="center">Daftar Film</h1>
	<hr>
<section id="HariIni">
	<div class="row">
		<?php 
		$x=1;
		foreach ($tampil as $film) {?>

		<div class="col-md-4">
			<a href="#popup<?=$x?>"><img src="<?=base_url()?>AssetBioskop/<?=$film->gambar_film?>"></a>
			<div id="popup<?=$x?>" class="overlay">
			<div class="popup">
				<h2><?=$film->nama_film?></h2>
				<a class="close" href="#">&times;</a>
				<div class="content">
				<div class="row">
					<div class="col-md-5"><img src="<?=base_url()?>AssetBioskop/<?=$film->gambar_film?>"></div>
					<div class="col-md-6">
						<h4><?=$film->deskripsi?></h4>
				<?php if($this->session->userdata('login')==TRUE)
				{?><a href="<?=base_url()?>index.php/Hello/BeliTiket/<?=$film->id_film?>"><button type="button" class="btn btn-primary">Beli Tiket</button></a><?php }
				else{?><a href="<?=base_url()?>index.php/Hello/Login"><button type="button" class="btn btn-primary">Login</button></a><?php }?>
				</div>
				</div>
				</div>
			</div>
		</div>			
		</div>
		<?php $x++;
		}?>
		
	</div>
</section>
<hr>
</body>
<script type="text/javascript">
	$("#film").addClass("active");
</script>
</html>