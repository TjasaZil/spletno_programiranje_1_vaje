<?php
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
?>