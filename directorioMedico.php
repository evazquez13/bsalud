  <!DOCTYPE html>
<html class="no-js">
<head charset="UTF-8">
  <link rel="shortcut icon" href="https://www.segurodeautobancomer.com/wp-content/uploads/2016/10/favicon.png">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/custom.css">
  <link rel="stylesheet" href="css/menu.css">

<script type="text/javascript" src="http://www.bbvasegurossalud.com.mx/DirectorioMedico/js/xhr.js"></script>
<script type="text/javascript" src="http://www.bbvasegurossalud.com.mx/DirectorioMedico/js/funcsAJAX.js"></script>
<script type="text/javascript" src="http://www.bbvasegurossalud.com.mx/DirectorioMedico/js/ajaxbase.js"></script>
<script language="JavaScript" type="text/JavaScript">
</script>
<!-- (I) Opimentel, 1197 - Cirugias TMKT - Agentes, 07/03/2013 -->
<script type="text/javascript" src="../js/funcsGlobales.js"></script>
<!-- (F) Opimentel, 1197 - Cirugias TMKT - Agentes, 07/03/2013 -->

<script language="JavaScript" type="text/JavaScript">
//-->
 function espera() {
  document.getElementById("idEspera").style.display = '';
}

 function muestra() {
  document.getElementById("idEspera").style.display = 'none';
}


function pant_pop(url){
 var hWnd = window.open(url,"","width=710,height=430,top=20,left=50,status=no,resizable=no,scrollbars=yes");
 if ((document.window != null) && (!hWnd.opener))
 hWnd.opener = document.window;
 }

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_showHideLayers() { //v6.0
  var i,p,v,obj,args=MM_showHideLayers.arguments;
  for (i=0; i<(args.length-2); i+=3) if ((obj=MM_findObj(args[i]))!=null) { v=args[i+2];
    if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v=='hide')?'hidden':v; }
    obj.visibility=v; }
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}


function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}

function GetPoliza(){
  
  var objPoliza=document.getElementById('idpoliza').value;
  var sUsuario = '';
  var sPsw = '';
    
  if(objPoliza == ''){
    alert("Debe insertar un Número de Poliza");
    return false;
  } 
  enviarPoliza(objPoliza,sUsuario,sPsw);
    
}//fin funcion

function procesoDistribucion(){
// (I) AILuna 20130527 se agrega la validacion de "undefined"
    if(document.getElementById("v_regresaGetPoliza").value == "-1" || document.getElementById("v_regresaGetPoliza").value == "undefined"){
// (F) AILuna 20130527 se agrega la validacion de "undefined"
    alert("Número de Póliza Inexistente o Incorrecto \n Favor de Verificar...");
    document.getElementById("idEspera").style.display = 'none';
    return false
  }
  else{
    document.getElementById("idEspera").style.display = '';
    document.logon.submit();
  }
}

function ssubmit()
{
  document.logon.submit();
}

function CheckKey() {
  if (event.keyCode == 13) {
    document.getElementById("Button1").focus();
  }
}

//(I)LHerrera 1270 - Cambio de Logo y Nombre 23/07/2013
//redimencionamiento del iframe segun el contenido
window.onload = function() {
   window.parent.document.getElementById('contenedorSitio').height = document.getElementById('Contenido').offsetHeight;
}
//(F)LHerrera 1270 - Cambio de Logo y Nombre 23/07/2013

</script>

<body>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W9M4QL" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<div class="blue-full-width-line-bancomer"></div>
<header class="hidden-xs body-header">

<div class="container">
  <ul class="top-menu">
     <li>
       <i class="sprite-iconos-bbva sprite-iconos-bbva-ico-ayuda"></i>
       <a href="#" class="ico-ayuda">Ayuda Bancomer</a></li>     
     <li>
       <i class="sprite-iconos-bbva sprite-iconos-bbva-ico-lineabbva"></i>
          Contáctanos 01 800 8000446</li>
  </ul>
        
  <div class="logo-container">
    <a class="navbar-trigger">&nbsp;</a>  
    <a href="/" class="logo-cabecera"><img height="90" class="hidden-xs" src="https://www.segurodeautobancomer.com/wp-content/uploads/2016/09/icon_logo.png"></a>
  </div>
  
  <!-- color bar -->
  <div class="color-bar">
    <span class="first">&nbsp;</span> <span class="second">&nbsp;</span> <span class="third">&nbsp;</span> <span class="fourth">&nbsp;</span> <span class="fifth">&nbsp;</span> <span class="sixth">&nbsp;</span>
  </div>
  
  <div class="main-menu">
