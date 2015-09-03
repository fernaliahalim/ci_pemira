<?PHP
	/**
	* 
	*/
	class Setting extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();

			$this->load->model('jadwal_m');
			$this->load->model('setting_m');
		}

		public function index(){
			$this->load->view('setting_v');
		}

		public function enable_vote(){
			$hasil = $this->setting_m->enable();

			if($hasil){
				redirect('setting');
			}
			else{
				redirect('setting');
			}
		}

		public function disable_vote(){
			$hasil = $this->setting_m->disable();

			if($hasil){
				redirect('setting');
			}
			else{
				redirect('setting');
			}
		}
	}
?>