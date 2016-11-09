<?php
	if (@$form_edit) {
		$title = "Edit Data Siswa";

		// URL JIKA EDIT DATA
		$url = "siswa/do_edit/" . @$result->nis;
	} else{
		$title = "Tambah Data Siswa";

		//URL JIKA TAMBAH DATA
		$url = "siswa/do_tambah/";
	}
?>
<div class="content-wrapper">
	<section class="content-header">
		<h1><?php echo $title?><small>SMK Negeri 4 Bandung</small></h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i>Data</a></li>
			<li class="active"><?php echo $title?></li>
		</ol>
	</section>

	<section class="content">
		<div class="row">
			<div class="box box-primary">
				<form action="<?php echo site_url($url)?>" method="POST">
					<div class="box-body">
						<div class="form-group">
							<label for="nis">NIS</label>
							<input type="text" name="nis" class="form-control" id="nis" placeholder="NIS"
							value="<?php echo @$result->nis?>">
						</div>
						<div class="form-group">
							<label for="nama">Nama Siswa</label>
							<input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Siswa"
							value="<?php echo @$result->nama?>">
						</div>
						<div class="form-group">
							<label for="jk">Jenis Kelamin</label>
							<label class="radio-inline">
	  							<input type="radio" name="jk" id="inlineRadio1" value="L" <?php echo @$result->jk == "L" ? 'checked' : ''?>>L
							</label>
							<label class="radio-inline">
	 							 <input type="radio" name="jk" id="inlineRadio2" value="P" <?php echo @$result->jk == "P" ? 'checked' : ''?>>P
							</label>
						</div>
						<div class="form-group">
							<label for="alamat">Alamat</label>
							<textarea class="form-control" rows="3" name="alamat" id="alamat" placeholder="Alamat" value=""><?php echo @$result->alamat ?></textarea>
						</div>
						<div class="form-group">
							<label for="no_telepon">No Telp</label>
							<input type="text" name="notelp" class="form-control" id="notelp" placeholder="No Telp"
							value="<?php echo @$result->notelp?>">
						</div>
						<div class="form-group">
							<label for="agama">Agama</label>
							<?php
								$agama = array(
										"Islam" => "Islam",
										"Kristen" => "Kristen",
										"Hindu" => "Hindu",
										"Budha" => "Budha",
										"Konghucu" => "Konghucu"
									);
								echo form_dropdown("agama", $agama, @$result->agama, 'class = "form-control" id = "agama"');
							?>
						</div>
						<div class="form-group">
							<label for="kelas">Kelas</label>
							<?php
								$data_kelas = array();
								foreach ($kelas as $key => $value) {
									$data_kelas[$value->id_kelas] = $value->nama_kelas;
								}
								echo form_dropdown("id_kelas", $data_kelas, @$result->id_kelas, 'class = "form-control" id = "id_kelas"');

							?>
						</div>
						<div>
							
						</div>

					</div>
					<div class="box-footer">
						<button type="submit" class="btn btn-primary">SIMPAN</button>
					</div>
				</form>
			</div>
		</div>
	</section>
</div>