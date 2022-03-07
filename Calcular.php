<?php
    $numero1=$_GET['n1'];
    $numero2=$_GET['n2'];
    $op=$_GET['Opcion'];
    
    if($op=='Suma'){
      $total=$numero1+$numero2;
    }
    else if($op=='Resta'){
      $total=$numero1-$numero2;
    }
    else if($op=='Multiplicacion'){
      $total=$numero1*$numero2;
    }
    else if($op=='Division'){
      $total=$numero1/$numero2;
    }
    echo'<h1> El resultado es: '.$total.'</h1>';
    echo'<br><br><a href="index.html">Ir a inicio</a>';
?>

  

<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

      <!--JavaScript at end of body for optimized loading-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
  </html>
        