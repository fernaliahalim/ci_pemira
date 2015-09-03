<?php
	if(!($this->session->userdata('username'))){
	$this->load->view('header_v');
?>
<div id="content">
				<br />
				<br />
				<br />
				<center>
				<div class="col col_col1211" style="margin-left:114px; padding-bottom:20px; padding-left:50px; background-color:#FFFFFF; text-align:justify; height:320px; width:800px; padding-right:50px;">
					<center><h3>Login</h3></center>
					<br />
					<form method="post" action="<?php echo base_url()?>index.php/login/sign_in" id="form_login">
					NIM<br />
					<input type="text" maxlength="50" size="108px" name="username" placeholder="NIM" required /><br /><br />
					Password<br />
					<input type="password" maxlength="50" size="108px" name="password" placeholder="Password" required/><br /><br />
					<a href="<?php echo site_url();?>buat_akun" style="text-decoration:none; font-style:normal"><font color="#CC0000" face="Arial, Helvetica, sans-serif" size="-1">Apakah Anda belum mendaftar?</font></a>
					<br />
					<br />
					<div class="col_right">
						<button style="font-size:16px;
										padding:15px;
										background-color:#99CC33;
										font-family:Arial, Helvetica, sans-serif;
										border-radius:15px;">Login</button>
					</form>
					<br />
					<br />
					<br />
					</div>
				</div>
			</center>
				<div class="clear"></div>
				<br />
				<br />
				<br />
				<br />
</div>
			<div class="clear"></div>
<?php
	$this->load->view('footer_v');
}
?>