<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_bioskop extends CI_Model {
	public function tampil_film()
	{
		return $this->db->get('film')->result();
	}
	public function film($id_film)
	{
		return $this->db->where('id_film',$id_film)->get('film')->row();
	}
	public function getAllNote()
	{
		return $this->db->where('id_pembeli',$this->session->userdata('id_pembeli'))->get('nota')->result();
	}
	public function getNote($id)
	{
		return $this->db->where('id_nota',$id)->get('nota')->row();
	}
	public function deleteNote($id)
	{
		return $this->db->where('id_nota',$id)->delete('nota');
	}
	public function getTiket($id_nota)
	{
		return $this->db->query('select tiket.id_tiket,film_tayang.id_film,film.nama_film,film_tayang.harga,jam.jam,kursi.no_kursi,studio.nama_studio,tiket.id_kursi_tersedia from tiket join film_tayang on film_tayang.id_film_tayang=tiket.id_film_tayang join film on  film.id_film=film_tayang.id_film join jam on jam.id_jam=film_tayang.id_jam join kursi_tersedia on kursi_tersedia.id_kursi_tersedia=tiket.id_kursi_tersedia join kursi on kursi.id_kursi=kursi_tersedia.id_kursi join studio on studio.id_studio=film_tayang.id_studio where id_nota='.$id_nota)->result();
	}
	public function ubahStatusKursi($id_kursi_tersedia,$status)
	{
		$object = array('tersedia' => $status );
		return $this->db->where('id_kursi_tersedia',$id_kursi_tersedia)->update('kursi_tersedia', $object);
	}
	public function getFilmTayang($id_studio,$id_film,$id_jam)
	{
		return $this->db->query("select jam.jam,studio.nama_studio,film.nama_film,film.gambar_film,film_tayang.id_film_tayang,film_tayang.harga from film_tayang join jam on jam.id_jam = film_tayang.id_jam join film on film.id_film=film_tayang.id_film join studio on studio.id_studio=film_tayang.id_studio where film_tayang.id_studio='".$id_studio."' and film_tayang.id_film='".$id_film."' and film_tayang.id_jam='".$id_jam."'")->row();
	}
	public function getKursiTersedia($id_film_tayang)
	{
		return $this->db->join('kursi', 'kursi.id_kursi = kursi_tersedia.id_kursi')->where('id_film_tayang',$id_film_tayang)->get('kursi_tersedia')->result();
	}
	public function getKursiPesan($id_kursi_tersedia)
	{
		return $this->db->join('kursi','kursi.id_kursi=kursi_tersedia.id_kursi')->where('id_kursi_tersedia',$id_kursi_tersedia)->get('kursi_tersedia')->row();
	}
	public function jamFilmTayang($id_film,$id_studio)
	{
		return $this->db->query('select jam.id_jam,jam.jam from film_tayang 
			join jam on jam.id_jam = film_tayang.id_jam 
			where film_tayang.id_film = '.$id_film.' and film_tayang.id_studio='.$id_studio)->result();
	}
	public function studioFilmTayang($id_film)
	{
		return $this->db->query('select distinct studio.nama_studio,film_tayang.id_studio from film_tayang 
			join studio on studio.id_studio = film_tayang.id_studio 
			where film_tayang.id_film = '.$id_film)->result();
	}
	public function getStudio($id_studio)
	{
		return $this->db->query('select * from studio 
			where id_studio = '.$id_studio)->row();
	}
	public function getKursi($id_studio){
		return $this->db->query('select * from kursi 
			where id_studio = '.$id_studio)->result();
	}
}

/* End of file m_bioskop.php */
/* Location: ./application/models/m_bioskop.php */