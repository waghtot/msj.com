<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
    <div class="card-header">
        <h3 class="white">&nbsp;<?php echo $data[1][0]; ?></h3>
    </div>

    <?php
        $newData = new stdClass();
        $newData->content = $data[0];
        ?>
    <a href="#carouselbackground">
    <div class="card-image" style="background-image:url(<?php echo $data[0][0]; ?>);" onClick="showImages(<?= htmlspecialchars(json_encode($newData), ENT_QUOTES, 'UTF-8') ?>)">
        </div>
    </a> 
    <div>
        <?php
            if(isset($data[1][1])){
                echo "<p class=\"white\">";
                echo $data[1][1];
                echo "</p>";
            }
            ?>
    </div>
</div>

<script src="app/views/js/carousel.js?v=<?= time();?>">
</script>