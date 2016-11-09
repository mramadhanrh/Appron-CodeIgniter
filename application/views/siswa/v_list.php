<div class="content-wrapper">
	<section class="content-header">
		<h1>Data Siswa<small>SMK Negeri 4 Bandung</small></h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i>None</a></li>
			<li class="active">Data Siswa</li>
		</ol>
	</section>

	<section class="content">
		<div class="row">
			<div class="col-lg-12">
				<div class="box box-primary">
					<div class="box box-header">
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
							<a href="<?php echo site_url("siswa/tambah")?>" class="btn btn-primary">
								<i class="fa fa-plus"></i> Tambah
							</a>
							<?php } ?>
						</h3>
					</div>
					<div class="box-header">
						<table class="table table-bordered table-striped table-hover">
							<thead>
								<tr>
									<th>No</th>
									<th>Nis</th>
									<th>Nama</th>
									<th>Jenis Kelamin</th>
									<th>Alamat</th>
									<th>No Telp</th>
									<th>Agama</th>
									<th>Nama Kelas</th>
									<?php if(@$level == 1) { ?>
									<th>Action</th>
									<?php } ?>
								</tr>
							</thead>

							<tbody>
								<?php
									$i = 1;
									
									foreach ($result as $row) { ?>
								<tr>
									<td><?php echo $i++ ?></td>
									<td><?php echo $row->nis ?></td>
									<td><?php echo $row->nama ?></td>
									<td><?php echo $row->jk ?></td>
									<td><?php echo $row->alamat ?></td>
									<td><?php echo $row->notelp ?></td>
									<td><?php echo $row->agama ?></td>
									<td><?php echo $row->nama_kelas ?></td>
									<td>
										<?php if(@$level == 1) { ?>
										<a class="btn btn-primary" href="<?= site_url("siswa/edit/" . $row->nis)?>">
											<i class="fa fa-pencil"></i> Edit
										</a>
										<a class="btn btn-danger" href="<?= site_url("siswa/delete/" . $row->nis)?>">
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
			</div>
		</div>
		
	</section>
</div>