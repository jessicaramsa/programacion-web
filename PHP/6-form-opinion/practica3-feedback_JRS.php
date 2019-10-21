<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Un pequeño mailer para recopilar la opinión</title>
</head>
<body>
  <h1>Feedback-Mailer</h1>
  <p>¡Envíame un e-mail!</p>
  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    Tu dirección de e-mail:
    <input type="text" name="Mail"><br>
    Tu comentario:<br>
    <textarea name="message" cols="50" rows="5"></textarea><br>
    <input type="submit" value="Enviar">
  </form>
  <?php
    $receiverMail = "jessicaramsa@gmail.com";
    if (isset($_POST['Mail']) && $_POST['Mail'] != "") {
      if (@mail($receiverMail, "¡Tienes correo nuevo!", $_POST['message'], "From: $_POST[Mail]")) {
        echo "<p>Gracias por enviarme tu opinión.</p>\n";
      } else {
        echo "<p>Lo siento, ha ocurrido un error.</p>\n";
      }
    }
  ?>
</body>
</html>