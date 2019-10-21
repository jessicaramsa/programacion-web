<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Formulario HTML</title>
</head>
<body>
  <h1>Todo en una página(form4.php)</h1>
  <form action="form4.php" method="post">
    <input type="radio" name="gender" value="0">Sr.
    <input type="radio" name="gender" value="1">Sra.<br>
    Tu nombre:<br>
    <input type="text" name="lastName">
    <input type="submit" name="submitbutton" value="Enviar">
  </form>
  <p>
    <?php
    if (isset($_POST['gender']) && isset($_POST['lastName']) && $_POST['lastName'] != "") {
      if ($_POST['gender'] == 0) {
        echo "Hola Sr. ";
      } else {
        echo "Hola Sra. ";
      }
      echo "<b>{$_POST['lastName']}</b>, encantado de saludarte.\n";
    } else {
      if (isset($_POST['submitbutton'])) {
        echo "Por favor rellena todos los campos";
      }
    }
    ?>
  </p>
</body>
</html>