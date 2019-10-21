<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>encuesta de opinión</title>
</head>
<body>
  <h1>Resultados de la encuesta</h1>
  <?php
  $file = "practica6-results_JRS.txt";
  $fp = fopen($file, "r");
  $vote = fread($fp, @filesize($file));
  fclose($fp);
  $vote = explode(",", $vote);
  // cantidad total de votos
  $allvotes = $vote[0] + $vote[1] + $vote[2];
  // longitud máxima de la barra
  $length = 400;
  // cuotas
  $length0 = $vote[0] * $length / $allvotes;
  $length1 = $vote[1] * $length / $allvotes;
  $length2 = $vote[2] * $length / $allvotes;
  // redondeo de valores
  $length0 = round($length0);
  $length1 = round($length1);
  $length2 = round($length2);
  // calcular y redondear porcentaje
  $percent0 = 100 * $vote[0] / $allvotes;
  $percent0 = round($percent0, 0);
  $percent1 = 100 * $vote[1] / $allvotes;
  $percent1 = round($percent1, 0);
  $percent2 = 100 * $vote[2] / $allvotes;
  $percent2 = round($percent2, 0);
  // prueba
  //echo "$length0 $length1 $length2";
  ?>
  <p>Total de votos: <?php echo $allvotes;?></p>
  <h3>Resultados</h3>
  <table border="0">
    <tr>
      <td><b>Opción 1</b></td>
      <td>&nbsp;</td><td width="<?php echo $length0;?>" bgcolor="pink">&nbsp;</td>
      <td>&nbsp;<?php echo "$percent0%";?>&nbsp;(<i><?php echo $vote[0];?></i>)</td>
    </tr>
  </table>
  <table border="0">
    <tr>
      <td><b>Opción 2</b></td>
      <td>&nbsp;</td><td width="<?php echo $length1;?>" bgcolor="purple">&nbsp;</td>
      <td>&nbsp;<?php echo "$percent1%";?>&nbsp;(<i><?php echo $vote[1];?></i>)</td>
    </tr>
  </table>
  <table border="0">
    <tr>
      <td><b>Opción 3</b></td>
      <td>&nbsp;</td><td width="<?php echo $length2;?>" bgcolor="blue">&nbsp;</td>
      <td>&nbsp;<?php echo "$percent2%";?>&nbsp;(<i><?php echo $vote[2];?></i>)</td>
    </tr>
  </table>
</body>
</html>