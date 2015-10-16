#!/usr/bin/ruby

class Input
    def initialize(id="", tipo="TEXT", valor="", clase="")
        @id = id
        @valor = valor
        @clase = clase
        
        puts "<INPUT id='#{id}' name='#{id}' type='#{tipo}' value='#{valor}' class='#{clase}' placeholder='#{id}' />"
    end
    
    def setValor(valor)
        @valor = valor
        puts "<script>"
        puts "document.getElementById('#{@id}').value = '#{@valor}';"
        puts "</script>"
    end
end

def button(id, valor, clase="", onClick="alert(0)")
	puts "<BUTTON id='#{id}' class='#{clase}' onClick='#{onClick}' >#{valor}</BUTTON>"
end

def echo()
    puts "<br/>"
end

puts "Content-Type: text/html"
puts

puts "Hola mundo desde Ruby " + RUBY_VERSION

puts "<FORM id='formulario' method=post action=formato.php/prueba.php>"
puts "
    <SELECT id='tipo' name='tipo' onChange='destino()'>
        <OPTION value='prueba'>Prueba</OPTION>
        <OPTION value='prueba1'>Prueba</OPTION>
    </SELECT>
"
echo()
Oficio = Input.new("oficio","number")
echo()
Nombre = Input.new("nombre","text")
echo()
Encabezado = Input.new("encabezado", "text")
echo()
Pie = Input.new("pie","text")
echo()
Enviar = Input.new("enviar", "submit", "Crear")
puts "</FORM>"
puts "
    <script>
        function destino(){
            var formato = document.getElementById('tipo').value;
            document.getElementById('formulario').action = '/Formatos/formato.php/'+formato+'.php';
        }
    </script>
"