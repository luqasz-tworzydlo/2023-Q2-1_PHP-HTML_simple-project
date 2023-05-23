	
do mnie
<!DOCTYPE html>
<html>

<head>
<title> Formularze HTML w PHP'ie </title>
</head>

<style>
body{font-family:Arial; font-size:15px;}

        table{
            border: 1px solid grey;
            background-color: black;
            font-size: 15px;
         }

        td{
            border: 1px solid black;
            padding: 5px;
            width: 15px;
            height: 15px;
            text-align: center;
            background-color: grey;
            color: white;
         }
</style>

<body>

<?php

if (isset($_GET['wyslij']))
{
$imie=$_GET['imie'];
echo "Witaj $imie!";
$plec=$_GET['plec'];
echo " ($plec)";

if(!empty($_GET['zainteresowania']))
{
$wybrane_zainteresowania=$_GET['zainteresowania'];
echo "<br/><br/>Twoje zainteresowania to:<br>";
foreach($wybrane_zainteresowania as $zainteresowania)
{
echo "=> ";
echo $zainteresowania.";";
echo "<br/>";
}
}
else
{
echo "<br/><br/>Nie wybrałeś/aś żadnych zainteresowań :<";
}

echo "<br/>";

$wartosc_x=$_GET['wartosc_x'];
$wartosc_y=$_GET['wartosc_y'];
$wartosc_min=$_GET['wartosc_min'];
$wartosc_max=$_GET['wartosc_max'];


                echo "<table>";
                for ($i=0; $i<$wartosc_x; $i++) {
                    echo "<tr>";
                    for ($j=0; $j<$wartosc_y; $j++) {
                        echo "<td>" . $tab[$i][$j] = rand($wartosc_min,$wartosc_max);  "</td>";
                    }
                    echo "</tr>";
                }
}

/*
echo "<br/>/// /// /// /// /// /// /// /// /// /// /// /// /// /// /// /// /// /// /// /// ///";
echo " /// /// /// /// /// /// /// /// /// /// /// /// /// /// /// /// /// /// /// /// ///";
echo "<br/>Nasze zmienne to:<br/>";
var_dump($_GET);
echo "<br/>/// /// /// /// /// /// /// /// /// /// /// /// /// /// /// /// /// /// /// /// ///";
echo " /// /// /// /// /// /// /// /// /// /// /// /// /// /// /// /// /// /// /// /// ///";
*/

?>

</body>

</html>