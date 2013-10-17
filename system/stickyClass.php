<?php

class Sticky{
    static $instances=array();
    function __construct($title, $date, $author, $text){
        Sticky::$instances[] = $this;
        $this->title = $title;
        $this->date = $date;
        $this->author = $author;
        $this->text = $text;
    }
}

?>