<?PHP
	/**
	* 
	*/
	class Sudah_vote extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();

			$this->load->model('jadwal_m');
		}

		public function index(){
			$this->load->view('sudah_vote_v');
		}
	}
?>