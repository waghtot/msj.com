<?php

if(isset($_POST)){

    $to      = 'info.msjconst@gmail.com';
    $subject = 'Customer Enquiry';
    if(isset($_POST['uphone']) && !empty($_POST['uphone'])){
        $message = '<p><h4>Phone: </h4>'.$_POST['uphone'].'</p>';    
    }else{
        $message = '';
    }
    $message .= '<p>'.$_POST['uquery'].'</p>';
    $headers = 'From: ' . $_POST['uemail'] . "\r\n" .
        'Reply-To: '. $_POST['uemail']  . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);

    $res = array();
    $res['code'] = '200';
    $res['message'] = 'Success';

    echo json_encode($res);
    die;
}