<div class="header-buttons">
    <form action="/meta/buscador/buscador.jsp">
    
    <div class="move-to" data-device="tablet phone" data-element="login-form">
        <div id="form-buttonaccess" class="hidden form-client-access" style="left: -96px; width: 235px; position: absolute;">
            <aside>                
            </aside>
        </div>
    </div> 
            <p class="auto-menu">Seguros</p>
      <input type="search" id="q_head" name="q" class="form-control input-search ui-autocomplete-input" autocomplete="off"><span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
    </form>   
    
    </div>

<div class="grouper" role="navigation">

  <ul id="submenu-Personas" aria-labelledby="Personas" class="sub-menu with-levels active">
            <li class="home">
              <a href="#">
                <img src="https://www.segurodeautobancomer.com/wp-content/uploads/2016/10/icon_home.png">
                <span class="text">Inicio</span>
              </a>
            </li>
            <li class="">
              <a href="#">
                Misión - Visión 
              </a>
            </li>
            <li class="with-sub-menu">
              <a href="#" data-original-title="" title="">
                <i class="icon-24 white sprite-PrestamoPersonal-24x"></i>
                Seguro para personas
              </a>
              <div class="row items-1">
                <div class="col-lg-12">
                  <ul>
                    <li>
                      <a href="#" data-original-title="" title="">Salud Asegurada</a>
                    </li>
                    <li>
                      <a href="#" data-original-title="" title="">Gastos Médicos Mayores Indemnizatorio</a>
                    </li>
                    <li>
                      <a href="#" data-original-title="" title="">CirugíaSegura Bancomer</a>
                    </li>
                    <li>
                      <a href="#">Gastos Médicos Individual Básico</a>
                    </li>
                    <li>
                      <a href="#">Salud Dental</a>
                    </li>
                    <li>
                      <a href="#">Seguro Individual o Familiar</a>
                    </li>
                  </ul>
                </div>
              </div>              
            </li>
            <li class="with-sub-menu">
              <a href="#" data-original-title="" title="">
                <i class="icon-24 white sprite-PrestamoPersonal-24x"></i>
                Seguro Empresas
              </a>
              <div class="row items-1">
                <div class="col-lg-12">
                  <ul>
                    <li>
                      <a href="#" data-original-title="" title="">Gastos Médicos Mayores</a>
                    </li>
                    <li>
                      <a href="#" data-original-title="" title="">Salud</a>
                    </li>                    
                  </ul>
                </div>
              </div>              
            </li>
            <li class="">
              <a href="#">
                Acceso Agentes
              </a>
            </li>
        </ul>
</div>
</div>
    </header>  


<div class="visible-xs container">
  <div class="row">
  <div class="col-sm-5"><img class="hidden-xs" src="https://www.segurodeautobancomer.com/wp-content/uploads/2016/09/icon_logo.png"></div>
  <div id="navbar" class="collapse navbar-collapse col-md-offset-1 col-md-5">
  <!-- <div class="container  menu menublanco"> -->
    <ul class="nav navbar-nav navbar-right ">
     <p class="text-right auto-menu">Seguros</p>
    </ul>     

  </div>
  </div>
</div>
  
<nav class="navbar navbar-default visible-xs">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    <a class="navbar-brand" href="#"><img class="visible-xs" style="top: -17px; position: relative;" src="https://www.segurodeautobancomer.com/wp-content/uploads/2016/10/logo-xs.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav col-md-11">
        <li class="col-md-1 text-center sp"><a href="#"><img src="https://www.segurodeautobancomer.com/wp-content/uploads/2016/10/icon_home.png"> </a></li>
        <li class="col-md-3 text-center sp"><a href="#">Misión/Visión</a></li>
        <li class="col-md-3 text-center dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Seguro para personas<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a class="text-center" href="#">Salud asegurada</a>
            </li>
            <li><a class="text-center" href="#">Gastos Médicos Mayores Indemnizatorio</a>
            </li>
            <li><a class="text-center" href="#">CirugíaSegura Bancomer</a></li>
            <li><a class="text-center" href="#">Gastos Médicos Individual Básico</a></li>
            <li><a class="text-center" href="#">Salud Dental</a></li>
            <li><a class="text-center" href="#">Seguro Individual o Familiar</a></li>
          </ul>
        </li>

    <!-- <li class="col-md-3 text-center sp"><a href="#">Siniestros</a></li> -->
    <li class="col-md-3 text-center dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Seguro Empresas<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a class="text-center" href="#">Gastos Médicos Mayores</a>
            </li>
            <li><a class="text-center" href="#">Salud</a>
            </li>
          </ul>
        </li>
</nav>
</body>


