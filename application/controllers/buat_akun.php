<?PHP
	/**
	* 
	*/
	class Buat_akun extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();

			$this->load->model('Pengguna_m');
			$this->load->model('jadwal_m');
		}

		public function index(){
			$this->load->view('buat_akun_v');
		}

		public function validasi(){
			$nim = $this->input->post('username');
			$nama = $this->input->post('nama');
			$password = $this->input->post('password');
			$repassword = $this->input->post('re-password');
			$captcha = $this->input->post('captcha');
			$isicaptcha = $this->input->post('isicaptcha');

			if($password == $repassword){
				if($captcha == $isicaptcha){
					$data = $this->Pengguna_m->view_user($nim);

					if($data->num_rows()){
					/*if($data){
						foreach($data->result() as $baris):
							$nim_db = $baris->nim;
							$nama_db = $baris->nama;
						endforeach;

						if($nim == $nim_db){
							if($nama == $nama_db){
								//$hasil = substr($nim,2,1);
								//echo $hasil;*/
								$hasil = $this->Pengguna_m->view_pk($nim);

								foreach($hasil->result() as $row):
									$kdpk = $row->kode_pk;
								endforeach;

								$hasil_qr = $this->Pengguna_m->validasi($nim,$nama,$password,$kdpk);

								if($hasil_qr){
									redirect('login');
								}
								else{
									redirect('buat_akun');
								}
							/*}
							else{
								redirect('buat_akun');
							}
						}
						else{
							redirect('buat_akun');
						}*/
					}
					else{
						redirect('buat_akun');
					}
				}
				else{
					redirect('buat_akun');
				}
			}
			else{
				redirect('buat_akun');
			}
		}
	}
?>