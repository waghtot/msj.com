<?php

if(isset($_POST)){
    $data = new stdClass();
    $data = $_POST;
    error_log('show me post object: '.print_r($_POST, 1));
    if(postCodeLookUp() !== false){
        $data = new stdClass();
        $data->code = 6000;
        $data->message = 'ok';
        sendEmail();
    }else{
        $data = new stdClass();
        $data->code = 6006;
        $data->message = 'We are sorry but we are not providing our services in that area';
    }
    error_log('response to frontend: '.print_r($data, 1));
    echo json_encode($data);
    die;
}

function sendEmail(){

    if(isset($_POST)){
        // $to      = 'info.msjconst@gmail.com';
        $to      = 'waghtot@gmail.com';
        $subject = 'Customer Enquiry';
        $message = getMessage();
        if(isset($_POST['email']) && strlen($_POST['email'])>0)
        {
            $headers = 'From: ' . $_POST['email'] . "\r\n" .
            'Reply-To: '. $_POST['email']  . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
        }else{
            $headers = 'From: ' . 'info.msjconst@gmail.com' . "\r\n" .
            'Reply-To: '. 'info.msjconst@gmail.com'  . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
        }

        mail($to, $subject, $message, $headers);
    
        $res = array();
        $res['code'] = '6000';
        $res['message'] = 'Success';
    
        echo json_encode($res);
        die;
    }

}

function postCodeLookUp(){
    $found = false;
    $data = file_get_contents('../config/postcode.json', FILE_USE_INCLUDE_PATH);
    $post = new stdClass();
    $post = json_decode($data);
    $conv = array();
    $conv = $post->postcode;
    foreach($post->postcode as $value){
        error_log('postcode list: '.$value);
        if(has_prefix($_POST['postcode'], $value) == 1){
            return true;
        }
    }
    return false;
}

function has_prefix($string, $prefix) {
    return substr($string, 0, strlen($prefix)) == $prefix;
}

function getMessage(){
    $message = '';

    if(isset($_POST['email']) && strlen($_POST['email']))
    {
        $message.= 'Email: '.$_POST['email'].'\n\r';
    }
    if(isset($_POST['phone']) && strlen($_POST['phone']))
    {
        $message.= 'Phone: '.$_POST['phone'].'\n\r';
    }
    if(isset($_POST['day']) && strlen($_POST['day']))
    {
        $message.= 'Date: '.$_POST['day'].'\n\r';
    }
    if(isset($_POST['hour']) && strlen($_POST['hour']))
    {
        $message.= 'Time: '.$_POST['hour'].'\n\r';
    }
    if(isset($_POST['postcode']) && strlen($_POST['postcode']))
    {
        $message.= 'Postcode: '.$_POST['postcode'].'\n\r';
    }
    error_log('your message: '.print_r($message, 1));
    return $message;
}
?>