<div class="container">
  <div class="row gmmCabecera">
    <div class="col-md-12">
      <p><a href="#">Seguros </a>> Directorio de Servicios Médicos.</p>
    </div>
 </div>
 <div class="row gmmCabecera">
  <div class="col-md-12">
    <h1 class="text-left">Directorio de Servicios Médicos.</h1>
    <h2 class="text-left">Salud o Gastos Médicos</h2> 
  </div>
  <div class="col-md-12 gmmCabecera">
    <div class="col-md-8 col-md-offset-2 formDirectorio">
      <form name="logon" action="redservicios.asp" method="post" target="_self" onkeydown="CheckKey(event);">
   <!--<input type="text" name="ValorPoliza" id="ValorPoliza">-->
   <input type="hidden" name="tipoSeguroIndex" id="idtipoSeguroIndex">
   <input type="hidden" name="TipoServicio" id="v_regresaGetPoliza">
      
      <p>En esta sección podrá encontrar los datos de médicos, laboratorios, gabinetes de radiología, etc. afiliados a la Red de Seguros Salud Bancomer.</p>
      <h2>Escriba su Número de Póliza</h2>
      <p>Este lo encuentra en su credencial de Seguros Salud Bancomer<br>y en su Certificado Individual.</p>
      <div class="col-md-12">
        <div class="col-md-6">
          <input type="textbox" name="poliza" id="idpoliza" class="form-control" size="25" maxlength="19">&nbsp;
        </div>
        <div class="col-md-6">
          <input type="button" value="Buscar" id="Button1" name="Button1" onclick="GetPoliza();" class="boton-azul">  
        </div>
      </div>
   </form>
    </div>
  </div>
 </div>
</div>


  





<div class="row separador"></div>
<div style="background: #f2f2f2; width: 100%;">
  <div class="container footer">
  <div class="row arealink">
    <div class="col-md-4 col-xs-6 infoAyuda">
      <h4>SERVICIOS</h4>
      <ul>
        <li><a target="_BLANK" href="https://www.segurosbancomer.com.mx/seguros/tleu/segurosban/servicios/comprobantes/index.jsp">Comprobantes Fiscales</a></li>
        <li><a target="_BLANK" href="https://www.segurosbancomer.com.mx/seguros/tleu/segurosban/servicios/cambios/index.jsp">Solicitud de cambios</a></li>
        <li><a target="_BLANK" href="https://www.segurosbancomer.com.mx/seguros/tleu/segurosban/servicios/une/index.jsp">UNE</a></li>
        <li><a target="_BLANK" href="https://www.segurosbancomer.com.mx/seguros/tleu/segurosban/servicios/cancelacion-polizas/index.jsp">Cancelación de Póliza</a></li>
        <li><a target="_BLANK" href="https://www.segurosbancomer.com.mx/seguros/tleu/segurosban/buro-ef.jsp">Buró de Entidades Financieras</a></li>
      </ul>
    </div>
    <div class="col-md-4 col-xs-6 infoAyuda">
      <h4>INFORMACIÓN RELEVANTE</h4>
      <ul>
        <li><a target="_BLANK" href="https://www.segurosbancomer.com.mx/seguros/tleu/segurosban/legal.jsp">Legal</a></li>
        <li><a target="_BLANK" href="https://www.segurosbancomer.com.mx/seguros/tleu/segurosban/privacidad.jsp">Aviso de Privacidad</a></li>
        <li><a data-toggle="modal" data-target="#condicionesgrales">Condiciones legales</a></li>
        <li><a target="_BLANK" href="https://www.segurosbancomer.com.mx/seguros/tleu/segurosban/derechos.jsp">Derechos ARCO</a></li>
        <li><a target="_BLANK" href="https://www.segurosbancomer.com.mx/seguros/tleu/segurosban/seguridad.jsp">Seguridad</a></li>
        <li><a target="_BLANK" href="#">Términos y condiciones</a></li>
        <li><a target="_BLANK" href="#">Mapa del sitio</a></li>
        <li><a target="_BLANK" href="https://www.segurosbancomer.com.mx/seguros/tleu/segurosban/basicos-estandarizados.jsp">Básicos Estandarizados</a></li>
      </ul>
    </div>
    <div class="col-md-4 col-xs-6 infoAyuda">
      <h4>INFORMACIÓN CORPORATIVA</h4>
      <ul>
        <li><a target="_BLANK" href="https://www.segurosbancomer.com.mx/seguros/tleu/segurosban/informacion-corporativa/index.jsp">Información Financiera</a></li>
        <li><a target="_BLANK" href="http://www.bancomer.com/nuestrom/index.jsp?nivel1=">Acerca del Grupo BBVA Bancomer</a></li>
        <li><a target="_BLANK" href="http://www.bancomer.com/index.jsp">BBVA.com</a></li>
        <li><a target="_BLANK" href="http://ec2-52-49-166-51.eu-west-1.compute.amazonaws.com/wp-content/uploads/2016/10/CG-ASD-26OCt-.pdf">Condiciones generales</a></li>
      </ul>

    </div>  

    
       
  </div>
  

</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="js/script.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
