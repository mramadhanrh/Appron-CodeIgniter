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

	
	<div class="footers">
	<a href="#" class="az">About</a>
	<a href="#" class="az">Blog</a>
	<a href="#" class="az">Support</a>
	<a href="#" class="az">Contact</a>
	<a href="https://twitter.com/twitter" class="twitter-follow-button ,az" data-show-count="false">Follow @twitter</a>
	<script>!function(d,s,id){
		var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
		if(!d.getElementById(id)){js=d.createElement(s);
		js.id=id;js.src=p+'://platform.twitter.com/widgets.js';
		fjs.parentNode.insertBefore(js,fjs);}}
		(document, 'script', 'twitter-wjs');
	</script>
	</div>
	
</body>
</html>