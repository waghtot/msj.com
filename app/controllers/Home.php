<?php
class Home {

    public function __construct(){
        $this->index();
    }

    public function index(){
        $csv = array();
        $file = 'app/config/content.csv';
        // $csv = array_map('str_getcsv', file('app/config/content.csv'));
        
        $csv = array_map('str_getcsv', file($file));
        array_walk($csv, function(&$a) use ($csv) {
          $a = array_combine($csv[0], $a);
        });
        array_shift($csv); # remove column header

        error_log('array from csv file: '.print_r($csv, 1));
        $data = array();
        return new View(get_called_class(), $data);
    }

    public function login(){
        $data = new Login();
        return $data->index();
    }
}