<?php
$pre='{"query":{"pages":{"1":{"pageid":1,"ns":0,"title":"MainPage","revisions":[{"contentformat":"text\/x-wiki","contentmodel":"wikitext","*":"';
//$content="== Brixel - Hackerspace Hasselt ==\\n\\nA hackerspace is a location where people with common intrests share their opinion about science, electronics and tech stuff. At this moment we're still searching for a location, but we meet every week.\\n\\n== Weekly meetings ==\\n* For as long we don't have a space, we hold our weekly meetings in [http:\/\/www.kermeta.be Kermeta]. These meetings start at 20:00 GMT+1, every* tuesday. You're free to join our meetings, and thus be part of our community.\\n\\\* Not every tuesday in june. Next meeting is 25th of june, in Kermeta.";

$content = file_get_contents("content.mdml");
preg_match('/<nowiki>(.*?)<\/nowiki>/s', $content, $content);
$content = str_replace(array("\r\n", "\r", "\n"), '\n', $content[1]);
$after='"}]}}}}';

$AllContent= $pre . $content . $after;
//$AllContent = $content;

echo $AllContent;

?>
