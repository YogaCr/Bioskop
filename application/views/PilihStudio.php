	<h1 align="center">Beli Tiket</h1>
	<hr>
	<center>
	<h2><?= $film->nama_film?></h2>
<h3>Pilih Studio</h3></center>
	<div class="row" style="margin-left: 5%;">
		<div class="col-md-3">
		<img src="<?=base_url()?>AssetBioskop/<?= $film->gambar_film ?>">
		</div>
		<div class="col-md-6">
			<center>
			<?php foreach ($studio as $std) {
				echo "<a href='".base_url()."index.php/Hello/BeliTiket2/".$film->id_film."/".$std->id_studio."'><button class='btn btn-primary'>".$std->nama_studio."</button></a> ";
			}?></center>
		</div>
	</div>
</div>
</body>
</html>
