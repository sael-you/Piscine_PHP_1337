#!/usr/bin/php
<?php
    $index = 1;
    while (--$argc > 0)
    {
        echo $argv[$index++]."\n";
    }
?>