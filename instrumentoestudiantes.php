<?php 
require_once('Connections/mysql.php'); 
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
if (($_POST["MM_insert"]) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO encuesta (p1, p2, p3, p4, p5, p6, p7, p8, p9, p10, p11, p12, p13, p14, p15, p16, t16, p17, t17, p18, t18, p19, t19, p20, t20, p21, t21, 
  fundamentacion, p221, p222, p223, p224, p225, p226, p23, p24, p25, p26, p27, p281, p282, p283, p284, p285, p286, t281, t282, t283, t284, t285, t286, t287, t288,
  profundizacion, p291, p292, p293, p294, p295, p296, p30, p31, p32, p33, p34, p351, p352, p353, p354, p355, p356, t351, t352, t353, t354, t355, t356, t357, t358,
  p36, p37, p38, p39, p40, p41, p42, p43, p44, p45, p46, t46, t462, p47, p48, p49, p50, p51, p52, p53, p54, p55, p56, p57, t57, p58, t58, p59, t59, t601, t602, t603, t604, t605
  ) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['rb1'], "int"),
                       GetSQLValueString($_POST['rb2'], "int"),
                       GetSQLValueString($_POST['rb3'], "int"),
                       GetSQLValueString($_POST['rb4'], "int"),
      			       GetSQLValueString($_POST['rb5'], "int"),
                       GetSQLValueString($_POST['rb6'], "int"),
                       GetSQLValueString($_POST['rb7'], "int"),
                       GetSQLValueString($_POST['rb8'], "int"),
                       GetSQLValueString($_POST['rb9'], "int"),
                       GetSQLValueString($_POST['rb10'], "int"),
                       GetSQLValueString($_POST['rb11'], "int"),
                       GetSQLValueString($_POST['rb12'], "int"),
					   GetSQLValueString($_POST['rb13'], "int"),
					   GetSQLValueString($_POST['rb14'], "int"),
                       GetSQLValueString($_POST['rb15'], "int"),
					   GetSQLValueString($_POST['rb16'], "text"),
					   GetSQLValueString($_POST['txt16'], "text"),
                       GetSQLValueString($_POST['rb17'], "text"),
					   GetSQLValueString($_POST['txt17'], "text"),
                       GetSQLValueString($_POST['rb18'], "text"),
					   GetSQLValueString($_POST['txt18'], "text"),
                       GetSQLValueString($_POST['rb19'], "text"),
					   GetSQLValueString($_POST['txt19'], "text"),
      			       GetSQLValueString($_POST['rb20'], "text"),
					   GetSQLValueString($_POST['txt20'], "text"),
                       GetSQLValueString($_POST['rb21'], "text"),
					   GetSQLValueString($_POST['txt21'], "text"),
					   GetSQLValueString($_POST['fundamentacion'], "text"),
					   GetSQLValueString($_POST['rb221'], "int"),
					   GetSQLValueString($_POST['rb222'], "int"),
					   GetSQLValueString($_POST['rb223'], "int"),
					   GetSQLValueString($_POST['rb224'], "int"),
					   GetSQLValueString($_POST['rb225'], "int"),
					   GetSQLValueString($_POST['rb226'], "int"),
					   GetSQLValueString($_POST['rb23'], "int"),
					   GetSQLValueString($_POST['rb24'], "int"),
					   GetSQLValueString($_POST['rb25'], "int"),
					   GetSQLValueString($_POST['rb26'], "int"),
					   GetSQLValueString($_POST['rb27'], "int"),
					   GetSQLValueString($_POST['rb281'], "int"),
					   GetSQLValueString($_POST['rb282'], "int"),
                       GetSQLValueString($_POST['rb283'], "int"),
					   GetSQLValueString($_POST['rb284'], "int"),
					   GetSQLValueString($_POST['rb285'], "int"),
                       GetSQLValueString($_POST['rb286'], "int"),
					   GetSQLValueString($_POST['txt281'], "text"),
					   GetSQLValueString($_POST['txt282'], "text"),
                       GetSQLValueString($_POST['txt283'], "text"),
					   GetSQLValueString($_POST['txt284'], "text"),
                       GetSQLValueString($_POST['txt285'], "text"),
					   GetSQLValueString($_POST['txt286'], "text"),
                       GetSQLValueString($_POST['txt287'], "text"),
					   GetSQLValueString($_POST['txt288'], "text"),
      			       GetSQLValueString($_POST['profundizacion'], "text"),
					   GetSQLValueString($_POST['rb291'], "int"),
					   GetSQLValueString($_POST['rb292'], "int"),
					   GetSQLValueString($_POST['rb293'], "int"),
					   GetSQLValueString($_POST['rb294'], "int"),
					   GetSQLValueString($_POST['rb295'], "int"),
					   GetSQLValueString($_POST['rb296'], "int"),
					   GetSQLValueString($_POST['rb30'], "int"),
					   GetSQLValueString($_POST['rb31'], "int"),
					   GetSQLValueString($_POST['rb32'], "int"),
					   GetSQLValueString($_POST['rb33'], "int"),
					   GetSQLValueString($_POST['rb34'], "int"),
					   GetSQLValueString($_POST['rb351'], "int"),
					   GetSQLValueString($_POST['rb352'], "int"),
                       GetSQLValueString($_POST['rb353'], "int"),
					   GetSQLValueString($_POST['rb354'], "int"),
					   GetSQLValueString($_POST['rb355'], "int"),
                       GetSQLValueString($_POST['rb356'], "int"),
					   GetSQLValueString($_POST['txt351'], "text"),
					   GetSQLValueString($_POST['txt352'], "text"),
                       GetSQLValueString($_POST['txt353'], "text"),
					   GetSQLValueString($_POST['txt354'], "text"),
                       GetSQLValueString($_POST['txt355'], "text"),
					   GetSQLValueString($_POST['txt356'], "text"),
                       GetSQLValueString($_POST['txt357'], "text"),
					   GetSQLValueString($_POST['txt358'], "text"),
					   GetSQLValueString($_POST['rb36'], "int"),
					   GetSQLValueString($_POST['rb37'], "int"),
					   GetSQLValueString($_POST['rb38'], "int"),
					   GetSQLValueString($_POST['rb39'], "int"),
					   GetSQLValueString($_POST['rb40'], "int"),
					   GetSQLValueString($_POST['rb41'], "int"),
                       GetSQLValueString($_POST['rb42'], "int"),
					   GetSQLValueString($_POST['rb43'], "int"),
					   GetSQLValueString($_POST['rb44'], "int"),
                       GetSQLValueString($_POST['rb45'], "int"),
					   GetSQLValueString($_POST['rb46'], "text"),
                       GetSQLValueString($_POST['txt46'], "text"),
					   GetSQLValueString($_POST['txt462'], "text"),
					   GetSQLValueString($_POST['rb47'], "int"),
					   GetSQLValueString($_POST['rb48'], "int"),
					   GetSQLValueString($_POST['rb49'], "int"),
					   GetSQLValueString($_POST['rb50'], "int"),
					   GetSQLValueString($_POST['rb51'], "int"),
					   GetSQLValueString($_POST['rb52'], "int"),
                       GetSQLValueString($_POST['rb53'], "int"),
					   GetSQLValueString($_POST['rb54'], "int"),
					   GetSQLValueString($_POST['rb55'], "int"),
                       GetSQLValueString($_POST['rb56'], "int"),
					   GetSQLValueString($_POST['rb57'], "text"),
                       GetSQLValueString($_POST['txt57'], "text"),
					   GetSQLValueString($_POST['rb58'], "text"),
					   GetSQLValueString($_POST['txt58'], "text"),
					   GetSQLValueString($_POST['rb59'], "text"),
					   GetSQLValueString($_POST['txt59'], "text"),
					   GetSQLValueString($_POST['txt601'], "text"),
					   GetSQLValueString($_POST['txt602'], "text"),
					   GetSQLValueString($_POST['txt603'], "text"),
					   GetSQLValueString($_POST['txt604'], "text"),
					   GetSQLValueString($_POST['txt605'], "text")		    
					   );
			  
  include ("conexionfed.php");
  $Result1 = mysql_query($insertSQL, $mysql) or die(mysql_error());
}




