<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen_model extends CI_Model {
	
	public function all()
	{
		return $this->db->get('dosen')->result();
	}

	

	public function create($objek)
	{
		return $this->db->insert('dosen', $objek);
	}

	
	public function remove($kode)
	{
		return $this->db->delete('dosen',array('nik'=> $kode));
	}
	
}