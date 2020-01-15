#!/usr/bin/php
<?php
function mtoi($matches)
{
    preg_replace('/[Jj]anvier/', 'jan', $matches);
    preg_replace('/[Ff]évrier/', 'feb', $matches);
    preg_replace('/[Mm]ars/', 'mar', $matches);
    preg_replace('/[Aa]vril/', 'apr', $matches);
    preg_replace('/[Mm]ai/', 'may', $matches);
    preg_replace('/[Jj]uin/', 'jun', $matches);
    preg_replace('/[Jj]uillet/', 'jul', $matches);
    preg_replace('/|[Aa]oût/', 'aug', $matches);
    preg_replace('/[Ss]eptembre/', 'sep', $matches);
    preg_replace('/[Oo]ctobre/', 'oct', $matches);
    preg_replace('/[Nn]ovembre/', 'nov', $matches);
    preg_replace('/[Dd]écembre/', 'dec', $matches);
    preg_replace('/[Ll]undi/', 'mon', $matches);
    preg_replace('/[Mm]ardi/', 'tue', $matches);
    preg_replace('/[Mm]ercredi/', 'wed', $matches);
    preg_replace('/[Jj]eudi/', 'thu', $matches);
    preg_replace('/[Vv]endredi/', 'fri', $matches);
    preg_replace('/[Ss]amedi/', 'sat', $matches);
    preg_replace('/[Dd]imanche/', 'sun', $matches);
    
}
    if($argc == 2)
    {
        if (preg_match('/([Ll]undi|[Mm]ardi|[Mm]ercredi|[Jj]eudi|[Vv]endredi|[Ss]amedi|[Dd]imanche) (3[0-1]|[1-2][0-9]|0[1-9]|[1-9]) ([Jj]anvier|[Ff]évrier|[Mm]ars|[Aa]vril|[Mm]ai|[Jj]uin|[Jj]uillet|[Aa]oût|[Ss]eptembre|[Oo]ctobre|[Nn]ovembre|[Dd]écembre) (19[7-9][0-9]|203[0-8]|20[0-2][0-9]) ([0-1][0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])/',$argv[1],$matches))
        {
            date_default_timezone_set("Europe/Paris");
            $str = $matches[0];
            echo $str."\n";
            mtoi($str);
            echo $str."\n";
            //echo mktime($matches[5],$matches[6],$matches[7],mtoi($matches[3]),$matches[2],$matches[4])."\n";
        }
        else
            echo "Wrong format\n";
    }
?>