?>

<html>
<head>
<title>ENCUESTA PARA ESTUDIANTES</title>
</head>
<body>
<div align="center">PROYECTO CURRICULAR DE EDUCACI&Oacute;N INFANTIL<br>
  PROCESO DE AUTOEVALUACION CURRICULAR<br>
  UNIVERSIDAD PEDAG&Oacute;GICA NACIONAL, </div>
<p align="center">ENCUESTA PARA ESTUDIANTES</p>
<p align="justify">Introducci&oacute;n.<br>
  Comedidamente le solicitamos diligenciar lo m&aacute;s objetivamente posible 
  esta encuesta con el prop&oacute;sito de evaluar de manera global el Proyecto 
  Curricular de Educaci&oacute;n Infantil del convenio Normal Superior Santiago 
  de Cali y la UPN con base en tres categor&iacute;as: Procesos acad&eacute;micos, 
  procesos administrativos y actores a partir de las cuales se reagruparon los 
  factores propuestos por el Sistema Nacional de Acreditaci&oacute;n que corresponden 
  a misi&oacute;n y proyecto institucional; estudiantes; profesores; procesos 
  acad&eacute;micos; bienestar institucional; organizaci&oacute;n, administraci&oacute;n 
  y gesti&oacute;n; egresados e impacto sobre el medio y finalmente recursos f&iacute;sicos 
  y financieros. La informaci&oacute;n obtenida forma parte del proceso de autoevaluaci&oacute;n 
  y autorregulaci&oacute;n del Proyecto Curricular de Educaci&oacute;n Infantil 
  de la UPN. <br>
  Califique cada uno de los enunciados asociados a cada categor&iacute;a, en la 
  escala ubicada a la derecha de los mismos, o indique si o no seg&uacute;n corresponda. 
  Escriba una breve justificaci&oacute;n de sus respuestas en los espacios que 
  aparecen despu&eacute;s de cada serie de enunciados o de cada enunciado si lo 
  considera necesario. <br>
  Agradecemos sus aportes y valoraciones. </p>
<p align="center">PROCESOS ACADEMICOS</p>
<p>FACTOR 1: PROYECTO INSTITUCIONAL<br>
  FACTOR 4: PROCESOS ACADEMICOS</p>
