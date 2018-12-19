<?php 

class Mahasiswa extends CI_Controller

{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mahasiswa_model');
	}
	 public function index()
	{
		
		$data['judul'] = 'Mahasiswa';
		$data['sub_judul'] = 'Halaman Mahasiswa';
		$data['halaman'] = 'admin/v_Mahasiswa';
		$data['isi_tabel'] = $this->mahasiswa_model->all();

		$this->load->view('admin/v_template',$data);


	}

	public function tambah()
	{
		// echo "Fungsi tamabh";
		$data['judul'] = 'Tambah Data Mahasiswa';
		$data['sub_judul'] = 'Halaman Tambah Datab Mahasiswa';
		$data['halaman'] = 'admin/v_tambah_Mahasiswa';
		

		$this->load->view('admin/v_template',$data);


	}
	public function proses_tambah()
	{
		$nim = $this->input->post('nim');
		$nama = $this->input->post('mhs');
		$prodi = $this->input->post('prodi');

		$objek = array(
		'nim' => $nim , 
		'nama_mhs' => $nama , 
		'program_studi' => $prodi
		);
		
		if ($this->mahasiswa_model->create($objek)) {
			
			$this->session->set_flashdata('info','Data Berhasil Di Simpan !!');
			redirect('admin/mahasiswa', 'refresh');

		}else{
			
			$this->session->set_flashdata('info','Data gagal Di Simpan !!');
			redirect('admin/mahasiswa', 'refresh');

		}
		
	}

	public function hapus($kode)
	{
		if ($this->mahasiswa_model->remove($kode)) {
	
		$this->session->set_flashdata('info','Data Berhasil Di Hapus !!');
			redirect('admin/mahasiswa','refresh');

		}else{
			
			$this->session->set_flashdata('info','Data gagal Di Hapus!!');
			redirect('admin/mahasiswa','refresh');

		}
	}

	public function edit($id)
	{
	
		$data['judul'] = 'Edit Mahasiswa';
		$data['sub_judul'] = 'Halaman Edit Data Mahasiswa';
		$data['halaman'] = 'admin/v_edit_mahasiswa';


		$data['isi_tabel'] = $this->mahasiswa_model->get_id($id);
		// var_dump($data);

		$this->load->view('admin/v_template',$data);


		
	}

	public function proses_edit()
	{
		$nim = $this->input->post('nim');
		$nama = $this->input->post('mhs');
		$prodi = $this->input->post('prodi');
		

		$objek = array(
		'nama_mhs' => $nama , 
		'program_studi' => $prodi
		);
		
		
		if ($this->mahasiswa_model->update($nim, $objek)) {
			
			$this->session->set_flashdata('info','Data Berhasil Di Ubah !!');
			redirect('admin/mahasiswa','refresh');

		}else{
			
			$this->session->set_flashdata('info','Data gagal Di Ubah!!');
			redirect('admin/mahasiswa','refresh');

		}
		// var_dump($objek);
	}
}