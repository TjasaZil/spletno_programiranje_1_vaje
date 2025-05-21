<?php
include('components/function.php');
?>

<!DOCTYPE html>
<html>
    <head>
</head>
<body>
    <?php include('components/header.php')?>
    <?php
    $Title = "Naslov glavne strani";
    $Title .= "<br/> Dodaten naslov";

    echo $subtitle; //ta spremenljivka ne obstaja, vrže ven error
    var_dump($Title); //vrže info o spremenljivki

    echo outputTitle("Podstran");
    ?>
    <h1> <?php echo $Title; ?></h1>

    <?php include('components/footer.php')?>
</body>
    </html>