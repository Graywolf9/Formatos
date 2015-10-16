<?php
    $file = $_POST["nombre"];
    $ruta = "/Formatos/";
    $argumentos[0] = $encabezado = "\"__Encabezado__\"=\"".$_POST["encabezado"]."\"";
    $argumentos[1] = $pie = "\"__Pie__\"=\"".$_POST["pie"]."\"";
    
    system ("cp formato/prueba.svg oficio/$file.svg", $result);
    for ($x=0;$x<count($argumentos);$x++){
        system ("echo $(sed s=$argumentos[$x]= oficio/$file.svg) > oficio/$file.svg", $result);
    }
    system ("inkscape -A oficio/$file.pdf oficio/$file.svg", $result);
    system ("rm -f oficio/$file.svg", $result);
    
    echo "<iframe src=oficio/$file.pdf style='width: 98%; height: 98%'></iframe>";
?>