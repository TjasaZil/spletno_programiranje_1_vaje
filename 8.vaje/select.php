<?php
include('tpl/config.php');
include('tpl/function.php');
session_start();
$output = null;
$conn = dbConnect(); //naredili smo povezavo z bazo s tem ko smo poklicali tole funkcijo

//branje podatkov iz tabele user
$Name = (isset($_GET['name'])) ? $_GET['name'] : null;
$Order = (isset($_GET['order'])) ? $_GET['name'] : null;
$Sort=($Name && $Order) ? "ORDER BY $Name $Order" : null;
$data = $con ->prepare("SELECT UserID, FirstName, LastName, City FROM User $Sort");

$data->execute();
$data = $data->fetchAll(PDO::FETCH_ASSOC);

if($data && is_array($data)){
    $output .= '<a href="insert.php"> Add user </a><br><br>';
    $output .= '<table border="1">';
    $output .= '
    <thead>
        <tr>
            <th>#</th>
            <th>'.getSortCol('FirstName').'</th>
            <th>'.getSortCol('LastName').'</th>
            <th>'.getSortCol('City').'</th>
            <th>Options</th>
        </tr>
    </thead>';
    $output .= '<tbody>';
    //zanka s katero izpisujemo posamezno vrstico
    $Counter = 1;
    foreach($data as $key => $value){
        $UserId = $value['UserID'] ?? null; //vrne vrednost če obstaja drugače null
        $FirstName= $value['FirstName'] ?? null;
        $LastName = $value['LastName'] ?? null;
        $City = $value['City'] ?? null;
        $Btns = '
        <div>
        <a href="update.php?UserID='.$UserID.'">&#9998; Edit</a>
        <a href="delete.php?UserID='.$UserID.'">&#128465; Delete</a>
        </div>
        ';

        $output .=
        "<tr>
                <th>$Counter</th>
                <td>$FirstName</td>
                <td>$LastName</td>
                <td>$City</td>
                <td>$Btns</td>
              </tr>
        ";
        $Counter++;
    }

    $output .= '</tbody>';
    $output .= '</table>';
}
echo $output;

