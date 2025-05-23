<?php
session_start();
ob_start();

echo '<pre>';
var_dump($_GET);
echo '</pre>';

$Action = $_GET['action'];
echo $Action;
$ID = $_GET['ID'];
echo $ID;

/*
file.jpg
$File = "file.jpg";
explode(".", $File);

if($FileExtension == "jpg"){
move_upload_file($File,...);
}
*/
echo '<pre>';
var_dump($_SERVER);
var_dump($_SERVER['SERVER_ADDR']);
echo '</pre>';

//COOKIE -> se ne izbriše ko zapremo brskalnik
Setcookie("TodayDay","Petek", time() + 3660);
var_dump($_COOKIE);
if(isset($_COOKIE['TodayDay'])){
    var_dump($_COOKIE['TodayDay']);
}else{
echo "Piškotek še ni nastavljen. Osveži stran";
}

//SEJA -> dokler ne zapremo brskalnika
$_SESSION['TodayDay'];
if(isset($_SESSION['TodayDay'])){
    echo "Berem seja:";
    var_dump($_SESSION['TodayDay']);
}else{
echo "Seja še ni nastavljena. Osveži stran";
}
?>