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
	if ($_POST['b1'] >50 || $_POST['b2'] >50 || $_POST['b3'] >50 || $_POST['b4'] >50 || $_POST['b5'] >50 || $_POST['b6'] >50 || $_POST['b7'] >50 || $_POST['b8'] >50 || $_POST['b9'] >50 || $_POST['b10'] >50 || $_POST['b11'] >50 || $_POST['b12'] >50 || $_POST['b13'] >50 || $_POST['b14'] >50 || $_POST['b15'] >50 || $_POST['b16'] >50 || $_POST['b17'] >50 || $_POST['b18'] >50 || $_POST['b19'] >50 || $_POST['b20'] >50 || $_POST['b1'] <0 || $_POST['b2'] <0 || $_POST['b3'] <0 || $_POST['b4'] <0 || $_POST['b5'] <0 || $_POST['b6'] <0 || $_POST['b7'] >0 || $_POST['b8'] >0 || $_POST['b9'] >0 || $_POST['b10'] >0 || $_POST['b11'] >0 || $_POST['b12'] >0 || $_POST['b13'] >0 || $_POST['b14'] >0 || $_POST['b15'] >0 || $_POST['b16'] >0 || $_POST['b17'] >0 || $_POST['b18'] >0 || $_POST['b19'] >0 || $_POST['b20'] >0)
  {
 echo '<script language="javascript">
alert("La calificacion es entre 0 y 50,   ¡...La calificacion NO se guardo...!.    ¡...Sera redireccionado para volver a entrar Gracias...!.");
window.location = "index.php";
</script>';
  }
   else
  {
if (($_POST["MM_insert"]) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO fb (nombre, cedula, programa, vinculacion, b1, b2, b3, b4, b5, b6, b7, b8, b9, b10, b11, b12, b13, b14, b15, b16, b17, b18, b19, b20, ob) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['nombre'], "text"),
                       GetSQLValueString($_POST['cedula'], "text"),
                       GetSQLValueString($_POST['programa'], "text"),
                       GetSQLValueString($_POST['vinculacion'], "text"),
                       GetSQLValueString($_POST['b1'], "int"),
                       GetSQLValueString($_POST['b2'], "int"),
                       GetSQLValueString($_POST['b3'], "int"),
                       GetSQLValueString($_POST['b4'], "int"),
                       GetSQLValueString($_POST['b5'], "int"),
                       GetSQLValueString($_POST['b6'], "int"),
                       GetSQLValueString($_POST['b7'], "int"),
					   GetSQLValueString($_POST['b8'], "int"),
                       GetSQLValueString($_POST['b9'], "int"),
                       GetSQLValueString($_POST['b10'], "int"),
                       GetSQLValueString($_POST['b11'], "int"),
                       GetSQLValueString($_POST['b12'], "int"),
                       GetSQLValueString($_POST['b13'], "int"),
                       GetSQLValueString($_POST['b14'], "int"),
					   GetSQLValueString($_POST['b15'], "int"),
                       GetSQLValueString($_POST['b16'], "int"),
                       GetSQLValueString($_POST['b17'], "int"),
                       GetSQLValueString($_POST['b18'], "int"),
                       GetSQLValueString($_POST['b19'], "int"),
					   GetSQLValueString($_POST['b20'], "int"),
                       GetSQLValueString($_POST['ob'], "text"));		  
  mysql_select_db($database_mysql, $mysql);
  @$Result1 = mysql_query($insertSQL, $mysql) or die(@mysql_error());
  ?>
  <script language="javascript">
alert('Su calificacion se ha registrado correctamente');
</script>
  <?php
}
}

include ("conexionfed.php");
$sql = "select * from datosp WHERE cedula = '{$_POST['usuario']}'"; 
$sql = mysql_query($sql) or die(mysql_error("OCURRIO UN PROBLEMA CON LA CONEXION"));
$b="tad";
$a=$b;
while($row = mysql_fetch_array($sql))
{
$cc=$row[cedula];
$nombre=$row[nombre];
$programa=$row[programa];
$vinculacion=$row[vinculacion];
}
?>
<html>
<head>
<title>formato B AUTOEVALUACION</title>
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
	<input name="cedula" type="hidden" id="cedula" value="<?php echo $cc ; ?>" >
	<input name="programa" type="hidden" id="programa" value="<?php echo $programa ; ?>" >
	<input name="vinculacion" type="hidden" id="vinculacion" value="<?php echo $vinculacion ; ?>" >
    <p>&nbsp;</p>
  <div align="center"></div>
