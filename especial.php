<?php 
require_once('Connections/mysql.php'); 
$codigo = $_POST['usuario'];
$programa = $_POST['id'];
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
if ($_POST['docente']!= "")
{
 if ($_POST['r1'] >50 || $_POST['r2'] >50 || $_POST['r3'] >50 || $_POST['r4'] >50 || $_POST['r5'] >50 || $_POST['r6'] >50 || $_POST['r7'] >50 || $_POST['r1'] <0 || $_POST['r2'] <0 || $_POST['r3'] <0 || $_POST['r4'] <0 || $_POST['r5'] <0 || $_POST['r6'] <0 || $_POST['r7'] <0)
  {
 echo "la calificacion es entre 0 y 50";
  }
  else
  {
if (($_POST["MM_insert"]) && ($_POST["MM_insert"] == "form2")) {
  $insertSQL = sprintf("INSERT INTO fa1 (cod_alumno, docente, programa , materia, grupo, r1, r2, r3, r4, r5, r6, r7, ob) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['cod_alumno'], "int"),
                       GetSQLValueString($_POST['docente'], "text"),
                       GetSQLValueString($_POST['programa'], "int"),
                       GetSQLValueString($_POST['materia'], "text"),
      			       GetSQLValueString($_POST['grupo'], "int"),
                       GetSQLValueString($_POST['r1'], "int"),
                       GetSQLValueString($_POST['r2'], "int"),
                       GetSQLValueString($_POST['r3'], "int"),
                       GetSQLValueString($_POST['r4'], "int"),
                       GetSQLValueString($_POST['r5'], "int"),
                       GetSQLValueString($_POST['r6'], "int"),
                       GetSQLValueString($_POST['r7'], "int"),
                       GetSQLValueString($_POST['d4'], "text"));
			  
  include ("conexionfed.php");
  $Result1 = mysql_query($insertSQL, $mysql) or die(mysql_error());
echo '<script language="javascript">  var x ="'.$_POST['docente'].'"; alert("el docente "+x+" A sido calificad@"); </script>';
}
}
}
if($_POST['docente2'] != "")
{
 if ($_POST['r102'] >50 || $_POST['r202'] >50 || $_POST['r302'] >50 || $_POST['r402'] >50 || $_POST['r502'] >50 || $_POST['r602'] >50 || $_POST['r702'] >50 || $_POST['r102'] <0 || $_POST['r202'] <0 || $_POST['r302'] <0 || $_POST['r402'] <0 || $_POST['r502'] <0 || $_POST['r602'] <0 || $_POST['r702'] <0)
  {
   echo "la calificacion es entre 0 y 50";
  }
  else
  {
if (($_POST["MM_insert"]) && ($_POST["MM_insert"] == "form2")) {
  $insertSQL = sprintf("INSERT INTO fa1 (cod_alumno, docente, programa , materia, grupo, r1, r2, r3, r4, r5, r6, r7, ob) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['cod_alumno'], "int"),
                       GetSQLValueString($_POST['docente2'], "text"),
                       GetSQLValueString($_POST['programa'], "int"),
                       GetSQLValueString($_POST['materia2'], "text"),
      			       GetSQLValueString($_POST['grupo2'], "int"),
                       GetSQLValueString($_POST['r102'], "int"),
                       GetSQLValueString($_POST['r202'], "int"),
                       GetSQLValueString($_POST['r302'], "int"),
                       GetSQLValueString($_POST['r402'], "int"),
                       GetSQLValueString($_POST['r502'], "int"),
                       GetSQLValueString($_POST['r602'], "int"),
                       GetSQLValueString($_POST['r702'], "int"),
                       GetSQLValueString($_POST['d401'], "text"));
			  
  include ("conexionfed.php");
  $Result1 = mysql_query($insertSQL, $mysql) or die(mysql_error());
echo '<script language="javascript">  var x ="'.$_POST['docente2'].'"; alert("el docente "+x+" A sido calificad@"); </script>';
}
}
}
if($_POST['docente3'] != "")
{
 if ($_POST['r103'] >50 || $_POST['r203'] >50 || $_POST['r303'] >50 || $_POST['r403'] >50 || $_POST['r503'] >50 || $_POST['r603'] >50 || $_POST['r703'] >50 || $_POST['r103'] <0 || $_POST['r203'] <0 || $_POST['r303'] <0 || $_POST['r403'] <0 || $_POST['r503'] <0 || $_POST['r603'] <0 || $_POST['r703'] <0)
  {
     echo "la calificacion es entre 0 y 50";
  }
  else
  {
if (($_POST["MM_insert"]) && ($_POST["MM_insert"] == "form2")) {
  $insertSQL = sprintf("INSERT INTO fa1 (cod_alumno, docente, programa , materia, grupo, r1, r2, r3, r4, r5, r6, r7, ob) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['cod_alumno'], "int"),
                       GetSQLValueString($_POST['docente3'], "text"),
                       GetSQLValueString($_POST['programa'], "int"),
                       GetSQLValueString($_POST['materia3'], "text"),
      			       GetSQLValueString($_POST['grupo3'], "int"),
                       GetSQLValueString($_POST['r103'], "int"),
                       GetSQLValueString($_POST['r203'], "int"),
                       GetSQLValueString($_POST['r303'], "int"),
                       GetSQLValueString($_POST['r403'], "int"),
                       GetSQLValueString($_POST['r503'], "int"),
                       GetSQLValueString($_POST['r603'], "int"),
                       GetSQLValueString($_POST['r703'], "int"),
                       GetSQLValueString($_POST['d403'], "text"));
			  
  include ("conexionfed.php");
  $Result1 = mysql_query($insertSQL, $mysql) or die(mysql_error());
echo '<script language="javascript">  var x ="'.$_POST['docente3'].'"; alert("el docente "+x+" A sido calificad@"); </script>';
}
}
}
if($_POST['docente4'] != "")
{
 if ($_POST['r104'] >50 || $_POST['r204'] >50 || $_POST['r304'] >50 || $_POST['r404'] >50 || $_POST['r504'] >50 || $_POST['r604'] >50 || $_POST['r704'] >50 || $_POST['r104'] <0 || $_POST['r204'] <0 || $_POST['r304'] <0 || $_POST['r404'] <0 || $_POST['r504'] <0 || $_POST['r604'] <0 || $_POST['r704'] <0)
  {
   echo "la calificacion es entre 0 y 50";
  }
  else
  {
if (($_POST["MM_insert"]) && ($_POST["MM_insert"] == "form2")) {
  $insertSQL = sprintf("INSERT INTO fa1 (cod_alumno, docente, programa , materia, grupo, r1, r2, r3, r4, r5, r6, r7, ob) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['cod_alumno'], "int"),
                       GetSQLValueString($_POST['docente4'], "text"),
                       GetSQLValueString($_POST['programa'], "int"),
                       GetSQLValueString($_POST['materia4'], "text"),
      			       GetSQLValueString($_POST['grupo4'], "int"),
                       GetSQLValueString($_POST['r104'], "int"),
                       GetSQLValueString($_POST['r204'], "int"),
                       GetSQLValueString($_POST['r304'], "int"),
                       GetSQLValueString($_POST['r404'], "int"),
                       GetSQLValueString($_POST['r504'], "int"),
                       GetSQLValueString($_POST['r604'], "int"),
                       GetSQLValueString($_POST['r704'], "int"),
                       GetSQLValueString($_POST['d404'], "text"));
			  
  include ("conexionfed.php");
  $Result1 = mysql_query($insertSQL, $mysql) or die(mysql_error());
echo '<script language="javascript">  var x ="'.$_POST['docente4'].'"; alert("el docente "+x+" A sido calificad@"); </script>';
}
}
}
if($_POST['docente5'] != "")
{
 if ($_POST['r105'] >50 || $_POST['r205'] >50 || $_POST['r305'] >50 || $_POST['r405'] >50 || $_POST['r505'] >50 || $_POST['r605'] >50 || $_POST['r705'] >50 || $_POST['r105'] <0 || $_POST['r205'] <0 || $_POST['r305'] <0 || $_POST['r405'] <0 || $_POST['r505'] <0 || $_POST['r605'] <0 || $_POST['r705'] <0)
  {
   echo "la calificacion es entre 0 y 50";
  }
  else
  {
if (($_POST["MM_insert"]) && ($_POST["MM_insert"] == "form2")) {
  $insertSQL = sprintf("INSERT INTO fa1 (cod_alumno, docente, programa , materia, grupo, r1, r2, r3, r4, r5, r6, r7, ob) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['cod_alumno'], "int"),
                       GetSQLValueString($_POST['docente5'], "text"),
                       GetSQLValueString($_POST['programa'], "int"),
                       GetSQLValueString($_POST['materia5'], "text"),
      			       GetSQLValueString($_POST['grupo5'], "int"),
                       GetSQLValueString($_POST['r105'], "int"),
                       GetSQLValueString($_POST['r205'], "int"),
                       GetSQLValueString($_POST['r305'], "int"),
                       GetSQLValueString($_POST['r405'], "int"),
                       GetSQLValueString($_POST['r505'], "int"),
                       GetSQLValueString($_POST['r605'], "int"),
                       GetSQLValueString($_POST['r705'], "int"),
                       GetSQLValueString($_POST['d405'], "text"));
			  
  include ("conexionfed.php");
  $Result1 = mysql_query($insertSQL, $mysql) or die(mysql_error());
echo '<script language="javascript">  var x ="'.$_POST['docente5'].'"; alert("el docente "+x+" A sido calificad@"); </script>';
}
}
}
if($_POST['docente6'] != "")
{
 if ($_POST['r106'] >50 || $_POST['r206'] >50 || $_POST['r306'] >50 || $_POST['r406'] >50 || $_POST['r506'] >50 || $_POST['r606'] >50 || $_POST['r706'] >50 || $_POST['r106'] <0 || $_POST['r206'] <0 || $_POST['r306'] <0 || $_POST['r406'] <0 || $_POST['r506'] <0 || $_POST['r606'] <0 || $_POST['r706'] <0)
  {
   echo "la calificacion es entre 0 y 50";
  }
  else
  {
if (($_POST["MM_insert"]) && ($_POST["MM_insert"] == "form2")) {
  $insertSQL = sprintf("INSERT INTO fa1 (cod_alumno, docente, programa , materia, grupo, r1, r2, r3, r4, r5, r6, r7, ob) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['cod_alumno'], "int"),
                       GetSQLValueString($_POST['docente6'], "text"),
                       GetSQLValueString($_POST['programa'], "int"),
                       GetSQLValueString($_POST['materia6'], "text"),
      			       GetSQLValueString($_POST['grupo6'], "int"),
                       GetSQLValueString($_POST['r106'], "int"),
                       GetSQLValueString($_POST['r206'], "int"),
                       GetSQLValueString($_POST['r306'], "int"),
                       GetSQLValueString($_POST['r406'], "int"),
                       GetSQLValueString($_POST['r506'], "int"),
                       GetSQLValueString($_POST['r606'], "int"),
                       GetSQLValueString($_POST['r706'], "int"),
                       GetSQLValueString($_POST['d406'], "text"));
			  
  include ("conexionfed.php");
  $Result1 = mysql_query($insertSQL, $mysql) or die(mysql_error());
echo '<script language="javascript">  var x ="'.$_POST['docente6'].'"; alert("el docente "+x+" A sido calificad@"); </script>';
}
}
}
if($_POST['docente7'] != "")
{
 if ($_POST['r107'] >50 || $_POST['r207'] >50 || $_POST['r307'] >50 || $_POST['r407'] >50 || $_POST['r507'] >50 || $_POST['r607'] >50 || $_POST['r707'] >50 || $_POST['r107'] <0 || $_POST['r207'] <0 || $_POST['r307'] <0 || $_POST['r407'] <0 || $_POST['r507'] <0 || $_POST['r607'] <0 || $_POST['r707'] <0)
  {
   echo "la calificacion es entre 0 y 50";
  }
  else
  {
if (($_POST["MM_insert"]) && ($_POST["MM_insert"] == "form2")) {
  $insertSQL = sprintf("INSERT INTO fa1 (cod_alumno, docente, programa , materia, grupo, r1, r2, r3, r4, r5, r6, r7, ob) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['cod_alumno'], "int"),
                       GetSQLValueString($_POST['docente7'], "text"),
                       GetSQLValueString($_POST['programa'], "int"),
                       GetSQLValueString($_POST['materia7'], "text"),
      			       GetSQLValueString($_POST['grupo7'], "int"),
                       GetSQLValueString($_POST['r107'], "int"),
                       GetSQLValueString($_POST['r207'], "int"),
                       GetSQLValueString($_POST['r307'], "int"),
                       GetSQLValueString($_POST['r407'], "int"),
                       GetSQLValueString($_POST['r507'], "int"),
                       GetSQLValueString($_POST['r607'], "int"),
                       GetSQLValueString($_POST['r707'], "int"),
                       GetSQLValueString($_POST['d407'], "text"));
			  
  include ("conexionfed.php");
  $Result1 = mysql_query($insertSQL, $mysql) or die(mysql_error());
echo '<script language="javascript">  var x ="'.$_POST['docente7'].'"; alert("el docente "+x+" A sido calificad@"); </script>';
}
}
}
if($_POST['docente8'] != "")
{
 if ($_POST['r801'] >50 || $_POST['r901'] >50 || $_POST['r1001'] >50 || $_POST['r1101'] >50 || $_POST['r1201'] >50 || $_POST['r1301'] >50 || $_POST['r801'] <0 || $_POST['r901'] <0 || $_POST['r1001'] <0 || $_POST['r1101'] <0 || $_POST['r1201'] <0 || $_POST['r1301'] <0 )
  {
   echo "la calificacion es entre 0 y 50";
  }
  else
  {
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form2")) {
  $insertSQL = sprintf("INSERT INTO fa2 (cod_alumno, docente, programa, materia, grupo, r8, r9, r10, r11, r12, r13, ob) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['cod_alumno'], "int"),
                       GetSQLValueString($_POST['docente8'], "text"),
                       GetSQLValueString($_POST['programa'], "int"),
                       GetSQLValueString($_POST['materia8'], "text"),
					   GetSQLValueString($_POST['grupo8'], "int"),
                       GetSQLValueString($_POST['r801'], "int"),
                       GetSQLValueString($_POST['r901'], "int"),
                       GetSQLValueString($_POST['r1001'], "int"),
                       GetSQLValueString($_POST['r1101'], "int"),
                       GetSQLValueString($_POST['r1201'], "int"),
                       GetSQLValueString($_POST['r1301'], "int"),
					   GetSQLValueString($_POST['ob8'], "text"));			  
  include ("conexionfed.php");
  $Result1 = mysql_query($insertSQL, $mysql) or die(mysql_error());
echo '<script language="javascript">  var x ="'.$_POST['docente8'].'"; alert("el docente "+x+" A sido calificad@"); </script>';
}
}
}
if($_POST['docente9'] != "")
{
 if ($_POST['r802'] >50 || $_POST['r902'] >50 || $_POST['r1002'] >50 || $_POST['r1102'] >50 || $_POST['r1202'] >50 || $_POST['r1302'] >50 || $_POST['r802'] <0 || $_POST['r902'] <0 || $_POST['r1002'] <0 || $_POST['r1102'] <0 || $_POST['r1202'] <0 || $_POST['r1302'] <0 )
  {
   echo "la calificacion es entre 0 y 50";
  }
  else
  {
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form2")) {
  $insertSQL = sprintf("INSERT INTO fa2 (cod_alumno, docente, programa, materia, grupo, r8, r9, r10, r11, r12, r13, ob) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['cod_alumno'], "int"),
                       GetSQLValueString($_POST['docente9'], "text"),
                       GetSQLValueString($_POST['programa'], "int"),
                       GetSQLValueString($_POST['materia9'], "text"),
					   GetSQLValueString($_POST['grupo9'], "int"),
                       GetSQLValueString($_POST['r802'], "int"),
                       GetSQLValueString($_POST['r902'], "int"),
                       GetSQLValueString($_POST['r1002'], "int"),
                       GetSQLValueString($_POST['r1102'], "int"),
                       GetSQLValueString($_POST['r1202'], "int"),
                       GetSQLValueString($_POST['r1302'], "int"),
					   GetSQLValueString($_POST['ob9'], "text"));			  
  include ("conexionfed.php");
  $Result1 = mysql_query($insertSQL, $mysql) or die(mysql_error());
echo '<script language="javascript">  var x ="'.$_POST['docente9'].'"; alert("el docente "+x+" A sido calificad@"); </script>';
}
}
}
if($_POST['docente10'] != "")
{
 if ($_POST['r803'] >50 || $_POST['r903'] >50 || $_POST['r1003'] >50 || $_POST['r1103'] >50 || $_POST['r1203'] >50 || $_POST['r1303'] >50 || $_POST['r803'] <0 || $_POST['r903'] <0 || $_POST['r1003'] <0 || $_POST['r1103'] <0 || $_POST['r1203'] <0 || $_POST['r1303'] <0 )
  {
   echo "la calificacion es entre 0 y 50";
  }
  else
  {
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form2")) {
  $insertSQL = sprintf("INSERT INTO fa2 (cod_alumno, docente, programa, materia, grupo, r8, r9, r10, r11, r12, r13, ob) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['cod_alumno'], "int"),
                       GetSQLValueString($_POST['docente10'], "text"),
                       GetSQLValueString($_POST['programa'], "int"),
                       GetSQLValueString($_POST['materia10'], "text"),
					   GetSQLValueString($_POST['grupo10'], "int"),
                       GetSQLValueString($_POST['r803'], "int"),
                       GetSQLValueString($_POST['r903'], "int"),
                       GetSQLValueString($_POST['r1003'], "int"),
                       GetSQLValueString($_POST['r1103'], "int"),
                       GetSQLValueString($_POST['r1203'], "int"),
                       GetSQLValueString($_POST['r1303'], "int"),
					   GetSQLValueString($_POST['ob10'], "text"));			  
  include ("conexionfed.php");
  $Result1 = mysql_query($insertSQL, $mysql) or die(mysql_error());
echo '<script language="javascript">  var x ="'.$_POST['docente10'].'"; alert("el docente "+x+" A sido calificad@"); </script>';
}
}
}
if($_POST['docente11'] != "")
{
 if ($_POST['r804'] >50 || $_POST['r904'] >50 || $_POST['r1004'] >50 || $_POST['r1104'] >50 || $_POST['r1204'] >50 || $_POST['r1304'] >50 || $_POST['r804'] <0 || $_POST['r904'] <0 || $_POST['r1004'] <0 || $_POST['r1104'] <0 || $_POST['r1204'] <0 || $_POST['r1304'] <0 )
  {
   echo "la calificacion es entre 0 y 50";
  }
  else
  {
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form2")) {
  $insertSQL = sprintf("INSERT INTO fa2 (cod_alumno, docente, programa, materia, grupo, r8, r9, r10, r11, r12, r13, ob) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['cod_alumno'], "int"),
                       GetSQLValueString($_POST['docente11'], "text"),
                       GetSQLValueString($_POST['programa'], "int"),
                       GetSQLValueString($_POST['materia11'], "text"),
					   GetSQLValueString($_POST['grupo11'], "int"),
                       GetSQLValueString($_POST['r804'], "int"),
                       GetSQLValueString($_POST['r904'], "int"),
                       GetSQLValueString($_POST['r1004'], "int"),
                       GetSQLValueString($_POST['r1104'], "int"),
                       GetSQLValueString($_POST['r1204'], "int"),
                       GetSQLValueString($_POST['r1304'], "int"),
					   GetSQLValueString($_POST['ob11'], "text"));			  
  include ("conexionfed.php");
  $Result1 = mysql_query($insertSQL, $mysql) or die(mysql_error());
echo '<script language="javascript">  var x ="'.$_POST['docente11'].'"; alert("el docente "+x+" A sido calificad@"); </script>';
}
}
}
if($_POST['docente12'] != "")
{
 if ($_POST['r805'] >50 || $_POST['r905'] >50 || $_POST['r1005'] >50 || $_POST['r1105'] >50 || $_POST['r1205'] >50 || $_POST['r1305'] >50 || $_POST['r805'] <0 || $_POST['r905'] <0 || $_POST['r1005'] <0 || $_POST['r1105'] <0 || $_POST['r1205'] <0 || $_POST['r1305'] <0 )
  {
   echo "la calificacion es entre 0 y 50";
  }
  else
  {
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form2")) {
  $insertSQL = sprintf("INSERT INTO fa2 (cod_alumno, docente, programa, materia, grupo, r8, r9, r10, r11, r12, r13, ob) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['cod_alumno'], "int"),
                       GetSQLValueString($_POST['docente12'], "text"),
                       GetSQLValueString($_POST['programa'], "int"),
                       GetSQLValueString($_POST['materia12'], "text"),
					   GetSQLValueString($_POST['grupo12'], "int"),
                       GetSQLValueString($_POST['r805'], "int"),
                       GetSQLValueString($_POST['r905'], "int"),
                       GetSQLValueString($_POST['r1005'], "int"),
                       GetSQLValueString($_POST['r1105'], "int"),
                       GetSQLValueString($_POST['r1205'], "int"),
                       GetSQLValueString($_POST['r1305'], "int"),
					   GetSQLValueString($_POST['ob12'], "text"));			  
  include ("conexionfed.php");
  $Result1 = mysql_query($insertSQL, $mysql) or die(mysql_error());
echo '<script language="javascript">  var x ="'.$_POST['docente12'].'"; alert("el docente "+x+" A sido calificad@"); </script>';
}
}
}
if($_POST['docente13'] != "")
{
 if ($_POST['r806'] >50 || $_POST['r906'] >50 || $_POST['r1006'] >50 || $_POST['r1106'] >50 || $_POST['r1206'] >50 || $_POST['r1306'] >50 || $_POST['r806'] <0 || $_POST['r906'] <0 || $_POST['r1006'] <0 || $_POST['r1106'] <0 || $_POST['r1206'] <0 || $_POST['r1306'] <0 )
  {
   echo "la calificacion es entre 0 y 50";
  }
  else
  {
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form2")) {
  $insertSQL = sprintf("INSERT INTO fa2 (cod_alumno, docente, programa, materia, grupo, r8, r9, r10, r11, r12, r13, ob) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['cod_alumno'], "int"),
                       GetSQLValueString($_POST['docente13'], "text"),
                       GetSQLValueString($_POST['programa'], "int"),
                       GetSQLValueString($_POST['materia13'], "text"),
					   GetSQLValueString($_POST['grupo13'], "int"),
                       GetSQLValueString($_POST['r806'], "int"),
                       GetSQLValueString($_POST['r906'], "int"),
                       GetSQLValueString($_POST['r1006'], "int"),
                       GetSQLValueString($_POST['r1106'], "int"),
                       GetSQLValueString($_POST['r1206'], "int"),
                       GetSQLValueString($_POST['r1306'], "int"),
					   GetSQLValueString($_POST['ob13'], "text"));			  
  include ("conexionfed.php");
  $Result1 = mysql_query($insertSQL, $mysql) or die(mysql_error());
echo '<script language="javascript">  var x ="'.$_POST['docente13'].'"; alert("el docente "+x+" A sido calificad@"); </script>';
}
}
}
if($_POST['docente14'] != "")
{
 if ($_POST['r1401'] >50 || $_POST['r1501'] >50 || $_POST['r1601'] >50 || $_POST['r1701'] >50 || $_POST['r1401'] <0 || $_POST['r1501'] <0 || $_POST['r1601'] <0 || $_POST['r1701'] <0)
  {
   echo "la calificacion es entre 0 y 50";
  }
  else
  {
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form2")) {
  $insertSQL = sprintf("INSERT INTO fa3 (cod_alumno, docente, programa, materia, grupo, r14, r15, r16, r17, ob) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['cod_alumno'], "int"),
                       GetSQLValueString($_POST['docente14'], "text"),
                       GetSQLValueString($_POST['programa'], "int"),
                       GetSQLValueString($_POST['materia14'], "text"),
					   GetSQLValueString($_POST['grupo14'], "int"),
                       GetSQLValueString($_POST['r1401'], "int"),
                       GetSQLValueString($_POST['r1501'], "int"),
                       GetSQLValueString($_POST['r1601'], "int"),
                       GetSQLValueString($_POST['r1701'], "int"),
					   GetSQLValueString($_POST['ob14'], "text"));			  
  include ("conexionfed.php");
  $Result1 = mysql_query($insertSQL, $mysql) or die(mysql_error());
echo '<script language="javascript">  var x ="'.$_POST['docente14'].'"; alert("el docente "+x+" A sido calificad@"); </script>';
}
}
}
if($_POST['docente15'] != "")
{
 if ($_POST['r1402'] >50 || $_POST['r1502'] >50 || $_POST['r1602'] >50 || $_POST['r1702'] >50 || $_POST['r1402'] <0 || $_POST['r1502'] <0 || $_POST['r1602'] <0 || $_POST['r1702'] <0)
  {
   echo "la calificacion es entre 0 y 50";
  }
  else
  {
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form2")) {
  $insertSQL = sprintf("INSERT INTO fa3 (cod_alumno, docente, programa, materia, grupo, r14, r15, r16, r17, ob) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['cod_alumno'], "int"),
                       GetSQLValueString($_POST['docente15'], "text"),
                       GetSQLValueString($_POST['programa'], "int"),
                       GetSQLValueString($_POST['materia15'], "text"),
					   GetSQLValueString($_POST['grupo15'], "int"),
                       GetSQLValueString($_POST['r1402'], "int"),
                       GetSQLValueString($_POST['r1502'], "int"),
                       GetSQLValueString($_POST['r1602'], "int"),
                       GetSQLValueString($_POST['r1702'], "int"),
					   GetSQLValueString($_POST['ob15'], "text"));			  
  include ("conexionfed.php");
  $Result1 = mysql_query($insertSQL, $mysql) or die(mysql_error());
echo '<script language="javascript">  var x ="'.$_POST['docente15'].'"; alert("el docente "+x+" A sido calificad@"); </script>';
}
}
}			   		   
if($_POST['docente16'] != "")
{
 if ($_POST['r1403'] >50 || $_POST['r1503'] >50 || $_POST['r1603'] >50 || $_POST['r1703'] >50 || $_POST['r1403'] <0 || $_POST['r1503'] <0 || $_POST['r1603'] <0 || $_POST['r1703'] <0)
  {
   echo "la calificacion es entre 0 y 50";
  }
  else
  {
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form2")) {
  $insertSQL = sprintf("INSERT INTO fa3 (cod_alumno, docente, programa, materia, grupo, r14, r15, r16, r17, ob) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['cod_alumno'], "int"),
                       GetSQLValueString($_POST['docente16'], "text"),
                       GetSQLValueString($_POST['programa'], "int"),
                       GetSQLValueString($_POST['materia16'], "text"),
					   GetSQLValueString($_POST['grupo16'], "int"),
                       GetSQLValueString($_POST['r1403'], "int"),
                       GetSQLValueString($_POST['r1503'], "int"),
                       GetSQLValueString($_POST['r1603'], "int"),
                       GetSQLValueString($_POST['r1703'], "int"),
					   GetSQLValueString($_POST['ob16'], "text"));
  $Result1 = mysql_query($insertSQL, $mysql) or die(mysql_error());
echo '<script language="javascript">  var x ="'.$_POST['docente16'].'"; alert("el docente "+x+" A sido calificad@"); </script>';
}
}
}			   		   
if($_POST['docente17'] != "")
{
 if ($_POST['r1404'] >50 || $_POST['r1504'] >50 || $_POST['r1604'] >50 || $_POST['r1704'] >50 || $_POST['r1404'] <0 || $_POST['r1504'] <0 || $_POST['r1604'] <0 || $_POST['r1704'] <0)
  {
   echo "la calificacion es entre 0 y 50";
  }
  else
  {
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form2")) {
  $insertSQL = sprintf("INSERT INTO fa3 (cod_alumno, docente, programa, materia, grupo, r14, r15, r16, r17, ob) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['cod_alumno'], "int"),
                       GetSQLValueString($_POST['docente17'], "text"),
                       GetSQLValueString($_POST['programa'], "int"),
                       GetSQLValueString($_POST['materia17'], "text"),
					   GetSQLValueString($_POST['grupo17'], "int"),
                       GetSQLValueString($_POST['r1404'], "int"),
                       GetSQLValueString($_POST['r1504'], "int"),
                       GetSQLValueString($_POST['r1604'], "int"),
                       GetSQLValueString($_POST['r1704'], "int"),
					   GetSQLValueString($_POST['ob17'], "text"));			  
  include ("conexionfed.php");
  $Result1 = mysql_query($insertSQL, $mysql) or die(mysql_error());
echo '<script language="javascript">  var x ="'.$_POST['docente17'].'"; alert("el docente "+x+" A sido calificad@"); </script>';
}
}
}   		   
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>EVALUACI&Oacute;N DOCENTE DEPARTAMENTO DE PSICOPEDAGOG&Iacute;A</title>
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
<p align="center">
  <input name="imageField" type="image" src="logoupn.jpg" width="768" height="124" border="0">
