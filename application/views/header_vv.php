<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/css_style1.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/jquery.dataTables.min.cs"/>
<title>Home</title>
</head>

<?PHP
	$lihat = $this->jadwal_m->lihat();

	foreach($lihat->result() as $baris):
		$cek = $baris->time_vote;
	endforeach;

	if($cek == 1)
		$this->session->set_userdata('time_vote',1);
	else
		$this->session->set_userdata('time_vote',0);

	$time = $this->jadwal_m->jadwal();

	foreach($time->result() as $brs_time):
		$jml_hari = $brs_time->jumlah;
	endforeach;

	$this->session->set_userdata('waktu_vote',$jml_hari);
?>

<body>
	<div id="main" align="center" style="margin:0">
    	<div id="container" align="center">
        	<div id="atas" align="left">
            	<div id="logo">
					<img src="<?PHP echo base_url();?>assets/img/logo.PNG" width="30%">
				</div>
				<div id="menu_header">
					<script language="JavaScript">
function Countdown(then) {

	this.then = then;
	
	function setElement(id, value) {
		if (value.length < 2) {
	    	value = "0" + value;
		}
	
		window.document.getElementById(id).innerHTML = value;
	}
	
	function countdown() {
		now  		  = new Date();
	  	diff		  = new Date(this.then - now);
	  	
		seconds_left  = Math.floor(diff.valueOf() / 1000);
	
		seconds  = Math.floor(seconds_left / 1) % 60;
		minutes  = Math.floor(seconds_left / 60) % 60;
		hours    = Math.floor(seconds_left / 3600) % 24;
		days     = Math.floor(seconds_left / 86400) % 86400;
		
		setElement('countdown-days', days);
		setElement('countdown-hours', hours);
		setElement('countdown-minutes', minutes);
		setElement('countdown-seconds', seconds);
		
		countdown.timer = setTimeout(countdown, 1000);
	}
	function start() {
		this.timer = setTimeout(countdown, 1000);
	}
	
	start(then);	
}

<?PHP
	$hasil = $this->jadwal_m->view();

	foreach($hasil->result() as $baris):
		$tgl = $baris->tgl_akhir;
	endforeach;

	//echo $tgl;
?>

Countdown(new Date("<?PHP echo $tgl;?>"));

</script>
					<font color="#000000" size="+1"><span id="countdown-days"></span> Hari <span id="countdown-hours"></span>:<span id="countdown-minutes"></span>:<span id="countdown-seconds"></span></font>
					<br /><br />
					<?PHP if($this->session->userdata('username')==""){?>
					<a href="<?PHP echo base_url();?>login"><font color="#CC0000"><b>Login</b></font></a> | 
					<a href="<?PHP echo base_url();?>buat_akun"><font color="#CC0000"><b>Buat Akun</b></font></a>
					<?PHP } ?>
					<?PHP if($this->session->userdata('username')){?>
					<font color="#AAAAAA"><b><?PHP echo $this->session->userdata('nama')?></b></font> | 
					<a href="<?PHP echo base_url();?>logout"><font color="#CC0000"><b>Logout</b></font></a>
					<?PHP } ?>
				</div>
				<div class="clear">
				</div>
            </div>
            <!--<hr />-->
            
            
            <div class="clear"></div>
           
            <div id="mainMenu">
				<ul>
					<li><a href="<?php echo base_url();?>beranda">Beranda</a></li> 
					<li><a href="<?php echo base_url();?>manipulasi_calon">Data CABEM dan CAWABEM</a></li> 
					<li><a href="<?php echo base_url();?>manipulasi_user">Data Mahasiswa</a></li> 
					<li><a href="<?php echo base_url();?>manipulasi_pk">Data PK</a></li> 
					<li><a href="<?php echo base_url();?>manipulasi_vote">Data Vote</a></li>  
					<li><a href="<?php echo base_url();?>manipulasi_kontak">Data Kontak Kami</a></li> 
					<li><a href="#">Pengaturan</a>
						<ul>
							<li><a href="<?php echo base_url();?>setting">Panel Operator</a></li>
							<li><a href="<?php echo base_url();?>jadwal">Jadwal</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<!--<hr />-->
			<div id="path">
			</div>