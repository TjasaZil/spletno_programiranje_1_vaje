<?php
echo '<pre>';
var_dump($_POST);
echo '<pre>';

if(isset($_POST) && isset($_POST['Submit'])){
$UserName=$_POST['UserName'];
$Password = $_POST['Password'];
}

echo 'UserName: $UserName, Password: $Password';

$login =[
    'UserName'=> 'admin',
    'Password' => 'root'
];

//preverimo ali je username iz input fielda enako kot v login konfigu
if($UserName == $login['UserName'] && $Password == $login['Password']){
    echo "Uspešno si se prijavil v sistem";
} else{
    echo "Neuspešna prijava";
}
?>

<!DOCTYPE html>
<html>
<head></head>
<body>
<form method='post'>
    <div>
        <label>Uporabniško ime</label>
        <input type="text" name="UserName"> 
    
    </div>
    <div>
        <label>Geslo</label>
        <input type="password" name="Password"> 
    
    </div>
    <input type="submit" name="Submit" value="Prijava">
</form>

</body>

</html>