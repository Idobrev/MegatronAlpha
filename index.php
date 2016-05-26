<?php


$file = file_get_contents('index.html');
preg_match_all('/megatron-module=(?:\'|\")(.*)(?:\'|\")/', $file, $matches);
echo '<pre>';
print_r($matches);
echo '</pre>';
#echo $file;
#require $file;
?>