<?php
    require("parser.php");
    $parser = new Parser();

    function getMenu(){
        global $parser;
        echo $parser->getMenu();
    }
    
    function stickies(){
        global $parser;
        return $parser->getStickies();
    }
    
    function getWelcomeTitle(){
        global $parser;
        echo $parser->getWelcome()->title;
        
    }
    function getWelcomeText(){
        global $parser;
        echo $parser->getWelcome()->text;
        
    }
    
    function faqs(){
        global $parser;
        return $parser->getFaqs();
    }
?>