<?php
	if (@$form_edit) {
		$title = "Edit Data Kelas";

		$url = 	"kelas/do_edit/".@$result->id_kelas;
	}else{
		$title = "Tambah Data Kelas";

		$url = "kelas/do_tambah/";
	}
?>
<div class="content-wrapper">
	<section class="content-header">
		<h1><?php echo $title ?></h1>
	</section>

	<section class="content">
		<div class="row">
			<div class="box box-primary">
				<form action="<?php echo site_url($url); ?>" method="post">
					<div class="box-boxy">
						<div class="form-group">
							<label>Nama Kelas</label>
							<input type="text" name="nama_kelas" class="form-control" id="nama_kelas" placeholder="Nama Kelas" value="<?php echo @$result->nama_kelas ?>" />
						</div>

						<div class="form-group">
							<label for="jurusan">Jurusan</label>
							<select name="jurusan" class="form-control" id="jurusan">
								<option value="Audio Video">Audio Video</option>
								<option value="Teknik Instalasai Tenaga Listrik">Teknik Instalasai Tenaga Listrik</option>
								<option value="Teknik Otomasi Industri">Teknik Otomasi Industri</option>
								<option value="Teknik Komuputer Jaringan">Teknik Komuputer Jaringan</option>
								<option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
								<option value="Multimedia">Multimedia</option>
							</select>
						</div>
					</div>

					<div class="box-footer">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</form>				
			</div>
		</div>
	</section>
</div>