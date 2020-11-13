
<?php


class mahasiswa extends CI_Controller
{
	public function __construct(){
		parent:: __construct();
		$this->load->model('m_mhs');
	}

	public function index () {
		$data['tbl_mahasiswa']= $this-> m_mhs->getAll();
		$this->load->view('mahasiswa/v_index',$data);
	}

	public function tambah(){
		$this->load->view('mahasiswa/v_tambah');
	}

	public function proses_tambah(){
		$nama = $this->input->post('txtnama');
		$nim = $this->input->post('intnim');
		$alamat = $this->input->post('txtalamat');

		$data_input = [
			'nama'=> $nama,
			'nim' => $nim,
			'alamat' => $alamat
		];

		

		$simpan = $this-> m_mhs->m_Add($data_input);
		redirect('mahasiswa/index');

	}
	

	// public function index ($nim=0,$jur=0)
	// {
	// 	$data ['nama']= 'Gede Wiyana yasa';
	// 	$data ['alamat']= 'gedur';
	// 	$data ['nim']= $nim;
	// 	$data ['jurusan']=$jur;

	// 	$data['tbl_mahasiswa'] = $this->db->get('mahasiswa')->result();


	// 	$this->load->view('mahasiswa/V_index',$data);
	// }

	// public function jurusan ()
	// {
	// 	 echo 'D3 Sistem Informasi gimana  ';
	// }
}
?>