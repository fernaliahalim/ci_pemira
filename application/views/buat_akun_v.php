<?PHP
    $this->load->view('header_v');
?>
<div id="pathmenu">
	<a href="<?PHP echo base_url();?>buat_akun">Buat Akun</a> >
</div>
            
<div id="content">
    <br />
    <br />
    <img src="<?PHP echo base_url();?>assets/img/gambar2.png" width="100%"/>
    <br />
    <br />
    <br />
    <center>
        <div class="col col_col1211" style="margin-left:114px; padding-bottom:20px; padding-left:50px; background-color:#FFFFFF; text-align:justify; height:500px; width:800px; padding-right:50px;">
            <center><h3>Buat Akun</h3></center>
            <br />
            <form method="post" action="<?php echo base_url()?>buat_akun/validasi" id="form_login">
                NIM<br />
                <input type="text" maxlength="50" size="108px" name="username" placeholder="NIM" required /><br /><br />
                Nama<br />
                <input type="text" maxlength="50" size="108px" name="nama" placeholder="Nama" required /><br /><br />
                Password<br />
                <input type="password" maxlength="50" size="108px" name="password" placeholder="Password" required/><br /><br />
                Ulangi Password<br />
                <input type="password" maxlength="50" size="108px" name="re-password" placeholder="Re-Password" required/><br /><br />
                <label for="captcha">Captcha</label><br/>
                    <?php
                        $teks="abcdefghijklmnopqrstuvwxyz0123456789";
                        $random=substr(str_shuffle($teks),0,5);
                        $this->load->helper('captcha');
                        
                        $vals = array(
                        'word'  => $random,
                        'img_path'  => './assets/img/captcha/',
                        'img_url'   => './assets/img/captcha/',
                        //'font_path'   => './path/to/fonts/texb.ttf',
                        'img_width' => 150,
                        'img_height' => 30,
                        'expiration' => 7200
                        );

                        $cap = create_captcha($vals);
                        echo $cap['image'];
                ?>
                <br />
                <input type="text" class="form-control" name="captcha" maxlength="50" size="108px"/>
                <input type="hidden" class="form-control" name="isicaptcha" value="<?php echo $random;?>">
                <br />
                <br />
                <a href="<?php echo site_url();?>index.php/login" style="text-decoration:none; font-style:normal"><font color="#CC0000" face="Arial, Helvetica, sans-serif" size="-1">Apakah Anda sudah mendaftar?</font></a>
                <br />
                <br />
                
                <div class="col_right">
                    <button style="font-size:16px;
                                    padding:15px;
                                    background-color:#99CC33;
                                    font-family:Arial, Helvetica, sans-serif;
                                    border-radius:15px;">Daftar</button>
                </div>
                <div class="clear"></div>
            </form>
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
        </div>
        <div class="clear"></div>
    </center>
    <br />
    <br />
    <br />
    <br />
<div class="clear"></div>

<?PHP
    $this->load->view('footer_v');
?>