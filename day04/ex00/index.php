<?php
session_start();
if ($_GET["login"] && $_GET["passwd"])
{
   $_SESSION['login'] = $_GET['login'];
   $_SESSION['passwd'] = $_GET['passwd'];
}
?>

<html><body>
<form action="index.php" methode="GET">
   Identifiant: <input type="text" name="login" value="<?php echo $_SESSION['login'] ?>" />
<br />
   Mot de passe: <input type="password" name="passwd" value="<?php echo $_SESSION['passwd'] ?>" />
<br />
<input type="submit" name="summit" value="OK"/>
</form>
</body></html>
