            
<?PHP
session_start();
//if($this->session->userdata('time_vote')==1){
    $this->load->view('header_v');
?>            <div id="pathmenu">
				<a href="<?PHP echo base_url();?>">Beranda</a> >
			</div>
            
            <div id="content">
                <br />
                <br />
                <img src="<?PHP echo base_url();?>assets/img/gambar2.png" width="100%"/>
                <br />
                <br />
                <br />
                <?PHP
                    $i =1;
                    $query = $this->calon_m->lihat_calon();
                    
                    foreach($query->result() as $row) :
                ?>
                <div class="col col_bgcolor" style="padding-left:72px">
                    <font color="#FFFFFF" size="+2"><font face="Georgia, Times New Roman, Times, serif">Biodata CABEM & CAWABEM No.<?PHP echo $i++;?></font></font>
                </div>
                <br />
                <br />
                <div class="clear"></div>
                <center>
                <div class="col_432">
                    <center><h2><?PHP echo $row->nama_cabem?> & <?PHP echo $row->nama_cawabem?></h2>
                    <img src="<?PHP echo base_url().$row->img_url;?>" height="400px;"></center>
                </div>
                <br />
                <br />
                <br />
                </center>
                <div class="clear"></div>
                <?PHP
                    endforeach;
                ?>
                <br />
                <br />
                <br />
                <br />
                <br />
                
            </div>
            <div class="clear"></div>
<?PHP
    $this->load->view('footer_v');
//}
?>