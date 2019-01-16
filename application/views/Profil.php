<center><img src="<?= base_url()?>AssetBioskop/<?php if($this->session->userdata('foto')==NULL||$this->session->userdata('foto')==""){ echo "unknown_profile_image.jpg"; } else{ echo $this->session->userdata('foto');}?>" style="width: 300px;height: 300px;margin: 50px 0;" class="img-responsive img-circle">
	<p style="font-size:30px;"><?= $this->session->userdata('nama');?></p>
	<p style="font-size:20px;"><?= $this->session->userdata('alamat');?></p>
</center>