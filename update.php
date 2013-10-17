<?php
    require("system/system-config.php");

    
    $file = "content/" . $pageId . ".json";
    
    $data = file_get_contents($url . "?" . $options . "&titles=" . $title);
    
    // Write the contents to the file, 
    // using the FILE_APPEND flag to append the content to the end of the file
    // and the LOCK_EX flag to prevent anyone else writing to the file at the same time
    file_put_contents($file, $data, LOCK_EX);
    
    echo "done";
?>