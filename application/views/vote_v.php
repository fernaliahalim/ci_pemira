<?PHP
    //session_start();
    $tgl = $this->session->userdata('waktu_vote');
    if($this->session->userdata('time_vote')==1 and $tgl>=0){
    if($this->session->userdata('username')){
        $cek = $this->vote_m->cek_vote($this->session->userdata('username'));

        if(! $cek->num_rows()){
            //$this->load->view('sudah_vote_v');
            //foreach($cek->result() as $row):
                //$this->session->set_userdata('nim_db',$row->nim);
            //endforeach;

            //if($this->session->userdata('nim_db')==''){
    $this->load->view('header_v');
?>
<div id="pathmenu">
    <?PHP
        if($this->session->userdata('username')){
    ?>
	<a href="<?PHP echo base_url();?>vote">Voting Sekarang</a> >
    <?PHP
        }
    ?>
    <?PHP
        if($this->session->userdata('username')==""){
    ?>
    <a href="<?PHP echo base_url();?>login">Login</a> >
    <?PHP
        }
    ?>
</div>
            
<div id="content">
    <br />
    <div class="col_43">
    <h1><font face="Times New Roman, Times, serif">Vote Sekarang</font></h1>
    <p><i>Aspirasikan pilihan Anda sekarang! Silahkan KLIK PADA GAMBAR calon Ketua BEM yang ingin Anda pilih.</i></p>
    </div>
    <img src="<?php echo site_url();?>assets/img/head.png" width="930px", height="3px" />
    <br />
    <br />
    <div id="display" style="text-align:left; padding-left:110px;">
        </div>
    <?PHP
        $i=1;
        $query = $this->calon_m->lihat_calon();
                    
        foreach($query->result() as $row) :
    ?>
    <form action="<?PHP echo base_url();?>vote/tambah_vote" method="post">
    <center>
    <div class="col_43" >
    <div class="col" style="padding-left:20px;">
        <h4><?PHP echo $row->nama_cabem?> & <?PHP echo $row->nama_cawabem?></h4>
        <input type="hidden" value="<?PHP echo $row->id_calon?>" name="id_calon" />
        <button><img src="<?PHP echo base_url().$row->img_url;?>" height="250px;"></button>
        <div id="display_hidden<?PHP echo $i++;?>" style="text-align:left; padding-left:110px;">
        </div>
    </form>
    </div>
    <?PHP
        endforeach;
    ?>
    </div>
    <div class="clear"></div>
    </center>
    <br />
    <br />
    <br />
    <br />
</div>
</div>
<div class="clear"></div>

<?PHP
    $this->load->view('footer_v');
        //}
        //else{
        //    $this->load->view('sudah_vote_v');
        //}
   }
   else{
    $this->load->view('sudah_vote_v');
   }
}
}
else{
    $this->load->view('beranda_v');
}
?>

<script type="text/javascript">
        function waktu(){
            var date = new Date();
            var tanggal = date.getDate();
            tanggal = tanggal < 10 ? "0" + tanggal : tanggal;
            var tahun = date.getFullYear();
            var jam = date.getHours();
            jam = jam < 10 ? "0" + jam : jam;
            var menit = date.getMinutes();
            menit = menit < 10 ? "0" + menit : menit;
            var detik = date.getSeconds();
            detik = detik < 10 ? "0" + detik : detik;

            var display = "<label>Time Vote</label>&nbsp;&nbsp;<input value='";
            display+=tahun+"-"+date.getMonth()+"-"+tanggal+" "+jam+":"+menit+":"+detik+"'";
            display+="name='time_vote_temp' disabled/>";
            display+="<input type='hidden' value='";
            display+=tahun+"-"+date.getMonth()+"-"+tanggal+" "+jam+":"+menit+":"+detik+"'";
            display+="name='time_vote'/>";
            window.document.getElementById("display").innerHTML=display;
            setTimeout("waktu();",1000);
        }

        function waktu_hidden1(){
            var date = new Date();
            var tanggal = date.getDate();
            tanggal = tanggal < 10 ? "0" + tanggal : tanggal;
            var tahun = date.getFullYear();
            var jam = date.getHours();
            jam = jam < 10 ? "0" + jam : jam;
            var menit = date.getMinutes();
            menit = menit < 10 ? "0" + menit : menit;
            var detik = date.getSeconds();
            detik = detik < 10 ? "0" + detik : detik;

            var display="<input type='hidden' value='";
            display+=tahun+"-"+date.getMonth()+"-"+tanggal+" "+jam+":"+menit+":"+detik+"'";
            display+="name='time_vote'/>";
            window.document.getElementById("display_hidden1").innerHTML=display;
            setTimeout("waktu();",1000);
        }
        
        function waktu_hidden2(){
            var date = new Date();
            var tanggal = date.getDate();
            tanggal = tanggal < 10 ? "0" + tanggal : tanggal;
            var tahun = date.getFullYear();
            var jam = date.getHours();
            jam = jam < 10 ? "0" + jam : jam;
            var menit = date.getMinutes();
            menit = menit < 10 ? "0" + menit : menit;
            var detik = date.getSeconds();
            detik = detik < 10 ? "0" + detik : detik;

            var display="<input type='hidden' value='";
            display+=tahun+"-"+date.getMonth()+"-"+tanggal+" "+jam+":"+menit+":"+detik+"'";
            display+="name='time_vote'/>";
            window.document.getElementById("display_hidden2").innerHTML=display;
            setTimeout("waktu();",1000);
        }

        function waktu_hidden3(){
            var date = new Date();
            var tanggal = date.getDate();
            tanggal = tanggal < 10 ? "0" + tanggal : tanggal;
            var tahun = date.getFullYear();
            var jam = date.getHours();
            jam = jam < 10 ? "0" + jam : jam;
            var menit = date.getMinutes();
            menit = menit < 10 ? "0" + menit : menit;
            var detik = date.getSeconds();
            detik = detik < 10 ? "0" + detik : detik;

            var display="<input type='hidden' value='";
            display+=tahun+"-"+date.getMonth()+"-"+tanggal+" "+jam+":"+menit+":"+detik+"'";
            display+="name='time_vote'/>";
            window.document.getElementById("display_hidden3").innerHTML=display;
            setTimeout("waktu();",1000);
        }

        function waktu_hidden4(){
            var date = new Date();
            var tanggal = date.getDate();
            tanggal = tanggal < 10 ? "0" + tanggal : tanggal;
            var tahun = date.getFullYear();
            var jam = date.getHours();
            jam = jam < 10 ? "0" + jam : jam;
            var menit = date.getMinutes();
            menit = menit < 10 ? "0" + menit : menit;
            var detik = date.getSeconds();
            detik = detik < 10 ? "0" + detik : detik;

            var display="<input type='hidden' value='";
            display+=tahun+"-"+date.getMonth()+"-"+tanggal+" "+jam+":"+menit+":"+detik+"'";
            display+="name='time_vote'/>";
            window.document.getElementById("display_hidden4").innerHTML=display;
            setTimeout("waktu();",1000);
        }

        waktu();
        waktu_hidden1();
        waktu_hidden2();
        waktu_hidden3();
        waktu_hidden4();
    </script>