</p>
<p>&nbsp;</p>
<div align="center">CALIDAD DEL DESEMPE&Ntilde;O DEL PROFESOR UNIVERSITARIO<br>
  <br>
  FORMATO A: INFORMACION DEL ESTUDIANTE <br>
  
  <br>
  PERIODO ACADEMICO 2018-II</div>
<p align="justify"><br>
  <br>
  Lea con atencion los aspectos contemplados en este formato y proceda a asignar 
  el valor, en la escala de 0 a 50, que usted considere pertinente dar a cada 
  uno de los numerales que indagan sobre el desempe&ntilde;o de cada profesor 
  en los aspectos que apliquen segun el espacio academico: docencia, practica 
  educativa o proyecto pedagogico, objeto de la presente evaluacion. A los numerales 
  que no correspondan con el desempe&ntilde;o del docente, no lo diligencie, lo 
  cual no alterara el promedio. </p>
<p align="center"><strong>EDUCACION ESPECIAL</strong></p>
  <form action="<?php echo $editFormAction; ?>" method="post" name="form21" id="form21">
  <input name="cod_alumno" type="hidden" id="cod_alumno" value="<?php echo $codigo ?>" >
  <input name="programa" type="hidden" id="programa" value="<?php echo $programa ?>">
      
  <table width="1803" border="2">
    <tr> 
      <td width="366" bordercolor="#CCCCCC"> 
        <div align="center"><font size="3">Espacio academico</font></div></td>
      <td width="39" bordercolor="#CCCCCC"> 
        <div align="center"><font size="3">Grupo</font></div></td>
      <td width="259" bordercolor="#CCCCCC"> 
        <div align="center"><font size="3">Nombre del docente</font></div></td>
      <td width="101"><div align="center"><font size="2">1.&nbsp;Socializ&oacute;, 
          puso en consideraci&oacute;n y acord&oacute; el programa acad&eacute;mico 
          que desarrollo en su espacio.</font></div></td>
      <td width="124"><div align="center"><font size="2">2. Propuso y desarroll&oacute; 
          acciones y experiencias que brindaron elementos en la promoci&oacute;n 
          de aprendizaje individual y colectivo.</font></div></td>
      <td width="120"><div align="center"><font size="2">3. Promovi&oacute; la 
          confrontaci&oacute;n, discusi&oacute;n, comprensi&oacute;n y argumentaci&oacute;n 
          conceptual sobre la tem&aacute;tica del espacio acad&eacute;mico.</font></div></td>
      <td width="124"><div align="center"><font size="2">4.Desarroll&oacute; estrategias 
          pedag&oacute;gicas relacionadas y pertinentes con los prop&oacute;sitos 
          y din&aacute;micas del espacio acad&eacute;mico.</font></div></td>
      <td width="143"><div align="center"><font size="2">5. Llev&oacute; a cabo 
          la evaluaci&oacute;n como proceso formativo e hizo retroalimentaci&oacute;n 
          oportuna del desempe&ntilde;o acad&eacute;mico individual y grupal.</font></div></td>
      <td width="164"><div align="center"><font size="2">6. Propici&oacute; la 
          formulaci&oacute;n permanente e preguntas, lectura de textos y documentos, 
          an&aacute;lisis de las tem&aacute;ticas estudiadas, revisi&oacute;n 
          de bibliograf&iacute;a actualizada y producci&oacute;n de textos escritos 
          pertinentes con el espacio acad&eacute;mico.</font></div></td>
      <td width="111"><div align="center"><font size="2">7. Tom&oacute; en cuenta 
          la capacidad creativa, participativa, propositiva y de gesti&oacute;n 
          de los estudiantes.</font></div></td>
      <td width="180"><div align="center"><font size="3">OBSERVACIONES</font></div></td>
    </tr>
    <tr> 
      <td><div align="center"><font size="1"> 
          <select name="materia" size="1" id="materia">
            <option></option>
            <?php 
			
