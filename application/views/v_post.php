<?php //ceklogin(); ?>
<?php foreach ($result as $result) { ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Appron Recipe | <?php echo @$result->judul ?></title>
	<link href="<?php echo base_url()?>/media/css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/media/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/media/css/font.css">
	<script type="text/javascript"  src="<?php echo base_url()?>/media/js/jquery.min.js"></script>
	<script type="text/javascript"  src="<?php echo base_url()?>/media/js/bootstrap.min.js"></script>

</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top visibility">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php"><span><img src="<?php echo base_url() ?>/media/img/logo.png?>" class="foto-profile"/></span> APPRON</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a></li>	
					<li><a href="inputresep.php?id_user=<?php echo $_SESSION['id_user']; ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Share New Recipe</a></li>					
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#/available#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span><img src="<?php echo base_url() ?>/media/img/<?php echo $_SESSION['foto']?>" class="foto-profile"/></span>&nbsp;<?php echo $_SESSION['username'] ?> <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="profile.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Profile</a></li>
							<li><a href="myvideo.php"><span class="glyphicon glyphicon-play" aria-hidden="true"></span> My Videos</a></li>
							<?php if($_SESSION['level'] == 1) { ?>
							<li><a href="admin.php"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Admin Panel</a></li>
							<?php } ?>
							<li><a href="logout.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="jumbotron">
		<div class="container">
        <div class="row">
        	<br>
        	<div class="col-md-2"></div>
            <div class="col-md-8 video-player">
                <video width="100%" controls>
                	<source src="<?php echo base_url() ?>/media/vid/<?php echo @$result->video ?>" type="video/mp4">
                	Your browser does not support the video tag.
                </video>
                <a href="<?php echo base_url() ?>/report/cetak.php?id_resep=<?php echo $id_resep ?>" class="btn-download pull-right" ><i class="glyphicon glyphicon-circle-arrow-down"></i></a>
            	<h4><?php echo @$result->judul ?>
            	<!-- <label class="pull-right clicked-red">&nbsp;<?php echo @$result->tidak_suka ?></label>
            	<i class="glyphicon glyphicon-thumbs-down pull-right clicked-red"></i>
            	<label class="pull-right clicked-green">&nbsp;<?php echo @$result->suka ?><label>&nbsp;&nbsp;</label></label>
            	<i class="glyphicon glyphicon-thumbs-up pull-right clicked-green"></i><label class="pull-right">&nbsp;&nbsp;</label>       
            	<button class="btn-download pull-right"><i class="glyphicon glyphicon-arrow-down "></i></button>
            	 --></h4>
            </div>
            <div class="container">
            	<div class="col-md-2"></div>
        	    <div class="col-md-8">  
        	    	<a href="other-profile.php?id_user=<?php echo @$result->id_user ?>"><img src="<?php echo base_url() ?>/media/img/<?php echo @$result->foto_profile ?>" class="thread-starter"/></a> 
            		<textarea class="thread-bio" style="overflow:hidden" readonly><?php echo @$result->bio ?><?php echo "\n";?>- <?php echo @$result->fullname ?></textarea>
            		
            	</div>
            </div>
        </div>
    </div>
	</div>
		<h1 class="text-center head-text">Maybe You Like ?</h1>
	<div class="bg-post">	
	<?php $i=0 ?>
	<?php while ($row = mysqli_fetch_object($data)) {?>
	<div class="col-lg-2">
		<div class="caption">
			<h3><?php echo $row->judul?></h3>
			<div class="thumb-small">
				<a href="post.php?id_resep=<?php echo $row->id_resep ?>">
	 			<span class="play">&#9658;</span>
	 			<div class="overlay"></div>
				</a>
				<img src="<?php echo base_url() ?>/media/img/<?php echo $row->foto ?>">
			</div>			
		</div>
	</div>
	<?php $i++ ?>
	<?php 
	if($i >= 6){
		break;
	}
	?>
	<?php }?>
	<script>
	function textAreaAdjust(o) {
	    o.style.height = "1px";
	    o.style.height = (o.scrollHeight)+"px";
	}
	</script>
	<div class="col-lg-12 margined">
		<h3>Deskripsi</h3>
	</div>
	<div class="col-lg-12">
		<textarea class="content" style="overflow:hidden" id="deskripsi" readonly><?php echo @$result->deskripsi ?></textarea>
		<button class="btn-read-more" onclick="textAreaAdjust(deskripsi)">Lihat Selengkapnya</button>
	</div>
	<div class="col-lg-12 margined">
		<h3>Resep</h3>
	</div>
	<div class="col-lg-12">
		<textarea class="content" style="overflow:hidden" id="resep" readonly><?php echo @$result->resep ?></textarea>
		<button class="btn-read-more" onclick="textAreaAdjust(resep)">Lihat Selengkapnya</button>
	</div>
	<div class="col-lg-12 margined">
		<h3>Cara Memasak</h3>
	</div>
	<div class="col-lg-12">
		<textarea class="content" style="overflow:hidden" id="caramemasak"><?php echo @$result->cara_memasak ?></textarea>
		<button class="btn-read-more" onclick="textAreaAdjust(caramemasak)">Lihat Selengkapnya</button>
	</div>
	<div class="col-lg-12 komentar">
		<h3 class="koment">Komentar</h3>
		<form action="komentar.php?id_resep=<?php echo $id_resep ?>" method="POST">
			<textarea placeholder="Masukan Komentar Anda..." class="content" name="komentar"></textarea>
			<input type="submit" value="Submit" class="btn-komentar"/>
		</form>
		<?php while ($row = mysqli_fetch_object($query3)) {?>
		<table class="content">
			<tr>
				<th rowspan="2"><img class="foto-komentar" src="<?php echo base_url() ?>/media/img/<?php echo $row->foto_profile ?>"></th>
				<td class="kmn-user"><?php echo $row->username ?></td>
			</tr>
			<tr>
				<td><?php echo $row->komentar ?></td>
			</tr>
		</table>
		<?php }?>
		
	</div>
	<div class="margined">&nbsp;</div>

	</div>
</body>
</html>

<?php } ?>