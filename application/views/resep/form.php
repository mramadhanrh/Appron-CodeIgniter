<?php
	if (@$form_edit) {
		$title = "Edit Resep";

		// URL JIKA EDIT DATA
		$url = "resep/do_edit/" . @$result->nis;
	} else{
		$title = "Tambah Resep";

		//URL JIKA TAMBAH DATA
		$url = "resep/do_tambah/";
	}
?>

<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="col-lg-8">
					<div class="title">
						<h1><?php echo $title?></h1>
					</div>

						<?php if (!empty($success)){ ?>
						<div class="col-lg-12">
						<div class="alert alert-success"><?php echo $success; ?></div>
						</div>
						<?php } ?>

						<?php if (!empty($error)){ ?>
						<div class="col-lg-12">
						<div class="alert alert-danger"><?php echo $error; ?></div>
						</div>
						<?php } ?>

				<form action="<?php echo $url ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
				<div class="form-group">
					<div class="col-sm-8">
								<input type="hidden" name="username" class="form-control" value="<?php echo $_SESSION['username'] ?>" readonly/>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-4 control-label">JUDUL</label>
					<div class="col-sm-8">
						<input type="text" name="judul" class="form-control" />
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-4 control-label">DESKRIPSI</label>
					<div class="col-sm-8">
						<textarea name="deskripsi" class="form-control" required></textarea>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-4 control-label">ALAT & BAHAN</label>
					<div class="col-sm-8">
						<textarea name="resep" class="form-control" required></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-4 control-label">CARA MEMASAK</label>
					<div class="col-sm-8">
						<textarea name="cara_memasak" class="form-control" required></textarea>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-4 control-label">FOTO</label>
					<div class="col-sm-8">
							<input type="hidden" name="foto" />
						<input type="file" name="foto"/>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-4 control-label">VIDEO</label>
					<div class="col-sm-8">
							<input type="hidden" name="foto" />
						<input type="file" name="video"/>
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-12">
						<label class="col-sm-7 control-label">
						<button type="submit" class="btn-submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-saved"></i> Submit</button>
						</label>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
</div>
