<!DOCTYPE html>
<html>

<head>
</head>

<style>
table {border:1px solid black; background-color:blue;}
td { border:2px solid gold;
padding:1px; width:40px; text-align:center;
background-color:#999999;
font-size:36px;
}
</style>

<body>
<?php

//$tab = array(1,2,3,4,5);

$tab = array(
array (1, 2, 3),
array (4, 5, 6),
array (3, 3, 3),
array (8, 9, 3)
);

// stworzona tablica za pomocą pętli 'for'
echo "<table>";
for ($i=0; $i<4; $i++) {
echo "<tr>";
for ($j=0; $j<3; $j++) {
echo "<td>" . $tab[$i][$j] . "</td>";
}
echo "</tr>";
}
echo "</table>";

echo "<br/>";

// stworzona tablica za pomocą tabeli 'foreach'
echo "<table>";
foreach ($tab as $wiersz) {
echo "<tr>";
foreach ($wiersz as $komorka) {
echo "<td>$komorka</td>";
}
echo "</tr>";
}
echo "</table>";

echo "<br/>";

// tablica 10x10 z wartościami losowymi [próba nr 1]
// generowanie tablicy 10-elementowej
/*$array = array();
for ($i = 0; $i < 10; $i++) {
$array[$i] = rand(1, 100);
}

// wyświetlanie tablicy 10x10
echo "<table>";
foreach ($array as $wiersz) {
echo "<tr>";
foreach ($array as $komorka) {
echo "<td>$komorka</td>";
}
echo "</tr>";
}
echo "</table>";

echo "<br/>*/

// tablica 10x10 z wartościami losowymi [próba nr 2]
            $wartosc_min = -25; $wartosc_max = 25;
            for ($i=0; $i<10; $i++){
                for($j=0; $j<10; $j++){
                    $array_tablica[$i][$j] = rand(-25,25);
                    if ($wartosc_min>$array_tablica[$i][$j]) $wartosc_min = $array_tablica[$i][$j];
                    if ($wartosc_max<$array_tablica[$i][$j]) $wartosc_max = $array_tablica[$i][$j];
                }
            }

            echo "<table>";
            foreach($array_tablica as $wiersz){
                echo "<tr>";
                foreach($wiersz as $komorka){
                    if($wartosc_min == $komorka){
                        echo "<td style='background-color: red;'>$komorka</td>";
                    } else if($wartosc_max == $komorka) {
                        echo "<td style='background-color: green;'>$komorka</td>";
                    } else {
                        echo "<td>$komorka</td>";
                    }
                }
                echo "</tr>";
            }
            echo "</table>";

?>
</body>

</html>