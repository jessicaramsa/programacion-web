<?php
include("../../HTML/12-frames/practica12-logos_JRS.html");

// echo
echo "<br>Con echo<br>";
echo "Hola ", "mundo<br>";
/* print */
echo "<br>Con print</br>";
echo "Hola "."mundo<br><br>";

// definir variable constante
echo "Constantes<br>";
define("constante", "hola mundo constante<br><br>");
print constante;

// definir variables
echo "Variables<br>";
$numero = 5;
echo $numero."<br>";
$cadena = "palabra";
echo $cadena."<br>";
$booleana = true;
echo $booleana."<br>";
$colores = array("azul", "morado", "verde");
echo "Posición 2: ".$colores[1]."<br><br>";

// funciones
echo "Funciones<br>";
function suma($x, $y) {
    return $x + $y;
}

$a = 5;
$b = 2;
echo "El resultado de la suma $a + $b = ".suma($a, $b)."<br><br>";

function muestraNombre($titulo = "Sr") {
    print "Estimado $titulo<br>";
}
muestraNombre();
muestraNombre("Bowser");

echo 9 * 2;
echo "<br><br>";
?>