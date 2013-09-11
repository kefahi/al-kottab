<?php

$content_type = isset($content_type)===false?'application/json':$content_type;
header('Content-type: ' . $content_type);
echo $content; 
exit;