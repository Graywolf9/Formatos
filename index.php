<?php
    $encabezado = $_POST["encabezado"];
    $pie = $_POST["pie"];
    echo $encabezado;
    echo "<br/>";
    echo $pie;
    echo "<br/>";
    system ("ls", $lista);
    echo $lsita;
    system ("echo ".$encabezado. " >> ejemlo.txt", $ejemplo);
    echo $ejemplo;
?>