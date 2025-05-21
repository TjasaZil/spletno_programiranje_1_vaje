<?php
include('components/function.php');
?>

<!DOCTYPE html>
<html>
    <head>
</head>
<body>
    <?php include('components/header.php')?>

    <main>
           <?php
    $Title = "Naslov glavne strani";
    $Title .= "<br/> Dodaten naslov";

    echo $subtitle; //ta spremenljivka ne obstaja, vrže ven error
    var_dump($Title); //vrže info o spremenljivki

     echo outputTitle("Glavna stran");
     echo sestej(5,10);

    ?>
    <h1> <?php echo $Title; ?></h1>

    <?php 
    //array

    $daysList=['Nedelja', 'Ponedeljek', 'Torek', 'Sreda', 'Četrtek', 'Petek', 'Sobota'];
    echo '<pre>';
    var_dump($daysList);
   echo '<pre>';

   echo count($daysList); //število elementov v arrayu
   echo $daysList[1]; // vrne ponedeljek

   for($i = 0; $i<count($daysList); $i++){
    echo $daysList[$i];
   }

   //associativni array
   $daysListAssoc=[
    'Day0' => 'Nedelja',
    'Day1' => 'Ponedeljek',
    'Day2' => 'Torek',
    'Day3' => 'Sreda',
    'Day4' => 'Četrtek',
    'Day5' => 'Petek',
    'Day6' => 'Sobota',
   ];

    echo '<pre>';
    var_dump($daysListAssoc);
   echo '<pre>';
   echo $daysListAssoc['Day1']; //izpiše ponedeljek

   /*
   //primer associativnega arraya
   $config =[
    'AdminUrl' => 'blabla.com',
    'AdminDefaultPage' => '/page.php'
   ]

   //primer indexnega arraya
   $config = ['blabla.com', '/page.php'];

   echo $config['AdminUrl'];
    */

    //multidimenzionalni asociativno-indexni array
    $usersList=[
        [
'FirstName' => 'Janez',
        'lastName' => 'Košir',
        'City' => 'Novo Mesto'
        ],
        [
'FirstName' => 'Franc',
        'lastName' => 'Košir',
        'City' => 'Kočevje'
        ],
        [
'FirstName' => 'Ben',
        'lastName' => 'Stiller',
        'City' => 'Zagreb'
        ],
        
    ];

    for($i=0; $i<count($usersList); $i++){
        $FirstName = $usersList[$i]['FirstName'];
         $LasttName = $usersList[$i]['LasttName'];
          $City = $usersList[$i]['City'];

          echo "FirstName: $FirstName, LastName: $LastName. City: $City </br>";
    }

    foreach($usersList as $key => $value){
        $FirstName = $value['FirstName'];
        $LastName = $value['LastName'];
        $City = $value['City'];

        echo "FirstName: $FirstName, LastName: $LastName. City: $City </br>";
    }

    
    ?>
    </main>
 

    <?php include('components/footer.php')?>
    
</body>
    </html>