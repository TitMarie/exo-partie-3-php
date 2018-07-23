<?php

// exercice 1

for ($i = 0; $i <= 10; $i++) {
    echo "Ton i = " .$i. "<br>";
}

echo "<br>";
// exercice 2

$i = 0;
$j = rand(1, 100);
while ($i < 20) {
    echo $i * $j . " - ";
    $i ++;  
}

echo "<br> <br>";
// exercice 3

$i = 100;
$j = rand(1, 100);
while ($i > 10) {
    echo $i * $j . " - ";
    $i --;
}

 echo "<br> <br>";

// exercice 4

$i = 1;
while ($i <= 10) {
    echo $i ." - ";
    $i += $i/2;
}

echo "<br> <br>";

// exercice 5

for ($i = 1; $i <= 15; $i++) {
    echo "On y arrive presque ! - ";
}

echo "<br> <br>";

// exercice 6

for ($i = 20; $i >= 0; $i--) {
    echo "C'est presque bon. - ";
}

echo "<br> <br>";

// exercice 7

for ($i = 1; $i <= 100; $i += 15) {
    echo "on tient le bon bout. - ";
}

echo "<br> <br>";

// exercice 8

for ($i = 200; $i <= 0; $i += 12) {
    echo "Enfin !!!  -  ";
}