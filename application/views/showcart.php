<form action="<?= base_url()?>index.php/cart/simpan" method="POST">
	<table class="table" style="background:white">
		<tr>
			<td>Nama Film</td><td>Harga</td><td>Jam</td><td>Studio</td><td>No. Kursi</td>
		</tr>
		<?php foreach ($this->cart->contents() as $item) {

			?>
		<tr>
			<input type="hidden" name="id_film_tayang[]" value="<?= $item['options']['id_film_tayang']?>">
			<td><?= $item['name'];?></td>
			<td><?= $item['price'];?></td>
			<td><?= $item['options']['jam']?></td>
			<td><?= $item['options']['studio']?></td>
			<td><input type="hidden" name="id_kursi_tersedia[]" value="<?= $item['options']['id_kursi_tersedia']?>"><?= $item['options']['kursi']?></td>
			<td><a href="<?=base_url()?>index.php/Cart/hapus/<?=$item['rowid']?>" class="btn btn-danger">Hapus</a></td>
		</tr>
		<?php }?>
		<tr>
			<input type="hidden" name="grandtotal" value="<?= $this->cart->total();?>">
			<td colspan="4"></td><td>Grand Total</td><td><?= $this->cart->total();?></td>
		</tr>
	</table>
	<?php if($this->cart->total_items()>0){?><input type="submit" value="Checkout" name="simpan" class="btn btn-success" style="margin-right: 25px;float:right"><?php }?>
</form>