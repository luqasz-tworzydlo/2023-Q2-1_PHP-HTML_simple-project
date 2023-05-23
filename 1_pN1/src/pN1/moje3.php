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
width:50px;
height:50px;
}
</style>

<body>
<?php

// inicjujemy tablicę wartościami losowymi
for ($i=0; $i<10; $i++) {
for ($j=0; $j<10; $j++) {
$tab[$i][$j] = rand(0,255);
}
}

// wyswietlenie tablicy poprzez kolory RGB [ przed stworzeniem sredniej kolorow ]
echo "<p><h1>Tablica przed wybraniem sredniej kolorow</b></h1><p/>";
echo "<table>";
foreach ($tab as $wiersz) {
echo "<tr>";
foreach ($wiersz as $komorka) {
$style = "style='background-color:rgb(0,$komorka,0)'";
echo "<td $style> </td>";
}
echo "</tr>";
}
echo "</table>";

echo "<br/>";

for ($i=0; $i<10; $i++){
for($j=0; $j<10; $j++){
$srednia_colorow = ($sum=$tab[$i][$j] +
$sum=$tab[$i][$j+1] +
$sum=$tab[$i][$j-1] +

$sum=$tab[$i+1][$j] +
$sum=$tab[$i+1][$j+1] +
$sum=$tab[$i+1][$j-1] +

$sum=$tab[$i-1][$j] +
$sum=$tab[$i-1][$j+1] +
$sum=$tab[$i-1][$j-1])/9;

$tab[$i][$j] = $srednia_colorow;
}
}

// wyswietlenie tablicy poprzez kolory RGB [ po stworzeniu sredniej kolorow ]
echo "<p><h1>Tablica po wybraniu sredniej kolorow</b></h1><p/>";

echo "<table>";
foreach ($tab as $wiersz) {
echo "<tr>";
foreach ($wiersz as $komorka) {
$style = "style='background-color:rgb(0,$komorka,0)'";
echo "<td $style> </td>";
}
echo "</tr>";
}
echo "</table>";


?>
</body>

</html>