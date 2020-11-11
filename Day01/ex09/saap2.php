#!/usr/bin/php
<?php
function sortArray($a, $b)
{
    $i = 0;
    while(!($sort = ft_sort($a[$i],$b[$i])))
        $i++;
    return ($sort);
}
function ft_sort($a , $b)
{
    $a = strtolower($a);
    $b = strtolower($b);
    if ($a == $b) {
        return 0;
    }
    if ((ctype_alpha($a) && !(ctype_alpha($b))) || (is_numeric($a) && !(is_numeric($b)) && !(ctype_alpha($b))))
        return (-1);
    else if ((ctype_alpha($b) && !(ctype_alpha($a))) || (is_numeric($b) && !(is_numeric($a)) && !(ctype_alpha($a))))
        return (1);
    return ($a < $b) ? -1 : 1;
}
$tab_to_sort = [ ];
$index = 1;
$str = [ ];
while(--$argc > 0)
{
    $str = explode(' ', preg_replace('/^\s+|\s+$|\s+(?=\s)/', '', $argv[$index++]));
    $tab_to_sort = array_merge($tab_to_sort, $str);
    usort($tab_to_sort,'sortArray');
}
foreach($tab_to_sort as $value)
    echo $value."\n";
?>