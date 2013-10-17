<?php

require('stickyClass.php');
require('faqClass.php');


require_once('Michelf/Markdown.php');
use \Michelf\Markdown;

class Parser{
    function __construct(){
        
        require('system-config.php');
   
        $json = file_get_contents($url . "?" . $options . "&titles=" . $title);
        
        $json_a = json_decode($json,true);
        //$title = $json_a["query"]["pages"][ $pageId ]["title"];
        $content = $json_a["query"]["pages"][ $pageId ]["revisions"][ $revision ]["*"];
        
        //sanitize
        preg_match("'<ContentIndex>(.*?)</ContentIndex>'si", $content, $sanitized_content);
        //make the blob
        $this->blob = $sanitized_content[1];
        
        //get the menu
        preg_match("'<MENU>(.*?)</MENU>'si", $sanitized_content[1], $menu);
        //render the menu
        if($menu){
            preg_match_all("'<item>(.*?)</item>'si", $menu[1], $menuItems);
            foreach($menuItems[1] as $item){
                $rendered_item_with_p = Markdown::defaultTransform($item);
                preg_match("'<p>(.*?)</p>'si", $rendered_item_with_p, $rendered_item);
                $this->menu .= $rendered_item[1];
            }
        }
        
        //get the stickies
        preg_match_all("'<STICKY>(.*?)</STICKY>'si", $sanitized_content[1], $stickies);  
        //make sticky objects
        if($stickies[1]){
            foreach($stickies[1] as $stickyItem){
                preg_match("'<title>(.*?)</title>'si", $stickyItem, $title);
                preg_match("'<date>(.*?)</date>'si", $stickyItem, $date);
                preg_match("'<author>(.*?)</author>'si", $stickyItem, $author);
                preg_match("'<text>(.*?)</text>'si", $stickyItem, $text);
                $rendered_text = Markdown::defaultTransform($text[1]); 
                
                new Sticky($title[1], $date[1], $author[1], $rendered_text);
            }
        }
        
        //get the welcome message
        preg_match("'<WELCOME>(.*?)</WELCOME>'si", $sanitized_content[1], $welcome);
        //render the welcome message
        if($welcome[1]){
            preg_match("'<title>(.*?)</title>'si", $welcome[1], $title);
            preg_match("'<text>(.*?)</text>'si", $welcome[1], $text);
            $rendered_text = Markdown::defaultTransform($text[1]); 
            
            $this->welcome->title = $title[1];
            $this->welcome->text = $rendered_text;
            
        }
        
        //get the FAQs
        preg_match_all("'<FAQ>(.*?)</FAQ>'si", $sanitized_content[1], $faqs);  
        //make FAQ objects
        if($faqs[1]){
            foreach($faqs[1] as $faqItem){
                preg_match("'<title>(.*?)</title>'si", $faqItem, $title);
                preg_match("'<text>(.*?)</text>'si", $faqItem, $text);
                $rendered_text_with_p = Markdown::defaultTransform($text[1]); 
                preg_match("'<p>(.*?)</p>'si", $rendered_text_with_p, $rendered_text);
                new Faq($title[1], $rendered_text[1]);
            }
        }
    }
    
    public function getBlob(){
        return $this->blob;
    }
    public function getMenu(){
        return $this->menu;
    }
    public function getStickies(){
        return Sticky::$instances;
    }
    public function getWelcome(){
        return $this->welcome;
    }
    public function getFaqs(){
        return Faq::$instances;
    }
}

//$homePageParser = new Parser;

//echo $homePageParser->getBlob();
//print_r( $homePageParser->getStickies());
//print_r($homePageParser->getWelcome());
//print_r( $homePageParser->getFaqs());
?>
