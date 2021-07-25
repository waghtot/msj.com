<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>MSJ Construction Ltd.</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="app/views/css/custom.min.css"> -->
    <link rel="stylesheet" type="text/css" href="app/views/css/msj.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <script src="app/views/js/sweetalert.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


    </head>
    <body>

<!-- Layout drawt-->
    <?php
        $data = new SiteBuilder();
        View::partial('topmenu', $data->getMenu());
        foreach($data->getBody() as $value){
            switch($value['Type']){
                case 1:
                    View::partial('top', 0);
                    View::partial('head', 0);
                break;
                case 2:
                    View::partial('topic', $value);
                break;
                case 3:

                break;
                case 4:
                    View::partial('contact', 0);
                break;
                case 5:
                    // error_log('type five');
                break;
            }
        }

        View::partial('footer', 0);

    ?>

<!-- End Layout -->


        <?php

            if(!isset($_GET['params'])){
                $index ='';
            }else{
                $index = $_GET['params'];
            }
            switch($index){
                case '':
                case 'home':
                ?>

                <?php
                break;

                default:
                ?>

                <?php
                break;
            }


        ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="app/views/js/slick/slick/slick.js"></script>
    <script src="app/views/js/home/home.js?v=<?php echo microtime(); ?>"></script>

    </body>
</html>