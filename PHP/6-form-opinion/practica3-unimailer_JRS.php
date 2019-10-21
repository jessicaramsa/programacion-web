<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Formmailer</title>
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
  $subject = "unimailer";
  $message = "Datos enviados:\n\n";

  foreach($_POST as $name => $value) {
    $message .= "$name: $value\n";
  }

  if (isset($_POST['Mail']) && $_POST['Mail'] != "") {
    $poster = $_POST['Mail'];
    if (@mail($receiverMail, $subject, $message, "From: $poster")) {
      echo "<h1>Gracias por hacerme llegar tu opinión.</h1>\n";
      echo "<p>Tu mensaje ha sido enviado.</p>\n";
    } else {
      echo "<h1>Lo sentimos, no se pudo enviar tu mensaje.</h1>\n";
    }
  } else {
    echo "<h1>No te olvides de rellenar tu dirección de correo electrónico.</h1>\n";
  }
  ?>
</body>
</html>