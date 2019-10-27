<?php
class ContentType
{
    public function __construct($menu = NULL){

        if(isset($menu) && $menu !== NULL){
            $data = array();
            foreach($menu as $key=>$value){
                if(array_key_exists($key, $this->index())){
                    if(!empty($this->index()[$key])){
                        $data[] = array('settings'=>$menu[$key], 'params'=>$this->index()[$key]);
                    }
                }
            }

            $this->contentType($data);
            return $data;
        }else{
            return false;
        }

    }

    public function index(){
 
        $content = new ContentList();
        if(is_array($content->getStructure())){
            $structure = array();
            foreach($content->getStructure() as $key=>$value){
                $structure[$key] = $value;
            }
        }

        if(!empty($structure)){
            return $structure;
        }
    }

    public function contentType($data){
        foreach($data as $key=>$value){
            switch($value['settings']['Type']){
                case 1:
                    View::partial('carousel', $value['params']);
                break;

                case 2:
                echo "topics";
                break;

                case 3:
                echo "gallery";
                break;

                case 4:
                echo "form";
                break;
            }
        }
    }

    public function getTextFormated($text){
        $ready = explode("\n", file_get_contents($text, FILE_USE_INCLUDE_PATH));        
        return $ready;
    }
}