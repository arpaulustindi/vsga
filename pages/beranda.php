<!doctype html>
<html lang="en">
  <head>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  </style>
  </head>
  
  <body>

  <div id="front" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#front" data-slide-to="0" class="active"></li>
    <li data-target="#front" data-slide-to="1"></li>
    <li data-target="#front" data-slide-to="2"></li>
    <li data-target="#front" data-slide-to="3"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/imgdts1.jpg" alt="images 1" width="1100" height="300">
    </div>

    <div class="carousel-item">
      <img src="images/imgdts2.jpg" alt="images 2" width="1100" height="300">
    </div>
    
    <div class="carousel-item">
      <img src="images/imgdts3.jpg" alt="images 3" width="1100" height="300">
    </div>
    
    <div class="carousel-item">
      <img src="images/imgdts4.jpg" alt="images 4" width="1100" height="300">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#front" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#front" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
  </body>
</html>
