<?php
if (date("H") <= 11) {
  echo "¡Buenos días!";
} elseif (date("H") <= 14) {
  echo "¡Tómate un descaso!";
} elseif (date("H") <= 17) {
  echo "¿Todavía sigues trabajando?";
} else {
  echo "¡Buenas tardes!";
}
?>