<div class="container-fluid slide-show-setting">
  <div class="row">
    <div class="container slide-show">
      <div class="carousel">
        <?php
          foreach((array) $data['content'] as $key=>$value){
              View::partial('slide', $value);
          }
        ?>
      </div>
    </div>
  </div>
</div>