<?PHP
	/**
	* 
	*/
	class Hasil extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();

			$this->load->model('vote_m');
			$this->load->model('hasil_m');
			$this->load->model('jadwal_m');
		}

		public function index(){
			$this->load->view('hasil_v');
		}

		public function pdf()
		{
			$this->load->library('tcpdf');
			$this->load->library('parser');
			$pdf = new tcpdf();
			$orientation = 'p';
			$format = 'A4';
			$keepmargins = false;
			$tocpage = false;
			
			$pdf->AddPage($orientation, $format, $keepmargins, $tocpage);
			
			$family = 'dejavusans';
			$style = '';
			$size = '10'; 
			
			$pdf->SetFont($family, $style, $size);
			
			
			$html = $this->parser->parse('report_semua_v',array());
			$pdf->WriteHTML($html);
			$pdf->output();
			
		}

		public function pdf_inf()
		{
			$this->load->library('tcpdf');
			$this->load->library('parser');
			$pdf = new tcpdf();
			$orientation = 'p';
			$format = 'A4';
			$keepmargins = false;
			$tocpage = false;
			
			$pdf->AddPage($orientation, $format, $keepmargins, $tocpage);
			
			$family = 'dejavusans';
			$style = '';
			$size = '10'; 
			
			$pdf->SetFont($family, $style, $size);
			
			
			$html = $this->parser->parse('pdf_inf_v',array());
			$pdf->WriteHTML($html);
			$pdf->output();
			
		}

		public function pdf_kmn()
		{
			$this->load->library('tcpdf');
			$this->load->library('parser');
			$pdf = new tcpdf();
			$orientation = 'p';
			$format = 'A4';
			$keepmargins = false;
			$tocpage = false;
			
			$pdf->AddPage($orientation, $format, $keepmargins, $tocpage);
			
			$family = 'dejavusans';
			$style = '';
			$size = '10'; 
			
			$pdf->SetFont($family, $style, $size);
			
			
			$html = $this->parser->parse('pdf_kmn_v',array());
			$pdf->WriteHTML($html);
			$pdf->output();
			
		}

		public function pdf_ekw()
		{
			$this->load->library('tcpdf');
			$this->load->library('parser');
			$pdf = new tcpdf();
			$orientation = 'p';
			$format = 'A4';
			$keepmargins = false;
			$tocpage = false;
			
			$pdf->AddPage($orientation, $format, $keepmargins, $tocpage);
			
			$family = 'dejavusans';
			$style = '';
			$size = '10'; 
			
			$pdf->SetFont($family, $style, $size);
			
			
			$html = $this->parser->parse('pdf_ekw_v',array());
			$pdf->WriteHTML($html);
			$pdf->output();
			
		}

		public function pdf_tek()
		{
			$this->load->library('tcpdf');
			$this->load->library('parser');
			$pdf = new tcpdf();
			$orientation = 'p';
			$format = 'A4';
			$keepmargins = false;
			$tocpage = false;
			
			$pdf->AddPage($orientation, $format, $keepmargins, $tocpage);
			
			$family = 'dejavusans';
			$style = '';
			$size = '10'; 
			
			$pdf->SetFont($family, $style, $size);
			
			
			$html = $this->parser->parse('pdf_tek_v',array());
			$pdf->WriteHTML($html);
			$pdf->output();
			
		}

		public function pdf_jmp()
		{
			$this->load->library('tcpdf');
			$this->load->library('parser');
			$pdf = new tcpdf();
			$orientation = 'p';
			$format = 'A4';
			$keepmargins = false;
			$tocpage = false;
			
			$pdf->AddPage($orientation, $format, $keepmargins, $tocpage);
			
			$family = 'dejavusans';
			$style = '';
			$size = '10'; 
			
			$pdf->SetFont($family, $style, $size);
			
			
			$html = $this->parser->parse('pdf_jmp_v',array());
			$pdf->WriteHTML($html);
			$pdf->output();
			
		}

		public function pdf_gzi()
		{
			$this->load->library('tcpdf');
			$this->load->library('parser');
			$pdf = new tcpdf();
			$orientation = 'p';
			$format = 'A4';
			$keepmargins = false;
			$tocpage = false;
			
			$pdf->AddPage($orientation, $format, $keepmargins, $tocpage);
			
			$family = 'dejavusans';
			$style = '';
			$size = '10'; 
			
			$pdf->SetFont($family, $style, $size);
			
			
			$html = $this->parser->parse('pdf_gzi_v',array());
			$pdf->WriteHTML($html);
			$pdf->output();
			
		}

		public function pdf_tib()
		{
			$this->load->library('tcpdf');
			$this->load->library('parser');
			$pdf = new tcpdf();
			$orientation = 'p';
			$format = 'A4';
			$keepmargins = false;
			$tocpage = false;
			
			$pdf->AddPage($orientation, $format, $keepmargins, $tocpage);
			
			$family = 'dejavusans';
			$style = '';
			$size = '10'; 
			
			$pdf->SetFont($family, $style, $size);
			
			
			$html = $this->parser->parse('pdf_tib_v',array());
			$pdf->WriteHTML($html);
			$pdf->output();
			
		}

		public function pdf_ikn()
		{
			$this->load->library('tcpdf');
			$this->load->library('parser');
			$pdf = new tcpdf();
			$orientation = 'p';
			$format = 'A4';
			$keepmargins = false;
			$tocpage = false;
			
			$pdf->AddPage($orientation, $format, $keepmargins, $tocpage);
			
			$family = 'dejavusans';
			$style = '';
			$size = '10'; 
			
			$pdf->SetFont($family, $style, $size);
			
			
			$html = $this->parser->parse('pdf_ikn_v',array());
			$pdf->WriteHTML($html);
			$pdf->output();
			
		}

		public function pdf_tnk()
		{
			$this->load->library('tcpdf');
			$this->load->library('parser');
			$pdf = new tcpdf();
			$orientation = 'p';
			$format = 'A4';
			$keepmargins = false;
			$tocpage = false;
			
			$pdf->AddPage($orientation, $format, $keepmargins, $tocpage);
			
			$family = 'dejavusans';
			$style = '';
			$size = '10'; 
			
			$pdf->SetFont($family, $style, $size);
			
			
			$html = $this->parser->parse('pdf_tnk_v',array());
			$pdf->WriteHTML($html);
			$pdf->output();
			
		}

		public function pdf_mab()
		{
			$this->load->library('tcpdf');
			$this->load->library('parser');
			$pdf = new tcpdf();
			$orientation = 'p';
			$format = 'A4';
			$keepmargins = false;
			$tocpage = false;
			
			$pdf->AddPage($orientation, $format, $keepmargins, $tocpage);
			
			$family = 'dejavusans';
			$style = '';
			$size = '10'; 
			
			$pdf->SetFont($family, $style, $size);
			
			
			$html = $this->parser->parse('pdf_mab_v',array());
			$pdf->WriteHTML($html);
			$pdf->output();
			
		}

		public function pdf_mni()
		{
			$this->load->library('tcpdf');
			$this->load->library('parser');
			$pdf = new tcpdf();
			$orientation = 'p';
			$format = 'A4';
			$keepmargins = false;
			$tocpage = false;
			
			$pdf->AddPage($orientation, $format, $keepmargins, $tocpage);
			
			$family = 'dejavusans';
			$style = '';
			$size = '10'; 
			
			$pdf->SetFont($family, $style, $size);
			
			
			$html = $this->parser->parse('pdf_mni_v',array());
			$pdf->WriteHTML($html);
			$pdf->output();
			
		}

		public function pdf_kim()
		{
			$this->load->library('tcpdf');
			$this->load->library('parser');
			$pdf = new tcpdf();
			$orientation = 'p';
			$format = 'A4';
			$keepmargins = false;
			$tocpage = false;
			
			$pdf->AddPage($orientation, $format, $keepmargins, $tocpage);
			
			$family = 'dejavusans';
			$style = '';
			$size = '10'; 
			
			$pdf->SetFont($family, $style, $size);
			
			
			$html = $this->parser->parse('pdf_kim_v',array());
			$pdf->WriteHTML($html);
			$pdf->output();
			
		}

		public function pdf_lnk()
		{
			$this->load->library('tcpdf');
			$this->load->library('parser');
			$pdf = new tcpdf();
			$orientation = 'p';
			$format = 'A4';
			$keepmargins = false;
			$tocpage = false;
			
			$pdf->AddPage($orientation, $format, $keepmargins, $tocpage);
			
			$family = 'dejavusans';
			$style = '';
			$size = '10'; 
			
			$pdf->SetFont($family, $style, $size);
			
			
			$html = $this->parser->parse('pdf_lnk_v',array());
			$pdf->WriteHTML($html);
			$pdf->output();
			
		}

		public function pdf_akn()
		{
			$this->load->library('tcpdf');
			$this->load->library('parser');
			$pdf = new tcpdf();
			$orientation = 'p';
			$format = 'A4';
			$keepmargins = false;
			$tocpage = false;
			
			$pdf->AddPage($orientation, $format, $keepmargins, $tocpage);
			
			$family = 'dejavusans';
			$style = '';
			$size = '10'; 
			
			$pdf->SetFont($family, $style, $size);
			
			
			$html = $this->parser->parse('pdf_akn_v',array());
			$pdf->WriteHTML($html);
			$pdf->output();
			
		}

		public function pdf_pvt()
		{
			$this->load->library('tcpdf');
			$this->load->library('parser');
			$pdf = new tcpdf();
			$orientation = 'p';
			$format = 'A4';
			$keepmargins = false;
			$tocpage = false;
			
			$pdf->AddPage($orientation, $format, $keepmargins, $tocpage);
			
			$family = 'dejavusans';
			$style = '';
			$size = '10'; 
			
			$pdf->SetFont($family, $style, $size);
			
			
			$html = $this->parser->parse('pdf_pvt_v',array());
			$pdf->WriteHTML($html);
			$pdf->output();
			
		}

		public function pdf_tmp()
		{
			$this->load->library('tcpdf');
			$this->load->library('parser');
			$pdf = new tcpdf();
			$orientation = 'p';
			$format = 'A4';
			$keepmargins = false;
			$tocpage = false;
			
			$pdf->AddPage($orientation, $format, $keepmargins, $tocpage);
			
			$family = 'dejavusans';
			$style = '';
			$size = '10'; 
			
			$pdf->SetFont($family, $style, $size);
			
			
			$html = $this->parser->parse('pdf_tmp_v',array());
			$pdf->WriteHTML($html);
			$pdf->output();
			
		}

		public function pdf_ppp()
		{
			$this->load->library('tcpdf');
			$this->load->library('parser');
			$pdf = new tcpdf();
			$orientation = 'p';
			$format = 'A4';
			$keepmargins = false;
			$tocpage = false;
			
			$pdf->AddPage($orientation, $format, $keepmargins, $tocpage);
			
			$family = 'dejavusans';
			$style = '';
			$size = '10'; 
			
			$pdf->SetFont($family, $style, $size);
			
			
			$html = $this->parser->parse('pdf_ppp_v',array());
			$pdf->WriteHTML($html);
			$pdf->output();
			
		}

		public function pdf_pks()
		{
			$this->load->library('tcpdf');
			$this->load->library('parser');
			$pdf = new tcpdf();
			$orientation = 'p';
			$format = 'A4';
			$keepmargins = false;
			$tocpage = false;
			
			$pdf->AddPage($orientation, $format, $keepmargins, $tocpage);
			
			$family = 'dejavusans';
			$style = '';
			$size = '10'; 
			
			$pdf->SetFont($family, $style, $size);
			
			
			$html = $this->parser->parse('pdf_pks_v',array());
			$pdf->WriteHTML($html);
			$pdf->output();
			
		}
	}
?>