<?php  
    function hardhash($pwd, $inout)
    {
        $inout ? $pwd++ : $pwd--;
        return (hash('whirlpool', $pwd));
    }
    $flag = 0;
    if (!(($_POST['submit']) && $_POST['submit'] === 'OK') || !(($_POST['login']) && $_POST['login']) || !(($_POST['oldpw']) && $_POST['oldpw']) || !(($_POST['newpw']) && $_POST['newpw']))
        echo "ERROR\n";
    else
    {
        if(file_get_contents("../private/passwd"))
        {
            $tab = unserialize(file_get_contents("../private/passwd"));
            $flag = 0;
            foreach($tab as $i => $value)
            {
                if($tab[$i]['login'] === $_POST['login'] && $tab[$i]['passwd'] === hardhash($_POST['oldpw'], 1))
                {
                    $flag = 1;
                    $pwd = hardhash($_POST["newpw"], 1);
                    $tab[$i]['passwd'] =  $pwd;
                    echo "OK\n";
                    file_put_contents("../private/passwd",serialize($tab));
                }
            }
            if(!$flag)
                echo "ERROR\n";
        }
        
    }   
?>