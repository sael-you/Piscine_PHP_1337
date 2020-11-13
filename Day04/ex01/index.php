<?php
    session_start();
?>

<html><body>
<form method="get" action="index.php">
Identifiant: <input type="text" name="login" value="<?php  $_GET['login'] ? $_SESSION["login"] = $_GET['login'] : NULL; echo $_SESSION["login"] ? $_SESSION['login'] : "";?>" />
<br />
Mot de passe: <input type="password" name="passwd" value="<?php  $_GET['passwd'] ? $_SESSION["passwd"] = $_GET['passwd'] : NULL; echo $_SESSION["passwd"] ? $_SESSION['passwd'] : "";?>" />
<input type="submit" name="submit" value="OK" />
</form>
</body></html>
