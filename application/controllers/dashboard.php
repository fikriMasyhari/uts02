<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->helper('url');
		$this->load->database();
		$this->load->model('Tampilan');
		$this->load->library('session');
		$this->load->library('form_validation');
    }
	public function index()
	{	$this->Tampilan->get_tampilan();
		$data['tampil_data'] = $this->Tampilan->get_tampilan();
		 $this->load->view('tampilan/pmb' ,$data);
		

	}

	public function tambah()
	{
	
		
			$nama=$this->input->post('nama');
			$nik=$this->input->post('nik');
			$tempat_lahir=$this->input->post('tempat_lahir');
			$tanggal_lahir=$this->input->post('tanggal_lahir');
			$gender=$this->input->post('gender');
			$warganegara=$this->input->post('warganegara');
			$agama=$this->input->post('agama');
			$nama_ibu=$this->input->post('nama_ibu');
			$email=$this->input->post('email');
			$no_telp=$this->input->post('no_telp');
			$alamat=$this->input->post('alamat');
			$provinsi=$this->input->post('provinsi');
			$kabupaten=$this->input->post('kabupaten');
			$kecamatan=$this->input->post('kecamatan');
			$pendidikan=$this->input->post('pendidikan');
			$sekolah=$this->input->post('sekolah');
			$nilai_raport=$this->input->post('nilai_raport');
			$prodi1=$this->input->post('prodi1');
			$prodi2=$this->input->post('prodi2');
		
			if 
			(empty($nama) || empty($nik) || empty($tanggal_lahir) || empty($tempat_lahir)|| empty($gender)|| empty($warganegara)|| empty($agama)|| empty($nama_ibu)|| empty($email)|| empty($alamat)|| empty($provinsi)|| empty($kabupaten)|| empty($kecamatan)|| empty($pendidikan)|| empty($sekolah) || empty($nilai_raport) || empty($prodi1) || empty($prodi2) || empty($no_telp) || empty($nama_ibu) ) 
			{
				// jika data tidak lengkap, tampilkan notifikasi error
				$this->session->set_flashdata('error', 'Data tidak lengkap');
				redirect('dashboard');
			} else {
				// jika data lengkap, simpan data ke database
				$data = array(
					'nama' => $nama,
					'nik' => $nik,
					'tempat_lahir' => $tempat_lahir,
					'tanggal_lahir' => $tanggal_lahir,
					'gender' => $gender,
					'warganegara' => $warganegara,
					'agama' => $agama,
					'email' => $email,
					'nama_ibu' => $nama_ibu,
					'no_telp'=>$no_telp,
					'alamat' => $alamat,
					'provinsi' => $provinsi,
					'kabupaten' => $kabupaten,
					'kecamatan' => $kecamatan,
					'pendidikan' => $pendidikan,
					'sekolah' => $sekolah,
					'nilai_raport' => $nilai_raport,
					'prodi1' => $prodi1,
					'prodi2' => $prodi2
				
					);
				$this->Tampilan->postdata($data);
				
				// tampilkan notifikasi berhasil menggunakan SweetAlert 2
				$this->session->set_flashdata('success', 'Data berhasil disimpan!');
				$this->output->set_header('Content-Type: application/json');
				echo json_encode($data); // untuk SweetAlert 2
				redirect('dashboard');
				
			}
		
	}
	public function tampildata()
	{
		$this->Tampilan->get_tampilan();
		$data['tampil_data'] = $this->Tampilan->get_tampilan();//ambil data table pmb dari model Tampilan functionnnya get_tampilan
		$this->load->view('tampilan/t_data' ,$data);//load view data pmb ke view t_data yang ada di views
	}

}
