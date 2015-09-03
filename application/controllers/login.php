<?PHP
	/**
	* 
	*/
	class Login extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();

			$this->load->model('Pengguna_m');
			$this->load->model('jadwal_m');
		}

		public function index(){
			$this->load->view('login_v');
		}

		public	function sign_in() {
		$uname = $this->input->post('username');
		$pass = $this->input->post('password');
		
		$this->load->model('Pengguna_m');
			$this->Pengguna_m->setUsername($uname);
			$this->Pengguna_m->setPassword($pass);	
			$result = $this->Pengguna_m->view();
			
			if($result->num_rows()) {
				$row = $result->row();
				$this->session->set_userdata('username',$row->nim);
				$this->session->set_userdata('nama',$row->nama);
				$this->session->set_userdata('status',$row->priviledge);

				if($this->session->userdata('status')==1){
					redirect('manipulasi_calon');
				}
				else if($this->session->userdata('status')==0){
					redirect('manipulasi_calon');
				}
				else{
					redirect('vote');
				}
			
			}else{
				redirect('login');
				}
		}
		//}
	}
?>