<?PHP
    $this->load->view('header_v');
?>
<div id="pathmenu">
	<!--<a href="<?PHP echo base_url();?>tentangpemira">Tentang PEMIRA</a> >-->
</div>
            
<div id="content">
    <br />
    <br />
    <center>
    	<h2>Terimakasih Anda sudah mem-vote</h2>
    	<form action="<?PHP echo base_url()?>hasil">
    		<button style="font-size:16px;
                    padding:15px;
                    background-color:#99CC33;
                    font-family:Arial, Helvetica, sans-serif;
                    border-radius:15px;
            ">
    			Lihat Perhitungan Suara
    		</button>
    	</form>
    </center>
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

<?PHP
    $this->load->view('footer_v');
?>