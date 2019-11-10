<?php
class ContentManager
{
    private $content = array();

    public function __construct(array $array){
        if(!isset($array) or empty($array)){
            return false;
        }else{
            $this->setContent($array);
        }
    }

    public function setContent($array){

        $this->content = $this->getContentType($array['Content']);

    }

    public function getContent()
    {        

        return $this->content;

    }


    public function getTextFormated($text){
        $ready = explode("\n", file_get_contents($text, FILE_USE_INCLUDE_PATH));        
        return $ready;
    }

    public function getContentType(array $array){
        $data = array();
        if(isset($array) && !empty($array)){
            foreach($array as $key=>$value){
                if(is_array($value)){
                   foreach($value as $keyn=>$element){

                        if($this->CheckContent($element) !== false){
                            $data[$key]['text'] = $this->CheckContent($element);
                        }else{
                            $data[$key]['image'] = $element;
                        }
                   } 
                }else{
                    if($this->CheckContent($element) !== false){
                        $data[$key]['text'] = $this->CheckContent($element);
                    }else{
                        $data[$key]['image'] = $element;
                    }
                }
            }
            if(!empty($data)){
                // error_log('content: '.print_r($data, 1));
                return $data;
            }
        }

    }

    public function CheckContent($string){
        if(pathinfo($string, PATHINFO_EXTENSION) == 'txt' || pathinfo($string, PATHINFO_EXTENSION) == 'csv'){
            return $this->getTextFormated($string);
        }else{
            return false;
        }
    }

}