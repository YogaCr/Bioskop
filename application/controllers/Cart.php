<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {
public function __construct()
	{
	parent::__construct();
	$this->load->model('M_cart');
	}
	public function index()
	{
		$data['konten']="showcart";
		$data['Judul']="Detail Belanja";
		$this->load->view('header', $data);
	}
	public function add_cart()
	{
		$this->load->model('m_bioskop');
		$film_tayang=$this->m_bioskop->getFilmTayang($this->input->post('id_studio'),$this->input->post('id_film'),$this->input->post('id_jam'));
		$film=$this->m_bioskop->film($this->input->post('id_film'));
		$kursi = $this->input->post('kursi');
		$id_kursi_tersedia=$this->input->post('id_kursi_tersedia');
		$this->m_bioskop->ubahStatusKursi($id_kursi_tersedia,0);
		$data = array(
			'id'      => $this->cart->total()+1,
			'qty'     => 1,
			'price'   => $film_tayang->harga,
			'name'    => $film->nama_film,
			'options' => array('kursi'=>$kursi,'id_kursi_tersedia'=>$id_kursi_tersedia,'id_film_tayang'=>$film_tayang->id_film_tayang,'jam'=>$film_tayang->jam,'studio'=>$film_tayang->nama_studio)
		);
		$this->cart->insert($data);
		redirect('Cart/index','refresh');
	}
	public function hapus($id)
	{
		$this->load->model('m_bioskop');
		$item=$this->cart->get_item($id);
		if($this->m_bioskop->ubahStatusKursi($item['options']['id_kursi_tersedia'],1)){
		if($this->cart->remove($id)){
			redirect('Cart','refresh');
		}}
	}
	public function pembayaran($id)
	{
		$harga = $this->M_cart->get_total($id)->grandtotal;
		$data['total']=$harga;
		$data['bukti']="";
		$data['Judul']="Pembayaran";
		$data['konten']="v_pembayaran";
		$this->load->view('header', $data);
	}
	public function KonfirmasiPembayaran($id)
	{
		$this->load->model('m_bioskop');
		$data['bukti']=$this->m_bioskop->getNote($id)->bukti;
		$data['total']=$this->m_bioskop->getNote($id)->grandtotal;
		$data['Judul']="Pembayaran";
		$data['konten']="v_pembayaran";
		$this->load->view('header', $data);
	}
	public function BatalTransaksi($id)
	{
		$this->load->model('m_bioskop');
		$tiket=$this->m_bioskop->getTiket($id);
		foreach ($tiket as $t) {
			$this->m_bioskop->ubahStatusKursi($t->id_kursi_tersedia,1);
		}
		$this->m_bioskop->deleteNote($id);
		redirect('Hello/HistoryPesanan','refresh');
	}
	public function simpan()
	{
		if($this->input->post('simpan')){
			$id=$this->M_cart->simpan_cart();
			if($id>0){
				$this->cart->destroy();
				redirect('cart/pembayaran/'.$id,'refresh');
			}
			else{
				redirect('cart','refresh');
			}
		}
	}
	public function confirm($id_nota)
	{
		$data['id_nota']=$id_nota;
		$data['konten']="v_confirm";
		$this->load->view('header', $data);
	}
	public function proses_upload()
	{
		if($this->input->post('upload')){
			$config['upload_path'] = './AssetBioskop/bukti/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']  = '2000';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';

			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('bukti')){
				$this->session->set_flashdata('error', 'Gagal Upload File');
				redirect('cart/confirm/'.$this->input->post('id_nota'),'refresh');

			}
			else{
				if($this->M_cart->simpan_bukti($this->upload->data('file_name'))){
				$this->session->set_flashdata('pesan', 'Upload sukses. Silahkan tunggu konfirmasi admin'); 
				redirect('cart/confirm/'.$this->input->post('id_nota'),'refresh');
			}

			}
		}
	}

}

/* End of file Cart.php */
/* Location: ./application/controllers/Cart.php */