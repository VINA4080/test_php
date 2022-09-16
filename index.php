<?php
    // echo("bonjour");

// $name = "Vina";
// $age = 23;
// $test = true;

// var_dump($name);
// var_dump($age);
// var_dump($test);

// if (10 === 10) {
//     echo "test ok <br>";
// }

// if (10 < 21) {
//     echo "nombre plus petit <br>";
// }

// if ("21" == "21") {
//     echo "nombre <br>";
// }

// if (21 >= 21) {
//     echo "nombre <br>";
// }

// if (21 >= 21) {
//     echo "nombre <br>";
// }

// if (2 <= 2) {
//     echo "ok <br>";
// }

// if (10 > 2) {
//     echo "nombre plus grand <br>";
// }

// if (10 != 2) {
//     echo "nombre different <br>";
// }

// if (10 !== 2) {
//     echo "nombre different <br>";
// }

// if (!true) {
//     echo "nombre different <br>";
// }

// ________________________________________________________

// FONCTION PHP

// function addition(int $nb1, int $nb2)
// {
//     return $nb1 + $nb2;
// }
// echo addition(10,12)."<br>";

// function soustraction(int $nb1, int $nb2)
// {
//     return $nb1 - $nb2;
// }
// echo soustraction(10,12)."<br>";

// function disivion($nb1, $nb2)
// {
//     return $nb1 / $nb2;
// }
// echo disivion(10,12)."<br>";

// function multiplication($nb1, $nb2)
// {
//     return $nb1 * $nb2;
// }
// echo multiplication(10,12)."<br>";

// ________________________________________________________

// Tableau PHP
// unset : enlever une valeur dans un tableau
// 




// $array = [12, 15, 89];

// echo $array[2];

// count($array) // taille du tableau

// $array = [12, 15, 89];

// foreach ($array as $value) {
//     echo $value;
// }

// $array = [12, 15, 89];

// foreach ($array as $key => $value) {
//     echo "$key => $value <br>"  ;
// }

// $array = [12, 15, 89];

// foreach ($array as $key => $value) {
//     unset($array[0]);
// }

// var_dump($array);

// $array = [12, 15, 89];

// // array_push($array, 5);
// $array[] = 25;

// var_dump($array);

// $array = [12, 15, 89];

// $array[0] = 4;

// // var_dump($array);
// // echo("<br>");
// print_r($array);

// $legumes = ["anana", "ovy", 8, 9, "karoty", 4];

// foreach ($legumes as $key => $value) {
//     echo $value;
// }

// $devises = [
//     "euro"   => [15, 32, 25, 22.5],
//     "dollar" => [36, 42, 25, 35.8]               
// ];

// foreach ($devises as $key => $value) {
//     echo;
// }

$person = [
    ["Rakoto", "Rasoa"],
    ["Rabe", "Koto"]
];

foreach ($person as $key => $value) {
    echo "$value[0] $value[1] <br>";
}