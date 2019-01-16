
<div style="background: white;padding: 20px 0">
	<center>
		<h2>Upload Bukti Pembayaran</h2>
		<?php 
    if($this->session->flashdata('pesan')!=null&&$this->session->flashdata('error')==null){
    echo "<div class='alert alert-success'>".$this->session->flashdata('pesan')."</div>";
    }
    elseif($this->session->flashdata('error')!=null&&$this->session->flashdata('pesan')==null){
      echo "<div class='alert alert-danger'>".$this->session->flashdata('error')."</div>";
    }
  ?>
		<?= form_open_multipart('cart/proses_upload');?>
			<input type="hidden" value="<?= $id_nota?>" name="id_nota">
			<input type="file" name="bukti" >
			<input type="submit" name="upload" value="Upload" class="btn btn-danger" style="margin-top: 20px">
		<?= form_close();?>
	</center>
</div>