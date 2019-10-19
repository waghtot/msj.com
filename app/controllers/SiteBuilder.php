<?php
class SiteBuilder
{
    private $menu;
    private $body;
    private $footer;

    protected function _construct(){
        return $this->index();
    }

    public function index(){
        $this->setMenu();
        // return self::setMenu();
    }

    public function setMenu(){
        $this->menu = json_decode(file_get_contents(MENU, FILE_USE_INCLUDE_PATH), true);
    }

    public function setBody(){
        
    }

    public function setFooter(){
        
    }

    public function getMenu(){
        $this->setMenu();
        return $this->menu;
    }
}