include ("conexionfed.php");
$sql = "select materia from materias order by `materias`.`materia` asc " ; 
$sql = mysql_query($sql) or die(mysql_error("OCURRIO UN PROBLEMA CON LA CONEXION"));
while($row = mysql_fetch_array($sql))
{
$mate=$row[materia];
 echo "<option>".$mate."</option>";
}   
?>
       </select>
          </font></div></td>
      <td> <div align="center"> 
          <input name="grupo" type="text" id="grupo" value="" size="2" maxlength="2">
        </div></td>
      <td><div align="center"><font size="1"> 
          <select name="docente" size="1" id="docente">
            <option></option>
	<?php

include ("conexionfed.php");
$sql = "select nombre from datosp order by `datosp`.`nombre` asc"; 
$sql = mysql_query($sql) or die(mysql_error("OCURRIO UN PROBLEMA CON LA CONEXION"));
while($row = mysql_fetch_array($sql))
{
$docente=$row[nombre];
 echo "<option>".$docente."</option>";
}     
	 ?>
          </select>
          </font></div></td>
      <td> <div align="center"> 
          <input name="r1" type="number" id="r1" value="" size="5" maxlength="2">
        </div></td>
      <td> <div align="center"> 
          <input name="r2" type="number" id="r2" value="" size="5" maxlength="2">
        </div></td>
      <td> <div align="center"> 
          <input name="r3" type="number" id="r3" value="" size="5" maxlength="2">
        </div></td>
      <td> <div align="center"> 
          <input name="r4" type="number" id="r4" value="" size="5" maxlength="2">
        </div></td>
      <td> <div align="center"> 
          <input name="r5" type="number" id="r5" value="" size="5" maxlength="2">
        </div></td>
      <td> <div align="center"> 
          <input name="r6" type="number" id="r6" value="" size="5" maxlength="2">
        </div></td>
      <td> <div align="center"> 
          <input name="r7" type="number" id="r7" value="" size="5" maxlength="2">
        </div></td>
      <td><div align="center"> 
          <input name="d4" type="text" id="d4" value="" size="30" maxlength="100">
        </div></td>
    </tr>
    <tr> 
      <td bordercolor="#CCCCCC">
