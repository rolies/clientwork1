<div class="container list-perumnas">
	<div class="row">
		<div>
			<div class="col-md-12">
				<ul class="breadcrumb">
					<li><a href="<?php echo base_url(); ?>">Home</a></li>
					<li class="active">Daftar Perumnas</li>
				</ul>
			</div>

			<div class="col-md-12">
				<h2>Datar Perumnas</h2>
			</div>
			<?php foreach ($all_perum->result() as $row) { ?>
				<div class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-body">
							<img src="<?php echo base_url(); ?>template/img/<?php echo "$row->image" ?>" alt="" class="img-responsive">
							<h4><?php echo $row->name ?></h4>
							<p class="unit">sisa unit: 20</p>
							<p class="alamat-list">
								<span class="glyphicon glyphicon-map-marker"></span> <?php echo $row->alamat ?>
							</p>
						</div>
						<div class="panel-footer">
							<a href="<?php echo base_url() ?>perumnas/tipe/<?php echo $row->id ?>" class="btn btn-success">Info Lengkap</a>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>