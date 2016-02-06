<div class="container-fluid atas">
	<div class="row">
		<div class="col-md-12">
			<h2 class="text-center">Management Permatapekanbaru <small><code>1.0</code></small></h2>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-3 sidebar">
			<ul class="nav nav-pills nav-stacked">
			   <li class="active"><a href="#notif" data-toggle="pill">Notifikasi</a></li>
			  <li><a href="#siap" data-toggle="pill">Perumnas siap Huni</a></li>
			  <li><a href="#belumsiap" data-toggle="pill">Perumnas dalam Pengerjaan</a></li>
			  <li><a href="#tambah" data-toggle="pill">Tambahkan Perumnas</a></li>
			</ul>

			<div class="menu">
				<ul>
					<li><a href=""><span class="glyphicon glyphicon-pencil"></span> Edit Profil Perumnas</a></li>
					<li><a href=""><span class="glyphicon glyphicon-pencil"></span> Edit Contact</a></li>
					<li><a href=""><span class="glyphicon glyphicon-pencil"></span> Kenapa Memilih Kami</a></li>
				</ul>
			</div>
		</div>
		<div class="col-md-offset-1 col-md-8">
			<div class="tab-content">
				
				<div class="tab-pane active" id="notif">
					<div class="col-md-12">
						<h2 class="lengkapi">Lengkapi data berikut</h2>
					</div>
						<?php foreach ($perum_siap->result() as $row) { ?>

							<div class="col-md-4 notif">
								<strong class="judul"><?php echo $row->name ?></strong><br>
								<?php if ($row->alamat == ""): ?>
									<code>Alamat</code><br>
								<?php endif ?>
								<?php if ($row->unit == 0): ?>
									<code>Sisa unit</code><br>
								<?php endif ?>
								<?php if ($row->cicilan == ""): ?>
									<code>Cicilan</code><br>
								<?php endif ?>
								<?php if ($row->angsuran == ""): ?>
									<code>Angsuran</code><br>
								<?php endif ?>
							</div>
						<?php } ?>
				</div>

				<div class="tab-pane" id="siap">
					<?php foreach ($perum_siap->result() as $row) { ?>
					<div class="perum-area">
						<div class="col-md-4"><img src="<?php echo base_url() ?>template/img/<?php echo $row->image ?>" alt="<?php echo $row->name ?>" class="img-responsive img-thumbnail"></div>
						<div class="col-md-6">
							<p class="judul"><?php echo $row->name ?></p>
							<p class="almt"><span class="glyphicon glyphicon-map-marker"></span> <?php echo $row->alamat ?></p>
							<p>sisa unit: <?php echo $row->unit ?></p>
							<a href="" data-toggle="modal" data-target="#kprModal<?php echo $row->id ?>"><span class=" glyphicon glyphicon-hourglass"></span> Cicilan Kpr</a> | 
							<a href="" data-toggle="modal" data-target="#angsuran<?php echo $row->id ?>"><span class="glyphicon glyphicon-fire"></span> Angsuran</a>
						</div>
						<div class="col-md-2 pull-left">
							<a href="" class="btn btn-info btn-lg pull-right">edit</a>
							<a href="<?php echo base_url() ?>perumnas/tipe/<?php echo $row->id ?>" class="btn btn-link">Pertinjau</a>
						</div>
					</div>
					<?php	} ?>
				</div>
				<div class="tab-pane" id="belumsiap">
				<?php if ($perum_siap->num_rows() > 0): ?>
						<div class="alert alert-success" role="alert"><span class="glyphicon glyphicon-bullhorn"></span> <?php echo "Tidak ada perumnas dalam Pengerjaan" ?></div>
					<?php else: ?>
						<?php foreach ($perum_siap->result() as $row) { ?>
							

						<?php } ?>
				<?php endif ?>
				</div>
				<div class="tab-pane" id="tambah">
					<form action="" enctype="multipart/form-data" method="post" accept-charset="utf-8" class="form-horizontal">
						<div class="form-group">
							<label for="inputtipe" class="col-sm-2 control-label">Tipe</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="inputtipe" name="tipe">
							</div>
						</div>
						<div class="form-group">
							<label for="inputalamat" class="col-sm-2 control-label">Daerah</label>
							<div class="col-sm-10">
								<textarea class="form-control" id="inputalamat" name="alamat"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="inputkota" class="col-sm-2 control-label">Kota</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="inputkota" name="alamat">
							</div>
						</div>
						
						<div class="form-group">
							<label for="inputdes" class="col-sm-2 control-label">Deskripsi</label>
							<div class="col-sm-10">
								<textarea class="form-control" id="inputdes" name="deskripsi"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="inputgambar" class="col-sm-2 control-label">Gambar</label>
							<div class="col-sm-10">
							   	<input type="file" id="inputgambar" name="gambar-ticket">
							</div>
				  		</div>
					  	<hr>
					    <button class="btn btn-default btn-lg">Terbitkan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>