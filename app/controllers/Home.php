<?php
class Home {

    public function __construct(){
        // return true;
        $data = array();
        return new View(get_called_class(), $data);

    }
}