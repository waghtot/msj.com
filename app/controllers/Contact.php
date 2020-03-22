<?php

if(isset($_POST)){
    // $to      = 'info.msjconst@gmail.com';
    $to      = 'waghtot@gmail.com';
    $subject = 'Customer Enquiry';
    $message = $_POST['uquery'];
    $headers = 'From: ' . $_POST['uemail'] . "\r\n" .
        'Reply-To: '. $_POST['uemail']  . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    $res = array();
    $res['code'] = '200';
    $res['message'] = 'Success';

    echo json_encode($res);
    die;

}