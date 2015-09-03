<?PHP
	/**
	* 
	*/
	class Beranda extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();

			$this->load->model('calon_m');
			$this->load->model('jadwal_m');
		}

		public function index(){
			$this->load->view('beranda_v');
		}
	}
?>