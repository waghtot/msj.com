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
            // error_log('co wysylam: '.print_r($data, 1));
            $this->contentType($data); //To jest do przeniesienia do content managera
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

    //content manager
    public function contentType($data){
        $mycontent = array();
        foreach($data as $key=>$value){
            switch($value['Type']){
                case 1:
                    if(!empty($value['Content'])){

                        $mycontent[] = $this->setContent($value);

                    }

                break;

                case 2:
                    if(!empty($value['Content'])){

                        $mycontent[] = $this->setContent($value);

                    }                    
                break;

                case 3:
                    if(!empty($value['Content'])){

                        $mycontent[] = $this->setContent($value);

                    }
                break;

                case 4:
                    if(!empty($value['Content'])){

                        $mycontent[] = $this->setContent($value);

                    }
                break;
            }

        }
        // error_log('show content: '.print_r($mycontent, 1));
        return $mycontent;
    }

    public function setContent($array){

        $data = array();
        $set = new ContentManager($array);
        $data['Type'] = $array['Type'];
        $data['Style'] = $array['Style'];
        $data['content'] = $set->getContent();

        return $data;
    }
}