<div align="center"><font size="1"> 
          <select name="materia2" size="1" id="select17">
            <option> </option>
            <?php
include ("conexionfed.php");
$sql = "select materia from materias order by `materias`.`materia` asc"; 
$sql = mysql_query($sql) or die(mysql_error("OCURRIO UN PROBLEMA CON LA CONEXION"));
while($row = mysql_fetch_array($sql))
{
$materia=$row[materia];
 echo "<option>".$materia."</option>";
}     
?>
          </select>
          </font></div></td>
      <td> <div align="center"> 
          <input name="grupo2" type="text" value="" size="2" maxlength="2">
        </div></td>
      <td><div align="center"><font size="1"> 
          <select name="docente2" size="1" id="select24">
            <option></option>
            <?php
include ("conexionfed.php");
$sql = "select nombre from datosp order by `datosp`.`nombre` asc"; 
$sql = mysql_query($sql) or die(mysql_error("OCURRIO UN PROBLEMA CON LA CONEXION"));
while($row = mysql_fetch_array($sql))
{
$docente=$row[nombre];
 echo "<option>".$docente."</option>";
}     
?>
          </select>
          </font></div></td>
      <td> <div align="center"> 
          <input name="r102" type="number" id="r102" value="" size="5" maxlength="2">
        </div></td>
      <td> <div align="center"> 
          <input name="r202" type="number" id="r202" value="" size="5" maxlength="2">
        </div></td>
      <td> <div align="center"> 
          <input name="r302" type="number" id="r302" value="" size="5" maxlength="2">
        </div></td>
      <td> <div align="center"> 
          <input name="r402" type="number" id="r402" value="" size="5" maxlength="2">
        </div></td>
      <td> <div align="center"> 
          <input name="r502" type="number" id="r502" value="" size="5" maxlength="2">
        </div></td>
      <td> <div align="center"> 
          <input name="r602" type="number" id="r602" value="" size="5" maxlength="2">
        </div></td>
      <td> <div align="center"> 
          <input name="r702" type="number" id="r702" value="" size="5" maxlength="2">
        </div></td>
      <td><div align="center"> 
          <input name="d401" type="text" id="d401" value="" size="30" maxlength="100">
        </div></td>
    </tr>
    <tr> 
      <td><div align="center"><font size="1"> 
          <select name="materia3" size="1" id="select18">
            <option> </option>
            <?php
