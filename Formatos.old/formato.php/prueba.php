<?php
    $file = $_POST["tipo"]."_".$_POST["oficio"]."_".date_timestamp_get(date_create());;
    $ruta = "../"; // /Formatos/
    $formato = "prueba";
    $argumentos[0] = $encabezado = "\"__Encabezado__\"=\"".$_POST["encabezado"]."\"";
    $argumentos[1] = $pie = "\"__Pie__\"=\"".$_POST["pie"]."\"";
    
    system ("cp ".$ruta."formato/".$formato.".svg ".$ruta."oficio/$file.svg", $result);
    for ($x=0;$x<count($argumentos);$x++){
        system ("echo $(sed s=$argumentos[$x]= ".$ruta."oficio/$file.svg) > ".$ruta."oficio/$file.svg", $result);
    }
    system ("inkscape -A ".$ruta."oficio/$file.pdf ".$ruta."oficio/$file.svg", $result);
    system ("rm -f ".$ruta."oficio/$file.svg", $result);
    
    echo "<iframe src=".$ruta."oficio/$file.pdf style='width: 98%; height: 98%'></iframe>";
?>