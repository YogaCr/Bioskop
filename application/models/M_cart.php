<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_cart extends CI_Model {

	public function simpan_cart()
	{
		$object = array('id_pembeli' =>$this->session->userdata('id_pembeli'),
			'tgl_beli'=>date('Y-m-d',mktime(date('H'),date('i'),date('s'),date('m'),date('d'),date('Y'))),
			'grandtotal'=>$this->input->post('grandtotal'),
			'bukti'=>'');

		$this->db->insert('nota', $object);
		
		$tm_note=$this->db->order_by('id_nota', 'desc')
		->limit(1)
		->get('nota')
		->row();
		
		for ($i=0; $i <count($this->input->post('id_film_tayang')) ; $i++) { 
			$hasil[]=array(
				'id_nota'=>$tm_note->id_nota,
				'id_pembeli' =>$this->session->userdata('id_pembeli'),
				'id_film_tayang'=>$this->input->post('id_film_tayang')[$i],
				'id_kursi_tersedia'=>$this->input->post('id_kursi_tersedia')[$i],
				'id_petugas'=>1,
				'id_nota'=>$tm_note->id_nota);
		}
		
		$proses=$this->db->insert_batch('tiket', $hasil);
		if($proses){
			return $tm_note->id_nota;
		}
		else{
			return 0;
		}

		
	}
	public function get_total($id)
	{
		return $this->db->where('id_nota',$id)->get('nota')->row();
	}
	public function simpan_bukti($gambar)
	{
		$object = array('bukti' => $gambar );
		return $this->db->where('id_nota',$this->input->post('id_nota'))->update('nota', $object);
	}

}

/* End of file M_cart.php */
/* Location: ./application/models/M_cart.php */