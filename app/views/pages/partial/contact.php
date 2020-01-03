<div class="container-fluid topic-white-list-setting">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div>
                        <h1 class="<?php echo $data['Style']['card']; ?>"><?php echo $data['Style']['Name'];?></h1>
                    </div>
                </div>
            </div>

            <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <?php
                View::partial('form-contact', '0');
            ?>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <?php
                View::partial('form-booking', '0');
            ?>
        </div>
    </div>
        </div>
    </div>
</div>