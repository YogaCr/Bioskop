<h1 align="center">Beli Tiket</h1>
	<hr>
	<center>
	<h2><?= $film_tayang->nama_film; ?></h2>
<h3>Apakah data anda sudah benar</h3></center>
	
<div class="row" style="margin-left: 5%;">
		<div class="col-md-3">
		<img src="<?=base_url()?>AssetBioskop/<?= $film_tayang->gambar_film ?>">
		</div>
		<div class="col-md-6">
			<form action="<?= base_url()?>index.php/Cart/add_cart" method="POST">
				<table style="width: 100%;font-size: 20px;">
					<tr>
						<td  style="width: 50%;">Nama</td>
						<td>: <?= $this->session->userdata('nama');?></td>
					</tr>
					<tr>
						<td>Film</td>
						<td>: <input type="hidden" name="id_film" value="<?= $this->uri->segment(3)?>"><?= $film_tayang->nama_film?></td>
					</tr>
					<tr>
						<td>Studio</td>
						<td>: <input type="hidden" name="id_studio" value="<?= $this->uri->segment(4)?>"><?= $film_tayang->nama_studio?></td>
					</tr>
					<tr>
						<td>Jam</td>
						<td>: <input type="hidden" name="id_jam" value="<?= $this->uri->segment(5)?>"><?= $film_tayang->jam?></td>
					</tr>
					<tr>
						<td>No. Kursi</td>
						<td>: <input type="hidden" name="id_kursi_tersedia" value="<?= $this->uri->segment(6)?>"><input type="hidden" name="kursi" value="<?= $kursi->no_kursi?>"><?= $kursi->no_kursi?></td>
					</tr>
					<tr>
						<td colspan="2"><center><input type="submit" class="btn btn-success" name="pesan" value="Beli"></center></td>
					</tr>
				</table>
			</form>
				</div></div>