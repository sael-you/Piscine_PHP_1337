#!/usr/bin/php
<?php
if ($argc == 2)
{
    $str = explode(' ', preg_replace('/^\s+|\s+$|\s+(?=\s)/', '', $argv[1]));
    if(count($str) === 3 && is_numeric($str[0]) && is_numeric($str[2]))
    {
        switch ($str[1])
        {
            case '+':
                echo intval($str[0])+intval($str[2]);
            break;
            case '-':
                echo intval($str[0])-intval($str[2]);
            break;
            case '*':
                echo intval($str[0])*intval($str[2]);
            break;
            case '/':
                echo intval($str[0])/intval($str[2]);
            break;
            case '%':
                echo intval($str[0])%intval($str[2]);
            break;
            default:
                printf("Syntax Error");
            break;
        }
    }
    else
        printf("Syntax Error");
}
else
    printf("Incorrect Parameters");
echo "\n";
?>