include ("conexionfed.php");
$sql = "select materia from materias order by `materias`.`materia` asc"; 
$sql = mysql_query($sql) or die(mysql_error("OCURRIO UN PROBLEMA CON LA CONEXION"));
while($row = mysql_fetch_array($sql))
{
$materia=$row[materia];
 echo "<option>".$materia."</option>";
}     
?>
          </select>
          </font></div></td>
      <td> <div align="center"> 
          <input name="grupo3" type="text" value="" size="2" maxlength="2">
        </div></td>
      <td><div align="center"><font size="1"> 
          <select name="docente3" size="1" id="select57">
            <option></option>
            <?php
include ("conexionfed.php");
$sql = "select nombre from datosp order by `datosp`.`nombre` asc"; 
$sql = mysql_query($sql) or die(mysql_error("OCURRIO UN PROBLEMA CON LA CONEXION"));
while($row = mysql_fetch_array($sql))
{
$docente=$row[nombre];
 echo "<option>".$docente."</option>";
}     
?>
          </select>
          </font></div></td>
      <td> <div align="center"> 
          <input name="r103" type="number" id="r8" value="" size="5" maxlength="2">
        </div></td>
      <td><p align="center"> 
          <input name="r203" type="number" id="r9" value="" size="5" maxlength="2">
        </p></td>
      <td> <div align="center"> 
          <input name="r303" type="number" id="r10" value="" size="5" maxlength="2">
        </div></td>
      <td> <div align="center"> 
          <input name="r403" type="number" id="r11" value="" size="5" maxlength="2">
        </div></td>
      <td> <div align="center"> 
          <input name="r503" type="number" id="r12" value="" size="5" maxlength="2">
        </div></td>
      <td> <div align="center"> 
          <input name="r603" type="number" id="r13" value="" size="5" maxlength="2">
        </div></td>
      <td> <div align="center"> 
          <input name="r703" type="number" id="r14" value="" size="5" maxlength="2">
        </div></td>
      <td><div align="center"> 
          <input name="d403" type="text" id="r36" value="" size="30" maxlength="100">
        </div></td>
    </tr>
    <tr> 
      <td><div align="center"><font size="1"> 
          <select name="materia4" size="1" id="select12">
            <option> </option>
            <?php
include ("conexionfed.php");
$sql = "select materia from materias order by `materias`.`materia` asc"; 
$sql = mysql_query($sql) or die(mysql_error("OCURRIO UN PROBLEMA CON LA CONEXION"));
while($row = mysql_fetch_array($sql))
{
$materia=$row[materia];
 echo "<option>".$materia."</option>";
}     
?>
          </select>
          </font></div></td>
      <td> <div align="center"> 
          <input name="grupo4" type="text" value="" size="2" maxlength="2">
        </div></td>
      <td><div align="center"><font size="1"> 
          <select name="docente4" size="1" id="select25">
            <option></option>
            <?php
include ("conexionfed.php");
$sql = "select nombre from datosp order by `datosp`.`nombre` asc"; 
$sql = mysql_query($sql) or die(mysql_error("OCURRIO UN PROBLEMA CON LA CONEXION"));
while($row = mysql_fetch_array($sql))
{
$docente=$row[nombre];
 echo "<option>".$docente."</option>";
}     
?>
          </select>
          </font></div></td>
      <td> <div align="center"> 
          <input name="r104" type="number" id="r15" value="" size="5" maxlength="2">
        </div></td>
      <td> <div align="center"> 
          <input name="r204" type="number" id="r16" value="" size="5" maxlength="2">
        </div></td>
      <td> <div align="center"> 
          <input name="r304" type="number" id="r17" value="" size="5" maxlength="2">
        </div></td>
      <td> <div align="center"> 
          <input name="r404" type="number" id="r18" value="" size="5" maxlength="2">
        </div></td>
      <td> <div align="center"> 
          <input name="r504" type="number" id="r19" value="" size="5" maxlength="2">
        </div></td>
      <td> <div align="center"> 
          <input name="r604" type="number" id="r20" value="" size="5" maxlength="2">
        </div></td>
      <td> <div align="center"> 
          <input name="r704" type="number" id="r21" value="" size="5" maxlength="2">
        </div></td>
      <td><div align="center"> 
          <input name="d404" type="text" id="r37" value="" size="30" maxlength="100">
        </div></td>
    </tr>
    <tr> 
      <td><div align="center"><font size="1"> 
          <select name="materia5" size="1" id="materia5">
            <option> </option>
            <?php
include ("conexionfed.php");
$sql = "select materia from materias order by `materias`.`materia` asc"; 
$sql = mysql_query($sql) or die(mysql_error("OCURRIO UN PROBLEMA CON LA CONEXION"));
while($row = mysql_fetch_array($sql))
{
$materia=$row[materia];
 echo "<option>".$materia."</option>";
}     
?>
          </select>
          </font></div></td>
      <td> <div align="center"> 
          <input name="grupo5" type="text" value="" size="2" maxlength="2">
        </div></td>
      <td><div align="center"><font size="1"> 
          <select name="docente5" size="1" id="select26">
            <option></option>
            <?php
include ("conexionfed.php");
$sql = "select nombre from datosp order by `datosp`.`nombre` asc"; 
$sql = mysql_query($sql) or die(mysql_error("OCURRIO UN PROBLEMA CON LA CONEXION"));
while($row = mysql_fetch_array($sql))
{
$docente=$row[nombre];
 echo "<option>".$docente."</option>";
}     
?>
          </select>
          </font></div></td>
      <td> <div align="center"> 
          <input name="r105" type="number" id="r22" value="" size="5" maxlength="2">
        </div></td>
      <td> <div align="center"> 
          <input name="r205" type="number" id="r23" value="" size="5" maxlength="2">
        </div></td>
      <td> <div align="center"> 
          <input name="r305" type="number" id="r24" value="" size="5" maxlength="2">
        </div></td>
      <td> <div align="center"> 
          <input name="r405" type="number" id="r25" value="" size="5" maxlength="2">
        </div></td>
      <td> <div align="center"> 
          <input name="r505" type="number" id="r26" value="" size="5" maxlength="2">
        </div></td>
      <td> <div align="center"> 
          <input name="r605" type="number" id="r27" value="" size="5" maxlength="2">
        </div></td>
      <td> <div align="center"> 
          <input name="r705" type="number" id="r28" value="" size="5" maxlength="2">
        </div></td>
      <td><div align="center"> 
          <input name="d405" type="text" id="r38" value="" size="30" maxlength="100">
        </div></td>
    </tr>
    <tr> 
      <td><div align="center"><font size="1"> 
          <select name="materia6" size="1" id="materia6">
            <option> </option>
            <?php
include ("conexionfed.php");
$sql = "select materia from materias order by `materias`.`materia` asc"; 
$sql = mysql_query($sql) or die(mysql_error("OCURRIO UN PROBLEMA CON LA CONEXION"));
while($row = mysql_fetch_array($sql))
{
$materia=$row[materia];
 echo "<option>".$materia."</option>";
}     
?>
          </select>
          </font></div></td>
      <td> <div align="center"> 
          <input name="grupo6" type="text" value="" size="2" maxlength="2">
        </div></td>
      <td><div align="center"><font size="1"> 
          <select name="docente6" size="1" id="select63">
            <option></option>
            <?php
include ("conexionfed.php");
$sql = "select nombre from datosp order by `datosp`.`nombre` asc"; 
$sql = mysql_query($sql) or die(mysql_error("OCURRIO UN PROBLEMA CON LA CONEXION"));
while($row = mysql_fetch_array($sql))
{
$docente=$row[nombre];
 echo "<option>".$docente."</option>";
}     
?>
          </select>
          </font></div></td>
      <td> <div align="center"> 
          <input name="r106" type="number" id="r29" value="" size="5" maxlength="2">
        </div></td>
      <td> <div align="center"> 
          <input name="r206" type="number" id="r30" value="" size="5" maxlength="2">
        </div></td>
      <td> <div align="center"> 
          <input name="r306" type="number" id="r31" value="" size="5" maxlength="2">
        </div></td>
      <td> <div align="center"> 
          <input name="r406" type="number" id="r32" value="" size="5" maxlength="2">
        </div></td>
      <td> <div align="center"> 
          <input name="r506" type="number" id="r33" value="" size="5" maxlength="2">
        </div></td>
      <td> <div align="center"> 
          <input name="r606" type="number" id="r34" value="" size="5" maxlength="2">
        </div></td>
      <td> <div align="center"> 
          <input name="r706" type="number" id="r35" value="" size="5" maxlength="2">
        </div></td>
      <td><div align="center"> 
          <input name="d406" type="text" id="r39" value="" size="30" maxlength="100">
        </div></td>
    </tr>
    <tr> 
      <td><div align="center"><font size="1"> 
          <select name="materia7" size="1" id="materia7">
            <option> </option>
            <?php
