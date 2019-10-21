<?php
if (isset($_POST['pw'])) {
  $pw = $_POST['pw'];
  if ($pw == "U4x7z") {
    header ("Location: practica2-newpage1_JRS.html");
  } elseif ($pw == "R12Tu") {
    header ("Location: practica2-newpage2_JRS.html");
  } else {
    header ("Location: practica2-sorry_JRS.html");
  }
}
?>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
  <input type="text" name="pw">
  <input type="submit" value="¡Envíalo!">
</form>