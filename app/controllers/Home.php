<?php
class Home {

    public function __construct(){
        // return true;
        $data = array();
        $menu = new SiteBuilder();
        $data['menu'] = $menu->getMenu();
        error_log('menu: '.print_r($data['menu'], 1));
        return new View(get_called_class(), $data);

    }
}