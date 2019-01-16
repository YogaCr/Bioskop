	<h1 align="center">Beli Tiket</h1>
	<hr>
	<center>
	<h2><?= $film_tayang->nama_film; ?></h2>
<h3>Pilih Bangku</h3></center>
	
	<div class="row" style="margin-left: 5%;">
		<div class="col-md-3">
		<img src="<?=base_url()?>AssetBioskop/<?= $film_tayang->gambar_film ?>">
		</div>
		<div class="col-md-6">
			<?php foreach ($kursi as $no) {?>
						<a href="<?= base_url()?>index.php/Hello/BeliTiket4/<?= $this->uri->segment(3)?>/<?= $this->uri->segment(4)?>/<?= $this->uri->segment(5)?>/<?= $no->id_kursi_tersedia?>"><input type='button' class='btn tombol' onClick='get_clicked(this.id)' value='<?= $no->no_kursi?>' <?php if($no->tersedia==1){ } else{?> disabled <?php }?> ></a>&nbsp;
					<?php }?>
					<br><br>
		</div>
	</div>
</div>
</body>
</html>
