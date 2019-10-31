<?php
    error_log('incomming data: '.print_r($data, 1));
?>
<div class="container-fluid topic-white-list-setting">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div>
                        <h1>Section Header</h1>
                    </div>
                    <div>
                        <p>Section short description</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <?php
                        View::partial('card-clear', '0');
                    ?>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <?php
                        View::partial('card-clear', '0');
                    ?>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <?php
                        View::partial('card-clear', '0');
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>