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
  $insertSQL = sprintf("INSERT INTO validacion (usuario, contra, id) VALUES (%s, %s, %s)",
                       GetSQLValueString($_POST['usuario'], "text"),
                       GetSQLValueString($_POST['contra'], "text"),
                       GetSQLValueString($_POST['id'], "int"));		  
  mysql_select_db($database_mysql, $mysql);
  $Result1 = mysql_query($insertSQL, $mysql) or die(mysql_error());
  ?>
  <script language="javascript">
alert('validacion guardada');
</script>
  <?php
}

require_once('Connections/mysql.php'); 
if (($_POST["MM_insert"]) && ($_POST["MM_insert"] == "form2")) {
  $insertSQL = sprintf("INSERT INTO materias (materia) VALUES (%s)",
                       GetSQLValueString($_POST['materia'], "text"));		  
  mysql_select_db($database_mysql, $mysql);
  $Result1 = mysql_query($insertSQL, $mysql) or die(mysql_error());
  ?>
  <script language="javascript">
alert('materia guardada');
</script>
  <?php
}

require_once('Connections/mysql.php'); 
if (($_POST["MM_insert"]) && ($_POST["MM_insert"] == "form3")) {
  $insertSQL = sprintf("INSERT INTO datosp (nombre, cedula, programa, vinculacion) VALUES (%s, %s, %s, %s)",
                       GetSQLValueString($_POST['nombre'], "text"),
                       GetSQLValueString($_POST['cedula'], "text"),
                       GetSQLValueString($_POST['programa'], "text"),
                       GetSQLValueString($_POST['vinculacion'], "text"));		  
  mysql_select_db($database_mysql, $mysql);
  @$Result1 = mysql_query($insertSQL, $mysql) or die(@mysql_error());
  ?>
  <script language="javascript">
alert('datos del docente guardados correctamente');
</script>
  <?php
}
?>
<html>
<head>
<title>validacion</title>
</head>
<body>
  <form name="form1" method="post" action="">
  <p align="center">USUARIOS</p>
  <table width="24%" border="1" align="center">
    <tr> 
      <td width="43%"><div align="center"><font size="3">Usuario</font></div></td>
      <td width="57%"> <input name="usuario" type="text" id="usuario"> </td>
    </tr>
    <tr> 
      <td><div align="center">Contrase&ntilde;a</div></td>
      <td> <input name="contra" type="text" id="contra"> </td>
    </tr>
    <tr> 
      <td><div align="center">id</div></td>
      <td> <input name="id" type="text" id="id"> </td>
    </tr>
  </table>  <div align="center">
    <input type="submit" name="Submit" value="Enviar">
    <input type="hidden" name="MM_insert" value="form1">
  </div>
</form>

<form name="form2" method="post" action="">
  <p align="center">MATERIAS</p>
  <table width="24%" border="1" align="center">
    <tr> 
      <td width="43%"><div align="center"><font size="3">Materia</font></div></td>
      <td width="57%"> <input name="materia" type="text" id="materia"> </td>
    </tr>
  </table>
  <div align="center">
    <input type="submit" name="Submit" value="Enviar">
    <input type="hidden" name="MM_insert" value="form2">
  </div>
</form>
<form name="form3" method="post" action="">
  <div align="center">
    <p>DATOS DOCENTES</p>
    <table width="83%" height="80" border="2" align="center">
      <tr> 
        <td width="20%"><div align="left">Nombre del profesor</div></td>
        <td width="37%"><div align="center"> 
            <input name="nombre" type="text" id="nombre" size="50">
          </div></td>
        <td width="23%"><div align="center">C.C </div></td>
        <td width="20%"><div align="center"> 
            <input name="cedula" type="text" id="cedula">
          </div></td>
      </tr>
      <tr> 
        <td><div align="left">Programa curricular </div></td>
        <td> <div align="center"> 
            <input name="programa" type="text" id="programa" size="50">
          </div></td>
        <td><div align="center">Periodo acad&eacute;mico</div></td>
        <td><div align="center">2018-II</div></td>
      </tr>
      <tr> 
        <td colspan="2"><div align="left"></div>
          <div align="center"> </div></td>
        <td><div align="center">Tipo de vinculaci&oacute;n: </div></td>
        <td> <div align="center"> 
            <input name="vinculacion" type="text" id="vinculacion">
          </div></td>
      </tr>
    </table>
      <input type="submit" name="Submit2" value="Enviar">
      <input type="hidden" name="MM_insert" value="form3">
     </div>
</form>
<p>&nbsp;</p>
</body>
</html>