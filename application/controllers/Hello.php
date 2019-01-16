<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends CI_Controller {

	public function index()
	{
		$data['Judul']="Cin38,Terbaik dari yang Terbaik";
		$data['nama']=$this->session->userdata('nama');
		$this->load->view('Bioskop',$data);
	}
	public function film(){
		$this->load->model('m_bioskop');
		$data['tampil']=$this->m_bioskop->tampil_film();
		$data['Judul']="Daftar Film | Cin38";
		$data['konten']="JadwalFilm";
		$this->load->view('header',$data);

	}
	public function KritikSaran(){
		$data['Judul']="Kritik dan Saran | Cin38";
		$data['konten']="KritikSaran";
		$this->load->view('header',$data);

	}
	public function Profil()
	{
		if($this->session->userdata('login')==TRUE)
		{$data['Judul']="Profil";
		$data['konten']="Profil";
		$this->load->view('header', $data);}
		else{
			redirect('Hello/login','refresh');
		}
	}
	public function DetailPesanan($id_nota)
	{
		$this->load->model('M_bioskop');
		$data['tiket']=$this->M_bioskop->getTiket($id_nota);
		$data['Judul']="Detail Pesanan";
		$data['konten']="DetailPesanan";
		$this->load->view('header', $data);
	}
	public function BeliTiket($id_film)
	{
		if($this->session->userdata('login')==TRUE){
		$this->load->model('m_bioskop');
		$data['film']=$this->m_bioskop->film($id_film);
		$data['studio']=$this->m_bioskop->studioFilmTayang($id_film);
		$data['Judul']="Beli Tiket | Cin38";
		$data['konten']="PilihStudio";
		$this->load->view('header',$data);}
		else{
			redirect('Hello/login','refresh');
		}
	}
	public function BeliTiket2($id_film,$id_studio){
		if($this->session->userdata('login')==TRUE){
		$this->load->model('m_bioskop');
		$data['film']=$this->m_bioskop->film($id_film);
		$data['id_studio']=$id_studio;
		$data['tayang']=$this->m_bioskop->jamFilmTayang($id_film,$id_studio);
		$data['Judul']="Beli Tiket | Cin38";
		$data['konten']="PilihJam";
		$this->load->view('header',$data);
    	
   	}
		else{
			redirect('Hello/login','refresh');
		}
	}
	public function BeliTIket3($id_film,$id_studio,$id_jam)
	{
	if($this->session->userdata('login')==TRUE){
		$this->load->model('m_bioskop');
		$data['Judul']="Beli Tiket | Cin38";
		$data['konten']="PilihBangku";
		$data['film_tayang']=$this->m_bioskop->getFilmTayang($id_studio,$id_film,$id_jam);
		$data['kursi']=$this->m_bioskop->getKursiTersedia($this->m_bioskop->getFilmTayang($id_studio,$id_film,$id_jam)->id_film_tayang);
		$this->load->view('header',$data);
    	
   	}
		else{
			redirect('Hello/login','refresh');
		}	
	}
	public function BeliTiket4($id_film,$id_studio,$id_jam,$id_kursi_tersedia){
	if($this->session->userdata('login')==TRUE){
		$this->load->model('m_bioskop');
		$data['Judul']="Beli Tiket | Cin38";
		$data['konten']="YakinPesan";
		$data['film_tayang']=$this->m_bioskop->getFilmTayang($id_studio,$id_film,$id_jam);
		$data['kursi']= $this->m_bioskop->getKursiPesan($id_kursi_tersedia);
		$this->load->view('header',$data);
   	}
		else{
			redirect('Hello/login','refresh');
		}		
	}
	public function Login()
	{
		if($this->session->userdata('login')==TRUE){
			redirect('Hello/index','refresh');
		}
		else{
		$this->load->view('login');
		}
	}
	public function Register()
	{
		if($this->session->userdata('login')==TRUE){
			redirect('Hello/index','refresh');
		}
		else{
		$this->load->view('register');
		}
	}
	public function prosesRegister()
	{
		if($this->input->post('register')){
			$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
			$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			if ($this->form_validation->run() == TRUE) {
				$this->load->model('m_user');
				if($this->m_user->Register()==TRUE){
					$this->session->set_flashdata('pesan', 'Sukses Simpan');
					redirect('Hello/Login','refresh');
					$this->session->set_flashdata('pesan',null);	
				}
			} else {
				$this->session->set_flashdata('pesan', validation_errors());
				redirect('Hello/register','refresh');
				$this->session->set_flashdata('pesan',null);
			}
		}
	}
	public function HistoryPesanan()
	{
		$this->load->model('m_bioskop');
		$data['cart']=$this->m_bioskop->getAllNote();
		$data['konten']="HistoryPesanan";
		$data['Judul']="History Pesanan";
		$this->load->view('header',$data);
	}
	public function ProsesLogin()
	{
		if($this->input->post('login')){
			$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			if ($this->form_validation->run() == TRUE) {
				$this->load->model('m_user');
				if($this->m_user->Proses_Login()->num_rows()>0){
					$data=$this->m_user->Proses_Login()->row();
					$array= array(
						'id_pembeli'=>$data->id_pembeli,
						'login' => TRUE,
						'nama'=>$data->nama,
						'alamat'=>$data->alamat,
						'username'=>$this->input->post('username'),
						'password'=>$this->input->post('password'),
						'foto'=>$data->foto );
					$this->session->set_userdata($array);
					redirect('Hello/Index','refresh');
				}
				else{
					$this->session->set_flashdata('pesan', 'Login Gagal');
					redirect('Hello/Login','refresh');
					$this->session->set_flashdata('pesan',null);
				}
			} else {
				$this->session->set_flashdata('pesan',validation_errors());
				redirect('Hello/Login','refresh');
				$this->session->set_flashdata('pesan', null);
			}
		}
	}
	public function Logout()
	{
		$this->session->sess_destroy();
		redirect('Hello/index','refresh');
	}
}
