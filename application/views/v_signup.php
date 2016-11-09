<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign Up | Appron</title>
	<link href="<?php echo base_url()?>/media/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url()?>/media/css/style.css" rel="stylesheet">
	<link href="<?php echo base_url()?>/media/css/font.css" rel="stylesheet">
	<script type="text/javascript"  src="<?php echo base_url()?>/media/js/jquery.min.js"></script>
	<script type="text/javascript"  src="<?php echo base_url()?>/media/js/bootstrap.min.js"></script>

	<!--Toastr Plugins-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/media/plugins/toastr/toastr.min.css"/>
	<script type="text/javascript" src="<?php echo base_url()?>/media/plugins/toastr/toastr.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<br><br>
			<div class="col-lg-9">
				<div class="col-lg-6 col-lg-offset-5 well">
					<h1 class="text-center bebasneu">Sign Up</h1>
					<?php if (!empty($duplicate)){ ?>
				<div class="col-lg-12">
					<div class="alert alert-danger"><?php echo $duplicate; ?></div>
				</div>
			<?php } ?>				
					<br>					
					<form action="<?php echo $url ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
						<input type="hidden" name="level" value="2"/>
						<div class="form-group">
							<div class="col-sm-12">
								<input type="text" name="fullname" class="form-control" placeholder="Full Name..." required/>
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-12">
								<input type="number" name="age" class="form-control" placeholder="Age..." required/>
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-12">
								<input type="date" name="birth_date" class="form-control" placeholder="Birth Date..." required/>
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-12">
								<input type="text" name="address" class="form-control" placeholder="Address..." required/>
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-12">
								<input type="text" name="username" class="form-control" placeholder="Username..." required/>
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-sm-12">
								<input type="password" name="password" class="form-control" placeholder="Password..." required/>
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-12">
								<input type="email" name="email" class="form-control" placeholder="E-Mail..." required/>
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-12">
								<textarea type="richtext" name="bio" class="form-control" placeholder="Bio..." required></textarea>
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-sm-12">
								<input type="file" name="foto"/>
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-12">
								<label class="label">Profile Picture</label>
								<button type="submit" class="btn-login">SIGN UP</button>
							</div>
							<div class="col-sm-3 pull-right">
								<a href="login.php" class="signup-label">
								<i class="glyphicon glyphicon-user"></i> LOGIN</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>