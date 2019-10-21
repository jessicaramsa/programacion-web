<?php
echo "<h1>análisis de formularios (análisis3.php)</h1>";
if (isset($_POST['gender']) && isset($_POST['lastName']) && $_POST['lastName'] != "") {
  if ($_POST['gender'] == 0) {
    echo "Hola Sr. ";
  } else {
    echo "Hola Sra. ";
  }
  echo "<b>{$_POST['lastName']}</b>, encantado de saludarte.\n";
} else {
  echo "Por favor rellena todos los campos";
}
?>