<?php
    require("system/functions.php");
    require("theme-config.php");
    
    //echo $parser->getBlob();
    
    $base_url = "theme/" . $themeFolder;
    include($base_url . "/" . $themeParentFile);
?>