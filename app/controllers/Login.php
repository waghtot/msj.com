<?php
class Login
{

    public function index(){
        if(!isset($_SESSION['user'])){
            View::partial('login', '0');
        }
    }

}