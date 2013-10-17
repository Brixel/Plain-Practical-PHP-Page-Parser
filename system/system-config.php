<?php

    $url = "http://wiki.hsha.be/api.php"; //The global url to the api of the wiki;
    
    //*************************************************************************************************//
    //We use both title and pageId of the <ContentIndex>-page... It's just to cover our grounds..
    //We might want to make this more easy in the future...
    //*************************************************************************************************//
    $title = "Website/ContentManagement";   //The title of the page that includes your <ContentIndex>
    $pageId = "122";                        //The pageId of the page that includes your <ContentIndex>
    $revision = "0";                        //Due to "rvlimit=1" in the options, this means rev 0 is always the most recent
    
    //Standard options.. This shouldn't really be changed.. unless ofcourse you know more about the API than I do (which isn't that hard)
    $options = "action=query&prop=revisions&rvlimit=1&rvprop=content&format=json";

?>