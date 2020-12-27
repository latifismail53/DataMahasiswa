<?php
class Mahasiswa extends CI_Controller
{
	public function __construct() 

	{
		parent :: __construct();
		$this->load->model('Mahasiswa_model');
		$this->load->library('form_validation');
	}
	
	public function index()
	{
		
		$data['judul'] = 'Daftar Mahasiswa';
		$data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
		// if ($this->input->post('cari')) {
		// 	$data['mahasiswa']= $this->Mahasiswa_model->cariData();
		// }
		$this->load->view('templates/header',$data);
		$this->load->view('mahasiswa/index', $data);
		$this->load->view('templates/footer');

	}

	public function tambah()
	{
		$this->session->set_flashdata('flash','ditambahkan');
		$this->form_validation->set_rules('nama_mhs', 'Nama', 'required');
		$this->form_validation->set_rules('nim', 'Nim', 'required|numeric');
		$this->form_validation->set_rules('jns_kelamin', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('alamat', 'ALamat', 'required');
		$this->form_validation->set_rules('no_hp', 'No Hp', 'required|numeric');
		$this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
		
		if ($this->form_validation->run() == FALSE)
		{
			redirect('mahasiswa');
		}
		else
		{
			$this->Mahasiswa_model->tambahDataMahasiswa();
			$this->session->set_flashdata('flash','Di Tambah');
			redirect('mahasiswa');
		}
	}

	public function hapus($id_mhs)
	{
		$this->Mahasiswa_model->hapusDataMahasiswa($id_mhs);
		$this->session->set_flashdata('flash','di hapus');
		redirect('mahasiswa');
	}

	public function detail($id_mhs)
	{
		$data['judul']='Datail Data Mahasiswa';
		$data['mahasiswa']= $this->Mahasiswa_model->getMahasiswaById($id_mhs);
		$this->load->view('templates/header',$data);
		$this->load->view('mahasiswa/detail',$data);
		$this->load->view('templates/footer');
	}

	public function ubah($id_mhs)
	{
		$data['judul']='Form Ubah';
		$data['mahasiswa']= $this->Mahasiswa_model->getMahasiswaById($id_mhs);
		$data['jurusan']=['Teknik Informatika', 'Teknik Mesin','Teknik Industri', 'Sistem Informasi','Teknik Sipil'];
		$data['jns_kelamin']=['Laki-Laki', 'Perempuan'];
		$this->form_validation->set_rules('nama_mhs', 'Nama', 'required');
		$this->form_validation->set_rules('nim', 'Nim', 'required|numeric');
		$this->form_validation->set_rules('jns_kelamin', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('alamat', 'ALamat', 'required');
		$this->form_validation->set_rules('no_hp', 'No Hp', 'required|numeric');
		$this->form_validation->set_rules('jurusan', 'Jurusan', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('templates/header', $data);
			$this->load->view('mahasiswa/ubah', $data);
			$this->load->view('templates/footer');
		}
		else
		{
			$this->Mahasiswa_model->ubahDataMahasiswa();
			$this->session->set_flashdata('flash','diubah');
			redirect('mahasiswa');
		}

	}

}