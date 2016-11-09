<div class="col-lg-12">
  <form action="search.php?search=<?php echo $search ?>">
      <div class="field" id="searchform">
        <input type="text" name="search" id="searchterm" class="radius1" placeholder="Search more delicious recipe..." />
        <button type="submit" id="search" class="radius2"><i class="glyphicon glyphicon-search">&nbsp;</i></button>
      </div>
  </form>
  </div>

  <script src="<?php echo base_url()?>/media/js/jquery.js"></script>
  <div class=" col-lg-13 slider">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
         <div class="item active">
          <img src="<?php echo base_url()?>media/img/1.jpg" width="100%" height="345">
         </div>

         <div class="item">
          <img src="<?php echo base_url()?>media/img/2.jpg" width="100%" height="345">
         </div>
    
         <div class="item">
          <img src="<?php echo base_url()?>media/img/3.jpg" width="100%" height="345">
         </div>

        <div class="item">
          <img src="<?php echo base_url()?>media/img/4.jpg" width="100%" height="345">
        </div>
      </div>
    </div>
  </div>
  <br>
  <center>
  <div class="col-md-12">
  <?php $i=0 ?>
  <?php foreach ($result as $row) { ?>
  <div class="col-lg-3">
    <div class="caption">
      <h3><?php echo $row->judul?></h3>
      <div class="thumb">
        <a href="post?id_resep=<?php echo $row->id_resep ?>">
        <span class="play">&#9658;</span>
        <div class="overlay"></div>
        </a>
        <img src="<?php echo base_url() ?>/media/img/<?php echo $row->foto ?>">
      </div>      
    </div>
  </div>
  <?php $i++ ?>
  <?php 
  if($i >= 20){
    break;
  }
  ?>
  <?php }?>
  </div>
  </center>
  