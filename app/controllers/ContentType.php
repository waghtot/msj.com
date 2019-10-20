<?php
class ContentType
{
    public function _construct(){
        return $this->index();
    }

    public function index(){
        // $content = array();
        $content = new ContentList();
        if(is_array($content->getStructure())){
            $structure = array();
            foreach($content->getStructure() as $key=>$value){
                $structure[$key] = $value;
            }
        }
        error_log('Content type content list: '.print_r($structure, 1));
    }
}