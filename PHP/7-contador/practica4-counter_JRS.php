<p>Cantidad de visitas:
  <b><?php
    $fp = fopen("practica4-counter_JRS.txt", "r+");
    $counter = fgets($fp, 7);
    echo $counter;
    $counter++;
    rewind($fp);
    fputs($fp, $counter);
    fclose($fp);
  ?></b>
</p>