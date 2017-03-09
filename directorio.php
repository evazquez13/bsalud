<?php

$cliente = new SoapClient("https://www.membresiavitamedica.com.mx/ws_dirmedicosweb/DirectorioMedico.asmx?wsdl");

//obtener las funciones a las que puedo llamar
$funciones = $cliente->__getFunctions();

echo "<h2>Funciones del servicio</h2>";
foreach ($funciones as $funcion) {
	echo $funcion . "<br />";
}

//obtener los tipos de datos involucrados
echo "<h2>Tipos en el servicio</h2>";
$tipos = $cliente->__getTypes();

foreach ($tipos as $tipo) {
	echo $tipo . "<br />";
}
