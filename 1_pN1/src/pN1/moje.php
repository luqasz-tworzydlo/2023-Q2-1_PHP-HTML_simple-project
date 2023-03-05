<!DOCTYPE html>

<html>
<head>
</head>
<style>
table {border:1px solid black; background-color:blue;}
td {border:2px solid gold;
padding:1px; width:20px; text-align:center;
background-color:#999999;
}
</style>
<body>
<p> Hello from HTML </p>

<!-- comment -->
<!-- <img src ="wsb.png" alt ="cos tam"/> -->

<?php

// comment [one line]
/* commented a little bit more */

// echo "Hello from PHP";

echo "<p>Hello from <b>HTML from PHP from HTML :></b><p/>";
// echo "<img src=\"wsb.png\" alt =\"cos tam\"/>";

echo '<img src="wsb.png" alt ="cos tam"/><br/>';

/*$zmienna = 13;
echo "$zmienna";
echo "<p>Wartość zmiennej wynosi: $zmienna</p>";
echo '<p>Nazwa zmiennej to: $zmienna</p>';
var_dump($zmienna);

echo '<br/><br/>';

$zmienna = 13.4;
echo "$zmienna";
echo "<p>Wartość zmiennej wynosi: $zmienna</p>";
echo '<p>Nazwa zmiennej to: $zmienna</p>';
var_dump($zmienna);

echo '<br/><br/>';

$zmienna = "Ala ma kota";
echo "$zmienna";
echo "<p>Wartość zmiennej wynosi: $zmienna</p>";
echo '<p>Nazwa zmiennej to: $zmienna</p>';
var_dump($zmienna);*/

// zmienna tablicowa [dozwolona jest tablica dziurawa,
// gdzie brakuje, przykładowo wartość pomiędzy 0, a 2]
/*$tab[0] = 1;
// $tab[1] = 33;
$tab[2] = 1333;
$tab[3] = 12;

var_dump($tab);
echo '<br/><br/>';*/

// tablica asocjacyjna,
/*$tab["kasia"] = 1.13;
$tab[2] = 133;
$tab[3] = "Asia";

var_dump($tab);
echo '<br/><br/>'*/

// nasza tablica z zastosowanie pętli for
/*for ($i=0; $i<10; $i++) $tab[$i] = rand(1,10);

echo "<table style<tr>";
for ($i=0; $i<10; $i++) {
echo "<td>$tab[$i]</td>";
}
echo "</table></tr>";*/

// sortowanie bąbelkowe
$tab[array]=5793216548;

$temp;
for ($j=0; $j<10-2; $j++)
{
for ($i=0; $i<10-2; $i++)
{
if(array[$i] = array[$i+1]);
array[$i+1] = array[$i];
array[$i] = temp;
}
}
echo "Tablica po sortowaniu bąbelkowym";
foreach ($position in array)
echo($position + " ");

echo "<table style<tr>";
for ($i=0; $i<10; $i++) {
echo "<td>$tab[$i]</td>";
}
echo "</table></tr>";

?>

</body>
</html>