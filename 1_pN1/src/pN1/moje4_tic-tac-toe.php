<!DOCTYPE html>

<html>

<head>

</head>

<style>
table {
border: 1px solid grey;
color: blue;
font-weight: bold;
font-size: 30px; }
td {
border: 1px solid black;
width: 50px;
height: 50px;
text-align: center; }
    </style>


<body>

<?php

/* Zadanie [wykonanie gry TicTacToe - kolko i krzyzyk]
=> Oznaczenia w grze
0 - pole puste
1 - krzyzyk
2 - kolko
=> Wykorzystac
makeempty()
make (0,0,0, 0, 1, 0, 2, 0 ,0)
=> Zakonczenie gry
ocen: 0 - gra sie toczy, nie  ma zwycyciezcy
1 - gra zakonczona, wygrywa X
2 - gra zakonczona, wygraywa 0
3 - gra zakonczona, remis
4 - sytuacja niemozliwa
=> Dodatkowo wykonac:
podpowiedzi ruchu dla graczy
podswietlenie miejsca podpowiedzi*/

session_start();
        //session_abort();
       
        $plansza = isset($_SESSION['plansza']) ? $_SESSION['plansza'] :
                                                    array(
                                                        '---', '---', '---',
                                                        '---', '---', '---',
                                                        '---', '---', '---');

        $gracz = isset($_SESSION['gracz']) ? $_SESSION['gracz'] : 'X';
       
        function printplansza($plansza)
        {
            echo "<table>\n";
            for ($i = 0; $i < 9; $i += 3)
            {
                echo "<tr>\n";
                printf("<td><a href='?ruch=%d'>%s</a></td>\n", $i, $plansza[$i]);
                printf("<td><a href='?ruch=%d'>%s</a></td>\n", $i+1, $plansza[$i+1]);
                printf("<td><a href='?ruch=%d'>%s</a></td>\n", $i+2, $plansza[$i+2]);
                echo "</tr>\n";
            }
            echo "</table>\n";
        }
       
        function wykonaj_ruch($plansza, $gracz, $ruch)
        {
            if ($plansza[$ruch] == '---')
            {
                $plansza[$ruch] = $gracz;
            }
            return $plansza;
        }
       
        function sprawdz_wygrana($plansza, $gracz)
        {
            for ($i = 0; $i < 9; $i += 3)
            {
                if ($plansza[$i] == $gracz && $plansza[$i+1] == $gracz && $plansza[$i+2] == $gracz)
                {
                    return true;
                }
            }
           
            for ($i = 0; $i < 3; $i++)
            {
                if ($plansza[$i] == $gracz && $plansza[$i+3] == $gracz && $plansza[$i+6] == $gracz)
                {
                    return true;
                }
            }
           
            if ($plansza[0] == $gracz && $plansza[4] == $gracz && $plansza[8] == $gracz)
            {
                return true;
            }

            if ($plansza[2] == $gracz && $plansza[4] == $gracz && $plansza[6] == $gracz)
            {
                return true;
            }
           
            return false;
        }
       
        if (isset($_GET['ruch']))
        {
            $ruch = intval($_GET['ruch']);
            $plansza = wykonaj_ruch($plansza, $gracz, $ruch);
            $_SESSION['plansza'] = $plansza;

            if (sprawdz_wygrana($plansza, $gracz))
            {
                echo "Gra zakończona! Wygrał $gracz!";
                session_destroy();
                exit();
            }

            if ($gracz == 'X')
            {
                $gracz = 'O';
            }

            else
            {
                $gracz = 'X';
            }

            $_SESSION['gracz'] = $gracz;
        }
       
        printplansza($plansza);
        if (in_array('---', $plansza) === false)
        {
            echo "<br/>";
            echo "Gratulacje! Masz remis! :P";
            session_destroy();
            exit();
        }
        if (in_array('---', $plansza) === true)
        {
            echo "<br/>";
            echo "Kolejny ruch ma $gracz!";
        }

?>

</body>

</html>