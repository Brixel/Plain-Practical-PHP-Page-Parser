<?php

$json = file_get_contents("http://127.0.0.1/Plain-Practical-PHP-Page-Parser/demo/parsed_content.json.php");
$json_a = json_decode($json,true);
$title = $json_a["query"]["pages"]["1"]["title"];
$content = $json_a["query"]["pages"]["1"]["revisions"]["0"]["*"];

require_once('Michelf/Markdown.php');
use \Michelf\Markdown;
$my_html = Markdown::defaultTransform($content);

echo "<h1>$title</h1>";
echo "\n<hr />\n";
echo "$my_html";

?>
