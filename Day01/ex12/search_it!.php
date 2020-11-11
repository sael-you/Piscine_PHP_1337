#!/usr/bin/php
<?php
    if ($argc > 2)
    {
        $index = 2;
        $keyvalue = [ ];
        $array = [ ];
        while($argc > 2)
        {
            $str = explode(':', preg_replace('/^\s+|\s+$|\s+(?=\s)/', '', $argv[$index++]));
            $keyvalue = array($str[0] => $str[1]); 
            $array = array_merge($array, $keyvalue);
            unset($keyvalue);
            $argc--;
        }
        if(array_key_exists($argv[1],$array))
            printf($array[$argv[1]]."\n");
    }
?>