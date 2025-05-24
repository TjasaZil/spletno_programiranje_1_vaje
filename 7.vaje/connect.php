<?php
/* ZAMENJAJ PODATKE S SVOJIMI IZ AWARDSPACE */
$servername = "fdb1034.awardspace.net"; // kopiraj iz AW - Database Host:
$username = "4128127_example"; // kopiraj iz AW - Database User:
$password = "geslo1234"; // iz AW - Database Password:
$dbName = "4128127_example"; // kopiraj iz AW - Database Name:

// PDO 
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

echo '<hr>';

// branje podatkov s tabele
// select
$data = $conn->prepare("SELECT * FROM User");
$data->execute();
$data = $data->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
var_dump($data);
echo '</pre>';

if(isset($data) && is_array($data)) {
    foreach($data as $key => $value) {
        $FirstName = $value['FirstName'];
        $LastName = $value['LastName'];
        $City = $value['City'];

        echo "FirstName: $FirstName, LastName: $LastName, City: $City<br/>";
    }
}

// insert
$chars = 'abcdefghijklmnopqrstuvwxyz';

// Ime
$FirstName = ucfirst(substr(str_shuffle($chars), 0, 6));
// Priimek
$LastName = ucfirst(substr(str_shuffle($chars), 0, 8));
// Mesto
$City = ucfirst(substr(str_shuffle($chars), 0, 7));

$data = $conn->prepare("INSERT INTO User (FirstName, LastName, City) VALUES(:FirstName, :LastName, :City)");
$data->execute(
    [
        'FirstName' => $FirstName,
        'LastName' => $LastName,
        'City' => $City
    ]
);
echo '<hr>';

// MySQLI
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";