<?php
session_start();
require_once('app/config/autoloader.php');
// require_once "vendor/autoload.php";
require_once "app/config/constants.php";


error_log('request: '.print_r($_SERVER['REQUEST_METHOD'], 1));

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo "POST POST";
    echo "<pre>".print_r($_SERVER, 1)."</pre>";
}

// flat page project
require_once('app/templates/secure.php');

Router::post('home/enquiry', 'home@enquiry');
// end -->


Router::dispatch();


ob_flush();



// new Router();

// ob_flush();
?>