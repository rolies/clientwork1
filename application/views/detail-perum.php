	

<div class="container">
	<div class="row">
		<div class="col-md-12" style="height: auto;">
          <ul class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>">Home</a></li>
            <li><a href="<?php echo base_url() ?>perumnas">Daftar Perumnas</a></li>
            <li class="active">Tipe 38</li>
          </ul>
        </div>
        <div class="col-md-7">
        	<h1><?php echo "$all_perum->name" ?></h1>
        	<img src="<?php echo base_url(); ?>template/img/<?php echo "$all_perum->image" ?>" class="img-repsonsive img-thumbnail">
        </div>
        <div class="col-md-5 deskrip">
        	
        	<p class="alamat"><span class="glyphicon glyphicon-map-marker"></span> <?php echo "$all_perum->alamat" ?></p>
        	<hr>
        	<h3>Illustrasi Cicilan kpr BTN</h3>
        	<div class="table-responsive">
	        	<table class="table table-bordered">
	        		<tr class="succ">
						<td>Harga Jual</td>
						<td>DP</td>
						<td>Discount DP</td>
						<td>Sisa DP</td>
						<td>Bank</td>
					</tr>
	                <?php echo $all_perum->cicilan ?>
	            </table>
	        </div>

	        <ins>Angsuran</ins>
	        <ul class="angsuran">
	          <?php echo $all_perum->angsuran ?>
	        </ul>
	        
        </div>

        <div class="col-md-10 syarat">
        	<h3 class="txt-enhance">Persyaratan KPR Bank</h3>
        	<ul><?php echo $stu_perum->syarat_kpr ?></ul>
        </div>

        <div class="col-md-8 syaratbtm">
        	<h3 class="txt-enhanced">Persyaratan Umum</h3>
 			<div class="table-responsive">
	            <table class="table table-bordered">
	                <tr class="succ" style="height: 45px">
	                  <td>NO</td>
	                  <td>Jenis Dokumen</td>
	                  <td>Karyawan/PNS</td>
	                  <td>Wiraswasta</td>
	                  <td>Proffesional</td>
	                </tr>
	                <?php echo $stu_perum->persyaratan ?>
	            </table>
          </div>            
        </div>

        
	</div>
</div>