#!/usr/bin/php
<?php
if($argc > 1)
{
    $str = explode(' ', preg_replace('/^\s+|\s+$|\s+(?=\s)/', '', $argv[1]));
    $first [] = $str[0];
    unset($str[0]);
    $str = array_merge($str, $first);
   foreach($str as $word)
       $string .= $word." ";
   printf(substr($string, 0, -1));   
   printf("\n"); 
}
?>