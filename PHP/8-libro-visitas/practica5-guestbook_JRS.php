<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Un libro de visitas sencillo</title>
</head>
<body>
  <h1>Libro de visitas</h1>
  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    Tu comentario:<br>
    <textarea name="comment" cols="55" rows="4"></textarea><br>
    Tu nombre:<br>
    <input type="text" name="name"><br>
    Tu e-mail:<br>
    <input type="text" name="email"><br>
    <input type="submit" value="Publicar">
  </form>
  <h3>Mostrar todos los comentarios</h3>

  <?php
  $file = "practica5-guestbook_JRS.txt";

  if (isset($_POST['comment']) && $_POST['name'] != "" && $_POST['email'] != "") {
    $comment = $_POST['comment'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    // el archivo se abre para escritura-lectura
    $fp = fopen($file, "r+");
    // leer todos los datos y almacenar en $old
    $old = fread($fp, filesize($file));
    $email = "<a href=\"mailto:$email\">$email</a>";
    $dateOfEntry = date("Y-n-j");

    $comment = htmlspecialchars($comment);
    $comment = stripslashes(nl2br($comment));
    //montar la entrada (entry) del libro de visitas
    $entry = "<p><b>$name</b> ($email) wrote on <i>$dateOfEntry</i>:<br>$comment</p>\n";
    rewind($fp);
    fputs($fp, "$entry \n $old");
    fclose($fp);
  }
  // mostrar el archivo completo
  readFile($file);
  ?>
</body>
</html>