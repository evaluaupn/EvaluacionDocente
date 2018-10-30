<?php 
require_once('Connections/mysql.php'); 
?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}
require_once('Connections/mysql.php'); 
if (($_POST["MM_insert"]) && ($_POST["MM_insert"] == "form1")) {
	if ($_POST['ca'] >50 || $_POST['ca1'] >50 || $_POST['ca2'] >50 || $_POST['cb'] >50 || $_POST['cc'] >50 || $_POST['cd'] >50 || $_POST['ca'] <0 || $_POST['ca1'] <0 || $_POST['ca2'] <0 || $_POST['cb'] <0 || $_POST['cc'] <0 || $_POST['cd'] <0)
  {
 echo '<script language="javascript">
alert("La calificacion es entre 0 y 50,   ¡...La calificacion NO se guardo...!.    ¡...Sera redireccionado para volver a entrar Gracias...!.");
window.location = "index.php";
</script>';
  }
   else
  {
  $insertSQL = sprintf("INSERT INTO fc (nombre, cedula, programa, ca, ca1, ca2, cb, cc, cd, ob, cje) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['nombre'], "text"),
                       GetSQLValueString($_POST['cedulap'], "text"),
                       GetSQLValueString($_POST['programa'], "int"),
                       GetSQLValueString($_POST['ca'], "int"),
                       GetSQLValueString($_POST['ca1'], "int"),
                       GetSQLValueString($_POST['ca2'], "int"),
                       GetSQLValueString($_POST['cb'], "int"),
                       GetSQLValueString($_POST['cc'], "int"),
                       GetSQLValueString($_POST['cd'], "int"),
                       GetSQLValueString($_POST['ob'], "text"),
                       GetSQLValueString($_POST['cje'], "int"));		  
  mysql_select_db($database_mysql, $mysql);
  @$Result1 = mysql_query($insertSQL, $mysql) or die(@mysql_error());
  ?>
  <script language="javascript">
alert('la calificacion se ha registrado correctamente');
</script>
  <?php
}
}

include ("conexionfed.php");
$sql = " select * from datosp where nombre = '{$_POST['doc']}' "; 
$sql = mysql_query($sql) or die(mysql_error("OCURRIO UN PROBLEMA CON LA CONEXION"));
while($row = mysql_fetch_array($sql))
{
$cedulap=$row[cedula];
$nombre=$row[nombre];
$programa=$row[programa];
$dedicacion=$row[dedicacion];
$vinculacion=$row[vinculacion];
}
?>
<html>
<head>
<title>formato C evaluacion jefe inmediato</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<!-- Esto es para bloquear la tecla enter para que no envie el formulario por error-->
<script>
function pulsar(e) {
    tecla=(document.all) ? e.keyCode : e.which;
  if(tecla==13) return false;
}
</script>
<body onkeypress="return pulsar(event)"> 
<!-- Esto es para bloquear la tecla enter para que no envie el formulario por error--> 
<form name="form1" method="post" action="">
	<input name="nombre" type="hidden" id="nombre" value="<?php echo $nombre ; ?>" >
	<input name="cedulap" type="hidden" id="cedulap" value="<?php echo $cedulap ; ?>" >
	<input name="programa" type="hidden" id="programa" value="<?php echo $programa ;	?>" >
	<input name="cje" type="hidden" id="programa" value="<?php echo $_POST['codigo'] ; ?>" >
  <table width="71%" height="120" border="2" align="center">
    <tr> 
    <td> <div align="center"><img src="fb1.JPG" width="268" height="51"><br>
        FACULTAD DE EDUCACI&Oacute;N<br>
        DEPARTAMENTO DE PSICOPEDAGOG&Iacute;A<br>
      </div></td>
    <td><div align="center">
        <p>Calificaci&oacute;n del desempe&ntilde;o del <br>
          Profesor universitario </p>
        <p>FORMATO C: EVALUACI&Oacute;N JEFE INMEDIATO</p>
      </div>
      </td>
  </tr>
