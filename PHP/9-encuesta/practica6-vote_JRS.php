<?php
setcookie("check", 1);
if (isset($_POST['submit'])) {
  setcookie("voted", 1);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>encuesta de opinión</title>
</head>
<body>
  <h1>Encuesta</h1>
  <h3>¿Qué opinas de los nuesvo tranvías de la ciudad de Barcelona?</h3>
  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <input type="radio" name="reply" value="0">
    Una idea excelente, los tranvías son rápidos y eficientes.<br>
    <input type="radio" name="reply" value="1">
    Me da igual, yo siempre voy en coche.<br>
    <input type="radio" name="reply" value="2">
    ¡Barcelona no necesita tranvías!
    <br><br>
    <?php
    //if (empty($_POST['submit']) && empty($_COOKIE['voted'])) {
    ?>
    <input type="submit" name="submit" value="¡Vota!">
    <?php
    //} else {
      echo "<p>Gracias por tu voto.</p>\n";
      //if (isset($_POST['reply']) && isset($_COOKIE['check']) && empty($_COOKIE['voted'])) {
      if (isset($_POST['reply'])) {
        $file = "practica6-results_JRS.txt";
        $fp = fopen($file, "r+");
        $vote = fread($fp, @filesize($file));
        //descomponer la string del archivo en array con coma como separador
        $arr_vote = explode(",", $vote); // explode convierte la string en array
        $reply = $_POST['reply'];
        $arr_vote[$reply]++;
        // volver a montar la string
        $vote = implode(",", $arr_vote); // implode incula elementos de la array a string
        rewind($fp);
        // escribir nueva string en el archivo
        fputs($fp, $vote);
        fclose($fp);
      }
    //}
    ?>
  </form>
  <p>
    [<a href="practica6-results_JRS.php" target="_blank">ver resultados de la encuesta</a>]
  </p>
</body>
</html>