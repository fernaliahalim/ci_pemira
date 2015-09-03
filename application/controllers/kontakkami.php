<?PHP
	/**
	* 
	*/
	class Kontakkami extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();

			$this->load->model('kontakkami_m');
			$this->load->model('jadwal_m');
		}

		public function index(){
			$this->load->view('kontakkami_v');
		}

		public function tambah(){
			$nama = $this->input->get('nama');
			$email = $this->input->get('email');
			$pesan = $this->input->get('pesan');
			
			$hasil = $this->kontakkami_m->tambah($nama,$email,$pesan);
			
			if($hasil){
				redirect(site_url());
				}
			else{
				echo "Gagal";
				}
			}
	}
?>