include ("conexionfed.php");
$sql = "select materia from materias order by `materias`.`materia` asc"; 
$sql = mysql_query($sql) or die(mysql_error("OCURRIO UN PROBLEMA CON LA CONEXION"));
while($row = mysql_fetch_array($sql))
{
$materia=$row[materia];
 echo "<option>".$materia."</option>";
}     
?>
          </select>
          </font></div></td>
      <td> <div align="center"> 
          <input name="grupo7" type="text" value="" size="2" maxlength="2">
        </div></td>
      <td><div align="center"><font size="1"> 
          <select name="docente7" size="1" id="select64">
            <option></option>
            <?php
include ("conexionfed.php");
$sql = "select nombre from datosp order by `datosp`.`nombre` asc"; 
$sql = mysql_query($sql) or die(mysql_error("OCURRIO UN PROBLEMA CON LA CONEXION"));
while($row = mysql_fetch_array($sql))
{
$docente=$row[nombre];
 echo "<option>".$docente."</option>";
}     
?>
          </select>
          </font></div></td>
      <td> <div align="center"> 
          <input name="r107" type="number" id="r41" value="" size="5" maxlength="2">
        </div></td>
      <td> <div align="center"> 
          <input name="r207" type="number" id="r42" value="" size="5" maxlength="2">
        </div></td>
      <td> <div align="center"> 
          <input name="r307" type="number" id="r43" value="" size="5" maxlength="2">
        </div></td>
      <td> <div align="center"> 
          <input name="r407" type="number" id="r44" value="" size="5" maxlength="2">
        </div></td>
      <td> <div align="center"> 
          <input name="r507" type="number" id="r45" value="" size="5" maxlength="2">
        </div></td>
      <td> <div align="center"> 
          <input name="r607" type="number" id="r46" value="" size="5" maxlength="2">
        </div></td>
      <td> <div align="center"> 
          <input name="r707" type="number" id="r47" value="" size="5" maxlength="2">
        </div></td>
      <td><div align="center"> 
          <input name="d407" type="text" id="r40" value="" size="30" maxlength="100">
        </div></td>
    </tr>
  </table>
      
  <div align="center"> 
    <p> A1. INDICES DE DESEMPE&Ntilde;O COORDINADORES DE PRACTICA EDUCATIVA </p>
        <p>&nbsp;</p>
      </div>
      
  <table width="1652" border="2">
    <tr> 
      <td width="365"><div align="center"><font size="3">Espacio academico</font></div></td>
      <td width="39"><div align="center"><font size="3">Grupo</font></div></td>
      <td width="259"><div align="center"><font size="3">Nombre del docente</font></div></td>
      <td width="142"><div align="center"><font size="2">8. Promovi&oacute; la 
          lectura de los contextos donde se realiz&oacute; la pr&aacute;ctica 
          a trav&eacute;s de la observaci&oacute;n, an&aacute;lisis te&oacute;rico, 
          interpretaci&oacute;n, diagn&oacute;stico y construcci&oacute;n de conocimiento</font></div></td>
      <td width="112"><div align="center"><font size="2">9. Orient&oacute; el 
          dise&ntilde;o y la ejecuci&oacute;n del programa acad&eacute;mico de 
          acuerdo con el estudio de la realidad de la comunidad educativa</font></div></td>
      <td width="161"><div align="center"><font size="2">10. Propici&oacute; la 
          formulaci&oacute;n permanente de preguntas, lectura de textos y documentos, 
          an&aacute;lisis de las tem&aacute;ticas estudiadas, revisi&oacute;n 
          de bibliograf&iacute;a actualizada y producci&oacute;n de texto escrito 
          pertinente a la pr&aacute;ctica educativa</font></div></td>
      <td width="96"><div align="center"><font size="2">11. Acompa&ntilde;&oacute; 
          , de manera sistem&aacute;tica, procesos de interacci&oacute;n y comunicaci&oacute;n 
          con el estudiante y la instituci&oacute;n</font></div></td>
      <td width="108"><div align="center"><font size="2">12. Acord&oacute; criterios 
          y mecanismos, con estudiantes e instituci&oacute;n, para el seguimiento 
          de los procesos desarrollados en la pr&aacute;ctica</font></div></td>
      <td width="124"><div align="center"><font size="2">13. Tom&oacute; en cuenta 
          la capacidad creativa, participativa, propositiva y de gesti&oacute;n 
          de los estudiantes que realizaron la pr&aacute;ctica</font></div></td>
      <td width="180"><div align="center"><font size="3">OBSERVACIONES</font></div></td>
    </tr>
    <tr> 
      <td><div align="center"><font size="1"> 
          <select name="materia8" size="1" id="select9">
            <option> </option>
<?php
include ("conexionfed.php");
$sql = "select materia from materias order by `materias`.`materia` asc"; 
$sql = mysql_query($sql) or die(mysql_error("OCURRIO UN PROBLEMA CON LA CONEXION"));
while($row = mysql_fetch_array($sql))
{
$materia=$row[materia];
 echo "<option>".$materia."</option>";
}     
?>
          </select>
          </font> </div></td>
      <td><div align="center"> 
          <input name="grupo8" type="text" value="" size="2" maxlength="2">
        </div></td>
      <td><div align="center"><font size="1"> 
          <select name="docente8" size="1" id="select27">
            <option></option>
<?php
include ("conexionfed.php");
$sql = "select nombre from datosp order by `datosp`.`nombre` asc"; 
$sql = mysql_query($sql) or die(mysql_error("OCURRIO UN PROBLEMA CON LA CONEXION"));
while($row = mysql_fetch_array($sql))
{
$docente=$row[nombre];
 echo "<option>".$docente."</option>";
}     
?>
          </select>
          </font></div></td>
      <td><div align="center"> 
          <input name="r801" type="number" id="r801" value="" size="5" maxlength="2">
        </div></td>
      <td><div align="center"> 
          <input name="r901" type="number" id="r901" value="" size="5" maxlength="2">
        </div></td>
      <td><div align="center"> 
          <input name="r1001" type="number" id="r1001" value="" size="5" maxlength="2">
        </div></td>
      <td><div align="center"> 
          <input name="r1101" type="number" id="r1101" value="" size="5" maxlength="2">
        </div></td>
      <td><div align="center"> 
          <input name="r1201" type="number" id="r1201" value="" size="5" maxlength="2">
        </div></td>
      <td><div align="center"> 
          <input name="r1301" type="number" id="r1301" value="" size="5" maxlength="2">
        </div></td>
      <td><div align="center"> 
          <input name="ob8" type="text" id="ob8" value="" size="30" maxlength="100">
        </div></td>
    </tr>
    <tr> 
      <td><div align="center"><font size="1"> 
          <select name="materia9" size="1" id="select19">
            <option> </option>
<?php
include ("conexionfed.php");
$sql = "select materia from materias order by `materias`.`materia` asc"; 
$sql = mysql_query($sql) or die(mysql_error("OCURRIO UN PROBLEMA CON LA CONEXION"));
while($row = mysql_fetch_array($sql))
{
$materia=$row[materia];
 echo "<option>".$materia."</option>";
}     
?>
          </select>
          </font> </div></td>
      <td><div align="center"> 
          <input name="grupo9" type="text" value="" size="2" maxlength="2">
        </div></td>
      <td><div align="center"><font size="1"> 
          <select name="docente9" size="1" id="select66">
            <option></option>
<?php
include ("conexionfed.php");
$sql = "select nombre from datosp order by `datosp`.`nombre` asc"; 
$sql = mysql_query($sql) or die(mysql_error("OCURRIO UN PROBLEMA CON LA CONEXION"));
while($row = mysql_fetch_array($sql))
{
$docente=$row[nombre];
 echo "<option>".$docente."</option>";
}     
?>
          </select>
          </font></div></td>
      <td><div align="center"> 
          <input name="r802" type="number" id="r48" value="" size="5" maxlength="2">
        </div></td>
      <td><div align="center"> 
          <input name="r902" type="number" id="r73" value="" size="5" maxlength="2">
        </div></td>
      <td><div align="center"> 
          <input name="r1002" type="number" id="r74" value="" size="5" maxlength="2">
        </div></td>
      <td><div align="center"> 
          <input name="r1102" type="number" id="r75" value="" size="5" maxlength="2">
        </div></td>
      <td><div align="center"> 
          <input name="r1202" type="number" id="r76" value="" size="5" maxlength="2">
        </div></td>
      <td><div align="center"> 
          <input name="r1302" type="number" id="r77" value="" size="5" maxlength="2">
        </div></td>
      <td><div align="center"> 
          <input name="ob9" type="text" id="ob9" value="" size="30" maxlength="100">
        </div></td>
    </tr>
    <tr> 
      <td><div align="center"><font size="1"> 
          <select name="materia10" size="1" id="select20">
            <option> </option>
 <?php
