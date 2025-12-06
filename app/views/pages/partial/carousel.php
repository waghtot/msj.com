<?php

$data = json_decode(file_get_contents('php://input'), true);


?>

<div id="carouselExample" class="carousel slide carousel-fade">
  <div class="carousel-inner" >

    <?php
      $counter = 0;
      foreach($data['content'] as $value){
        if($counter == 0 ){
          echo "<div class=\"carousel-item active\"><img src=\"".$value."\"  alt=\"...\" class=\"cimg\"></div>";
        }else{
          echo "<div class=\"carousel-item\"><img src=\"".$value."\" alt=\"...\" class=\"cimg\"></div>";
        }
        $counter++;
        
      }
      ?>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <!-- <span class="visually-hidden">Previous</span> -->
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <!-- <span class="visually-hidden">Next</span> -->
  </button>
  <button class="close-gallery" onClick="closeGallery()">X</button>
</div>