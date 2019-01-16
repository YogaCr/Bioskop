<?php
include 'Header.php';
?>
<h2 align="center">Jadwal Film</h1>
	<hr>
<section id="HariLainnya">
	<h1 align="center">Hari Lainnya</h1>
	<h2>31 Januari 2018</h2>
	<div class="row">
		<div class="col-md-4">
			<a href="#popup1"><img src="<?= base_url();?>AssetBioskop/Poster1.jpg"></a>
			<div id="popup1" class="overlay">
			<div class="popup">
				<h2>Spider-Man : Homecoming</h2>
				<a class="close" href="#">&times;</a>
				<div class="content">
				<div class="row">
					<div class="col-md-5"><img src="<?= base_url();?>AssetBioskop/Poster1.jpg"></div>
					<div class="col-md-6">
						<h4>
				Menyusul peristiwa Captain America: Civil War, Peter Parker dengan bantuan mentornya Tony Stark, mencoba untuk mengimbangi hidupnya sebagai siswa SMA biasa di Queens, New York City dengan melawan kejahatan sebagai pahlawan super Spider-Man dan sebagai ancaman baru yang muncul Vulture.<br><br>Harga Tiket : Rp.30.000,-</h4>
				<a href="<?= base_url();?>index.php/Hello/BeliTiket"><button type="button" class="btn btn-primary">Beli Tiket</button></a>
					</div>
				</div>
				</div>
			</div>
		</div>			
		</div>
	</div>
</section>
<hr>
</body>
</html>
<script type="text/javascript">
	$('#harilainnya').addClass('active');
</script>