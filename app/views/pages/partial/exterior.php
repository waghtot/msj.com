<?php
error_log('data: '.print_r($data, 1));
?>

<div class="container-fluid exterior-back">
    <div class="container-fluid topic-white-list-setting white-back">
        <div class="container" id="Exterior">
            <div class="row">
                <div class="col-12">
                    <div>
                        <h1>EXTERIOR</h1>
                    </div>
                    <div>
                        <!-- <p  class="white">Section short description</p> -->
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <?php
                        require_once(PARTIAL.'extentions.php');
                    ?>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <?php
                        require_once(PARTIAL.'greeninitiatives.php');
                    ?>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <?php
                        require_once(PARTIAL.'garden.php');
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>