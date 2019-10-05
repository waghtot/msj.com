<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>MSJ Construction Ltd.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/simplex/bootstrap.css" media="screen">
    <link rel="stylesheet" type="text/css" href="../app/views/css/custom.min.css">
    <link rel="stylesheet" type="text/css" href="../app/views/css/msj.css">
    <script src="http://findmein.dev.uk/app/views/js/sweetalert.min.js"></script>
    </head>
    <body>

<!-- Top Menu -->
    <?php
        // require_once "app/views/pages/partial/topmenu.php";
    ?>


<!-- End Top Menu -->

<!-- Layout drawt-->

    <?php
        error_log('page name: '.print_r($page, 1));
        View::page($page, $data);
    ?>


<!-- End Layout -->

        <script type="text/javascript" src="https://bootswatch.com/_vendor/jquery/dist/jquery.min.js"></script>
        <script type="text/javascript" src="../app/views/js/jquery.validate.min.js"></script>
        <script type="text/javascript" src="https://bootswatch.com/_vendor/popper.js/dist/umd/popper.min.js"></script>
        <script type="text/javascript" src="https://bootswatch.com/_vendor/bootstrap/dist/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://bootswatch.com/_assets/js/custom.js"></script>

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
        <script type="text/javascript">
            $.ajaxPrefilter(function( options, original_Options, jqXHR ) {
                options.async = true;
            });
        </script>
    </body>
</html>