<?php
class SiteBuilder
{
    private $menu;
    private $body;
    private $footer;

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


    public function setMenu(){
        $this->menu = json_decode(file_get_contents(MENU, FILE_USE_INCLUDE_PATH), true);
        return $this->menu;
    }

    public function getBody(){
        $this->setBody();

        return $this->body;
    }


    public function setBody(){
        $content = array();
        $structure = array();
        $content = new ContentList();
        $structure = $content->getStructure(); 
        $new_set = array();
        foreach($this->menu as $key=>$value){
            if($value['Active']==1){
                $new_set[$value['MenuOrder']]['id'] = $value['id'];
                $new_set[$value['MenuOrder']]['Name'] = $value['Name'];
                $new_set[$value['MenuOrder']]['Type'] = $value['Type'];
                $new_set[$value['MenuOrder']]['Style'] = $value['Style'];
                $new_set[$value['MenuOrder']]['Content'] = $structure[$value['id']];
            }
        }

        $data = new ContentType();
        $data->contentType($new_set);
        $content = array();
        $this->body = $data->contentType($new_set);
    }

    public function getFooter(){
        $this->setFooter();
        return $this->footer;
    }

    public function setFooter(){
        $this->footer = 'Footer';
    }

}