<table width="75%" border="2" align="center">
  <tr> 
    <td> <div align="center"><img src="fb1.JPG" width="268" height="79"><br>
        FACULTAD DE EDUCACI&Oacute;N<br>
        DEPARTAMENTO DE PSICOPEDAGOG&Iacute;A<br>
      </div></td>
    <td><div align="center">Calificaci&oacute;n del desempe&ntilde;o del <br>
        Profesor universitario </div>
      <p align="center">FORMATO B: AUTOEVALUACI&Oacute;N<br>
      </p></td>
  </tr>
</table>
<div align="justify">
    <p>Apreciado(a) profesor (a): Lea con atenci&oacute;n los aspectos contemplados 
      en este formato y proceda a asignar el valor, en la escala de 0 a 50, que 
      usted considere pertinente dar a cada uno de los numerales que indagan sobre 
      su desempe&ntilde;o de acuerdo con su plan de trabajo del presente semestre. 
      Adicionalmente, usted debe entregar un informe cualitativo que soporte dicha 
      calificaci&oacute;n. A los numerales que no correspondan con su desempe&ntilde;o, 
      docente, no los diligencie, lo cual no altera el promedio.</p>
    <table width="83%" height="80" border="2" align="center">
      <tr> 
        <td width="22%"><div align="left">Nombre del profesor</div></td>
        <td width="50%"><div align="center"><?php echo $nombre ?></div></td>
        <td width="9%"><div align="center">C.C </div></td>
        <td width="19%"><div align="center"><?php echo $cc ?></div></td>
      </tr>
      <tr> 
        <td><div align="left">Programa curricular </div></td>
        <td> <div align="center"> 
            <?php 
	if ($programa==50)
	{
	$programa="EDUCACION ESPECIAL";
	}
	if ($programa==51)
	{
	$programa="PSICOLOGIA Y PEDAGOGIA";
	}
	if ($programa==52 || $programa==56)
	{
	$programa="EDUCACION INFANTIL";
	}
	if ($programa==53)
	{
	$programa="EDUCACION COMUNITARIA";
	}
	echo $programa
	?>
          </div></td>
        <td><div align="center">Periodo acad&eacute;mico</div></td>
        <td><div align="center">2018-II</div></td>
      </tr>
      <tr> 
        <td><div align="left">Tipo de vinculaci&oacute;n:</div></td>
        <td> <div align="center"><?php echo $vinculacion ?></div></td>
        <td colspan="2"><div align="center"></div>
          <div align="center"></div></td>
      </tr>
    </table>
  <p>&nbsp;</p>
    <table width="82%" height="774" border="2" align="center">
      <tr> 
        <td width="92%"><div align="center">DESEMPE&Ntilde;O DEL PROFESOR UNIVERSITARIO</div></td>
        <td width="8%"><div align="center">Calificaci&oacute;n de 0 a 50</div></td>
      </tr>
      <tr> 
        <td><div align="left"><strong>A. Docencia</strong></div></td>
        <td><div align="center"></div></td>
      </tr>
      <tr> 
        <td>1. Socialic&eacute;, puse en consideraci&oacute;n y acord&eacute; 
          el programa acad&eacute;mico que desarroll&eacute; en el espacio.</td>
        <td> <div align="center"> 
            <input name="b1" type="number" id="b1" size="5" maxlength="2">
          </div></td>
      </tr>
      <tr> 
        <td>2. Propuse y desarroll&eacute; acciones y experiencias que brindaron 
          elementos en la promoci&oacute;n de aprendizaje individual y colectivo.</td>
        <td><div align="center"> 
            <input name="b2" type="number" id="b2" size="5" maxlength="2">
          </div></td>
      </tr>
      <tr> 
        <td>3. Promov&iacute; la confrontaci&oacute;n, discusi&oacute;n, comprensi&oacute;n 
          y argumentaci&oacute;n conceptual sobre la tem&aacute;tica del espacio 
          acad&eacute;mico.</td>
        <td><div align="center"> 
            <input name="b3" type="number" id="b3" size="5" maxlength="2">
          </div></td>
      </tr>
      <tr> 
        <td>4. Desarroll&oacute; estrategias pedag&oacute;gicas relacionadas y 
          pertinentes con los prop&oacute;sitos y din&aacute;micas del espacio 
          acad&eacute;mico.</td>
        <td><div align="center"> 
            <input name="b4" type="number" id="b4" size="5" maxlength="2">
          </div></td>
      </tr>
      <tr> 
        <td>5. Llev&eacute; a cabo la evaluaci&oacute;n como proceso formativo 
          e hice retroalimentaci&oacute;n oportuna del desempe&ntilde;o acad&eacute;mico 
          individual y grupal.</td>
        <td><div align="center"> 
            <input name="b5" type="number" id="b5" size="5" maxlength="2">
          </div></td>
      </tr>
      <tr> 
        <td>6. Propici&eacute; la formulaci&oacute;n permanente e preguntas, lectura 
          de textos y documentos, an&aacute;lisis de las tem&aacute;ticas estudiadas, 
          revisi&oacute;n de bibliograf&iacute;a actualizada y producci&oacute;n 
          de textos escritos pertinentes con el espacio acad&eacute;mico.</td>
        <td><div align="center"> 
            <input name="b6" type="number" id="b6" size="5" maxlength="2">
          </div></td>
      </tr>
      <tr> 
        <td>7. Tom&eacute; en cuenta la capacidad creativa, participativa, propositiva 
          y de gesti&oacute;n de los estudiantes.</td>
        <td><div align="center"> 
            <input name="b7" type="number" id="b7" size="5" maxlength="2">
          </div></td>
      </tr>
      <tr> 
        <td><div align="right"><strong>SUBTOTAL A</strong></div></td>
        <td><div align="center"></div></td>
      </tr>
      <tr> 
        <td><strong>A1. Docentes coordinadores de pr&aacute;ctica educativa </strong></td>
        <td><div align="center"></div></td>
      </tr>
      <tr> 
        <td>8. Promov&iacute; la lectura de los contextos donde se realiz&oacute; 
          la pr&aacute;ctica a trav&eacute;s de la observaci&oacute;n, an&aacute;lisis 
          te&oacute;rico, interpretaci&oacute;n, diagn&oacute;stico y construcci&oacute;n 
          de conocimiento. </td>
        <td><div align="center"> 
            <input name="b8" type="number" id="b8" size="5" maxlength="2">
          </div></td>
      </tr>
      <tr> 
        <td>9. Orient&eacute; el dise&ntilde;o y la ejecuci&oacute;n del programa 
          acad&eacute;mico de acuerdo con el estudio de la realidad de la comunidad 
          educativa.</td>
        <td><div align="center"> 
            <input name="b9" type="number" id="b9" size="5" maxlength="2">
          </div></td>
      </tr>
      <tr> 
        <td>10. Propici&eacute; la formulaci&oacute;n permanente de preguntas, 
          lectura de textos y documentos, an&aacute;lisis de las tem&aacute;ticas 
          estudiadas, revisi&oacute;n de bibliograf&iacute;a actualizada y producci&oacute;n 
          de texto escrito pertinente a la pr&aacute;ctica educativa.</td>
        <td><div align="center"> 
            <input name="b10" type="number" id="b10" size="5" maxlength="2">
          </div></td>
      </tr>
      <tr> 
        <td>11. Acompa&ntilde;&eacute;, de manera sistem&aacute;tica, procesos 
          de interacci&oacute;n y comunicaci&oacute;n con el estudiante y la instituci&oacute;n.</td>
        <td><div align="center"> 
            <input name="b11" type="number" id="b11" size="5" maxlength="2">
          </div></td>
      </tr>
      <tr> 
        <td>12. Acord&eacute; criterios y mecanismos, con estudiantes e instituci&oacute;n, 
          para el seguimiento de los procesos desarrollados en la pr&aacute;ctica.</td>
        <td><div align="center"> 
            <input name="b12" type="number" id="b12" size="5" maxlength="2">
          </div></td>
      </tr>
      <tr> 
        <td>13. Tom&eacute; en cuenta la capacidad creativa, participativa, propositiva 
          y de gesti&oacute;n de los estudiantes que realizaron la pr&aacute;ctica.</td>
        <td><div align="center"> 
            <input name="b13" type="number" id="b13" size="5" maxlength="2">
          </div></td>
      </tr>
      <tr> 
        <td><div align="right"><strong>SUBTOTAL A1</strong></div></td>
        <td><div align="center"></div></td>
      </tr>
      <tr> 
        <td><strong>A2. Trabajo de grado (Educaci&oacute;n Infantil)<br>
          Proyecto pedag&oacute;gico (Educaci&oacute;n Especial)<br>
          Investigaci&oacute;n pedag&oacute;gica (Psicolog&iacute;a y Pedagog&iacute;a)</strong><br></td>
        <td><div align="center"></div></td>
      </tr>
      <tr> 
        <td>14. Particip&eacute; activamente con el estudiante en el dise&ntilde;o, 
          formulaci&oacute;n e intervenci&oacute;n del trabajo de grado, proyecto 
          pedag&oacute;gico o investigaci&oacute;n pedag&oacute;gica.</td>
        <td><div align="center"> 
            <input name="b14" type="number" id="b14" size="5" maxlength="2">
          </div></td>
      </tr>
      <tr> 
        <td>15. Orient&eacute; y asesor&eacute; te&oacute;ricamente el desarrollo 
          del trabajo de grado, proyecto pedag&oacute;gico o investigaci&oacute;n 
          pedag&oacute;gica, mediante el an&aacute;lisis de bibliograf&iacute;a 
          actualizada y pertinente</td>
        <td><div align="center"> 
            <input name="b15" type="number" id="b15" size="5" maxlength="2">
          </div></td>
      </tr>
      <tr> 
        <td>16. Dinamic&eacute; y particip&eacute;, con estudiantes, profesores 
          e instituciones, en la socializaci&oacute;n de los avances logrados</td>
        <td><div align="center"> 
            <input name="b16" type="number" id="b16" size="5" maxlength="2">
          </div></td>
      </tr>
      <tr> 
        <td>17. Estimul&eacute; la capacidad escritural a trav&eacute;s de la 
          lectura y an&aacute;lisis cr&iacute;tico del documento que elabora y 
          sistematiza el estudiante</td>
        <td><div align="center"> 
            <input name="b17" type="number" id="b17" size="5" maxlength="2">
          </div></td>
      </tr>
      <tr> 
        <td><div align="right"><strong>SUBTOTAL A2</strong></div></td>
        <td><div align="center"></div></td>
      </tr>
      <tr> 
        <td><strong>B. Investigaci&oacute;n</strong></td>
        <td><div align="center"></div></td>
      </tr>
      <tr> 
        <td>18. Atend&iacute; las responsabilidades adquiridas para el desarrollo 
          de la investigaci&oacute;n relacionadas con los prop&oacute;sitos del 
          proyecto, entrega oportuna de informes, divulgaci&oacute;n y socializaci&oacute;n 
          a trav&eacute;s de art&iacute;culos o ponencias y vinculaci&oacute;n 
          de estudiantes al proceso.</td>
        <td><div align="center"> 
            <input name="b18" type="number" id="b18" size="5" maxlength="2">
          </div></td>
      </tr>
      <tr> 
        <td><strong>C. Proyectos de extensi&oacute;n</strong></td>
        <td><div align="center"></div></td>
      </tr>
      <tr> 
        <td>19. Respond&iacute; con idoneidad a los prop&oacute;sitos, funciones 
          y tareas de los distintos convenios y acciones establecidas en cada 
          uno de los proyectos de extensi&oacute;n en que particip&eacute;.</td>
        <td><div align="center"> 
            <input name="b19" type="number" id="b19" size="5" maxlength="2">
          </div></td>
      </tr>
      <tr> 
        <td><strong>D. Actividades de gesti&oacute;n institucional</strong></td>
        <td><div align="center"></div></td>
      </tr>
      <tr> 
        <td>20. Respond&iacute; con idoneidad a los prop&oacute;sitos, funciones 
          y tareas correspondientes a la gesti&oacute;n institucional. </td>
        <td><div align="center"> 
            <input name="b20" type="number" id="b20" size="5" maxlength="2">
          </div></td>
      </tr>
    </table>
  <p><strong>Comentarios:</strong></p>
    <p>Sus opiniones y sugerencias ser&aacute;n una valiosa contribuci&oacute;n 
      para fortalecer la din&aacute;mica acad&eacute;mica y potenciar las condiciones 
      de orden administrativo en procura de garantizar mayor bienestar para el 
      desempe&ntilde;o del profesor universitario. </p>
    <p align="center"> 
      <textarea name="ob" cols="100" rows="5" id="ob"></textarea>
    </p>
    <p align="center">
      <input type="submit"  value="Enviar">
    </p>
	</div>
	 <input type="hidden" name="MM_insert" value="form1">
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