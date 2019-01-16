	<table class="table" style="background:white">
		<tr>
			<td>Nama Film</td><td>Harga</td><td>Jam</td><td>Studio</td><td>No. Kursi</td>
		</tr>
		<?php foreach ($tiket as $item) {

			?>
		<tr>
			<td><?= $item->nama_film?></td>
			<td><?= $item->harga;?></td>
			<td><?= $item->jam?></td>
			<td><?= $item->nama_studio?></td>
			<td><?= $item->no_kursi?></td>
		</tr>
		<?php }?>
		
	</table>