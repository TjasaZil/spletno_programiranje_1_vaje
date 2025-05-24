<?php

function dbConnect(){
// PDO -> objektno orientiran
global $config;
$servername=$config['db']['ServerName'];
$username=$config['db']['SUsername'];
$password=$config['db']['Password'];
$dbName=$config['db']['dbName'];
$conn = null;

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

return $conn;
}


function getSortCol($Name){
$output = null;

if($Name){
//select.php?name=$name&order=$OrderType
$NameAttr = (isset($_GET['name'])) ? $_GET['name'] : null;
$OrderType = (isset($_GET['order'])) ? $_GET['name'] : null;
if($OrderType == 'ASC'){
    $OrderType = 'DESC';
} else{
    $OrderType = 'ASC';
}

//OrderType = (OrderType == 'ASC') ? 'DESC' : 'ASC';

$Link = "?name=$Name&order=$OrderType";
$Symbol = ($OrderType == 'ASC') ? '&#9660;' : '&#9650;';
$Symbol = ($Name == $NameAttr) ? $Symbol : null;
$output = '<a href="'.$Link.'">'.$Symbol.$Name.'</a>';
}
return $output;
}

function redirect($FileName){
  header("Location: $FileName"); //funkcija ki naredi preusmeritev -> želimo da nas iz delete.php preusmeri v select.php ko deletamo zadevo
}


function getInputValue($Name, $MethodType = 'POST'){
    $output = null;

    if($MethodType== 'POST'){
        $output == (isset($_POST) && isset($_POST[$Name])) ? $_POST[$Name] : null;
    } else  if($MethodType== 'GET'){
        $output == (isset($_GET) && isset($_GET[$Name])) ? $_GET[$Name] : null;
    }
    return $output;
}
