<?php 
  $soap_request = '<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <Encabezado xmlns="http://directoriomedico.vitamedica.com.mx/">
      <Usuario>preventis</Usuario>
      <Contrasena>PrvtS/2012#</Contrasena>
      <MensajeError></MensajeError>
    </Encabezado>
  </soap:Header>
  <soap:Body>
    <ObtenTipoSeguro xmlns="http://directoriomedico.vitamedica.com.mx/">
      <poliza>PB1215</poliza>
    </ObtenTipoSeguro>
  </soap:Body>
</soap:Envelope>';
 
$headers = array(
     "Content-type: text/xml",
     "Accept: text/xml",
     "Cache-Control: no-cache",
     "Pragma: no-cache",
     "SOAPAction: http://directoriomedico.vitamedica.com.mx/ObtenTipoSeguro", 
     "Content-length: ".strlen($soap_request),
                    ); 
$url = "https://www.membresiavitamedica.com.mx/ws_dirmedicosweb/DirectorioMedico.asmx?wsdl";
 $ch = curl_init($url);
   
 curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
 curl_setopt($ch, CURLOPT_POST, 1);
 curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); 
 curl_setopt($ch, CURLOPT_POSTFIELDS, $soap_request);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($ch, CURLOPT_VERBOSE, true);
 curl_setopt($ch, CURLOPT_TIMEOUT,10);
 
# $output = curl_exec($ch);
  $output = curl_exec($ch);
 
 
var_dump($output);
echo("
RESPONSE FROM SERVER :
" .htmlspecialchars($output) . "
");

$xml=simplexml_load_file($output) or die("Error: Cannot create object");
echo $xml->pObtenTipoSeguro[0]->poliza;
curl_close($ch);



 ?>