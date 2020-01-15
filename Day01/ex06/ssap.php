#!/usr/bin/php
<?php

    $tab_to_sort = [ ];
    $index = 1;
    $str = [ ];
    while(--$argc > 0)
    {
        $str = explode(' ', preg_replace('/^\s+|\s+$|\s+(?=\s)/', '', $argv[$index++]));
        $tab_to_sort = array_merge($tab_to_sort, $str);
        sort($tab_to_sort);
    }
    foreach($tab_to_sort as $value)
        echo $value."\n";
?>