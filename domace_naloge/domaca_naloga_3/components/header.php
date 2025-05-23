<?php
include('menu.php');

?>

<!DOCTYPE html>
<html>
    <head>
         <title>Domača naloga 3 - header</title>
    <meta charset="utf-8" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT"
      crossorigin="anonymous"
    />
    </head>
    <body>
        <header>
      <nav class="navbar navbar-expand-lg bg-body-tertiary bg-warning-subtle">
        <div class="container ps-5">
          <a class="navbar-brand" href="#">Domača naloga 3</a>
          <button
            class="navbar-toggler me-4"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 navbar-brand">
                <?php

                 //echo '<pre>';
                //var_dump($links);
                   // echo '<pre>';

              foreach($links as $key => $value){
                $Title = $value['Title'];
                $Link = $value['Link'];
                if($Link && $Title){
                  echo "<li class='nav-item'>
                <a class='nav-link' href='$Link'>$Title</a>
              </li>";  
                }
                
              }
              ?>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    </body>
</html>