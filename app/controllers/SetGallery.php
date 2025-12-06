<?php

class Set_Gallery{
    private $galleryDir;
    private $gallery;

    public function __construct($galleryset = null)
    {
        $this->galleryDir = CONTENT."/".$galleryset['Style']['Gallery']; 
        $this->setGallery();

    }

    private function setGallery()
    {
        $this->gallery = $this->getContent();


    }
    public function getGallery(){
        return $this->gallery;
    }

    public function getContent(){
        $subDir = scandir($this->galleryDir);
        unset($subDir[0]);
        unset($subDir[1]);

        $content = new stdClass();
        foreach($subDir as $dir){
                $content->$dir = [];
            if(is_dir($this->galleryDir."/".$dir)){
                $content->$dir[] = $this->getImages($dir);
                $content->$dir[] = $this->getText($dir);
            }
        }
        return $content;
    }

    private function getImages($dir){
        $images = [];
        $content = scandir( $this->galleryDir."/".$dir);
        foreach( $content as $item){
            if(is_file($this->galleryDir."/".$dir."/".$item) && pathinfo($item, PATHINFO_EXTENSION)!='txt'){
                 $images[] = $this->galleryDir."/".$dir."/".$item; 
            }
        }
        return $images;
    }

    private function getText($dir)
    {
        $text = [];
        $content = scandir( $this->galleryDir."/".$dir);
        foreach( $content as $item){
            if(is_file($this->galleryDir."/".$dir."/".$item)){
                if (pathinfo($item, PATHINFO_EXTENSION)==='txt'){
                    $file = fopen($this->galleryDir."/".$dir."/".$item, 'r'); 
                    while(! feof($file)) {
                        $line = fgets($file);
                        $text[] =  $line;
                    }
                 fclose($file);
                }
            }
        }
        return $text;
    }
}