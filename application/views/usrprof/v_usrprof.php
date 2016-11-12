<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Appron | Profile</title>
	<link href="<?php echo base_url()?>/media/css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/media/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/media/css/font.css">
	<script type="text/javascript"  src="<?php echo base_url()?>/media/js/jquery.min.js"></script>
	<script type="text/javascript"  src="<?php echo base_url()?>/media/js/bootstrap.min.js"></script>

</head>

<body>
	<div class="profile">
		<div class="banner">
			<center>
				<div class="foto_profile">
					<?php
				        foreach ($result as $row) { ?>   
                        <tr>
                            <td><img src="<?php echo base_url() . $row->foto_profile?>" width="150" height="150" class="img-circle" alt="User Image"></td>
				    <?php } ?>
				</div>
				<h2><?php echo $_SESSION['username']?></h2>
				<h4><?php echo $_SESSION['fullname'] ?></h4>
				<blockquote><?php echo $_SESSION['bio'] ?></blockquote>
				<p><?php echo $_SESSION['address']?></p>
				<a class="btn btn-primary btn-sm" href="<?= site_url("usrprof/edit/") . $id_user?>">
                    <i class="fa fa-edit"></i> Edit
                </a>
			</center>
		</div>		
	</div>
	
</body>
</html>