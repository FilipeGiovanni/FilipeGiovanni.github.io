<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    $Notas=[$n1=40,$n2=50,$n3=80,$n4=90];
    foreach($Notas as $nota){

      echo 'Nota tirada: '. $nota;
      echo '<br>';
      $soma=$nota+$soma;

      if($nota>=70){

        echo 'Parabéns! sua nota foi '. $nota;
        echo '<br>';
      }else{

        echo 'Você precisa melhorar. Sua nota foi essa merda: '. $nota;
        echo '<br>';
      }
      $contador=$contador+1;
    }
    echo '<br>';
    $media= $soma/ $contador;
    echo 'A média foi: '. $media;

    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';

    $valores = array(100, 100, 30, 500, 20);
echo "A média aritmética dos valores é: " .
   array_sum($valores) / count($valores);


    ?>

  </body>
</html>
