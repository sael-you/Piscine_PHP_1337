<?php
    include "./auth.php";

    function hardhash($pwd, $inout)
    {
        $inout ? $pwd++ : $pwd--;
        return (hash('whirlpool', $pwd));
    }

    session_start();

    if(auth($_GET['login'], hardhash($_GET['passwd'],1)))
    {
        $_SESSION['loggued_on_user'] = $_GET['login'];
        echo "OK\n";
    }
    else
    {
        $_SESSION['loggued_on_user'] = "";
        echo "ERROR\n";
    }
?>