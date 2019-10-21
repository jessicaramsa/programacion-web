<?php
echo "<h1>análisis de formularios (analisis2.php)</h1>";
if ($_POST['gender'] == 0) {
  echo "Hola Sr. ";
} else {
  echo "Hola Sra. ";
}
echo "<b>{$_POST['lastName']}</b>, encantado de saludarte.\n";
?>