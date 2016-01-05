<!DOCTYPE html>
<HTML>
  <HEAD>
    <META charset="utf-8" />
    <SCRIPT TYPE="text/javascript">
      document.write("\
        <STYLE>\
          .cuerpo {\
            width: "+(window.innerWidth-(window.innerWidth*.02))+"px;\
            height: "+(window.innerHeight-(window.innerHeight*.02))+"px;\
          }\
        </STYLE>\
      ");
    </SCRIPT>
  </HEAD>
  <BODY>
    <?php
      if ($_POST['regular']=="Enviar consulta"){
        echo $_POST['nombre'];
        system();
      } else if ($_POST['aprenredX']=="Enviar consulta"){
        $nombre = $_POST['nombre'];
        $comando = 'sed s="__Nombre__"="'.$nombre.'"= Formatos/CXAAsistencia.svg > Constancias/AprenredX_'.$nombre.'.svg';
        system($comando, $result);
        $comando = "inkscape -A Constancias/AprenredX_$nombre.pdf Constancias/AprenredX_$nombre.svg";
        system($comando, $result);
        system("rm Constancias/AprenredX_$nombre.svg", $result);
        echo '
          <iframe src="Constancias/AprenredX_'.$nombre.'.pdf" class="cuerpo"></iframe>
        ';
      } else { ?>

        <DIV id="menu" style="background: blue; width: 98%; position: fixed">
          <A href="#regular">Constancia alumno regular</A>
          <A href="#aprenredX">Constancia alumno aprenred X</A>
        </DIV>

        <DIV id="regular" class="cuerpo" style="background: green;">
          <FORM method=post action="." style="position: absolute; margin: 20% 40%">
            Nombre: <INPUT type=text name="nombre" /><br/>
            Codigo: <INPUT type=text name="codigo" /><br/>
            <INPUT type=submit name="regular" />
          </FORM>
        </DIV>

        <DIV id="aprenredX" class="cuerpo" style="background: cyan;">
          <DIV>
            <FORM method=post action="." style="position: absolute; margin: 20% 40%">
              Nombre: <INPUT type=text name="nombre" /><br/>
              <INPUT type=submit name="aprenredX" />
            </FORM>
          </DIV>         
        </DIV>

      <?php }
    ?>
  </BODY>
</HTML>
