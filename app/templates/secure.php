<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>MSJ Construction Ltd.</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../app/views/css/custom.min.css">
    <link rel="stylesheet" type="text/css" href="../app/views/css/msj.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <script src="http://findmein.dev.uk/app/views/js/sweetalert.min.js"></script>
    </head>
    <body>

<!-- Top Menu -->
    <?php
        require_once "app/views/pages/partial/topmenu.php";
    ?>


<!-- End Top Menu -->

<!-- Layout drawt-->



    <?php
        error_log('page name: '.print_r($page, 1));
        View::page($page, $data);
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
        <!-- <script type="text/javascript">
            $.ajaxPrefilter(function( options, original_Options, jqXHR ) {
                options.async = true;
            });
        </script> -->

        <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../app/views/js/slick/slick/slick.js"></script>
    <script src="../app/views/js/home/home.js"></script>

    </body>
</html>