<?php
    $encabezado = $_POST["encabezado"];
    $pie = $_POST["pie"];
    echo $encabezado;
    echo "<br/>";
    echo $pie;
    echo "<br/>";
    system ("cp prueba.svg oficios/1.svg", $result);
    if ($result==0) echo "copia realizada con exito";
    system ("echo $(sed s=\"__Encabezado__\"=\"$encabezado\"= oficios/1.svg) > oficios/1.svg", $result);
    if ($result==0) echo "sustitución realizada con exito";
    system ("inkscape -A oficios/1.pdf oficios/1.svg", $result);
    if ($result==0) echo "archivo creado con exito";
?>