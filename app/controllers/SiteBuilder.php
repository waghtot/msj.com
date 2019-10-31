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
    }

    public function setMenu(){
        $this->menu = json_decode(file_get_contents(MENU, FILE_USE_INCLUDE_PATH), true);
    }

    public function setBody(){
        
    }

    public function getBody(){
        $this->setMenu();
        $new_set = array();
        foreach($this->menu as $key=>$value){
            if($value['Active']==1){
                $new_set[$value['MenuOrder']]['id'] = $value['id'];
                $new_set[$value['MenuOrder']]['Name'] = $value['Name'];
                $new_set[$value['MenuOrder']]['Type'] = $value['Type'];
                $new_set[$value['MenuOrder']]['Style'] = $value['Style'];
            }
        }

        $data = new ContentType($new_set);
        // return $data->index();
    }



    public function setFooter(){
        
    }

    public function getMenu(){
        $new_set = array();
        $this->setMenu();
        foreach($this->menu as $value){
            if($value['Active']==1){
                $new_set[$value['MenuOrder']] = $value['Name'];
            }
        }

        ksort($new_set);

        return $new_set;
    }
}