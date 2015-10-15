<?php
    $file = $_POST["nombre"];
    $encabezado = $_POST["encabezado"];
    $pie = $_POST["pie"];
    
    echo $encabezado."<br/>";
    echo $pie."<br/>";
    
    system ("cp formato/prueba.svg oficio/$file.svg", $result);
    if ($result==0) echo "copia realizada con exito<br/>";
    system ("echo $(sed s=\"__Encabezado__\"=\"$encabezado\"= oficio/$file.svg) > oficio/$file.svg", $result);
    if ($result==0) echo "sustitucion realizada con exito<br/>";
    system ("inkscape -A oficio/$file.pdf oficio/$file.svg", $result);
    if ($result==0) echo "archivo creado con exito<br/>";
    system ("rm -f oficio/$file.svg", $result);
    echo $result;
?>