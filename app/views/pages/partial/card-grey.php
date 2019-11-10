<div class="card-grey frame-orange">
    <div class="card-header">
        <h3><?php echo $data['text'][0]; ?></h3>
    </div>
    <div class="card-image" style="background-image:url(<?php echo $data['image']; ?>);">
        
    </div>
    <div>
        <?php
            if(isset($data['text'][1])){
                echo "<p>";
                    echo $data['text'][1];
                echo "</p>";
            }
        ?>
        <button class="btn btn-md btn btn-dark float-right" id="view-more">view more</button>
    </div>
</div>