
  <?php
   $name = $email =$telefon=$sporocilo = "";
   $nameErr=$emailErr=$telefonErr=$sporociloErr = ""; 
   $success=false;
  
   if(isset($_POST['submit_btn'])){
  
 //poberem vrednosti iz forme
      $name = trim($_POST["name"]);
      $email = trim($_POST["email"]);
      $telefon = trim($_POST["telefon"]);
      $sporocilo = trim($_POST["sporocilo"]);

         //preverim vrednosti v formi
         //ime
        if (!empty($name) &&!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
  $nameErr = "Only letters and white space allowed";
}
else if(empty($name)){
$nameErr = "Name is required";
}
  else{
    $name = $_POST["name"];
  }

//email 
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Email format is not correct";
}else if(empty($email)){
$emailErr = "Email is required";
}
  else{
    $email = $_POST["email"];
  }

//telefon  
        if (!empty($telefon) && !preg_match('/^[0-9]+$/', $telefon)) {
  $telefonErr = "Phone should include only numbers and empty spaces";
}
  else{
    $telefon = $_POST["telefon"];
  }
//sporocilo
 if (empty($sporocilo)) {
        $sporociloErr= 'Polje Sporočilo je obvezno.';
    }
if (empty($nameErr) && empty($emailErr) && empty($telefonErr) && empty($sporociloErr)) {
      $success = true;
    }
else{
    $success=false;
}
   }
 ?>



<!DOCTYPE html>
<html>
  <head>
    <title>Domača naloga 3</title>
    <meta charset="utf-8" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT"
      crossorigin="anonymous"
    />
  </head>
  <body class="bg-warning" style="min-height:100%;">
    <!-- navigacija -->
   <?php
        include('./components/header.php');
     ?>

    <main>
  
      <div class="container p-5">
        <form method = "post" action="">
                    <?php 
      if( $success ){
        echo "<div class='alert alert-success' role='alert'>
            Vaše povpraševanje je uspešno poslano.
          </div>";
      } else{
        echo"";
      }
      ?>
          <!-- ime, email, telefon -->
          <div class="row mb-3">
            <div class="col-12 col-md-4">
              <label for="inputIme" class="form-label">
                Ime in priimek <span class="text-danger">*</span>
              </label>
              <input
                type="text"
                class="form-control"
                id="inputIme"
                name="name"
              />
              <?php
              echo $nameErr;
              ?>
            </div>

          

            <div class="col-12 col-md-4">
              <label for="inputEmail" class="form-label">
                Email naslov <span class="text-danger">*</span>
              </label>
              <input
                type="email"
                class="form-control"
                id="inputEmail"
                name="email"
                aria-describedby="emailHelp"
              />
             <?php
              echo $emailErr;
              ?>
            </div>

            <div class="col-12 col-md-4">
              <label for="inputTelefon" class="form-label"> Telefon </label>
              <input
                type="tel"
                class="form-control"
                id="inputTelefon"
                name="telefon"
              />
              <?php
              echo $telefonErr;
              ?>
            </div>
          </div>

          <!-- sporočilo textarea -->
          <div class="row mb-3">
            <div class="col-12">
              <label for="inputSporocilo" class="form-label">
                Sporočilo <span class="text-danger">*</span></label
              >
              <textarea
                class="form-control"
                id="inputSporocilo"
                name="sporocilo"
                rows="6"
              ></textarea>
              <?php
              echo $sporociloErr;
              ?>
            </div>
          </div>

          <!-- submit button-->
          <div class="row">
            <div class="col text-end">
              <button type="submit" class="btn btn-primary" name="submit_btn">Pošljite</button>
            </div>
          </div>
        </form>
      </div>
    
    </main>
<?php
        include('./components/footer.php');
     ?>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