<div align="center">
 <form name="form1" method="post" action="">
  <table width="82%" border="1">
      <tr> 
        <td width="58%"> <div align="right">ESCALA </div></td>
        <td width="8%" rowspan="2"><div align="center">Muy Deficiente</div></td>
        <td width="8%" rowspan="2"><div align="center">Deficiente</div></td>
        <td width="10%" rowspan="2"><div align="center">Satisfactoria</div></td>
        <td width="9%" rowspan="2"><div align="center">Buena</div></td>
        <td width="7%" rowspan="2"><div align="center">Excelente</div></td>
      </tr>
      <tr> 
        <td>ENUNCIADOS</td>
      </tr>
      <tr> 
        <td>1. Considera usted que el Proyecto Curricular de Educaci&oacute;n 
          Infantil que est&aacute; cursando es acorde con la Misi&oacute;n de 
          la Normal Superior Santiago de Cali, de manera </td>
        <td> <div align="center"> 
            <input type="radio" name="rb1" value="1">
          </div></td>
        <td> <div align="center"> 
            <input type="radio" name="rb1" value="2">
          </div></td>
        <td> <div align="center"> 
            <input type="radio" name="rb1" value="3">
          </div></td>
        <td> <div align="center"> 
            <input type="radio" name="rb1" value="4">
          </div></td>
        <td> <div align="center"> 
            <input type="radio" name="rb1" value="5">
          </div></td>
      </tr>
      <tr> 
        <td>2. En su opini&oacute;n la concordancia entre los objetivos y metas 
          del Proyecto Curricular de Educaci&oacute;n Infantil y la misi&oacute;n 
          institucional de la Normal Superior Santiago de Cali es</td>
        <td> <div align="center"> 
            <input type="radio" name="rb2" value="1">
          </div></td>
        <td><div align="center"> 
            <input type="radio" name="rb2" value="2">
          </div></td>
        <td><div align="center"> 
            <input type="radio" name="rb2" value="3">
          </div></td>
        <td><div align="center"> 
            <input type="radio" name="rb2" value="4">
          </div></td>
        <td><div align="center"> 
            <input type="radio" name="rb2" value="5">
          </div></td>
      </tr>
      <tr> 
        <td>3. Considera usted que la propuesta curricular del Proyecto de Educaci&oacute;n 
          Infantil del Convenio Normal Superior - UPN retoma las necesidades y 
          car&aacute;cter&iacute;sticas del contexto de manera</td>
        <td><div align="center"> 
            <input type="radio" name="rb3" value="1">
          </div></td>
        <td><div align="center"> 
            <input type="radio" name="rb3" value="2">
          </div></td>
        <td><div align="center"> 
            <input type="radio" name="rb3" value="3">
          </div></td>
        <td><div align="center"> 
            <input type="radio" name="rb3" value="4">
          </div></td>
        <td><div align="center"> 
            <input type="radio" name="rb3" value="5">
          </div></td>
      </tr>
      <tr> 
        <td>4. Considera usted el apoyo que promueve el PEI de la Normal Superior 
          Santiago de Cali a la formaci&oacute;n integral de la comunidad universitaria, 
          de manera</td>
        <td><div align="center"> 
            <input type="radio" name="rb4" value="1">
          </div></td>
        <td><div align="center"> 
            <input type="radio" name="rb4" value="2">
          </div></td>
        <td><div align="center"> 
            <input type="radio" name="rb4" value="3">
          </div></td>
        <td><div align="center"> 
            <input type="radio" name="rb4" value="4">
          </div></td>
        <td><div align="center"> 
            <input type="radio" name="rb4" value="5">
          </div></td>
      </tr>
      <tr> 
        <td>5. Considera que el Proyecto Curricular de Educaci&oacute;n Infantil 
          que est&aacute; cursando es acorde con la Visi&oacute;n de la Normal 
          Superior Santiago de Cali, de manera </td>
        <td><div align="center"> 
            <input type="radio" name="rb5" value="1">
          </div></td>
        <td><div align="center"> 
            <input type="radio" name="rb5" value="2">
          </div></td>
        <td><div align="center"> 
            <input type="radio" name="rb5" value="3">
          </div></td>
        <td><div align="center"> 
            <input type="radio" name="rb5" value="4">
          </div></td>
        <td><div align="center"> 
            <input type="radio" name="rb5" value="5">
          </div></td>
      </tr>
      <tr> 
        <td>6. Considera usted la articulaci&oacute;n de procesos acad&eacute;micos 
          y administrativos, de manera</td>
        <td><div align="center"> 
            <input type="radio" name="rb6" value="1">
          </div></td>
        <td><div align="center"> 
            <input type="radio" name="rb6" value="2">
          </div></td>
        <td><div align="center"> 
            <input type="radio" name="rb6" value="3">
          </div></td>
        <td><div align="center"> 
            <input type="radio" name="rb6" value="4">
          </div></td>
        <td><div align="center"> 
            <input type="radio" name="rb6" value="5">
          </div></td>
      </tr>
      <tr> 
        <td>7. La capacidad demostrada por el Proyecto Curricular de Educaci&oacute;n 
          Infantil del Convenio Normal Superior - UPN para lograr dichos objetivos 
          ha sido</td>
        <td><div align="center"> 
            <input type="radio" name="rb7" value="1">
          </div></td>
        <td><div align="center"> 
            <input type="radio" name="rb7" value="2">
          </div></td>
        <td><div align="center"> 
            <input type="radio" name="rb7" value="3">
          </div></td>
        <td><div align="center"> 
            <input type="radio" name="rb7" value="4">
          </div></td>
        <td><div align="center"> 
            <input type="radio" name="rb7" value="5">
          </div></td>
      </tr>
      <tr> 
        <td>8. En su opini&oacute;n, las estrategias y mecanismos de seguimiento 
          por parte de los docentes a las labores desarrolladas por usted como 
          estudiante, es</td>
        <td><div align="center"> 
            <input type="radio" name="rb8" value="1">
          </div></td>
        <td><div align="center"> 
            <input type="radio" name="rb8" value="2">
          </div></td>
        <td><div align="center"> 
            <input type="radio" name="rb8" value="3">
          </div></td>
        <td><div align="center"> 
            <input type="radio" name="rb8" value="4">
          </div></td>
        <td><div align="center"> 
            <input type="radio" name="rb8" value="5">
          </div></td>
      </tr>
      <tr> 
        <td>9. En su opini&oacute;n la pertinencia de los contenidos acad&eacute;micos 
          desarrollados en el Proyecto Curricular de Educaci&oacute;n Infantil 
          del convenio Normal Superior Santiago de Cali y la UPN, para su formaci&oacute;n 
          profesional, es </td>
        <td><div align="center"> 
            <input type="radio" name="rb9" value="1">
          </div></td>
        <td><div align="center"> 
            <input type="radio" name="rb9" value="2">
          </div></td>
        <td><div align="center"> 
            <input type="radio" name="rb9" value="3">
          </div></td>
        <td><div align="center"> 
            <input type="radio" name="rb9" value="4">
          </div></td>
        <td><div align="center"> 
            <input type="radio" name="rb9" value="5">
          </div></td>
      </tr>
      <tr> 
        <td>10. Considera usted que la planeaci&oacute;n, ejecuci&oacute;n, metodolog&iacute;a, 
          y evaluaci&oacute;n de los espacios acad&eacute;micos en los que usted 
          ha participado, ha sido </td>
        <td><div align="center"> 
            <input type="radio" name="rb10" value="1">
          </div></td>
        <td><div align="center"> 
            <input type="radio" name="rb10" value="2">
          </div></td>
        <td><div align="center"> 
            <input type="radio" name="rb10" value="3">
          </div></td>
        <td><div align="center"> 
            <input type="radio" name="rb10" value="4">
          </div></td>
        <td><div align="center"> 
            <input type="radio" name="rb10" value="5">
          </div></td>
      </tr>
      <tr> 
        <td>11. En su opini&oacute;n la Coherencia entre las metodolog&iacute;as 
          implementadas y los objetivos y contenidos del proyecto curricular, 
          es</td>
        <td><div align="center"> 
            <input type="radio" name="rb11" value="1">
          </div></td>
        <td><div align="center"> 
            <input type="radio" name="rb11" value="2">
          </div></td>
        <td><div align="center"> 
            <input type="radio" name="rb11" value="3">
          </div></td>
        <td><div align="center"> 
            <input type="radio" name="rb11" value="4">
          </div></td>
        <td><div align="center"> 
            <input type="radio" name="rb11" value="5">
          </div></td>
      </tr>
      <tr> 
        <td>12. Con fundamento en su experiencia vivida como estudiante del Proyecto 
          Curricular de Educaci&oacute;n Infantil del convenio Normal Superior 
          Santiago de Cali y la UPN la flexibilidad que presenta el programa, 
          en materia de estructura curricular y plan de estudios para la formaci&oacute;n 
          de Licenciados, es</td>
        <td><div align="center"> 
            <input type="radio" name="rb12" value="1">
          </div></td>
        <td><div align="center"> 
            <input type="radio" name="rb12" value="2">
          </div></td>
        <td><div align="center"> 
            <input type="radio" name="rb12" value="3">
          </div></td>
        <td><div align="center"> 
            <input type="radio" name="rb12" value="4">
          </div></td>
        <td><div align="center"> 
            <input type="radio" name="rb12" value="5">
          </div></td>
      </tr>
      <tr> 
        <td>13. Considera usted que el nivel de articulaci&oacute;n entre las 
          propuestas de investigaci&oacute;n formativa y las pr&aacute;cticas 
          educativas, es</td>
        <td><div align="center"> 
            <input type="radio" name="rb13" value="1">
          </div></td>
        <td><div align="center"> 
            <input type="radio" name="rb13" value="2">
          </div></td>
        <td><div align="center"> 
            <input type="radio" name="rb13" value="3">
          </div></td>
        <td><div align="center"> 
            <input type="radio" name="rb13" value="4">
          </div></td>
        <td><div align="center"> 
            <input type="radio" name="rb13" value="5">
          </div></td>
      </tr>
      <tr> 
        <td>14. En su opini&oacute;n el trabajo interdisciplinario que se adelanta 
          en el desarrollo de los espacios acad&eacute;micos del programa, es</td>
        <td><div align="center"> 
            <input type="radio" name="rb14" value="1">
          </div></td>
        <td><div align="center"> 
            <input type="radio" name="rb14" value="2">
          </div></td>
        <td><div align="center"> 
            <input type="radio" name="rb14" value="3">
          </div></td>
        <td><div align="center"> 
            <input type="radio" name="rb14" value="4">
          </div></td>
        <td><div align="center"> 
            <input type="radio" name="rb14" value="5">
          </div></td>
      </tr>
      <tr> 
        <td>15. Considera usted que la posibilidad para realizar investigaci&oacute;n 
          como proceso formativo y de producci&oacute;n acad&eacute;mica en y 
          para el programa, es</td>
        <td><div align="center"> 
            <input type="radio" name="rb15" value="1">
          </div></td>
        <td><div align="center"> 
            <input type="radio" name="rb15" value="2">
          </div></td>
        <td><div align="center"> 
            <input type="radio" name="rb15" value="3">
          </div></td>
        <td><div align="center"> 
            <input type="radio" name="rb15" value="4">
          </div></td>
        <td><div align="center"> 
            <input type="radio" name="rb15" value="5">
          </div></td>
      </tr>
    </table>

    <div align="center"> 
      <p align="justify">16. &iquest;Considera usted que en su caso, se ha logrado 
        el prop&oacute;sito fundamental del Proyecto Curricular de Educaci&oacute;n 
        Infantil del convenio Normal Superior Santiago de Cali y la UPN, por desarrollar 
        una formaci&oacute;n profesional con sentido reflexivo y cr&iacute;tico 
        sobre el quehacer docente en general y los procesos pedag&oacute;gicos 
        en particular, constructores permanentes de propuestas pedag&oacute;gicas, 
        pol&iacute;ticas, sociales y culturales a favor de la infancia enmarcadas 
        en procesos de investigaci&oacute;n?</p>
      <p align="justify">SI 
        <input type="radio" name="rb16" value="si">
        &nbsp;&nbsp;NO 
        <input type="radio" name="rb16" value="no">
      </p>
      <p align="justify">&iquest;Por que ?</p>
      <p align="center"> 
        <textarea name="txt16" cols="100" rows="4" id="txt16"></textarea>
      </p>
      <p align="justify"> 17. &iquest;Considera usted que el Proyecto Curricular 
        de Educaci&oacute;n Infantil del convenio Normal Superior Santiago de 
        Cali y la UPN participa y ha contribuido a la conformaci&oacute;n y consolidaci&oacute;n 
        de redes nacionales en cualquier campo del conocimiento que tenga implicaciones 
        directas con la infancia? </p>
      <p align="justify">SI 
        <input type="radio" name="rb17" value="si">
        &nbsp;&nbsp;NO 
        <input type="radio" name="rb17" value="no">
      </p>
      <p align="justify">&iquest;Por que ?</p>
      <p align="center"> 
        <textarea name="txt17" cols="100" rows="4" id="txt17"></textarea>
      </p>
      <p align="justify"><br>
        18. &iquest;Considera usted que el Proyecto Curricular de Educaci&oacute;n 
        Infantil del convenio Normal Superior Santiago de Cali y la UPN, le ha 
        brindado las condiciones para una formaci&oacute;n de alto nivel acad&eacute;mico, 
        que favorezca la construcci&oacute;n de propuestas pedag&oacute;gicas, 
        pol&iacute;ticas, sociales y culturales a favor de la infancia coherentes 
        con las necesidades de desarrollo nacional. </p>
      <p align="justify">SI 
        <input type="radio" name="rb18" value="si">
        &nbsp;&nbsp;NO 
        <input type="radio" name="rb18" value="no">
      </p>
      <p align="justify">&iquest;Por que ?</p>
      <p align="center"> 
        <textarea name="txt18" cols="100" rows="4" id="txt18"></textarea>
      </p>
      <p align="justify">19. Considera usted, que el Proyecto Curricular de Educaci&oacute;n 
        Infantil del convenio Normal Superior Santiago de Cali y la UPN. propicia 
        con facilidad el acceso a cursos, seminarios o conferencias sobre aspectos 
        relevantes de aquellos campos acad&eacute;micos que tengan relaci&oacute;n 
        directa con la infancia, as&iacute; como del entorno social, econ&oacute;mico, 
        pol&iacute;tico del pa&iacute;s, </p>
      <p align="justify"> SI 
        <input type="radio" name="rb19" value="si">
        &nbsp;&nbsp;NO 
        <input type="radio" name="rb19" value="no">
      </p>
      <p align="justify">&iquest;Por que ?</p>
      <p align="center"> 
        <textarea name="txt19" cols="100" rows="4" id="txt19"></textarea>
      </p>
      <p align="justify">&nbsp; </p>
      <p align="justify">&nbsp;</p>
      <p align="justify"> 20. Considera usted que el eje complementario ofrecido 
        en el ciclo de profundizaci&oacute;n ofrecidos en el Proyecto Curricular 
        de Educaci&oacute;n Infantil del convenio Normal Superior Santiago de 
        Cali y la UPN., es el m&aacute;s adecuado para responder a las necesidades 
        de formaci&oacute;n de Licenciados en educaci&oacute;n infantil en la 
        regi&oacute;n. </p>
      <p align="justify">SI 
        <input type="radio" name="rb20" value="si">
        &nbsp;&nbsp;NO 
        <input type="radio" name="rb20" value="no">
      </p>
      <p align="justify">&iquest;Por que ?</p>
      <p align="center"> 
        <textarea name="txt20" cols="100" rows="4" id="txt20"></textarea>
      </p>
      <p align="justify">21. En su opini&oacute;n, &iquest;existen suficientes 
        convenios que faciliten, promuevan y garanticen la movilidad de estudiantes 
        en universidades de la regi&oacute;n y a nivel nacional? </p>
      <p align="justify">SI 
        <input type="radio" name="rb21" value="si">
        &nbsp;&nbsp;NO 
        <input type="radio" name="rb21" value="no">
      </p>
      <p align="justify">&iquest;Por que ?</p>
      <p align="center"> 
        <textarea name="txt21" cols="100" rows="4" id="txt21"></textarea>
      </p>
      <p align="justify">&nbsp;</p>
      <p align="justify">&nbsp;</p>
      <p align="justify">Los siguientes enunciados, se orientan espec&iacute;ficamente 
        a evaluar como ejemplo, el desarrollo de dos de los espacios acad&eacute;micos, 
        que en la modalidad de seminario usted ha tomado en el Proyecto Curricular 
        de Educaci&oacute;n Infantil del convenio Normal Superior Santiago de 
        Cali y la UPN. Seleccione uno del Ciclo de fundamentaci&oacute;n y otro 
        en el ciclo de profundizaci&oacute;n. Valore para cada caso los siguientes 
        aspectos de conformidad con esta escala:</p>
      <p>Muy deficiente_________________1<br>
        Deficiente____________________ 2<br>
        Satisfactoria___________________ 3<br>
        Buena________________________4<br>
        Excelente _____________________5</p>
      <p align="left">NOMBRE DEL SEMINARIO SELECCIONADO EN CICLO DE FUNDAMENTACION: 
      </p>
      <p align="left"> 
        <input name="fundamentacion" type="text" id="fundamentacion" size="80">
      </p>
      <p align="left">22. Al iniciar el curso el profesor defini&oacute;:</p>
      <div align="left">
        <table width="50%" border="1">
          <tr> 
            <td width="74%">&nbsp;</td>
            <td width="5%"><div align="center">1</div></td>
            <td width="5%"><div align="center">2</div></td>
            <td width="5%"><div align="center">3</div></td>
            <td width="5%"><div align="center">4</div></td>
            <td width="6%"><div align="center">5</div></td>
          </tr>
          <tr> 
            <td>&#8226; La funci&oacute;n que cumple el seminario dentro de curr&iacute;culo</td>
            <td><div align="center"> 
                <input type="radio" name="rb221" value="1">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb221" value="2">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb221" value="3">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb221" value="4">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb221" value="5">
              </div></td>
          </tr>
          <tr> 
            <td>&#8226; Los contenidos</td>
            <td><div align="center"> 
                <input type="radio" name="rb222" value="1">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb222" value="2">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb222" value="3">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb222" value="4">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb222" value="5">
              </div></td>
          </tr>
          <tr> 
            <td>&#8226; Las formas de evaluaci&oacute;n</td>
            <td><div align="center"> 
                <input type="radio" name="rb223" value="1">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb223" value="2">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb223" value="3">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb223" value="4">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb223" value="5">
              </div></td>
          </tr>
          <tr> 
            <td> &#8226; Los objetivos del seminario</td>
            <td><div align="center"> 
                <input type="radio" name="rb224" value="1">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb224" value="2">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb224" value="3">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb224" value="4">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb224" value="5">
              </div></td>
          </tr>
          <tr> 
            <td>&#8226; La metodolog&iacute;a a seguir</td>
            <td><div align="center"> 
                <input type="radio" name="rb225" value="1">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb225" value="2">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb225" value="3">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb225" value="4">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb225" value="5">
              </div></td>
          </tr>
          <tr> 
            <td>&#8226; Permiti&oacute; a ustedes tomar parte en la estructuraci&oacute;n 
              de los temas para abordarlo</td>
            <td><div align="center"> 
                <input type="radio" name="rb226" value="1">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb226" value="2">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb226" value="3">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb226" value="4">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb226" value="5">
              </div></td>
          </tr>
        </table>
	  <p>&nbsp;</p><table width="85%" border="0">
          <tr>
            <td>23. El profesor asisti&oacute; cumplida y puntualmente al seminario 
            </td>
            <td>1 
              <input type="radio" name="rb23" value="1"> &nbsp;2 
              <input type="radio" name="rb23" value="2"> &nbsp;3 
              <input type="radio" name="rb23" value="3"> &nbsp;4 
              <input type="radio" name="rb23" value="4"> &nbsp;5 
              <input type="radio" name="rb23" value="5"> </td>
          </tr>
          <tr>
            <td>24. El profesor asumi&oacute; la direcci&oacute;n del seminario 
              con responsabilidad</td>
            <td>1 
              <input type="radio" name="rb24" value="1"> &nbsp;2 
              <input type="radio" name="rb24" value="2"> &nbsp;3 
              <input type="radio" name="rb24" value="3"> &nbsp;4 
              <input type="radio" name="rb24" value="4"> &nbsp;5 
              <input type="radio" name="rb24" value="5"> </td>
          </tr>
          <tr>
            <td>25. El profesor demostr&oacute; conocimiento, solvencia y capacidad 
              para orientar el seminario</td>
            <td>1 
              <input type="radio" name="rb25" value="1"> &nbsp;2 
              <input type="radio" name="rb25" value="2"> &nbsp;3 
              <input type="radio" name="rb25" value="3"> &nbsp;4 
              <input type="radio" name="rb25" value="4"> &nbsp;5 
              <input type="radio" name="rb25" value="5"> </td>
          </tr>
          <tr>
            <td>26. El profesor promovi&oacute; la participaci&oacute;n activa 
              de los estudiantes durante el desarrollo del seminario</td>
            <td>1 
              <input type="radio" name="rb26" value="1"> &nbsp;2 
              <input type="radio" name="rb26" value="2"> &nbsp;3 
              <input type="radio" name="rb26" value="3"> &nbsp;4 
              <input type="radio" name="rb26" value="4"> &nbsp;5 
              <input type="radio" name="rb26" value="5"></td>
          </tr>
          <tr>
            <td>27. El profesor se mostr&oacute; siempre dispuesto a ayudar y 
              orientar a los estudiantes</td>
            <td>1 
              <input type="radio" name="rb27" value="1"> &nbsp;2 
              <input type="radio" name="rb27" value="2"> &nbsp;3 
              <input type="radio" name="rb27" value="3"> &nbsp;4 
              <input type="radio" name="rb27" value="4"> &nbsp;5 
              <input type="radio" name="rb27" value="5"> </td>
          </tr>
        </table>
        <p>28. Satisfacci&oacute;n y Realizaci&oacute;n Personal: En relaci&oacute;n 
          con este aspecto, se requiere obtener informaci&oacute;n acerca de c&oacute;mo 
          sus vivencias en el desarrollo del seminario han contribuido a su realizaci&oacute;n 
          personal.<br>
        </p>
        <table width="66%" border="1">
          <tr> 
            <td width="80%">&nbsp;</td>
            <td width="4%"><div align="center">1</div></td>
            <td width="4%"><div align="center">2</div></td>
            <td width="4%"><div align="center">3</div></td>
            <td width="4%"><div align="center">4</div></td>
            <td width="4%"><div align="center">5</div></td>
          </tr>
          <tr> 
            <td>&#8226; Oportunidad para desempe&ntilde;arse y actuar con autonom&iacute;a</td>
            <td><div align="center"> 
                <input type="radio" name="rb281" value="1">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb281" value="2">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb281" value="3">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb281" value="4">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb281" value="5">
              </div></td>
          </tr>
          <tr> 
            <td>&#8226; Posibilidad para presentar y desarrollar sus propias ideas</td>
            <td><div align="center"> 
                <input type="radio" name="rb282" value="1">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb282" value="2">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb282" value="3">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb282" value="4">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb282" value="5">
              </div></td>
          </tr>
          <tr> 
            <td>&#8226; Oportunidad para mejorar su formaci&oacute;n personal 
              y profesional</td>
            <td><div align="center"> 
                <input type="radio" name="rb283" value="1">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb283" value="2">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb283" value="3">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb283" value="4">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb283" value="5">
              </div></td>
          </tr>
          <tr> 
            <td>&#8226; Oportunidad para adquirir informaci&oacute;n valiosa para 
              su ejercicio profesional</td>
            <td><div align="center"> 
                <input type="radio" name="rb284" value="1">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb284" value="2">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb284" value="3">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb284" value="4">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb284" value="5">
              </div></td>
          </tr>
          <tr> 
            <td>&#8226; Posibilidad de desarrollar sus iniciativas en el campo 
              investigativo de su inter&eacute;s</td>
            <td><div align="center"> 
                <input type="radio" name="rb285" value="1">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb285" value="2">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb285" value="3">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb285" value="4">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb285" value="5">
              </div></td>
          </tr>
          <tr> 
            <td> &#8226; Logro de sus expectativas en relaci&oacute;n con la formaci&oacute;n 
              profesional</td>
            <td><div align="center"> 
                <input type="radio" name="rb286" value="1">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb286" value="5">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb286" value="3">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb286" value="4">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb286" value="5">
              </div></td>
          </tr>
        </table>
        <p>&#8226; Escriba en orden de prioridad los aspectos m&aacute;s positivos 
          del seminario:</p>
        <table width="42%" border="1">
          <tr>
            <td width="53%">1.
              <input name="txt281" type="text" id="txt281"></td>
            <td width="47%">3.
              <input name="txt283" type="text" id="txt283"></td>
          </tr>
          <tr>
            <td>2.
              <input name="txt282" type="text" id="txt282"></td>
            <td>4.
              <input name="txt284" type="text" id="txt284"></td>
          </tr>
        </table>
        <p>Escriba en orden de prioridad los aspectos m&aacute;s negativos del 
          seminario:</p>
        <table width="42%" border="1">
          <tr> 
            <td width="53%">1. 
              <input name="txt285" type="text" id="txt285"></td>
            <td width="47%">3. 
              <input name="txt287" type="text" id="txt287"></td>
          </tr>
          <tr> 
            <td>2. 
              <input name="txt286" type="text" id="txt286"></td>
            <td>4. 
              <input name="txt288" type="text" id="txt288"></td>
          </tr>
        </table>
        <p>NOMBRE DEL SEMINARIO SELECCIONADO EN EL CICLO DE PROFUNDIZACION: </p>
      </div>
      <p align="left">
        <input name="profundizacion" type="text" id="profundizacion" size="80">
      </p>
      <p>&nbsp;</p>
      <p align="left">29. Al iniciar el curso el profesor defini&oacute;:</p>
      <div align="left"> 
        <table width="50%" border="1">
          <tr> 
            <td width="74%">&nbsp;</td>
            <td width="5%"><div align="center">1</div></td>
            <td width="5%"><div align="center">2</div></td>
            <td width="5%"><div align="center">3</div></td>
            <td width="5%"><div align="center">4</div></td>
            <td width="6%"><div align="center">5</div></td>
          </tr>
          <tr> 
            <td>&#8226; La funci&oacute;n que cumple el seminario dentro de curr&iacute;culo</td>
            <td><div align="center"> 
                <input type="radio" name="rb291" value="1">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb291" value="2">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb291" value="3">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb291" value="4">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb291" value="5">
              </div></td>
          </tr>
          <tr> 
            <td>&#8226; Los contenidos</td>
            <td><div align="center"> 
                <input type="radio" name="rb292" value="1">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb292" value="2">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb292" value="3">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb292" value="4">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb292" value="5">
              </div></td>
          </tr>
          <tr> 
            <td>&#8226; Las formas de evaluaci&oacute;n</td>
            <td><div align="center"> 
                <input type="radio" name="rb293" value="1">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb293" value="2">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb293" value="3">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb293" value="4">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb293" value="5">
              </div></td>
          </tr>
          <tr> 
            <td> &#8226; Los objetivos del seminario</td>
            <td><div align="center"> 
                <input type="radio" name="rb294" value="1">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb294" value="2">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb294" value="3">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb294" value="4">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb294" value="5">
              </div></td>
          </tr>
          <tr> 
            <td>&#8226; La metodolog&iacute;a a seguir</td>
            <td><div align="center"> 
                <input type="radio" name="rb295" value="1">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb295" value="2">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb295" value="3">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb295" value="4">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb295" value="5">
              </div></td>
          </tr>
          <tr> 
            <td>&#8226; Permiti&oacute; a ustedes tomar parte en la estructuraci&oacute;n 
              de los temas para abordarlo</td>
            <td><div align="center"> 
                <input type="radio" name="rb296" value="1">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb296" value="2">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb296" value="3">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb296" value="4">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb296" value="5">
              </div></td>
          </tr>
        </table>
        <p>&nbsp;</p>
        <table width="85%" border="0">
          <tr> 
            <td>30. El profesor asisti&oacute; cumplida y puntualmente al seminario 
            </td>
            <td>1 
              <input type="radio" name="rb30" value="1"> &nbsp;2 
              <input type="radio" name="rb30" value="2"> &nbsp;3 
              <input type="radio" name="rb30" value="3"> &nbsp;4 
              <input type="radio" name="rb30" value="4"> &nbsp;5 
              <input type="radio" name="rb30" value="5"> </td>
          </tr>
          <tr> 
            <td>31. El profesor asumi&oacute; la direcci&oacute;n del seminario 
              con responsabilidad</td>
            <td>1 
              <input type="radio" name="rb31" value="1"> &nbsp;2 
              <input type="radio" name="rb31" value="2"> &nbsp;3 
              <input type="radio" name="rb31" value="3"> &nbsp;4 
              <input type="radio" name="rb31" value="4"> &nbsp;5 
              <input type="radio" name="rb31" value="5"> </td>
          </tr>
          <tr> 
            <td>32. El profesor demostr&oacute; conocimiento, solvencia y capacidad 
              para orientar el seminario</td>
            <td>1 
              <input type="radio" name="rb32" value="1"> &nbsp;2 
              <input type="radio" name="rb32" value="2"> &nbsp;3 
              <input type="radio" name="rb32" value="3"> &nbsp;4 
              <input type="radio" name="rb32" value="4"> &nbsp;5 
              <input type="radio" name="rb32" value="5"> </td>
          </tr>
          <tr> 
            <td>33. El profesor promovi&oacute; la participaci&oacute;n activa 
              de los estudiantes durante el desarrollo del seminario</td>
            <td>1 
              <input type="radio" name="rb33" value="1"> &nbsp;2 
              <input type="radio" name="rb33" value="2"> &nbsp;3 
              <input type="radio" name="rb33" value="3"> &nbsp;4 
              <input type="radio" name="rb33" value="4"> &nbsp;5 
              <input type="radio" name="rb33" value="5"></td>
          </tr>
          <tr> 
            <td>34. El profesor se mostr&oacute; siempre dispuesto a ayudar y 
              orientar a los estudiantes</td>
            <td>1 
              <input type="radio" name="rb34" value="1"> &nbsp;2 
              <input type="radio" name="rb34" value="2"> &nbsp;3 
              <input type="radio" name="rb34" value="3"> &nbsp;4 
              <input type="radio" name="rb34" value="4"> &nbsp;5 
              <input type="radio" name="rb34" value="5"> </td>
          </tr>
        </table>
        <p>35. Satisfacci&oacute;n y Realizaci&oacute;n Personal: En relaci&oacute;n 
          con este aspecto, se requiere obtener informaci&oacute;n acerca de c&oacute;mo 
          sus vivencias en el desarrollo del seminario han contribuido a su realizaci&oacute;n 
          personal.<br>
        </p>
        <table width="66%" border="1">
          <tr> 
            <td width="80%">&nbsp;</td>
            <td width="4%"><div align="center">1</div></td>
            <td width="4%"><div align="center">2</div></td>
            <td width="4%"><div align="center">3</div></td>
            <td width="4%"><div align="center">4</div></td>
            <td width="4%"><div align="center">5</div></td>
          </tr>
          <tr> 
            <td>&#8226; Oportunidad para desempe&ntilde;arse y actuar con autonom&iacute;a</td>
            <td><div align="center"> 
                <input type="radio" name="rb351" value="1">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb351" value="2">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb351" value="3">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb351" value="4">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb351" value="5">
              </div></td>
          </tr>
          <tr> 
            <td>&#8226; Posibilidad para presentar y desarrollar sus propias ideas</td>
            <td><div align="center"> 
                <input type="radio" name="rb352" value="1">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb352" value="2">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb352" value="3">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb352" value="4">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb352" value="5">
              </div></td>
          </tr>
          <tr> 
            <td>&#8226; Oportunidad para mejorar su formaci&oacute;n personal 
              y profesional</td>
            <td><div align="center"> 
                <input type="radio" name="rb353" value="1">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb353" value="2">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb353" value="3">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb353" value="4">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb353" value="5">
              </div></td>
          </tr>
          <tr> 
            <td>&#8226; Oportunidad para adquirir informaci&oacute;n valiosa para 
              su ejercicio profesional</td>
            <td><div align="center"> 
                <input type="radio" name="rb354" value="1">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb354" value="2">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb354" value="3">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb354" value="4">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb354" value="5">
              </div></td>
          </tr>
          <tr> 
            <td>&#8226; Posibilidad de desarrollar sus iniciativas en el campo 
              investigativo de su inter&eacute;s</td>
            <td><div align="center"> 
                <input type="radio" name="rb355" value="1">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb355" value="2">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb355" value="3">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb355" value="4">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb355" value="5">
              </div></td>
          </tr>
          <tr> 
            <td> &#8226; Logro de sus expectativas en relaci&oacute;n con la formaci&oacute;n 
              profesional</td>
            <td><div align="center"> 
                <input type="radio" name="rb356" value="1">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb356" value="2">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb356" value="3">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb356" value="4">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="rb356" value="5">
              </div></td>
          </tr>
        </table>
        <p>&#8226; Escriba en orden de prioridad los aspectos m&aacute;s positivos 
          del seminario:</p>
        <table width="42%" border="1">
          <tr> 
            <td width="53%">1. 
              <input name="txt351" type="text" id="txt2813"></td>
            <td width="47%">3. 
              <input name="txt353" type="text" id="txt2833"></td>
          </tr>
          <tr> 
            <td>2. 
              <input name="txt352" type="text" id="txt289"></td>
            <td>4. 
              <input name="txt354" type="text" id="txt2843"></td>
          </tr>
        </table>
        <p>Escriba en orden de prioridad los aspectos m&aacute;s negativos del 
          seminario:</p>
        <table width="42%" border="1">
          <tr> 
            <td width="53%">1. 
              <input name="txt355" type="text" id="txt355"></td>
            <td width="47%">3. 
              <input name="txt357" type="text" id="txt357"></td>
          </tr>
          <tr> 
            <td>2. 
              <input name="txt356" type="text" id="txt356"></td>
            <td>4. 
              <input name="txt358" type="text" id="txt358"></td>
          </tr>
        </table>
      </div>
      <p>PROCESOS ADMINISTRATIVOS</p>
      <p align="left">FACTOR 5: BIENESTAR INSTITUCIONAL<br>
        FACTOR 6 : ADMINISTRACION DEL PROGRAMA<br>
        FACTOR 8: RECURSOS FISICOS Y FINANCIEROS</p>
      <table width="88%" border="1">
        <tr> 
          <td width="58%"> <div align="right">ESCALA </div></td>
          <td width="8%" rowspan="2"><div align="center">Muy Deficiente</div></td>
          <td width="8%" rowspan="2"><div align="center">Deficiente</div></td>
          <td width="10%" rowspan="2"><div align="center">Satisfactoria</div></td>
          <td width="9%" rowspan="2"><div align="center">Buena</div></td>
          <td width="7%" rowspan="2"><div align="center">Excelente</div></td>
        </tr>
        <tr> 
          <td>ENUNCIADOS</td>
        </tr>
        <tr> 
          <td height="24"><div align="justify">36. En su opini&oacute;n, el bienestar 
              propiciado por la Normal Superior Santiago de Cali contribuye al 
              logro de los objetivos institucionales y personales de los profesores 
              y estudiantes del Proyecto Curricular de Educaci&oacute;n Infantil 
              del convenio Normal Superior Santiago de Cali y la UPN, de manera</div></td>
          <td><div align="center"> 
              <input type="radio" name="rb36" value="1">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb36" value="2">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb36" value="3">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb36" value="4">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb36" value="5">
            </div></td>
        </tr>
        <tr> 
          <td><div align="justify">37. Considera usted que el Conocimiento sobre 
              las pol&iacute;ticas, programas y servicios de bienestar de la Normal 
              Superior Santiago de Cali en convenio con la UPN por parte de los 
              estudiantes de la licenciatura es.</div></td>
          <td><div align="center"> 
              <input type="radio" name="rb37" value="1">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb37" value="2">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb37" value="3">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb37" value="4">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb37" value="5">
            </div></td>
        </tr>
        <tr> 
          <td><div align="justify">38. La calidad de los servicios de bienestar 
              prestados en la Normal Superior Santiago de Cali a los docentes 
              y estudiantes del Proyecto Curricular de Educaci&oacute;n Infantil 
              del convenio Normal Superior Santiago de Cali y la UPN, es</div></td>
          <td><div align="center"> 
              <input type="radio" name="rb38" value="1">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb38" value="2">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb38" value="3">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb38" value="4">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb38" value="5">
            </div></td>
        </tr>
        <tr> 
          <td><div align="justify">39. Considera usted que los servicios de bienestar 
              llegan equitativamente a los estudiantes de la licenciatura que 
              los demandan de manera</div></td>
          <td><div align="center"> 
              <input type="radio" name="rb39" value="1">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb39" value="2">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb39" value="3">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb39" value="4">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb39" value="5">
            </div></td>
        </tr>
        <tr> 
          <td><div align="justify">40. Considera usted, como estudiante del Proyecto 
              Curricular de Educaci&oacute;n Infantil del convenio Normal Superior 
              Santiago de Cali y la UPN, que las instalaciones f&iacute;sicas 
              y de recursos materiales y bibliogr&aacute;ficos con que se cuenta 
              para el cumplimiento de sus actividades, es</div></td>
          <td><div align="center"> 
              <input type="radio" name="rb40" value="1">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb40" value="2">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb40" value="3">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb40" value="4">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb40" value="5">
            </div></td>
        </tr>
        <tr> 
          <td><div align="justify">41. La existencia de una plataforma tecnol&oacute;gica 
              que garantice buena conectividad y acceso a bases de datos o sistemas 
              de informaci&oacute;n en el Proyecto Curricular de Educaci&oacute;n 
              Infantil del convenio Normal Superior Santiago de Cali y la UPN, 
              es</div></td>
          <td><div align="center"> 
              <input type="radio" name="rb41" value="1">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb41" value="2">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb41" value="3">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb41" value="4">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb41" value="5">
            </div></td>
        </tr>
        <tr> 
          <td><div align="justify">42. En su opini&oacute;n la Coherencia que 
              existe entre las necesidades del proyecto curricular y la organizaci&oacute;n 
              para su funcionamiento es</div></td>
          <td><div align="center"> 
              <input type="radio" name="rb42" value="1">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb42" value="2">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb42" value="3">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb42" value="4">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb42" value="5">
            </div></td>
        </tr>
        <tr> 
          <td><div align="justify">43. El nivel de eficiencia en los procesos 
              administrativos que soportan el desarrollo del Proyecto Curricular 
              de Educaci&oacute;n Infantil del convenio Normal Superior Santiago 
              de Cali y la UPN, lo considero </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb43" value="1">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb43" value="2">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb43" value="3">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb43" value="4">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb43" value="5">
            </div></td>
        </tr>
        <tr> 
          <td><div align="justify">44. Considera usted que el Espacio f&iacute;sico 
              del programa, en relaci&oacute;n con el n&uacute;mero de estudiantes 
              es</div></td>
          <td><div align="center"> 
              <input type="radio" name="rb44" value="1">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb44" value="2">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb44" value="3">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb44" value="4">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb44" value="5">
            </div></td>
        </tr>
        <tr> 
          <td><div align="justify">45. En su opini&oacute;n la adecuaci&oacute;n, 
              el mantenimiento y uso que se hace de los espacios f&iacute;sicos 
              en el programa, teniendo en cuenta las necesidades de docentes, 
              estudiantes y administrativos es </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb45" value="1">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb45" value="2">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb45" value="3">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb45" value="4">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb45" value="5">
            </div></td>
        </tr>
      </table>
      <p align="justify">46. &iquest;Considera usted que la Normal Superior Santiago 
        de Cali cuenta con pol&iacute;ticas y procedimientos definidos y concretos 
        para la adquisici&oacute;n y reposici&oacute;n de recursos bibliogr&aacute;ficos 
        y bases de datos para apoyar el desarrollo de los ciclos de fundamentaci&oacute;n 
        y profundizaci&oacute;n del Proyecto Curricular de Educaci&oacute;n Infantil 
        del convenio Normal Superior Santiago de Cali y la UPN</p>
      <p align="justify">SI 
        <input type="radio" name="rb46" value="si">
        &nbsp;&nbsp;NO 
        <input type="radio" name="rb46" value="no">
      </p>
      <p align="justify">&iquest;Por que ?</p>
      <p align="center"> 
        <textarea name="txt46" cols="100" rows="4" id="textarea6"></textarea>
      </p>
      <p align="left"><br>
        Escriba a continuaci&oacute;n otros aspectos o sugerencias que considere 
        importantes en relaci&oacute;n con los procesos administrativos</p>
      <p align="center"> 
        <textarea name="txt462" cols="100" rows="4" id="textarea8"></textarea>
      </p>
      <p align="center">ACTORES</p>
      <p align="left"><br>
        FACTOR 2: ESTUDIANTES<br>
        FACTOR 3: PROFESORES<br>
        FACTOR 7: EGRESADOS <br>
      </p>
      <table width="88%" height="682" border="1">
        <tr> 
          <td width="58%"> <div align="right">ESCALA </div></td>
          <td width="8%" rowspan="2"><div align="center">Muy Deficiente</div></td>
          <td width="8%" rowspan="2"><div align="center">Deficiente</div></td>
          <td width="10%" rowspan="2"><div align="center">Satisfactoria</div></td>
          <td width="9%" rowspan="2"><div align="center">Buena</div></td>
          <td width="7%" rowspan="2"><div align="center">Excelente</div></td>
        </tr>
        <tr> 
          <td>ENUNCIADOS</td>
        </tr>
        <tr> 
          <td height="24"><div align="justify">47. En su opini&oacute;n los criterios 
              de selecci&oacute;n, admisi&oacute;n e ingreso de estudiantes al 
              Proyecto Curricular de Educaci&oacute;n Infantil del convenio Normal 
              Superior Santiago de Cali y la UPN son conocidos, expresan objetividad 
              y equidad en el Proyecto Curricular de Educaci&oacute;n Infantil 
              , de manera</div></td>
          <td><div align="center"> 
              <input type="radio" name="rb47" value="1">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb47" value="2">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb47" value="3">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb47" value="4">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb47" value="5">
            </div></td>
        </tr>
        <tr> 
          <td><div align="justify">48. Considera usted que existen criterios en 
              el Proyecto Curricular de Educaci&oacute;n Infantil del convenio 
              Normal Superior Santiago de Cali y la UPN para lograr la retenci&oacute;n 
              y la graduaci&oacute;n de los estudiantes, acompa&ntilde;ados de 
              mecanismos que mejoren la calidad del programa , de manera</div></td>
          <td><div align="center"> 
              <input type="radio" name="rb48" value="1">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb48" value="2">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb48" value="3">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb48" value="4">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb48" value="5">
            </div></td>
        </tr>
        <tr> 
          <td><div align="justify">49. En su opini&oacute;n la rigurosidad y transparencia 
              de los mecanismos de evaluaci&oacute;n de estudiantes existente 
              en el Proyecto Curricular de Educaci&oacute;n Infantil del convenio 
              Normal Superior Santiago de Cali y la UPN , es </div></td>
          <td><div align="center"> <strong>
              <input type="radio" name="rb49" value="1">
              </strong> </div></td>
          <td><div align="center"> <strong>
              <input type="radio" name="rb49" value="2">
              </strong> </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb49" value="3">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb49" value="4">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb49" value="5">
            </div></td>
        </tr>
        <tr> 
          <td><div align="justify">50. En su opini&oacute;n el reglamento estudiantil 
              recoge las necesidades e intereses y posibilita la convivencia democr&aacute;tica 
              as&iacute; como la participaci&oacute;n de los estudiantes de forma</div></td>
          <td><div align="center"> 
              <input type="radio" name="rb50" value="1">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb50" value="2">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb50" value="3">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb50" value="4">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb50" value="5">
            </div></td>
        </tr>
        <tr> 
          <td><div align="justify">51. Considera usted que se hace la selecci&oacute;n 
              y vinculaci&oacute;n de docentes de forma equitativa, acertada y 
              coherente con los prop&oacute;sitos del programa , de manera</div></td>
          <td><div align="center"> 
              <input type="radio" name="rb51" value="1">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb51" value="2">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb51" value="3">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb51" value="4">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb51" value="5">
            </div></td>
        </tr>
        <tr> 
          <td><div align="justify">52. Las pol&iacute;ticas existentes en el convenio 
              Normal Superior Santiago de Cali y la UPN acerca de la relaci&oacute;n 
              n&uacute;mero de estudiantes y docentes por actividad, es </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb52" value="1">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb52" value="2">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb52" value="3">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb52" value="4">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb52" value="5">
            </div></td>
        </tr>
        <tr> 
          <td><div align="justify">53. En su opini&oacute;n la dedicaci&oacute;n 
              de los profesores a las actividades de docencia, investigaci&oacute;n 
              y extensi&oacute;n en el proyecto curricular, es</div></td>
          <td><div align="center"> 
              <input type="radio" name="rb53" value="1">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb53" value="2">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb53" value="3">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb53" value="4">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb53" value="5">
            </div></td>
        </tr>
        <tr> 
          <td><div align="justify">54. Considera usted que el sistema de evaluaci&oacute;n 
              de profesores por parte de los la comunidad acad&eacute;mica del 
              proyecto curricular, es</div></td>
          <td><div align="center"> 
              <input type="radio" name="rb54" value="1">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb54" value="2">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb54" value="3">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb54" value="4">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb54" value="5">
            </div></td>
        </tr>
        <tr> 
          <td><div align="justify">55. En su opini&oacute;n el nivel de actualizaci&oacute;n, 
              compromiso, y responsabilidad de los docentes vinculados al proyecto 
              curricular, es</div></td>
          <td><div align="center"> 
              <input type="radio" name="rb55" value="1">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb55" value="2">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb55" value="3">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb55" value="4">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb55" value="5">
            </div></td>
        </tr>
        <tr> 
          <td><div align="justify">56. Considera usted que los docentes contribuyen 
              a la formaci&oacute;n de los estudiantes en la perspectiva pedag&oacute;gica, 
              &eacute;tica y pol&iacute;tica, de manera</div></td>
          <td><div align="center"> 
              <input type="radio" name="rb56" value="1">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb56" value="2">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb56" value="3">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb56" value="4">
            </div></td>
          <td><div align="center"> 
              <input type="radio" name="rb56" value="5">
            </div></td>
        </tr>
      </table>
      <p align="left">57. En su opini&oacute;n, el Proyecto Curricular de Educaci&oacute;n 
        Infantil del convenio Normal Superior Santiago de Cali y la UPN cuenta 
        con la capacidad y los mecanismos para atraer estudiantes de otras instituciones 
        y otras regiones. </p>
      <p align="justify">SI 
        <input type="radio" name="rb57" value="si">
        &nbsp;&nbsp;NO 
        <input type="radio" name="rb57" value="no">
      </p>
      <p align="justify">&iquest;Por que ?</p>
      <p align="center"> 
        <textarea name="txt57" cols="100" rows="4" id="textarea9"></textarea>
      </p>
      <p align="left"><br>
        58. Considera usted que el plan de estudios del Proyecto Curricular de 
        Educaci&oacute;n Infantil del convenio Normal Superior Santiago de Cali 
        y la UPN, es adecuado para terminar su formaci&oacute;n profesional en 
        el tiempo establecido </p>
      <p align="justify">SI 
        <input type="radio" name="rb58" value="si">
        &nbsp;&nbsp;NO 
        <input type="radio" name="rb58" value="no">
      </p>
      <p align="justify">&iquest;Por que ?</p>
      <p align="center"> 
        <textarea name="txt58" cols="100" rows="4" id="textarea10"></textarea>
      </p>
      <p align="left"><br>
        59. Considera usted, como estudiante del Proyecto Curricular de Educaci&oacute;n 
        Infantil del convenio Normal Superior Santiago de Cali que en el programa 
        existen pol&iacute;ticas y estrategias para el seguimiento a sus graduados.</p>
      <p align="justify">SI <strong>
        <input type="radio" name="rb59" value="si">
        </strong> &nbsp;&nbsp;NO 
        <input type="radio" name="rb59" value="no">
      </p>
      <p align="justify">&iquest;Por que ?</p>
      <p align="center"> 
        <textarea name="txt59" cols="100" rows="4" id="textarea11"></textarea>
      </p>
      <p align="left"><br>
        60. Enumere en orden decreciente de importancia tres indicadores de impacto 
        del Proyecto Curricular de Educaci&oacute;n Infantil del convenio Normal 
        Superior Santiago de Cali en el campo educativo de la regi&oacute;n:</p>
      <p align="left"><br>
        &#8226; 
        <input name="txt601" type="text" id="txt601">
        <br>
        &#8226; 
        <input name="txt602" type="text" id="txt602">
        <br>
        &#8226; 
        <input name="txt603" type="text" id="txt603">
      </p>
      <p>Escriba a continuaci&oacute;n otros aspectos o sugerencias que considere 
        importantes en relaci&oacute;n con los actores</p>
      <p><br>
        <textarea name="txt604" cols="100" rows="4" id="textarea12"></textarea>
      </p>
      <p align="justify">Finalmente, describa a continuaci&oacute;n otros aspectos 
        que siendo relevantes para la autoevaluaci&oacute;n y autorregulaci&oacute;n 
        del Proyecto Curricular de Educaci&oacute;n Infantil del convenio Normal 
        Superior Santiago de Cali y la UPN, a su juicio, no se hayan incluido 
        en los ocho factores considerados en este instrumento.</p>
      <p align="center"><br>
        <textarea name="txt605" cols="100" rows="4" id="textarea13"></textarea>
      </p>
      <p align="right"><strong>Gracias</strong><br>
      </p>
      <p> 
        <input type="submit" value="enviar">
      </p>
    </div>
      <input type="hidden" name="MM_insert" value="form1">
  </form>	
</div>
<p>&nbsp;</p><p><br>
</p>
</body>
</html>
