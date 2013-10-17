<?php

class Faq{
    static $instances=array();
    function __construct($title, $text){
        Faq::$instances[] = $this;
        $this->title = $title;
        $this->text = $text;
    }
}

?>