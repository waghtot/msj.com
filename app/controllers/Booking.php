<?php

if(isset($_POST)){
    error_log('post booking'.print_r($_POST, 1));
    echo json_encode($_POST);
    die;
}

?>