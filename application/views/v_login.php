<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Appron | Login</title>
	<link href="<?php echo base_url()?>/media/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url()?>/media/css/style.css" rel="stylesheet">
	<script type="text/javascript"  src="<?php echo base_url()?>/media/js/jquery.min.js"></script>
	<script type="text/javascript"  src="<?php echo base_url()?>/media/js/bootstrap.min.js"></script>

	<!--Toastr Plugins-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/media/plugins/toastr/toastr.min.css"/>
	<script type="text/javascript" src="<?php echo base_url()?>/media/plugins/toastr/toastr.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<br>
			<br>
			<br>
			<br>
			<div class="col-lg-9">
				<div class="col-lg-6 col-lg-offset-5 well">
					<h1 class="text-center">LOGIN</h1>
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
					<br>					
					<form action="<?php echo site_url("login/do_login") ?>" method="post" class="form-horizontal">
						<div class="form-group">
							<div class="col-sm-12">
								<input type="text" name="username" class="form-control" placeholder="Username..."/>
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-sm-12">
								<input type="password" name="password" class="form-control" placeholder="Password"/>
							</div>
						</div>
				
						<div class="form-group">
							<div class="col-sm-12">
								<button type="submit" class="btn-login">LOGIN</button>
							</div>
							<div class="col-sm-3 pull-right">
								<a href="<?php echo base_url('index.php/Signup')?>" class="signup-label">
								<i class="glyphicon glyphicon-user"></i> SIGN UP</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>