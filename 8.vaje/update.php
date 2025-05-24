<?php

session_start();
include('tpl/config.php');
include('tpl/function.php');
$output = null;
$conn = dbConnect();
$UserID = getInputValue('UserID', 'GET');
$data=null;
if(!$UserID){
    //preveri ali uporabnik z useridjem obstaja
    $data = $con ->prepare("SELECT UserID, FirstName, LastName, City FROM User WHERE UserId =:UserID");
$data->execute(['UserID' => $UserID]);
$data = $data->fetchAll(PDO::FETCH_ASSOC);
$data = (isset($data) && isset($data[0])) ? $data[0] : null;

//userid imamo ampak nič ne obstaja
if(!$data){
    redirect('select.php');
}
} else{
    //v primeru da ne obstaja user id, preusmeri
redirect('select.php');
}

if(getInputValue('Submit')){
$FirstName = getinputValue('FirstName');
$LastName = getinputValue('LastName');
$City = getinputValue('City');

if($FirstName && $LastName && $City){
    //dodaj v tabelo user
$data = $conn ->prepare("UPDATE User SET FirstName = :FirstName, LastName = :LastName, City =: City WHERE UserID = :UserID");
$data->execute([
    'FirstName' => $FirstName,
    'LastName' => $LastName,
    'City' => $City,
    'UserID' => $UserID
]);

    redirect('select.php');
}
}

$output .= '<form method = "post">';
$output .= '
<div>
<label>FirstName</label>
<input type="text" name = "FirstName" value ="'. $data['FirstName'] .'">
</div>';
$output .= '
<div>
<label>LastName</label>
<input type="text" name = "LastName" value ="'. $data['LastName'] .'">
</div>';
$output .= '
<div>
<label>City</label>
<input type="text" name = "City" value ="'. $data['City'] .'">
</div>';
$output .= '
<input type="submit" name = "Submit" value="Potrdi">';
$output .= '</form>';

echo $output;