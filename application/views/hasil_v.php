<?PHP
    $this->load->view('header_v');
?>
<div id="pathmenu">
	<a href="<?PHP echo base_url();?>hasil">Hasil PEMIRA</a> >
</div>
            
<div id="content">
    <br />
    <br />
    <br />
    <div class="col col_bgcolor" style="padding-left:72px">
        <font color="#FFFFFF" size="+2"><font face="Georgia, Times New Roman, Times, serif">Grafik Perhitungan Suara</font></font>
    </div>
    <div class="clear"></div>
    <br />
    <br />
    <div class="container">
        <div id="chartContainer">
        </div>
    </div>
    <br />
    <br />
    <br />
    <br />
    <div class="col col_bgcolor" style="padding-left:72px">
        <font color="#FFFFFF" size="+2"><font face="Georgia, Times New Roman, Times, serif">Download sebagai PDF</font></font>
    </div>
    <div class="clear"></div>
    <br />
    <div class="col" style="padding-left:150px;border-radius:0;background-color:none;">
        <form action="<?PHP echo base_url();?>hasil/pdf">
            <button class="button-primary">
                <img src="<?PHP echo base_url()?>assets/img/pdf.jpg">
            </button><br/>
            <div class="col" style="width:60px; text-align:center; padding-left:20px;">
            <caption>Akumulasi Perhitungan Suara</caption>
            </div>
            <div class="clear"></div>
        </form> <br/>
        <form action="<?PHP echo base_url();?>hasil/pdf_tek">
            <button class="button-primary">
                <img src="<?PHP echo base_url()?>assets/img/pdf.jpg">
            </button><br/>
            <div class="col" style="width:60px; text-align:center; padding-left:40px;">
            <caption>TEK</caption>
            </div>
            <div class="clear"></div>
        </form> <br/><br/><br/>
        <form action="<?PHP echo base_url();?>hasil/pdf_ikn">
            <button class="button-primary">
                <img src="<?PHP echo base_url()?>assets/img/pdf.jpg">
            </button><br/>
            <div class="col" style="width:60px; text-align:center; padding-left:40px;">
            <caption>IKN</caption>
            </div>
            <div class="clear"></div>
        </form> <br/><br/><br/>
        <form action="<?PHP echo base_url();?>hasil/pdf_kim">
            <button class="button-primary">
                <img src="<?PHP echo base_url()?>assets/img/pdf.jpg">
            </button><br/>
            <div class="col" style="width:60px; text-align:center; padding-left:40px;">
            <caption>KIM</caption>
            </div>
            <div class="clear"></div>
        </form> <br/><br/><br/>
        <form action="<?PHP echo base_url();?>hasil/pdf_ppp">
            <button class="button-primary">
                <img src="<?PHP echo base_url()?>assets/img/pdf.jpg">
            </button><br/>
            <div class="col" style="width:60px; text-align:center; padding-left:40px;">
            <caption>PPP</caption>
            </div>
            <div class="clear"></div>
        </form> <br/>
    </div>

    <div class="col" style="padding-left:100px;border-radius:0;background-color:none;">
        <form action="<?PHP echo base_url();?>hasil/pdf_kmn">
            <button class="button-primary">
                <img src="<?PHP echo base_url()?>assets/img/pdf.jpg">
            </button><br/>
            <div class="col" style="width:60px; text-align:center; padding-left:40px;">
            <caption>KMN</caption>
            </div>
            <div class="clear"></div>
        </form> <br/><br/><br/>
        <form action="<?PHP echo base_url();?>hasil/pdf_jmp">
            <button class="button-primary">
                <img src="<?PHP echo base_url()?>assets/img/pdf.jpg">
            </button><br/>
            <div class="col" style="width:60px; text-align:center; padding-left:40px;">
            <caption>JMP</caption>
            </div>
            <div class="clear"></div>
        </form> <br/><br/><br/>
        <form action="<?PHP echo base_url();?>hasil/pdf_tnk">
            <button class="button-primary">
                <img src="<?PHP echo base_url()?>assets/img/pdf.jpg">
            </button><br/>
            <div class="col" style="width:60px; text-align:center; padding-left:40px;">
            <caption>TNK</caption>
            </div>
            <div class="clear"></div>
        </form> <br/><br/><br/>
        <form action="<?PHP echo base_url();?>hasil/pdf_lnk">
            <button class="button-primary">
                <img src="<?PHP echo base_url()?>assets/img/pdf.jpg">
            </button><br/>
            <div class="col" style="width:60px; text-align:center; padding-left:40px;">
            <caption>LNK</caption>
            </div>
            <div class="clear"></div>
        </form> <br/><br/><br/>
        <form action="<?PHP echo base_url();?>hasil/pdf_pks">
            <button class="button-primary">
                <img src="<?PHP echo base_url()?>assets/img/pdf.jpg">
            </button><br/>
            <div class="col" style="width:60px; text-align:center; padding-left:40px;">
            <caption>PKS</caption>
            </div>
            <div class="clear"></div>
        </form> <br/>
    </div>

    <div class="col" style="padding-left:100px;border-radius:0;background-color:none;">
        <form action="<?PHP echo base_url();?>hasil/pdf_ekw">
            <button class="button-primary">
                <img src="<?PHP echo base_url()?>assets/img/pdf.jpg">
            </button><br/>
            <div class="col" style="width:60px; text-align:center; padding-left:40px;">
            <caption>EKW</caption>
            </div>
            <div class="clear"></div>
        </form> <br/><br/><br/>
        <form action="<?PHP echo base_url();?>hasil/pdf_gzi">
            <button class="button-primary">
                <img src="<?PHP echo base_url()?>assets/img/pdf.jpg">
            </button><br/>
            <div class="col" style="width:60px; text-align:center; padding-left:40px;">
            <caption>GZI</caption>
            </div>
            <div class="clear"></div>
        </form> <br/><br/><br/>
        <form action="<?PHP echo base_url();?>hasil/pdf_mab">
            <button class="button-primary">
                <img src="<?PHP echo base_url()?>assets/img/pdf.jpg">
            </button><br/>
            <div class="col" style="width:60px; text-align:center; padding-left:40px;">
            <caption>MAB</caption>
            </div>
            <div class="clear"></div>
        </form> <br/><br/><br/>
        <form action="<?PHP echo base_url();?>hasil/pdf_akn">
            <button class="button-primary">
                <img src="<?PHP echo base_url()?>assets/img/pdf.jpg">
            </button><br/>
            <div class="col" style="width:60px; text-align:center; padding-left:40px;">
            <caption>AKN</caption>
            </div>
            <div class="clear"></div>
        </form> <br/><br/><br/>
        <form action="<?PHP echo base_url();?>hasil/pdf_tmp">
            <button class="button-primary">
                <img src="<?PHP echo base_url()?>assets/img/pdf.jpg">
            </button><br/>
            <div class="col" style="width:60px; text-align:center; padding-left:40px;">
            <caption>TMP</caption>
            </div>
            <div class="clear"></div>
        </form> <br/>
    </div>

    <div class="col" style="padding-left:100px;border-radius:0;background-color:none;">
        <form action="<?PHP echo base_url();?>hasil/pdf_inf">
            <button class="button-primary">
                <img src="<?PHP echo base_url()?>assets/img/pdf.jpg">
            </button><br/>
            <div class="col" style="width:60px; text-align:center; padding-left:40px;">
            <caption>INF</caption>
            </div>
            <div class="clear"></div>
        </form> <br/><br/><br/>
        <form action="<?PHP echo base_url();?>hasil/pdf_tib">
            <button class="button-primary">
                <img src="<?PHP echo base_url()?>assets/img/pdf.jpg">
            </button><br/>
            <div class="col" style="width:60px; text-align:center; padding-left:40px;">
            <caption>TIB</caption>
            </div>
            <div class="clear"></div>
        </form> <br/><br/><br/>
        <form action="<?PHP echo base_url();?>hasil/pdf_mni">
            <button class="button-primary">
                <img src="<?PHP echo base_url()?>assets/img/pdf.jpg">
            </button><br/>
            <div class="col" style="width:60px; text-align:center; padding-left:40px;">
            <caption>MNI</caption>
            </div>
            <div class="clear"></div>
        </form> <br/><br/><br/>
        <form action="<?PHP echo base_url();?>hasil/pdf_pvt">
            <button class="button-primary">
                <img src="<?PHP echo base_url()?>assets/img/pdf.jpg">
            </button><br/>
            <div class="col" style="width:60px; text-align:center; padding-left:40px;">
            <caption>PVT</caption>
            </div>
            <div class="clear"></div>
        </form> <br/>
    </div>
    <div class="clear"></div>
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

