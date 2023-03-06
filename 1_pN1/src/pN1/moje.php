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

<?php

echo "<p>Hello from <b>HTML from PHP from HTML :></b><p/>";

echo '<img src="wsb.png" alt ="cos tam"/><br/>';

// sortowanie bąbelkowe
$tab[0]=8;
$tab[1]=9;
$tab[2]=7;
$tab[3]=2;
$tab[4]=3;
$tab[5]=1;
$tab[6]=4;
$tab[7]=6;
$tab[8]=5;
$tab[9]=10;

$temp;
for ($j=0; $j<10-2; $j++)
{
for ($i=0; $i<10-2; $i++)
{
if(tab[$i] = tab[$i+1]);
tab[$i+1] = tab[$i];
tab[$i] = temp;
}
}
echo "Tablica po sortowaniu bąbelkowym";
foreach ($position in tab)
echo($position + " ");

echo "<table style<tr>";
for ($i=0; $i<10; $i++) {
echo "<td>$tab[$i]</td>";
}
echo "</table></tr>";

?>

</body>
</html>