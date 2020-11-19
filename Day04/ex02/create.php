<?php  
    function hardhash($pwd, $inout)
    {
        $inout ? $pwd++ : $pwd--;
        return (hash('whirlpool', $pwd));
    }
    if (!(($_POST['submit']) && $_POST['submit'] === 'OK') || !(($_POST['login']) && $_POST['login']) || !(($_POST['passwd']) && $_POST['passwd']))
        echo "ERROR\n";
    else
    {
        if(!(file_exists("../private")))
        {
            mkdir("../private");
            file_put_contents("../private/passwd","");
        }
        if(file_get_contents("../private/passwd"))
        {
            
            $tab = unserialize(file_get_contents("../private/passwd"));
            $flag = 0;
            foreach($tab as $i => $value)
            {
                if($tab[$i]['login'] === $_POST['login'])
                    $flag = 1;
            }
            if(!($flag))
            {
                $pwd = hardhash($_POST["passwd"], 1);
                $arr = ["login" => $_POST["login"], "passwd" => $pwd];
                $tab[] = $arr;
                echo "OK\n";
            }
            else
                echo "ERROR\n";
        }
        else
        {
            $pwd = hardhash($_POST["passwd"], 1);
            $tab[] = ["login" => $_POST["login"], "passwd" => $pwd];
            echo "OK\n";
        }
        file_put_contents("../private/passwd",serialize($tab));
    }   
?>