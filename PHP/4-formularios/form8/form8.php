<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Formulario HTML</title>
</head>
<body>
  <h1>nl2br()</h1>
  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <input type="radio" name="gender" value="0" <?php
    if (isset($_POST['gender']) && $_POST['gender'] == 0) {
      echo "checked='checked'";
    }
    ?>>Sr.
    <input type="radio" name="gender" value="1" <?php
    if (isset($_POST['gender']) && $_POST['gender'] == 1) {
      echo "checked='checked'";
    }
    ?>>Sra.<br>
    Tu nombre: <input type="text" name="lastName" value="<?php
    if (isset($_POST['lastName'])) {
      echo $_POST['lastName'];
    }
    ?>">
    <br>Tu comentario:<br>
    <textarea name="comment" cols="60" rows="4">
      <?php
      if (isset($_POST['comment'])) {
        $comment = $_POST['comment'];
        $comment = htmlspecialchars($comment);
        $comment = stripslashes($comment);
        echo $comment;
      }
      ?>
    </textarea>
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
      $Name = $_POST['lastName'];
      $Name = htmlspecialchars($Name);
      $Name = stripslashes($Name);
      echo "<b>{$Name}</b>, encantado de saludarte.\n";
      echo "<br><b>Has dicho:</b><br>\n";
      $comment = nl2br($comment);
      echo $comment;
    } else {
      if (isset($_POST['submitbutton'])) {
        echo "Por favor rellena todos los campos";
      }
    }
    ?>
  </p>
</body>
</html>