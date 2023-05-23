<!DOCTYPE HTML>

<html>

<head>
<meta charset="utf-8"><title>Log in, please.</title>
</head>

<body>

<?php
 session_start();

 function auth($login, $haslo) {
if (($login=="test") and ($haslo=="test")) return true; else return false;
 }

 if (isset($_POST['login'])) {
if (auth($_POST['login'],$_POST['haslo']))
 $_SESSION['uzytkownik']=$_POST['login'];
else {
 unset($_SESSION['uzytkownik']);
 echo "<meta http-equiv=\"refresh\" content=\"0;URL=moje3.3.1.php\">";
 die();
}
 } else {
if (!(isset($_SESSION['uzytkownik']) and $_SESSION['uzytkownik']!="")) {
 echo "<meta http-equiv=\"refresh\" content=\"0;URL=moje3.3.1.php\">";
 die();
};
 };

 echo "Gratulacje! Jesteś zalogowany jako: ".$_SESSION['uzytkownik'];
 echo "!";
?>

</body>

</html>