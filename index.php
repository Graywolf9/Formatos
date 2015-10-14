<?php
    $encabezado = $_POST["encabezado"];
    $pie = $_POST["pie"];
    echo $encabezado;
    echo "<br/>";
    echo $pie;
    echo "<br/>";
    system ("ls", $lista);
    echo $lsita;
    echo "<br/>";
    system ("echo ".$encabezado. " >> ejemlo.txt", $ejemplo);
    echo "<br/>";
    echo $ejemplo;
    system ("touch ejemplo.txt", $ejemplo);
    echo "<br/>";
    echo $ejemplo;
?>