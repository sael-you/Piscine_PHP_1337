<?php
    if ($_SERVER['PHP_AUTH_USER'] && $_SERVER['PHP_AUTH_USER'] === 'zaz' && $_SERVER['PHP_AUTH_PW'] === 'Ilovemylittleponey') 
    {
        header("Content-Type: text/html"); 
        $img = "<html><body>\nHello Zaz<br />\n<img src='data:image/png;base64,".base64_encode(file_get_contents("../img/42.png"))."'>\n</body></html>";
    } else {
        header('WWW-Authenticate: Basic realm="\'Member area\'"');
        header('HTTP/1.0 401 Unauthorized');
        $img = "<html><body>That area is accessible for members only<html><body>";
    }
    echo "$img \n";
?>