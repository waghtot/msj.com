<?php

if(isset($data) && !empty($data)){
    $text = $data['text'];
    $thatimage = $data['image'];
}
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 slide_01" style="background-image:url(<?php echo $thatimage; ?>);">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <?php
                    if(isset($text[0])){
                        echo "<h1 class=\"white\">";
                        echo $text[0];
                        echo "</h1>";
                    }
                ?>

                <?php
                    if(isset($text[1])){
                        echo "<p class=\"white lead\">";
                        echo $text[1];
                        echo "</p>";
                    }
                ?>
                <?php
                    if(isset($text[2])){
                        echo "<p class=\"white\">";
                            echo $text[2];
                        echo "</p>";
                    }
                ?>

        </div>
    </div>
</div>