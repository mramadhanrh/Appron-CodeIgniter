<?php error_reporting(0) ?>
<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Appron | Berbagi Tutorial Memasak</title>
  <link href="<?php echo base_url()?>/media/css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/media/css/style.css">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/media/css/font.css">
  <script type="text/javascript"  src="<?php echo base_url()?>/media/js/jquery.min.js"></script>
  <script type="text/javascript"  src="<?php echo base_url()?>/media/js/bootstrap.min.js"></script>

</head>

<body>
  <?php if($this->session->userdata('isLogin') == true) { ?>
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
          <li class="active"><a href="#"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a></li>
          <li><a href="<?php echo site_url("resep/tambah")?>?username=<?php echo $_SESSION['username']; ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Share New Recipe</a></li>
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
              <li><a href="<?php echo site_url("login/logout")  ?>"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <?php } ?>
  <?php if($this->session->userdata('isLogin') == false) { ?>
  <nav class="navbar-default full-height navbar-fixed-top">
  <div class="container">
    <div class="row">
      <div class="col-lg-14 navbar">
        <div class="col-lg-1">
          <div class="title">
            <h2><img src="<?php echo base_url()?>/media/img/logotext.png" class="logotext"/></h2>
          </div>
        </div>


        <div class="col-lg-8">
        </div>
        <div class="col-lg-3">
          <div class="link col-lg-6">
            <a href="<?php echo base_url('index.php/Login')?>"><div class="boxes">
              <h3>LOGIN</h3>
            </div></a>
          </div>
          <div class="col-lg-6 link">
            <a href="<?php echo base_url('index.php/Signup')?>"><div class="boxes2">
              <h3>SIGN UP</h3>
            </div></a>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
  </nav>
  <?php
    #echo "Username : ".$this->session->userdata('username');
  ?>
