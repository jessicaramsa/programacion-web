<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Libro de visitas avanzado</title>
</head>
<body>
  <h1>Libro de visitas avanzado</h1>
  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    Tu comentario:<br>
    <textarea name="comment" cols="55" rows="4"></textarea><br>
    Tu nombre:<br>
    <input type="text" name="name"><br>
    Tu e-mail:<br>
    <input type="text" name="email"><br>
    <input type="submit" value="Publicar">
  </form>
  <?php
  $file1 = "practica5-oldip_JRS.txt";
  $file2 = "practica5-guestbook_JRS.txt";
  // determinar la dirección IP
  $ip = $_SERVER['REMOTE_ADDR'];
  echo "<p>Tu IP: $ip</p>";
  $fp1 = fopen($file1, "r");
  $oldip = fgets($fp1);
  fclose($fp1);
  echo "<h3>Todos los comentarios</h3>";
  if (isset($_POST['comment']) && $_POST['name'] != "" && $_POST['email'] != "" && $ip != $oldip) {
    $comment = $_POST['comment'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $fp2 = fopen($file2, "r+");
    $old = fread($fp2, filesize($file2));
    $email = "<a href=\"mailto:$email\">$email</a>";
    $dateOfEntry = date("Y-n-j");
    $comment = htmlspecialchars($comment);
    $comment = stripslashes(nl2br($comment));
    $entry = "<p><b>$name</b> ($email) dijo el día <i>$dateOfEntry</i>:<br>$comment</p>\n";
    rewind($fp2);
    fputs($fp2, "$entry \n $old");
    fclose($fp2);
    $fp1 = fopen($file1, "w+");
    fputs($fp1, $ip);
    fclose($fp1);
  }
  readfile($file2);
  ?>
</body>
</html>