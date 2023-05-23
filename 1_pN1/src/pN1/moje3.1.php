<!DOCTYPE html>
<html>

<head>
<title> Formularze HTML w PHP'ie </title>
</head>

<style>
body{font-family:Arial; font-size:15px;}
</style>

<body>

<form action="moje3.2.php" method="GET">
<label for="imie">Wprowadź swoje imię:</label>
<input type="text" id="imie" name="imie" value="Anonim"><br/>

<br/>

<input type="radio" name="plec" value="nieokreślona/y" checked="zaznaczone">Nieokreślona/y<br/>
<input type="radio" name="plec" value="mężczyzna">Mężczyzna<br/>
<input type="radio" name="plec" value="kobieta">Kobieta<br/>

<br/>

<label for="zainteresowania">Wybierz swoje zainteresowania:</label><br/>
<input type="checkbox" id="zainteresowania" name="zainteresowania[]" value="tworzenie muzyki">uwielbiam tworzyć muzykę<br/>
<input type="checkbox" id="zainteresowania" name="zainteresowania[]" value="granie na instrumentach">uwielbiam grać na instrumentach<br/>
<input type="checkbox" id="zainteresowania" name="zainteresowania[]" value="tworzenie publikacji">uwielbiam pisać i wydawać publikacje<br/>
<input type="checkbox" id="zainteresowania" name="zainteresowania[]" value="programowanie">uwielbiam tworzyć nowe programy<br/>

<br/>

<label for="wartosc_x">Wprowadź wartość x:</label><br/>
<input type="text" id="wartosc_x" name="wartosc_x"><br/><br/>

<label for="wartosc_y">Wprowadź wartość y:</label><br/>
<input type="text" id="wartosc_y" name="wartosc_y"><br/><br/>

<label for="wartosc_min">Wprowadź wartość min:</label><br/>
<input type="text" id="wartosc_min" name="wartosc_min"><br/><br/>

<label for="wartosc_max">Wprowadź wartość max:</label><br/>
<input type="text" id="wartosc_max" name="wartosc_max"><br/><br/>

<input type="submit" name="wyslij" value="Wyślij odpowiedzi">
</form>

<?php

?>

</body>

</html>