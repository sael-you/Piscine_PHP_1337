<?php
switch ($_GET['action']) {
    case 'set':
        setcookie($_GET['name'], $_GET['value'], time()+3600);
        break;
    case 'get':
            var_dump($_GET);
            var_dump($_COOKIE);
            echo !($_COOKIE) ? NULL : $_COOKIE[$_GET['name']]."\n";
        break;
    case 'del':
        setcookie($_GET['name'], "", time()-60);
        break;

}
?>