<?php


class Test extends CI_Controller
{
	
	
	 public function index()
	{
		
		$data['judul'] = 'pengumuman';
		$data['sub_judul'] = 'Halaman pengumuman';
		$data['halaman'] = 'admin/v_pengumuman';

		// $this->load->view('admin/v_template',$data);

		// $isi_tabel = $this->Pengumuman_model->all();
		// print_r($isi_tabel)

	}
	 public function coba()
	{
		// echo "Admin / Home";

		$data['judul'] = 'coba';
		$data['sub_judul'] = 'Halaman Coba';
		$data['halaman'] = 'admin/v_coba';

		$this->load->view('admin/v_template',$data);
	}
	public function pengumuman()
	{
		

		$data['judul'] = 'pengumuman';
		$data['sub_judul'] = 'Halaman pengumuman';
		$data['halaman'] = 'admin/v_pengumuman';

		$this->load->view('admin/v_template',$data);
	}

	
	
}