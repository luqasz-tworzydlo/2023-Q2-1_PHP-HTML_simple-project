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
$tab = array(8, 9, 7, 2, 3, 1, 4, 6, 5, 10);

// tablica przed sortowaniem bąbelkowym

echo "<br> Tablica przed sortowaniem bąbelkowym<br/>";
foreach ($tab as $position)
{
    echo($position . " ");
}

echo "<table><tr>";
for ($i=0; $i<count($tab); $i++) {
    echo "<td>{$tab[$i]}</td>";
}
echo "</tr></table>";

// algorytm sortowania bąbelkowego

for ($j=0; $j<count($tab)-1; $j++)
{
    for ($i=0; $i<count($tab)-1-$j; $i++)
    {
        if($tab[$i] > $tab[$i+1]){
            $temp = $tab[$i+1];
            $tab[$i+1] = $tab[$i];
            $tab[$i] = $temp;
        }
    }
}

// tablica po sortowaniu bąbelkowym

echo "<br> Tablica po sortowaniu bąbelkowym<br/>";
foreach ($tab as $position)
{
    echo($position . " ");
}

echo "<table><tr>";
for ($i=0; $i<count($tab); $i++) {
    echo "<td>{$tab[$i]}</td>";
}
echo "</tr></table>";

?>

</body>
</html>
