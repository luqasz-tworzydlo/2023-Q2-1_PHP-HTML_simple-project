<!DOCTYPE html>
<html>

<head>
</head>

<style>
table {border:0px solid black; background-color:blue;}
td { border:0px solid gold;
padding:0px;  text-align:center;
background-color:#999999;
font-size:36px;
width:10px;
height:10px;
}
</style>

<body>
<?php

// inicjujemy tablicę wartościami losowymi
for ($i=0; $i<10; $i++)
for ($j=0; $j<10; $j++)
$tab[$i][$j] = rand(100,255);

// wyswietlenie tablicy poprzez kolory RGB
echo "<table>";
foreach ($tab as $wiersz) {
echo "<tr>";
foreach ($wiersz as $komorka) {
$style = "style='background-color:rgb($komorka,$komorka,0)'";
echo "<td $style> </td>";
}
echo "</tr>";
}
echo "</table>";


?>
</body>

</html>