include ("conexionfed.php");
$sql = "select materia from materias order by `materias`.`materia` asc"; 
$sql = mysql_query($sql) or die(mysql_error("OCURRIO UN PROBLEMA CON LA CONEXION"));
while($row = mysql_fetch_array($sql))
{
$materia=$row[materia];
 echo "<option>".$materia."</option>";
}     
?>
          </select>
          </font> </div></td>
      <td><div align="center"> 
          <input name="grupo10" type="text" value="" size="2" maxlength="2">
        </div></td>
      <td><div align="center"><font size="1"> 
          <select name="docente10" size="1" id="select68">
            <option></option>
<?php
include ("conexionfed.php");
$sql = "select nombre from datosp order by `datosp`.`nombre` asc"; 
$sql = mysql_query($sql) or die(mysql_error("OCURRIO UN PROBLEMA CON LA CONEXION"));
while($row = mysql_fetch_array($sql))
{
$docente=$row[nombre];
 echo "<option>".$docente."</option>";
}     
?>
          </select>
          </font></div></td>
      <td><div align="center"> 
          <input name="r803" type="number" id="r49" value="" size="5" maxlength="2">
        </div></td>
      <td><div align="center"> 
          <input name="r903" type="number" id="r68" value="" size="5" maxlength="2">
        </div></td>
      <td><div align="center"> 
          <input name="r1003" type="number" id="r69" value="" size="5" maxlength="2">
        </div></td>
      <td><div align="center"> 
          <input name="r1103" type="number" id="r70" value="" size="5" maxlength="2">
        </div></td>
      <td><div align="center"> 
          <input name="r1203" type="number" id="r71" value="" size="5" maxlength="2">
        </div></td>
      <td><div align="center"> 
          <input name="r1303" type="number" id="r72" value="" size="5" maxlength="2">
        </div></td>
      <td><div align="center"> 
          <input name="ob10" type="text" id="ob10" value="" size="30" maxlength="100">
        </div></td>
    </tr>
    <tr> 
      <td><div align="center"><font size="1"> 
          <select name="materia11" size="1" id="select14">
            <option> </option>
<?php
include ("conexionfed.php");
$sql = "select materia from materias order by `materias`.`materia` asc"; 
$sql = mysql_query($sql) or die(mysql_error("OCURRIO UN PROBLEMA CON LA CONEXION"));
while($row = mysql_fetch_array($sql))
{
$materia=$row[materia];
 echo "<option>".$materia."</option>";
}     
?>
          </select>
          </font> </div></td>
      <td><div align="center"> 
          <input name="grupo11" type="text" value="" size="2" maxlength="2">
        </div></td>
      <td><div align="center"><font size="1"> 
          <select name="docente11" size="1" id="select69">
            <option></option>
<?php
include ("conexionfed.php");
$sql = "select nombre from datosp order by `datosp`.`nombre` asc"; 
$sql = mysql_query($sql) or die(mysql_error("OCURRIO UN PROBLEMA CON LA CONEXION"));
while($row = mysql_fetch_array($sql))
{
$docente=$row[nombre];
 echo "<option>".$docente."</option>";
}     
?>
          </select>
          </font></div></td>
      <td><div align="center"> 
          <input name="r804" type="number" id="r50" value="" size="5" maxlength="2">
        </div></td>
      <td><div align="center"> 
          <input name="r904" type="number" id="r63" value="" size="5" maxlength="2">
        </div></td>
      <td><div align="center"> 
          <input name="r1004" type="number" id="r64" value="" size="5" maxlength="2">
        </div></td>
      <td><div align="center"> 
          <input name="r1104" type="number" id="r65" value="" size="5" maxlength="2">
        </div></td>
      <td><div align="center"> 
          <input name="r1204" type="number" id="r66" value="" size="5" maxlength="2">
        </div></td>
      <td><div align="center"> 
          <input name="r1304" type="number" id="r67" value="" size="5" maxlength="2">
        </div></td>
      <td><div align="center"> 
          <input name="ob11" type="text" id="ob11" value="" size="30" maxlength="100">
        </div></td>
    </tr>
    <tr> 
      <td><div align="center"><font size="1"> 
          <select name="materia12" size="1" id="select15">
            <option> </option>
<?php
include ("conexionfed.php");
$sql = "select materia from materias order by `materias`.`materia` asc"; 
$sql = mysql_query($sql) or die(mysql_error("OCURRIO UN PROBLEMA CON LA CONEXION"));
while($row = mysql_fetch_array($sql))
{
$materia=$row[materia];
 echo "<option>".$materia."</option>";
}     
?>
          </select>
          </font> </div></td>
      <td><div align="center"> 
          <input name="grupo12" type="text" value="" size="2" maxlength="2">
        </div></td>
      <td><div align="center"><font size="1"> 
          <select name="docente12" size="1" id="select70">
            <option></option>
<?php
include ("conexionfed.php");
$sql = "select nombre from datosp order by `datosp`.`nombre` asc"; 
$sql = mysql_query($sql) or die(mysql_error("OCURRIO UN PROBLEMA CON LA CONEXION"));
while($row = mysql_fetch_array($sql))
{
$docente=$row[nombre];
 echo "<option>".$docente."</option>";
}     
?>
          </select>
          </font></div></td>
      <td><div align="center"> 
          <input name="r805" type="number" id="r51" value="" size="5" maxlength="2">
        </div></td>
      <td><div align="center"> 
          <input name="r905" type="number" id="r58" value="" size="5" maxlength="2">
        </div></td>
      <td><div align="center"> 
          <input name="r1005" type="number" id="r59" value="" size="5" maxlength="2">
        </div></td>
      <td><div align="center"> 
          <input name="r1105" type="number" id="r60" value="" size="5" maxlength="2">
        </div></td>
      <td><div align="center"> 
          <input name="r1205" type="number" id="r61" value="" size="5" maxlength="2">
        </div></td>
      <td><div align="center"> 
          <input name="r1305" type="number" id="r62" value="" size="5" maxlength="2">
        </div></td>
      <td><div align="center"> 
          <input name="ob12" type="text" id="ob12" value="" size="30" maxlength="100">
        </div></td>
    </tr>
    <tr> 
      <td><div align="center"><font size="1"> 
          <select name="materia13" size="1" id="select23">
            <option> </option>
<?php
include ("conexionfed.php");
$sql = "select materia from materias order by `materias`.`materia` asc "; 
$sql = mysql_query($sql) or die(mysql_error("OCURRIO UN PROBLEMA CON LA CONEXION"));
while($row = mysql_fetch_array($sql))
{
$materia=$row[materia];
 echo "<option>".$materia."</option>";
}     
?>
          </select>
          </font> </div></td>
      <td><div align="center"> 
          <input name="grupo13" type="text" value="" size="2" maxlength="2">
        </div></td>
      <td><div align="center"><font size="1"> 
          <select name="docente13" size="1" id="select71">
            <option></option>
<?php
include ("conexionfed.php");
$sql = "select nombre from datosp order by `datosp`.`nombre` asc "; 
$sql = mysql_query($sql) or die(mysql_error("OCURRIO UN PROBLEMA CON LA CONEXION"));
while($row = mysql_fetch_array($sql))
{
$docente=$row[nombre];
 echo "<option>".$docente."</option>";
}     
?>
          </select>
          </font></div></td>
      <td><div align="center"> 
          <input name="r806" type="number" id="r52" value="" size="5" maxlength="2">
        </div></td>
      <td><div align="center"> 
          <input name="r906" type="number" id="r53" value="" size="5" maxlength="2">
        </div></td>
      <td><div align="center"> 
          <input name="r1006" type="number" id="r54" value="" size="5" maxlength="2">
        </div></td>
      <td><div align="center"> 
          <input name="r1106" type="number" id="r55" value="" size="5" maxlength="2">
        </div></td>
      <td><div align="center"> 
          <input name="r1206" type="number" id="r56" value="" size="5" maxlength="2">
        </div></td>
      <td><div align="center"> 
          <input name="r1306" type="number" id="r57" value="" size="5" maxlength="2">
        </div></td>
      <td><div align="center"> 
          <input name="ob13" type="text" id="ob13" value="" size="30" maxlength="100">
        </div></td>
    </tr>
  </table>
      
  <div align="center"> 
    <p> A1. DOCENCIA2. Trabajo de grado (Educaci&oacute;n Infantil) Proyecto pedag&oacute;gico 
      (Educaci&oacute;n Especial)</p>
        <p> Investigaci&oacute;n pedag&oacute;gica 
          (Psicolog&iacute;a y Pedagog&iacute;a) IA DESEMPE&Ntilde;O DE EVALUACI&Oacute;N </p>
      </div>
      
  <table width="1363" border="2">
    <tr> 
      <td width="365"><div align="center"><font size="3">Espacio academico</font></div></td>
      <td width="39"><div align="center"><font size="3">Grupo</font></div></td>
      <td width="259"><div align="center"><font size="3">Nombre del docente</font></div></td>
      <td width="133"><div align="center"><font size="2">14. Particip&oacute; 
          activamente con el estudiante en el dise&ntilde;o, formulaci&oacute;n 
          e intervenci&oacute;n del trabajo de grado, proyecto pedag&oacute;gico 
          o investigaci&oacute;n pedag&oacute;gica. </font></div></td>
      <td width="139"><div align="center"><font size="2">15. Orient&oacute; y 
          asesor&oacute; te&oacute;ricamente el desarrollo del trabajo de grado, 
          proyecto pedag&oacute;gico o investigaci&oacute;n pedag&oacute;gica, 
          mediante el an&aacute;lisis de bibliograf&iacute;a actualizada y pertinente 
          </font></div></td>
      <td width="100"><div align="center"><font size="2">16. Dinamiz&oacute; y 
          particip&oacute;, con estudiantes, profesores e instituciones, en la 
          socializaci&oacute;n de los avances logrados </font></div></td>
      <td width="94"><div align="center"><font size="2">17. Estimul&oacute; la 
          capacidad escritural a trav&eacute;s de la lectura y an&aacute;lisis 
          cr&iacute;tico del documento que elabora y sistematiza el estudiante 
          </font></div></td>
      <td width="180"><div align="center"><font size="3">OBSERVACIONES</font></div></td>
    </tr>
    <tr> 
      <td><div align="center"><font size="1"> 
          <select name="materia14" size="1" id="select22">
            <option> </option>
