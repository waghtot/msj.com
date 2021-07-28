<?php
    if(isset($data['Style']['background']) && trim($data['Style']['background'] !='')){
        $addclass = "exterior-back";
        $style = "style=\"background:url(app/views/img/".$data['Style']['background']."); background-size: cover; background-position: bottom center;\""; 
    }else{
        $addclass = '';
        $style = '';
    }
?>


<div class="container-fluid <?php echo $addclass; ?> topic-<?php echo $data['Style']['topic']; ?>-list-setting" <?php echo $style; ?> id="<?php echo $data['Style']['Name'];?>">
    <div class="row">
        <div class="container" >
            <div class="row">
                <div class="col-12">
                    <div>
                        <h1 class="<?php echo $data['Style']['card']; ?>"><?php echo $data['Style']['Name'];?></h1>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php
                if(!empty($data['content'])){
                    foreach($data['content'] as $value){
                    ?>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <?php
                                View::partial('card-'.$data['Style']['card'], $value);
                            ?>
                        </div>
                    <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>