<?PHP
	/**
	* 
	*/
	class Vote extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();

			$this->load->model('calon_m');
			$this->load->model('vote_m');
			$this->load->model('jadwal_m');
		}

		public function index(){
			$this->load->view('vote_v');
		}

		public function tambah_vote(){
			$time_vote = $this->input->post('time_vote');
			$id_calon = $this->input->post('id_calon');
			$nim = $this->session->userdata('username');
			//echo $time_vote;

			$cek = $this->vote_m->cek_vote($nim);

			//if($cek){
			//	redirect('sudah_vote');
			//}else{
				$hasil = $this->calon_m->tambah_vote($time_vote,$id_calon,$nim);

				if($hasil){
					redirect('sudah_vote');
				}
				else{
					echo "Gagal";
				}
			//}
		}
	}
?>