<?php
    if(isset($data) && !empty($data)){
        foreach($data as $value){
            if(pathinfo($value, PATHINFO_EXTENSION) == 'txt' || pathinfo($value, PATHINFO_EXTENSION) == 'csv'){
                $text = ContentType::getTextFormated($value);
            }else{
                $thatimage = $value;
            }
        }
    }
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 slide_01" style="background-image:url(<?php echo $thatimage; ?>);">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <h1 class="white">
                <?php
                    if(isset($text[0])){
                        echo $text[0];
                    }
                ?>
            </h1>
            <p class="white lead">
                <?php
                    if(isset($text[1])){
                        echo $text[1];
                    }
                ?>
            </p>
            <p class="white">
                <?php
                    if(isset($text[2])){
                        echo $text[2];
                    }
                ?>
             </p>
        </div>
    </div>
</div>