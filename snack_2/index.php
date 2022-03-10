<?php 
  
  //parametri GET
  $name = $_GET['name'];
  $mail = $_GET['mail'];
  $age = $_GET['age'];

  $showMsg = '';
  $maxLength = 3;

  $nameLength= strlen($name);
  $checkAt = strpos($mail, '@');
  $checkDot = strpos($mail, '.');
  $checkAgeNumb = is_numeric(($age));

  if($nameLength > $maxLength && $checkAt !== false && $checkDot !== false && $checkAgeNumb !== false) {

    $showMsg = 'Accesso riuscito!';
  
  } else {
  
    $showMsg = 'Accesso Negato!';
  
  }

?>

<!DOCTYPE html>
<html>

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= device-width, initial-scale=1.0">

    <title>Check Your Data</title>

  </head>

  <body>

    <!-- MESSAGGIO ESITO ACCESSO -->
    <h1>
        <?php echo $showMsg; ?> 
    </h1>

  </body>

</htm>