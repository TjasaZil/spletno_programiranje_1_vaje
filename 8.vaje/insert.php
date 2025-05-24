<?php

session_start();
include('tpl/config.php');
include('tpl/function.php');
$output = null;
$conn = dbConnect();

if(getInputValue('Submit')){
$FirstName = getinputValue('FirstName');
$LastName = getinputValue('LastName');
$City = getinputValue('City');

if($FirstName && $LastName && $City){
    //dodaj v tabelo user
$data = $conn ->prepare("INSERT INTO User (FirstName, Lastname, City) VALUES (:FirstName, :LastName, :City)");
$data->execute([
    'FirstName' => $FirstName,
    'LastName' => $LastName,
    'City' => $City
]);

    redirect('select.php');
}
}

$output .= '<form method = "post">';
$output .= '
<div>
<label>FirstName</label>
<input type="text" name = "FirstName">
</div>';
$output .= '
<div>
<label>LastName</label>
<input type="text" name = "LastName">
</div>';
$output .= '
<div>
<label>City</label>
<input type="text" name = "City">
</div>';
$output .= '
<input type="submit" name = "Submit" value="Potrdi">';
$output .= '</form>';

echo $output;