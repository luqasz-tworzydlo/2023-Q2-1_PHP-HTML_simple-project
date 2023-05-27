<!DOCTYPE html>
<html>

<head>
</head>

<style>
table {border:0px solid black; background-color:rgb(0,255,0);}
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
echo "<p><h1>Tablica przed wybraniem sredniej kolorow</h1><p/>";
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
        $sum = 0;
        $count = 0;
        for($x = $i - 1; $x <= $i + 1; $x++){
            for($y = $j - 1; $y <= $j + 1; $y++){
                if(isset($tab[$x]) && isset($tab[$x][$y])){
                    $sum += $tab[$x][$y];
                    $count++;
                }
            }
        }
        $tab[$i][$j] = $sum / $count;
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
