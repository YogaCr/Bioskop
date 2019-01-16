	<h1 align="center">Beli Tiket</h1>
	<hr>
	<center>
	<h2><?= $film->nama_film; ?></h2>
<h3>Pilih Jam</h3></center>
	
	<div class="row" style="margin-left: 5%;">
		<div class="col-md-3">
		<img src="<?=base_url()?>AssetBioskop/<?= $film->gambar_film ?>">
		</div>
		<div class="col-md-6">
			<center>
			<?php foreach ($tayang as $jam): 
				echo "<a href='".base_url()."index.php/Hello/BeliTiket3/".$film->id_film."/".$id_studio."/".$jam->id_jam."'><button class='btn btn-primary'>".$jam->jam."</button></a> ";
			endforeach ?>
		</center>
		</div>
	</div>
</div>
</body>

</html>