<?php
include ("conexionfed.php");
$sql = "select materia from materias order by `materias`.`materia` asc"; 
$sql = mysql_query($sql) or die(mysql_error("OCURRIO UN PROBLEMA CON LA CONEXION"));
while($row = mysql_fetch_array($sql))
{
$materia=$row[materia];
 echo "<option>".$materia."</option>";
}     
?>
          </select>
          </font> </div></td>
      <td><div align="center"> 
          <input name="grupo14" type="text" value="" size="2" maxlength="2">
        </div></td>
      <td><div align="center"><font size="1"> 
          <select name="docente14" size="1" id="select72">
            <option></option>
<?php
include ("conexionfed.php");
$sql = "select nombre from datosp order by `datosp`.`nombre` asc"; 
$sql = mysql_query($sql) or die(mysql_error("OCURRIO UN PROBLEMA CON LA CONEXION"));
while($row = mysql_fetch_array($sql))
{
$docente=$row[nombre];
 echo "<option>".$docente."</option>";
}     
?>          </select>
          </font></div></td>
      <td><div align="center"> 
          <input name="r1401" type="number" id="r1401" value="" size="5" maxlength="2">
        </div></td>
      <td><div align="center"> 
          <input name="r1501" type="number" id="r1501" value="" size="5" maxlength="2">
        </div></td>
      <td><div align="center"> 
          <input name="r1601" type="number" id="r1601" value="" size="5" maxlength="2">
        </div></td>
      <td><div align="center"> 
          <input name="r1701" type="number" id="r1701" value="" size="5" maxlength="2">
        </div></td>
      <td><div align="center"> 
          <input name="ob14" type="text" id="d482" value="" size="30" maxlength="100">
        </div></td>
    </tr>
    <tr> 
      <td><div align="center"><font size="1"> 
          <select name="materia15" size="1" id="select31">
            <option> </option>
<?php
include ("conexionfed.php");
$sql = "select materia from materias order by `materias`.`materia` asc "; 
$sql = mysql_query($sql) or die(mysql_error("OCURRIO UN PROBLEMA CON LA CONEXION"));
while($row = mysql_fetch_array($sql))
{
$materia=$row[materia];
 echo "<option>".$materia."</option>";
}     
?>
          </select>
          </font> </div></td>
      <td><div align="center"> 
          <input name="grupo15" type="text" value="" size="2" maxlength="2">
        </div></td>
      <td><div align="center"><font size="1"> 
          <select name="docente15" size="1" id="select28">
            <option></option>
<?php
include ("conexionfed.php");
$sql = "select nombre from datosp order by `datosp`.`nombre` asc "; 
$sql = mysql_query($sql) or die(mysql_error("OCURRIO UN PROBLEMA CON LA CONEXION"));
while($row = mysql_fetch_array($sql))
{
$docente=$row[nombre];
 echo "<option>".$docente."</option>";
}     
?>
          </select>
          </font></div></td>
      <td><div align="center"> 
          <input name="r1402" type="number" id="r1402" value="" size="5" maxlength="2">
        </div></td>
      <td><div align="center"> 
          <input name="r1502" type="number" id="r1502" value="" size="5" maxlength="2">
        </div></td>
      <td><div align="center"> 
          <input name="r1602" type="number" id="r1602" value="" size="5" maxlength="2">
        </div></td>
      <td><div align="center"> 
          <input name="r1702" type="number" id="r1702" value="" size="5" maxlength="2">
        </div></td>
      <td><div align="center"> 
          <input name="ob15" type="text" id="ob15" value="" size="30" maxlength="100">
        </div></td>
    </tr>
    <tr> 
      <td><div align="center"><font size="1"> 
          <select name="materia16" size="1" id="select45">
            <option> </option>
<?php
include ("conexionfed.php");
$sql = "select materia from materias order by `materias`.`materia` asc"; 
$sql = mysql_query($sql) or die(mysql_error("OCURRIO UN PROBLEMA CON LA CONEXION"));
while($row = mysql_fetch_array($sql))
{
$materia=$row[materia];
 echo "<option>".$materia."</option>";
}     
?>
          </select>
          </font> </div></td>
      <td><div align="center"> 
          <input name="grupo16" type="text" value="" size="2" maxlength="2">
        </div></td>
      <td><div align="center"><font size="1"> 
          <select name="docente16" size="1" id="select29">
            <option></option>
<?php
include ("conexionfed.php");
$sql = "select nombre from datosp order by `datosp`.`nombre` asc"; 
$sql = mysql_query($sql) or die(mysql_error("OCURRIO UN PROBLEMA CON LA CONEXION"));
while($row = mysql_fetch_array($sql))
{
$docente=$row[nombre];
 echo "<option>".$docente."</option>";
}     
?>
          </select>
          </font></div></td>
      <td><div align="center"> 
          <input name="r1403" type="number" id="r1403" value="" size="5" maxlength="2">
        </div></td>
      <td><div align="center"> 
          <input name="r1503" type="number" id="r1503" value="" size="5" maxlength="2">
        </div></td>
      <td><div align="center"> 
          <input name="r1603" type="number" id="r1603" value="" size="5" maxlength="2">
        </div></td>
      <td><div align="center"> 
          <input name="r1703" type="number" id="r1703" value="" size="5" maxlength="2">
        </div></td>
      <td><div align="center"> 
          <input name="ob16" type="text" id="ob16" value="" size="30" maxlength="100">
        </div></td>
    </tr>
    <tr> 
      <td> <div align="center"><font size="1"> 
          <select name="materia17" size="1" id="select46">
            <option> </option>
<?php
include ("conexionfed.php");
$sql = "select materia from materias order by `materias`.`materia` asc"; 
$sql = mysql_query($sql) or die(mysql_error("OCURRIO UN PROBLEMA CON LA CONEXION"));
while($row = mysql_fetch_array($sql))
{
$materia=$row[materia];
 echo "<option>".$materia."</option>";
}     
?>
          </select>
          </font> </div></td>
      <td> <div align="center"> 
          <input name="grupo17" type="text" value="" size="2" maxlength="2">
        </div></td>
      <td><div align="center"><font size="1"> 
          <select name="docente17" size="1" id="select75">
            <option></option>
<?php
include ("conexionfed.php");
$sql = "select nombre from datosp order by `datosp`.`nombre` asc"; 
$sql = mysql_query($sql) or die(mysql_error("OCURRIO UN PROBLEMA CON LA CONEXION"));
while($row = mysql_fetch_array($sql))
{
$docente=$row[nombre];
 echo "<option>".$docente."</option>";
}     
?>
          </select>
          </font></div></td>
      <td><div align="center"> 
          <input name="r1404" type="number" id="r1404" value="" size="5" maxlength="2">
        </div></td>
      <td><div align="center"> 
          <input name="r1504" type="number" id="r1504" value="" size="5" maxlength="2">
        </div></td>
      <td><div align="center"> 
          <input name="r1604" type="number" id="r1604" value="" size="5" maxlength="2">
        </div></td>
      <td><div align="center"> 
          <input name="r1704" type="number" id="r1704" value="" size="5" maxlength="2">
        </div></td>
      <td><div align="center"> 
          <input name="ob17" type="text" id="d4112" value="" size="30" maxlength="100">
        </div></td>
    </tr>
  </table>
  <div align="right">
<p>&nbsp;</p>
        <p>El contenido de este formato es copia del formato original aprobado por 
          el consejo academico de la Facultad de Educacion </p>
      </div>
      <div align="center"></div>
      <div align="center">
        <input type="submit" value="enviar">
      </div>
      <input type="hidden" name="MM_insert" value="form2">
    </form>
<p>&nbsp;</p>
<p align="left">&nbsp;</p>
    <p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
    <p align="right">&nbsp;</p>
<p align="center"><br>
</p>
<p align="center"></p>
<h1>&nbsp;</h1>
</body>
</html>