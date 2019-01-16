<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {
	public function Register()
	{
		$nama= $this->input->post('nama');
		$alamat= $this->input->post('alamat');
		$username= $this->input->post('username');
		$password= md5($this->input->post('password'));
		$simpan = array('nama' => $nama,
		'alamat'=>$alamat,
		'username'=>$username,
		'password'=>$password );
		$this->db->insert('pembeli',$simpan);
		if($this->db->affected_rows()>0){
			return TRUE;
		}
		else{
			return False;
		}
	}

	public function Proses_Login()
	{
		return $this->db->where('username',$this->input->post('username'))
						->where('password',md5($this->input->post('password')))
						->get('pembeli');
	}
	

}

/* End of file M_user.php */
/* Location: ./application/models/M_user.php */