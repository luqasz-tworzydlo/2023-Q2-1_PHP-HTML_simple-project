<?php
?>

<!DOCTYPE HTML>
<html>
  <head>
	<title>PHP Click-Map-Game</title>
	<meta charset="utf-8" />
  </head>

  	<style>
		body{font-family:Arial; font-size:40px;}

	</style>

	<body>

	<p> Na poniższym obrazie pomieszczenia strychu znajdują się 3 malowane obrazy [trzy obszary, które można kliknąć] Znajdź je wszystkie! </p>
    <img src="img/main-room.jpg"  usemap="#mapka"/>


	<?php

  $item = "";

  if(isset($_GET['item'])){
      $item = $_GET['item'];
      echo "<p>Wartość zmiennej item wynosi: $item</p>";
  }

	echo'<map name="mapka">';
	echo'	<area shape="circle" coords="400, 1397, 200" href="moje5.2_mapa-obszar1.php" />';
  if ($item=="OK") {
    echo'	<area shape="poly" coords="2100,1597, 2400,1597, 2400,1397" href="moje5.4_mapa-obszar3.php" />';
  }
	if ($item=="OK") {
		echo'	<area shape="rect" coords="100, 100, 1400, 300" href="moje5.3_mapa-obszar2.php" />';
	}
	echo'</map>';

	echo "<p>Co można znaleźć:</p>";
	if ($item=="OK") echo "<img src='paiting-no1.jpg' />";
	if ($item=="OK") echo "<img src='paiting-no2.jpg' />";
	if ($item=="OK") echo "<img src='paiting-no3.jpg' />";

	echo "<p>Zagraj jeszcze raz! Resetuj grę: <a href='moje5.1_mapa-klik.php'>TUTAJ</a></p>";
	?>
	</body>
</html>
