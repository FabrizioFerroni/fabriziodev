<?php
$rad = $_SERVER['SERVER_ADDR'];
echo $rad;
echo "<br>";
echo "<br>";
$rah = $_SERVER['SERVER_NAME'];
echo $rah;
echo "<br>";
echo "<br>";
$s = $_SERVER['SERVER_SOFTWARE'];
echo $s;

echo "<br>";
echo "<br>";
$s2 = $_SERVER['SERVER_ADMIN'];
echo $s2;

echo "<br>";
echo "<br>";
echo php_uname();
echo "<br>";
echo "<br>";
$os = PHP_OS;
echo $os;
echo "<br>";
echo "<br>";


if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
    echo 'Este un servidor usando Windows!';
} else {
    echo 'Este es un servidor que no usa Windows!';
}