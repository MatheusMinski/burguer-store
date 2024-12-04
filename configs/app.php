<?php

$env = file_get_contents("../.env");
$lines = explode("\n",$env);

foreach($lines as $line){
  preg_match("/([^#]+)\=(.*)/",$line, $matches);
  if(isset($matches[2])){
     putenv( trim(string: $line)); 
    }
} 

?>