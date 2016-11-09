<div class="content-wrapper">
	<section class="content-header">
		<h1>Data Kelas<small>SMK Negeri 4 Bandung</small></h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Data Kelas</li>
		</ol>
	</section>

	<section class="content">
		<div class="row">
			<div class="col-lg-12">
				<div class="box box-promary">
					<div class="box-header">
						<?php if(!empty($success)) { ?>
						<div class="alert alert-success">
							<?php echo $success ?>
						</div>	
						<?php } ?>
							
						<?php if(!empty($error)) { ?>
							<div class="alert alert-danger">
							<?php echo $error ?>
							</div>	
						<?php } ?>
						<h3 class="box-title">
							<?php if(@$level == 1) { ?>
							<a href="<?php echo site_url("kelas/tambah")?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah
							</a>
							<?php } ?>
						</h3>
					</div>
				</div>
			</div>
			<div class="box-body">
				<table class="table table-bordered table-striped table-hover">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Kelas</th>
							<th>Jurusan</th>
							<?php if(@$level == 1) { ?>
							<th>Action</th>
							<?php } ?>
						</tr>
					</thead>

					<tbody>
						<?php
							$i = 0;
							foreach ($result as $row) { 
							$i++?>
						<tr>
							<td><?php echo $i ?></td>
							<td><?php echo $row->nama_kelas?></td>
							<td><?php echo $row->jurusan?></td>
							<td>
								<?php if(@$level == 1) { ?>
								<a class="btn btn-primary" href="<?= site_url("kelas/edit/".$row->id_kelas)?>">
									<i class="fa fa-pencil"></i> Edit
								</a>
								<a class="btn btn-danger" href="<?= site_url("kelas/delete/".$row->id_kelas)?>">
									<i class="fa fa-trash-o"></i> Delete
								</a>
								<?php } ?>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</section>
</div>