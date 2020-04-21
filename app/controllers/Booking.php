<?php

if(isset($_POST)){
    $data = new stdClass();
    $data = $_POST;
    
    error_log('post booking'.$data['fullname']);
    
    $data = file_get_contents('../config/postcode.json', FILE_USE_INCLUDE_PATH);
    $post = new stdClass();
    $post = json_decode($data);
    $conv = array();
    $conv = $post->postcode;

    $found = false;

    if(postCodeLookUp() !== false)
    {
        
    }
    foreach($post->postcode as $value){
        if($value == $_POST['postcode']){
            $found = true;
        }
    }

    if($found !== false){
        $data = new stdClass();
        $data->code = 6000;
        $data->message = 'ok';
        sendEmail();
    }else{
        $data = new stdClass();
        $data->code = 6006;
        $data->message = 'We are sorry but we are not serving our services in that area';
    }

    

    echo json_encode($data);
    die;
}

function sendEmail(){

    if(isset($_POST)){
        $to      = 'info.msjconst@gmail.com';
        $subject = 'Customer Enquiry';
        $message = $_POST['uquery'];
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

}

function postCodeLookUp(){

}

?>