</table>
<p align="justify">Apreciado(a) jefe (a): Lea con atenci&oacute;n los aspectos 
  contemplados en este formato y proceda a asignar el valor, en la escala de 0 
  a 50, que usted considere pertinente dar a cada uno de los numerales que indagan 
  sobre el desempe&ntilde;o del profesor en los aspectos que apliquen seg&uacute;n 
  los compromisos adquiridos en el plan de trabajo: docencia, investigaci&oacute;n, 
  proyectos de extensi&oacute;n o actividades de gesti&oacute;n institucional, 
  objeto de la presente evaluaci&oacute;n. A los numerales que no correspondan 
  con el desempe&ntilde;o del docente, escriba no aplica (NA), lo cual no altera 
  el promedio.</p>
  <table width="89%" height="80" border="2" align="center">
    <tr> 
      <td width="21%"><div align="left">Nombre del profesor:</div></td>
      <td width="48%"><div align="center"><?php echo $nombre ?></div></td>
      <td width="12%"><div align="center">C.C </div></td>
      <td width="19%"><div align="center"><?php echo $cedulap ?></div></td>
    </tr>
    <tr> 
      <td><div align="left">Programa curricular: </div></td>
      <td><div align="center"><?php 
	if ($programa==50)
	{
	echo "Educacion Especial" ;
	}
	if ($programa==51)
	{
	echo "Psicologia y Pedagogia" ;
	}
	if ($programa==52)
	{
	echo "Educacion Infantil" ;
	}
	if ($programa==53)
	{
	echo "Educacion Comunitaria" ;
	}
	?></div></td>
      <td><div align="center">Periodo acad&eacute;mico</div></td>
      <td><div align="center">2018-II</div></td>
    </tr>
    <tr> 
      <td><div align="left">Tipo de dedicaci&oacute;n: </div></td>
      <td><div align="center"><?php echo $dedicacion ?></div></td>
      <td><div align="center">Tipo de vinculaci&oacute;n: </div></td>
      <td><div align="center"><?php echo $vinculacion ?></div></td>
    </tr>
  </table>
<td>&nbsp;.</td>
  <table width="72%" height="234" border="2" align="center">
    <tr> 
      <td width="94%"><div align="center"><strong>DESEMPE&Ntilde;O DEL PROFESOR 
          UNIVERSITARIO</strong></div></td>
      <td width="6%"><div align="center">Calificaci&oacute;n de 0 a 50</div></td>
    </tr>
    <tr> 
      <td>A. Docencia</td>
      <td><div align="center"> 
          <input name="ca" type="number" id="ca" size="5" maxlength="2">
        </div></td>
    </tr>
    <tr> 
      <td>A1. Pr&aacute;ctica educativa </td>
      <td><div align="center"> 
          <input name="ca1" type="number" id="ca1" size="5" maxlength="2">
        </div></td>
    </tr>
    <tr> 
      <td>A2. Trabajo de grado (Educaci&oacute;n Infantil)<br>
        Proyecto pedag&oacute;gico (Educaci&oacute;n Especial)<br>
        Investigaci&oacute;n pedag&oacute;gica (Psicolog&iacute;a y Pedagog&iacute;a)<br></td>
      <td><div align="center"> 
          <input name="ca2" type="number" id="ca2" size="5" maxlength="2">
        </div></td>
    </tr>
    <tr> 
      <td>B. Investigaci&oacute;n </td>
      <td><div align="center"> 
          <input name="cb" type="number" id="cb" size="5" maxlength="2">
        </div></td>
    </tr>
    <tr> 
      <td>C. Proyectos de extensi&oacute;n</td>
      <td><div align="center"> 
          <input name="cc" type="number" id="cc" size="5" maxlength="2">
        </div></td>
    </tr>
    <tr> 
      <td>D. Actividades de gesti&oacute;n institucional</td>
      <td><div align="center"> 
          <input name="cd" type="number" id="cd" size="5" maxlength="2">
        </div></td>
    </tr>
  </table>
. 
<p><strong>Observaciones:</strong></p>
  <div align="center">
    <p>
      <textarea name="ob" cols="100" id="ob"></textarea>
    </p>
    <p>&nbsp;</p>
    <p align="left"><?php 
	include ("conexionfed.php");
$sql = "select nombre from datosp WHERE cedula = '{$_POST['codigo']}'"; 
$sql = mysql_query($sql) or die(mysql_error("OCURRIO UN PROBLEMA CON LA CONEXION"));
while($row = mysql_fetch_array($sql))
{
$nom=$row[nombre];
}
echo "".$nom."</p>"; 
echo "<p align='left'>".$_POST['codigo']."</p>" ; 
?>
    </div>
	</p>
  <p align="center"> 
    <input type="submit" value="Enviar">
	<input type="hidden" name="MM_insert" value="form1">
  </p>
  </form>
    <form name="form2" method="post" action="informacion.php" target="_blank">
  <div align="center">
    <input name="doc" type="hidden" id="doc" value="<?php echo $nombre ; ?>" >
    <input type="submit" value="Datos docente">
    <input type="hidden" name="MM_insert" value="form2">
  </div>
</form>
</body>
</html>