<?php 
session_start(); 
require_once('Connections/mysql.php'); 
$codigo = $_POST['codigo'];
$contra = $_POST['contra'];
$_SESSION["codigo"] = $_POST['codigo'] ; 
$_SESSION["contra"] = $_POST['contra'] ; 
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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}
if (($_POST["MM_insert"]) && ($_POST["MM_insert"] == "cuestionario")) {
  $insertSQL = sprintf("INSERT INTO cuestionario (cod_alumno, p1, p2 , p3, p4, p5, p6, p7) VALUES (%s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['cod_alumno'], "int"),
                       GetSQLValueString($_POST['p1'], "text"),
                       GetSQLValueString($_POST['p2'], "text"),
                       GetSQLValueString($_POST['p3'], "text"),
      			       GetSQLValueString($_POST['p4'], "text"),
                       GetSQLValueString($_POST['p5'], "text"),
                       GetSQLValueString($_POST['p6'], "text"),
                       GetSQLValueString($_POST['p7'], "text"));
  include ("conexionfed.php");
  $Result1 = mysql_query($insertSQL, $mysql) or die(mysql_error());
echo '<script language="javascript" type="text/javascript"> 
alert("Cuestionario enviado"); 

</script>';
 header ("Location: consu.php"); 
}
?>

<html>
<head>
<title>Documento sin t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<form name="cuestionario" method="post" action="<?php echo $editFormAction; ?>">
<input name="cod_alumno" type="hidden" id="cod_alumno" value="<?php echo $codigo ?>" >
<input name="codigo" type="hidden" id="codigo" value="<?php echo $codigo ?>" >
<input name="contra" type="hidden" id="contra" value="<?php echo $contra ?>" >


  <div align="center"><img src="logoupn.jpg" width="768" height="124"></div>
<p><br>
  Prop&oacute;sitos<br>
  Generar un balance del sentido y las pr&aacute;cticas y usos de la evaluaci&oacute;n 
  docente</p>
<p></p>
<p></p>
<p>1. &iquest;Con que prop&oacute;sito considera usted que se hace la evaluaci&oacute;n 
  docente?</p>
  <textarea name="p1" cols="80"></textarea>
<p><br>
  2. &iquest;Cuando diligencia el formato de evaluaci&oacute;n que aspectos tiene 
  usted en cuenta?</p>
  <p> 
    <textarea name="p2" cols="80"></textarea>
  </p>
  <p><br>
    3. &iquest;Qu&eacute; implicaciones considera que trae la evaluaci&oacute;n 
    de los docentes?</p>  <p> 
    <textarea name="p3" cols="80"></textarea>
  </p>
  <p><br>
    4. &iquest;Qu&eacute; tipos de aportes ha generado esta evaluaci&oacute;n 
    de los docentes?</p>  <p> 
    <textarea name="p4" cols="80"></textarea>
  </p>
  <p><br>
    5. &iquest;Qu&eacute; problem&aacute;tica identifica en el proceso de evaluaci&oacute;n 
    docente?</p>  <p> 
    <textarea name="p5" cols="80"></textarea>
  </p>
  <p><br>
    6. &iquest;Desarrollan otras practicas que eval&uacute;an las acciones formativas 
    del profesor?</p>
  <p>&iquest;Que balance hace de estas experiencias?</p>  
  <p> 
    <textarea name="p6" cols="80"></textarea>
  </p>
  <p><br>
    7. &iquest;Qu&eacute; sugerencias le formula a la concepci&oacute;n y la practica 
    de la evaluacion docente?<br>
    <textarea name="p7" cols="80"></textarea>
  </p>
   <div align="center">
        <input type="submit" value="enviar">
      </div>
      <input type="hidden" name="MM_insert" value="cuestionario">
</form>
</body>
</html>
