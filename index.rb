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

puts "<FORM method=post action=index.php>"
echo()
Nombre = Input.new("nombre","text")
echo()
Encabezado = Input.new("encabezado", "text")
echo()
Pie = Input.new("pie","text")
echo()
Enviar = Input.new("enviar", "submit", "Crear")
puts "</FORM>"