<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
  <title>¿Conoces la contraseña?</title>
</head>
<body>
  <h1>¿Conoces la contraseña? (pass2.php)</h1>
  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <input type="text" name="pw">
    <input type="submit" value="¡Envíalo!">
  </form>
  <?php
    if (isset($_POST['pw'])) {
      $pw = $_POST['pw'];
      switch ($pw) {
        case "U4x7z":
  ?>
  <h3>1. sección protegida</h3>
  <p>Contenido interesante...</p>
  <?php
        break;
      case "R12Tu":
  ?>
  <h3>2. sección protegida</h3>
  <p>Contenido interesante...</p>
  <?php
        break;
      default:
  ?>
  <h3>Lo siento, no puedes entrar.</h3>
  <p>Está visto que no sabes la contraseña.</p>
  <?php
      }
    }
  ?>
</body>
</html>