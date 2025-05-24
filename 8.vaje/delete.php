//preberemo iz parametra, pogleamo če je v bazi, deletmo in naredimo v redirect.
<?php
session_start(); //ker uporabljamo header -> funkcija redirect
include('tpl/config.php');
include('tpl/function.php');

$conn = dbConnect();
//$UserID = (isset($_GET['UserID']) && is_numeric($_GET['UserID'])) ? $_GET['UserID'] : null; //pogleda če userid obstaja in če je numeričen tip

$UserID = getInputValue('UserID', 'GET');
if($UserId){
    //brisanje vrstice
    $data = $conn->prepare("DELETE FROM User WHERE UserID :=UserID");
    $data->execute(['UserID' => $UserID]);
    //preusmeri na select.php po tem ko deletamo
    redirect('select.php');
} else{
    //če id ni numeričen ali ne obstaja potem deletamo
    redirect('select.php');
}