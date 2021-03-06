<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model {
	
	public function all()
	{
		return $this->db->get('mahasiswa')->result();
	}

	

	public function create($objek)
	{
		return $this->db->insert('mahasiswa', $objek);
	}

	
	public function remove($kode)
	{
		return $this->db->delete('mahasiswa',array('nim'=> $kode));
	}
	
	public function get_id($kode)
	{
		return $this->db->where('nim',$kode)->get('mahasiswa')->row();
		
	}

	public function update($id, $objek)
	{
		return $this->db->where('nim',$id)->update('mahasiswa',$objek );
	}

}