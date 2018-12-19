<?php 

class Dosen extends CI_Controller

{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('dosen_model');
	}
	 public function index()
	{
		
		$data['judul'] = 'Dosen';
		$data['sub_judul'] = 'Halaman Dosen';
		$data['halaman'] = 'admin/v_Dosen';
		$data['isi_tabel'] = $this->dosen_model->all();

		$this->load->view('admin/v_template',$data);


	}

	public function tambah()
	{
		// echo "Fungsi tamabh";
		$data['judul'] = 'Tambah Data Dosen';
		$data['sub_judul'] = 'Halaman Tambah Data Dosen';
		$data['halaman'] = 'admin/v_tambah_Dosen';
		

		$this->load->view('admin/v_template',$data);


	}
	public function proses_tambah()
	{
		$nik = $this->input->post('nik');
		$nama = $this->input->post('dsn');
		$alamat = $this->input->post('alamat');

		$objek = array(
		'nik' => $nik , 
		'nama_dsn' => $nama , 
		'alamat' => $alamat
		);
		
		if ($this->dosen_model->create($objek)) {
			
			$this->session->set_flashdata('info','Data Berhasil Di Simpan !!');
			redirect('admin/dosen');

		}else{
			
			$this->session->set_flashdata('info','Data gagal Di Simpan !!');
			redirect('admin/dosen');

		}
		
	}

		public function hapus($kode)
	{
		if ($this->mahasiswa_model->remove($kode)) {
	
		$this->session->set_flashdata('info','Data Berhasil Di Hapus !!');
			redirect('admin/mahasiswa');

		}else{
			
			$this->session->set_flashdata('info','Data gagal Di Hapus!!');
			redirect('admin/mahasiswa');

		}
	}

	
}