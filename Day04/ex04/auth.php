<?php
    function auth($login, $passwd)
    {
        $found = 0;
        if(file_get_contents("../private/passwd"))
        {
            $tab = unserialize(file_get_contents("../private/passwd"));
            foreach($tab as $i => $value)
                if($tab[$i]['login'] === $login && $tab[$i]['passwd'] === $passwd)
                    $found = 1;
        }
        return $found;
    }
?>