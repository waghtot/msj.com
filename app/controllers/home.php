<?php
// class Home {


//     public function index(){
//         $csv = array();
//         $file = 'app/config/content.csv';
//         $csv = array_map('str_getcsv', file($file));
//         array_walk($csv, function(&$a) use ($csv) {
//           $a = array_combine($csv[0], $a);
//         });

//         array_shift($csv); # remove column header
//         $data = array();

//         return new View(get_called_class(), $data);
//     }

//     public function login(){
//         $data = new Login();
//         return $data->index();
//     }

//     public function enquiry(){
//         echo json_encode($_POST);
//         die;
//     }
// }