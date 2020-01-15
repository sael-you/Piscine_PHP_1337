#!/usr/bin/php
<?php
    if ($argc >= 2)
        echo preg_replace('/^\s+|\s+$|\s+(?=\s)/', '',$argv[1])."\n";
?>