<script src="<?php echo base_url(); ?>assets/js/fusionchart/fusioncharts.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/fusionchart/themes/fusioncharts.theme.zune.js" type="text/javascript"></script>

<script type="text/javascript">
    FusionCharts.ready(function(){
        var chart = new FusionCharts({
            type: 'column3d',
            //type: 'column2d,column3d,bar2d,bar3d,pie2d,pie3d,doughnut2d,doughnut3d,line,area2d';
            renderAt: 'chartContainer',
            width: '800',
            height: '500',
            dataFormat: 'json',
            dataSource: {
                'chart':{
                    'caption':'Perhitungan Suara Sementara',
                    //'subCaption': 'Calon Ketua BEM',
                    'xAxisName': 'CABEM dan CAWABEM',
                    'yAxisName': 'Jumlah Suara',
                    'theme': 'zune'
                },
                'data':
                    [
                        <?PHP
                            $query = $this->vote_m->lihat_vote();

                            $i=0;
                            foreach ($query->result() as $row) :
                                if($i++)
                                    echo ",";
                            ?>
                        {'label': '<?PHP echo $row->nama_cabem ?> & <?PHP echo $row->nama_cawabem ?>','value': '<?PHP echo $row->jumlah;?>'},
                        <?PHP endforeach; ?>
                        //{'label': 'TEK','value': '200'}
                    ]
            }
        });
        chart.render('chartContainer');
    });
</script>