
<div class="container-fluid topic-clear-list-setting position-relative">
    <div class="container " id="Gallery">
        <div class="row">
            <div class="col-12">
                <div>
                    <h1 class="white">Gallery</h1>
                </div>
            </div>
        </div>

        <div class="row ">

            <?php
            foreach($data as $item){
                View::partial('gallery-card', $item);
            }

            ?>

        </div>
    </div>
    <div id="carouselbackground">
        <div id="carouselContainer"></div>
    </div>
</div>
