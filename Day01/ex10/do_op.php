#!/usr/bin/php
<?php
if ($argc == 4)
{
    switch (preg_replace('/^\s+|\s+$|\s+(?=\s)/', '', $argv[2]))
    {
        case '+':
            echo intval($argv[1])+intval($argv[3]);
        break;
        case '-':
            echo intval($argv[1])-intval($argv[3]);
        break;
        case '*':
            echo intval($argv[1])*intval($argv[3]);
        break;
        case '/':
            echo intval($argv[1])/intval($argv[3]);
        break;
        case '%':
            echo intval($argv[1])%intval($argv[3]);
        break;
        default:
            printf("Incorrect Parameters");
        break;
    }
}
else
    printf("Incorrect Parameters");
echo "\n";
?>