 <?PHP
    $this->load->view('header_v');
 ?>
 <div id="pathmenu">
	<a href="hubungiKami.htm">Hubungi Kami</a> >
</div>
            
<div id="content">
    <div class="col col_H1" style="text-align:left;">
        <br />
        <br />
        <center>
        <div class="col_43">
            <h1><font face="Times New Roman, Times, serif">Hubungi Kami</font></h1>
            <p><i>Bagaimana dapat menghubungi dan berkomunikasi dengan kami?</i></p>
        </div>
        <div class="clear"></div>
        <img src="<?php echo site_url();?>assets/img/head.png" width="930px", height="3px" />
        </center>
        <div class="clear"></div>
        <br />
        <br />
        <br />
        <form action="<?php site_url();?>kontakkami/tambah" method="get">
            Nama:<br />
            <?php if($this->session->userdata('username')==''){?>
            <input type="text" maxlength="50" size="60px" name="nama" required/><br /> <br />
            <?php } else{?>
            <input type="text" maxlength="50" size="60px" name="nama" value="<?php echo $this->session->userdata('nama'); ?>" /><br /> <br />
            <?php } ?>
            Email:<br />
            <input type="email" maxlength="50" size="60px" name="email" required/><br /> <br />
            Pesan:<br />
            <textarea type="text" maxlength="1000" size="60px" name="pesan" cols="43" rows="15" required></textarea>
            <br />
            <br />
            <div class="col col_2" style="padding-left:150px; margin-left:100px ">
                <button style="font-size:16px;
                                padding:15px;
                                background-color:#99CC33;
                                font-family:Arial, Helvetica, sans-serif;
                                border-radius:15px;">Kirim</button>
            </div>
            </form>
    </div>
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
                <div class="col col_3">
        			<img src="<?PHP echo base_url();?>assets/img/kontakkami.png" width="100%"/><br /><br />
                    <!--<img src="picture/petaMB.gif" width="100%" />-->
                </div>
                
                <div class="clear"></div>
                <br />
                <br />
                <br />
                
            </div>
            <div class="clear"></div>
<?PHP
    $this->load->view('footer_v');
?>