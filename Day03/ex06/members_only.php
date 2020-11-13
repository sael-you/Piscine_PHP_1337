<?php if (isset($_SERVER['PHP_AUTH_USER']) &&
        isset($_SERVER['PHP_AUTH_PW']) && 
        $_SERVER['PHP_AUTH_USER'] === 'zaz' && 
        $_SERVER['PHP_AUTH_PW'] === ' Ilovemylittleponey'):
?>
    <?php 
        header("Content-Type: text/html"); 
        $img = 'data:image/png;base64,'.base64_encode(file_get_contents("../img/42.png"))
    ?>
    <html><body>
    Hello Zaz<br />
    <img src=<?php echo $img ?>>
    </body></html>
<?php else: ?>
    <?php 
        header('WWW-Authenticate: Basic realm="\'Member area\'"');
        header('HTTP/1.0 401 Unauthorized');
    ?>
    <html><body>That area is accessible for members only</body></html>
<?php endif; ?>