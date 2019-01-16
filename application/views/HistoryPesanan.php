	<table class="table" style="background:white">
		<tr>
			<td>No.</td><td>Harga</td><td>Tanggal Beli</td><td>Status</td>
		</tr>
		<?php $x=1;
		foreach ($cart as $note) {

			?>
		<tr>
			<td><?= $x;?></td>
			<td><?= $note->grandtotal;?></td>
			<td><?= $note->tgl_beli?></td>
			<td><?php if($note->status==0){
				echo "<a href='".base_url()."index.php/Cart/KonfirmasiPembayaran/".$note->id_nota."'>Konfirmasi</a> | <a href='".base_url()."index.php/Cart/BatalTransaksi/".$note->id_nota."'>Batal</a>";
			}
			else{
				echo "Terkonfirmasi";
			}?></td>
			<td><a href="<?= base_url()?>index.php/Hello/DetailPesanan/<?=$note->id_nota?>">Detail</a></td>
		</tr>
		<?php $x++;}?>
		
	</table>
