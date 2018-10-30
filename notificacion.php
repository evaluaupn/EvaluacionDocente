<?php 
require_once('Connections/mysql.php'); 
?>
<html>
<head>
<title>NOTIFICACIONES</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<p>&nbsp;</p>
<table width="96%" height="63" border="0">
  <tr> 
    <td width="27%" height="59"> 
    <div align="center"><img src="logo.JPG" width="155" height="53"></div></td>
    <td width="2%"><font size="2">&nbsp;</font></td>
    <td width="71%"><p><font size="2"><strong>FACULTAD DE EDUCACION </strong></font></p>
      <p><font size="2"><strong>DEPARTAMENTO DE PSICOPEDAGOGIA</strong> </font></p></td>
  </tr>
</table>
<?php
include ("conexionfed.php");;
$sql = "select avg(r1) as r1,avg(r2) as r2,avg(r3) as r3,avg(r4) as r4,avg(r5) as r5,avg(r6) as r6,avg(r7) as r7 from fa1 WHERE docente = '{$_POST['doc']}'"; 
$sql = mysql_query($sql) or die(mysql_error("OCURRIO UN PROBLEMA CON LA CONEXION"));
while($row = mysql_fetch_array($sql))
{
$r1=$row[r1];
$r2=$row[r2];
$r3=$row[r3];
$r4=$row[r4];
$r5=$row[r5];
$r6=$row[r6];
$r7=$row[r7];

}
include ("conexionfed.php");;
$sql = "select avg(r8) as r8,avg(r9) as r9,avg(r10) as r10,avg(r11) as r11,avg(r12) as r12,avg(r13) as r13 from fa2 WHERE docente = '{$_POST['doc']}'"; 
$sql = mysql_query($sql) or die(mysql_error("OCURRIO UN PROBLEMA CON LA CONEXION"));
while($row = mysql_fetch_array($sql))
{
$r8=$row[r8];
$r9=$row[r9];
$r10=$row[r10];
$r11=$row[r11];
$r12=$row[r12];
$r13=$row[r13];
}
include ("conexionfed.php");;
$sql = "select avg(r14) as r14,avg(r15) as r15,avg(r16) as r16,avg(r17) as r17 from fa3 WHERE docente = '{$_POST['doc']}'"; 
$sql = mysql_query($sql) or die(mysql_error("OCURRIO UN PROBLEMA CON LA CONEXION"));
while($row = mysql_fetch_array($sql))
{
$r14=$row[r14];
$r15=$row[r15];
$r16=$row[r16];
$r17=$row[r17];
}
$p=0;
$t=0;
$t1=0;
$t2=0;
if ($r1 != "")
{
$p=$p+1;
$t = ($r1 + $r2 + $r3 + $r4 + $r5 + $r6 + $r7 )/7;
}
if ($r8 != "")
{
$p=$p+1;
$t1 = ($r8 + $r9 + $r10 + $r11 + $r12 + $r13 )/6;
}
if ($r14 != "")
{
$p=$p+1;
$t2=($r14 + $r15 + $r16 + $r17)/4;
}
if($p!="0")
	{
	$ta= ($t + $t1 + $t2)/ $p ;
	}
	else
	{
	$ta ="El docente no tiene calificacion del formato A";
	}
//////////////////////////////////////////////////////////////////////////////////////////////////////////
include ("conexionfed.php");;
$sql = "select * from fb WHERE nombre = '{$_POST['doc']}'"; 
$sql = mysql_query($sql) or die(mysql_error("OCURRIO UN PROBLEMA CON LA CONEXION"));
while($row = mysql_fetch_array($sql))
{
$b1=$row[b1]; 
$b2=$row[b2];
$b3=$row[b3];
$b4=$row[b4];
$b5=$row[b5];
$b6=$row[b6];
$b7=$row[b7];
$b8=$row[b8];
$b9=$row[b9];
$b10=$row[b10];
$b11=$row[b11];
$b12=$row[b12];
$b13=$row[b13];
$b14=$row[b14];
$b15=$row[b15];
$b16=$row[b16];
$b17=$row[b17];
$b18=$row[b18];
$b19=$row[b19];
$b20=$row[b20];
$nombre=$row[nombre]; 
$cedula=$row[cedula];
$programa=$row[programa];
$vinculacion=$row[vinculacion];
$dedicacion=$row[dedicacion];
}	
$c=0;
$tb=0;
if($b1!="")
{
$c=$c+1;
}
if($b2!="")
{
$c=$c+1;
}
if($b3!="")
{
$c=$c+1;
}
if($b4!="")
{
$c=$c+1;
}
if($b5!="")
{
$c=$c+1;
}
if($b6!="")
{
$c=$c+1;
}
if($b7!="")
{
$c=$c+1;
}
if($b8!="")
{
$c=$c+1;
}
if($b9!="")
{
$c=$c+1;
}
if($b10!="")
{
$c=$c+1;
}
if($b11!="")
{
$c=$c+1;
}
if($b12!="")
{
$c=$c+1;
}
if($b13!="")
{
$c=$c+1;
}
if($b14!="")
{
$c=$c+1;
}
if($b15!="")
{
$c=$c+1;
}
if($b16!="")
{
$c=$c+1;
}
if($b17!="")
{
$c=$c+1;
}
if($b18!="")
{
$c=$c+1;
}
if($b19!="")
{
$c=$c+1;
}
if($b20!="")
{
$c=$c+1;
}
$tb=($b1+$b2+$b3+$b4+$b5+$b6+$b7+$b8+$b9+$b10+$b11+$b12+$b13+$b14+$b15+$b16+$b17+$b18+$b19+$b20)/$c;
////////////////////////////////////////////////////////////////////////////////////////////////////////////
include ("conexionfed.php");;
$sql = "select ca,ca1,ca2,cb,cc,cd from fc WHERE nombre = '{$_POST['doc']}'"; 
$sql = mysql_query($sql) or die(mysql_error("OCURRIO UN PROBLEMA CON LA CONEXION"));
while($row = mysql_fetch_array($sql))
{
$ca=$row[ca];
$ca1=$row[ca1];
$ca2=$row[ca2];
$cb=$row[cb];
$cc=$row[cc];
$cd=$row[cd];
}
$c1=0;
if($ca!="")
{
$c1=$c1+1;
}
if($ca1!="")
{
$c1=$c1+1;
}
if($ca2!="")
{
$c1=$c1+1;
}
if($cb!="")
{
$c1=$c1+1;
}
if($cc!="")
{
$c1=$c1+1;
}
if($cd!="")
{
$c1=$c1+1;
}
$tc=0;
$tc=($ca+$ca1+$ca2+$cb+$cc+$cd)/$c1;
/////////////////////////////////////////////////////////////////////////////////////////////////////////////
$tt=0;
$tt=($ta+$tb+$tc)/3;
?>
<table width="96%" border="0">
  <tr>
    <td height="17"> 
      <div align="center"><font size="2"><br><br>EVALUACION DE DESEMPE&Ntilde;O DEL 
        PROFESOR UNIVERSITARIO</font></div></td>
  </tr>
</table>
<table width="96%" height="91" border="0">
  <tr> 
    <td width="21%" height="21">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td width="37%" rowspan="4"><div align="justify">
      <p>Contra la presente calificaci&oacute;n solo procede el recurso de  reposici&oacute;n y en su subsidio el de apelaci&oacute;n, el cual deber&aacute; interponerse dentro  de los (5) d&iacute;as h&aacute;biles siguientes a la fecha de esta notificaci&oacute;n.</p>
    </div></td>
  </tr>
  <tr> 
    <td height="17"><font size="2" face="Times New Roman, Times, serif">Nombre 
      del profesor:</font></td>
    <td colspan="2"><font size="2"><?php echo $nombre;?></font></td>
  </tr>
  <tr> 
    <td height="6" valign="bottom"><font size="2">Cedula:</font></td>
    <td width="42%" valign="bottom"><?php echo $cedula;?></td>
    <td width="0%" rowspan="2"><font size="1">&nbsp;</font></td>
  </tr>
  <tr> 
    <td height="20" valign="bottom"><font size="2">Programa y proyecto curricular:</font></td>
    <td width="42%" valign="bottom"><font size="2"><?php 
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
	if ($programa==54)
	{
	$programa="BÁSICA PRIMARIA MODALIDAD DISTANCIA TRADICIONAL";
	}
	echo $programa;
	?></font></td>
  </tr>
</table>
<table width="65%" border="0">
  <tr> 
    <td width="31%" height="20"><font size="2">Tipo de vinculacion:</font></td>
    <td width="69%"><font size="2"><?php echo $dedicacion." ".$vinculacion;?></font></td>
  </tr>
</table>
<table width="96%" border="0">
  <tr> 
    <td height="17" colspan="2"> 
      <div align="center"><font size="2"><strong><br>ESCALA 
        DE CALIFICACION</strong></font></div></td>
    <td colspan="3"><font size="2">&nbsp;&nbsp;&nbsp;</font></td>
    <td width="42%"><font size="2">&nbsp;</font></td>
  </tr>
  <tr> 
    <td colspan="2" rowspan="2" bordercolor="#000000"><table width="76%" height="128" border="1" bordercolor="#000000">
        <tr bordercolor="#000000"> 
          <td width="42%"><div align="center"><font size="2">VALORACION</font></div></td>
          <td width="58%"><div align="center"><font size="2">PUNTOS</font></div></td>
        </tr>
        <tr bordercolor="#000000"> 
          <td><div align="center"><font size="2">Excelente</font></div></td>
          <td><div align="center"><font size="2">45-50</font></div></td>
        </tr>
        <tr bordercolor="#000000"> 
          <td><div align="center"><font size="2">Sobresaliente</font></div></td>
          <td><div align="center"><font size="2">40-44</font></div></td>
        </tr>
        <tr bordercolor="#000000"> 
          <td><div align="center"><font size="2">Bueno</font></div></td>
          <td><div align="center"><font size="2">35-39</font></div></td>
        </tr>
        <tr bordercolor="#000000"> 
          <td><div align="center"><font size="2">Satifactorio</font></div></td>
          <td><div align="center"><font size="2">30-34</font></div></td>
        </tr>
        <tr bordercolor="#000000"> 
          <td><div align="center"><font size="2">No satisfactorio</font></div></td>
          <td><div align="center"><font size="2">0-29</font></div></td>
        </tr>
      </table></td>
    <td width="9%" rowspan="2"><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>    </td>
    <td colspan="3"><div align="center"><font size="2"><strong>CUADRO DE RESUMEN</strong></font></div></td>
  </tr>
  <tr> 
    <td height="140" colspan="3" bordercolor="#000000"> 
      <table width="100%" border="1">
        <tr> 
          <td width="36%" bordercolor="#000000"> <div align="center"><font size="2">FORMATO</font></div></td>
          <td colspan="2" bordercolor="#000000"> <div align="center"></div>
            <div align="center"><font size="2">SEMESTRE 2018-II</font></div></td>
        </tr>
        <tr> 
          <td bordercolor="#000000"> <div align="center"><font size="2">Formato 
              A Estudiantes</font></div></td>
          <td width="19%" bordercolor="#000000"> <div align="center"><font size="2"><?php  printf("%.2f", $ta ); ; ?></font></div></td>
          <td width="45%" bordercolor="#000000"> <div align="center"><font size="2">
		  <?php 
		  if ($ta >= 45)
		  {
		  echo "Excelente";
		  }
		  if ($ta >= 40 & $ta< 45 )
		  {
		  echo "Sobresaliente";
		  }
		  if ($ta < 40 & $ta >= 35)
		  {
		  echo "Bueno";
		  }		  
		  if ($ta < 35 & $ta >= 30)
		  {
		  echo "Satifactorio";
		  }
		  if ($ta < 30)
		  {
		  echo "No satisfactorio";
		  }		  
		  ?>
		  </font></div></td>
        </tr>
        <tr> 
          <td bordercolor="#000000"> <div align="center"><font size="2">Formato B Auto evaluacion</font></div></td>
          <td bordercolor="#000000"> <div align="center"><font size="2"><?php  printf("%.2f", $tb ); ; ?></font></div></td>
          <td bordercolor="#000000"> <div align="center"><font size="2">
		   <?php 
		  if ($tb >= 45)
		  {
		  echo "Excelente";
		  }
		  if ($tb < 45 & $tb >= 40)
		  {
		  echo "Sobresaliente";
		  }
		  if ($tb < 40 & $tb >= 35)
		  {
		  echo "Bueno";
		  }		  
		  if ($tb < 35 & $tb >= 30)
		  {
		  echo "Satifactorio";
		  }
		  if ($tb < 30)
		  {
		  echo "No satisfactorio";
		  }		  
		  ?>
		  </font></div></td>
        </tr>
        <tr bordercolor="#000000"> 
          <td> <div align="center"><font size="2">Formato C Jefe inmediato</font></div></td>
          <td> <div align="center"><font size="2"><?php  printf("%.2f", $tc ); ?></font></div></td>
          <td> <div align="center"><font size="2">
		  <?php 
		  if ($tc >= 45)
		  {
		  echo "Excelente";
		  }
		  if ($tc < 45 & $tc>= 40)
		  {
		  echo "Sobresaliente";
		  }
		  if ($tc < 40 & $tc >= 35)
		  {
		  echo "Bueno";
		  }		  
		  if ($tc < 35 & $tc >= 30)
		  {
		  echo "Satifactorio";
		  }
		  if ($tc < 30)
		  {
		  echo "No satisfactorio";
		  }		  
		  ?>
		  </font></div></td>
        </tr>
        <tr bordercolor="#000000"> 
          <td height="28"> <div align="center"><font size="2"><strong>PUNTAJE 
              TOTAL</strong></font></div></td>
          <td> <div align="center"><font size="2"><?php printf("%.2f", $tt ); ?></font></div></td>
          <td> <div align="center"><font size="2">
		  <?php 
		  if ($tt >= 45)
		  {
		  echo "Excelente";
		  }
		  if ($tt < 45 & $tt >= 40)
		  {
		  echo "Sobresaliente";
		  }
		  if ($tt < 40 & $tt >= 35)
		  {
		  echo "Bueno";
		  }		  
		  if ($tt < 35 & $tt >= 30)
		  {
		  echo "Satifactorio";
		  }
		  if ($tt < 30)
		  {
		  echo "No satisfactorio";
		  }		  
		  ?>
		  </font></div></td>
        </tr>
      </table></td>
  </tr>
</table>
<table width="96%" border="0">
  <tr> 
    <td height="23" colspan="2"><font size="2"><br>Notificado______________________________</font></td>
    <td colspan="2"><div align="center"><font size="2"><br>Fecha de notificacion ____________________</font></div></td>
  </tr>
  <tr> 
    <td width="21%" height="25"><font size="2">&nbsp;</font></td>
    <td colspan="2"><div align="center"><font size="2">____________________________________________________</font></td>
    <td width="35%"><font size="3">&nbsp;</font></td>
  </tr>
  <tr> 
    <td height="21"><font size="2">&nbsp;</font></td>
    <td colspan="2"><div align="center"><font size="2">Firma Director de Departamento</font></div></td>
    <td><font size="3">&nbsp;</font></td>
  </tr>
</table>
<p>=============================================================================================================================================================================</p><br><br>
<table width="96%" height="58" border="0">
  <tr> 
    <td width="27%" height="54"><div align="center"><img src="logo.JPG" width="155" height="53"></div></td>
    <td width="3%"><font size="2">&nbsp;</font></td>
    <td width="70%"><p><font size="2"><strong>FACULTAD DE EDUCACION </strong></font></p>
      <p><font size="2"><strong>DEPARTAMENTO DE PSICOPEDAGOGIA</strong> </font></p></td>
  </tr>
</table>
<table width="96%" border="0">
  <tr> 
    <td height="17"><div align="center"><font size="2"><br><br>EVALUACION DE DESEMPE&Ntilde;O 
        DEL PROFESOR UNIVERSITARIO</font></div></td>
  </tr>
</table>
<table width="96%" height="91" border="0">
  <tr> 
    <td width="21%" height="21">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td width="37%" rowspan="4"><div align="justify">
      <p>Contra la presente calificaci&oacute;n solo procede el recurso de  reposici&oacute;n y en su subsidio el de apelaci&oacute;n, el cual deber&aacute; interponerse dentro  de los (5) d&iacute;as h&aacute;biles siguientes a la fecha de esta notificaci&oacute;n.</p>
    </div></td>
  </tr>
  <tr> 
    <td height="17"><font size="2" face="Times New Roman, Times, serif">Nombre 
      del profesor:</font></td>
    <td colspan="2"><font size="2"><?php echo $nombre;?></font></td>
  </tr>
  <tr> 
    <td height="6" valign="bottom"><font size="2">Cedula:</font></td>
    <td width="42%" valign="bottom"><?php echo $cedula;?></td>
    <td width="0%" rowspan="2"><font size="1">&nbsp;</font></td>
  </tr>
  <tr> 
    <td height="20" valign="bottom"><font size="2">Programa y proyecto curricular:</font></td>
    <td width="42%" valign="bottom"><font size="2">
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
	if ($programa==54)
	{
	$programa="BÁSICA PRIMARIA MODALIDAD DISTANCIA TRADICIONAL";
	}
	echo $programa;
	?>
      </font></td>
  </tr>
</table>
<table width="65%" border="0">
  <tr> 
    <td width="31%" height="20"><font size="2">Tipo de vinculacion:</font></td>
    <td width="69%"><font size="2"><?php echo $dedicacion." ".$vinculacion;?></font></td>
  </tr>
</table>
<table width="96%" border="0">
  <tr> 
    <td height="17" colspan="2"><div align="center">
      <p>&nbsp;</p>
      <p><font size="2"><strong>ESCALA 
        DE CALIFICACION</strong></font></p>
      </div></td>
    <td colspan="3"><font size="2">&nbsp;&nbsp;&nbsp;</font></td>
    <td width="41%"><font size="2">&nbsp;</font></td>
  </tr>
  <tr> 
    <td colspan="2" rowspan="2" bordercolor="#000000"><table width="75%" height="128" border="1" bordercolor="#000000">
        <tr bordercolor="#000000"> 
          <td width="35%"><div align="center"><font size="2">VALORACION</font></div></td>
          <td width="65%"><div align="center"><font size="2">PUNTOS</font></div></td>
        </tr>
        <tr bordercolor="#000000"> 
          <td><div align="center"><font size="2">Excelente</font></div></td>
          <td><div align="center"><font size="2">45-50</font></div></td>
        </tr>
        <tr bordercolor="#000000"> 
          <td><div align="center"><font size="2">Sobresaliente</font></div></td>
          <td><div align="center"><font size="2">40-44</font></div></td>
        </tr>
        <tr bordercolor="#000000"> 
          <td><div align="center"><font size="2">Bueno</font></div></td>
          <td><div align="center"><font size="2">35-39</font></div></td>
        </tr>
        <tr bordercolor="#000000"> 
          <td><div align="center"><font size="2">Satifactorio</font></div></td>
          <td><div align="center"><font size="2">30-34</font></div></td>
        </tr>
        <tr bordercolor="#000000"> 
          <td><div align="center"><font size="2">No satisfactorio</font></div></td>
          <td><div align="center"><font size="2">0-29</font></div></td>
        </tr>
      </table></td>
    <td width="9%" rowspan="2"><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>    </td>
    <td colspan="3"><div align="center"><font size="2"><strong>CUADRO DE RESUMEN</strong></font></div></td>
  </tr>
  <tr> 
    <td height="129" colspan="3" bordercolor="#000000"> <table width="100%" border="1">
        <tr> 
          <td width="36%" bordercolor="#000000"> <div align="center"><font size="2">FORMATO</font></div></td>
          <td colspan="2" bordercolor="#000000"> <div align="center"></div>
            <div align="center"><font size="2"> SEMESTRE 2018-II</font></div></td>
        </tr>
        <tr> 
          <td bordercolor="#000000"> <div align="center"><font size="2">Formato 
              A Estudiantes</font></div></td>
          <td width="19%" bordercolor="#000000"> <div align="center"><font size="2">
              <?php  printf("%.2f", $ta ); ; ?>
              </font></div></td>
          <td width="45%" bordercolor="#000000"> <div align="center"><font size="2"> 
              <?php 
		  if ($ta >= 45)
		  {
		  echo "Excelente";
		  }
		  if ($ta >= 40 & $ta< 45 )
		  {
		  echo "Sobresaliente";
		  }
		  if ($ta < 40 & $ta >= 35)
		  {
		  echo "Bueno";
		  }		  
		  if ($ta < 35 & $ta >= 30)
		  {
		  echo "Satifactorio";
		  }
		  if ($ta < 30)
		  {
		  echo "No satisfactorio";
		  }		  
		  ?>
              </font></div></td>
        </tr>
        <tr> 
          <td bordercolor="#000000"> <div align="center"><font size="2">Formato 
              B Auto evaluacion</font></div></td>
          <td bordercolor="#000000"> <div align="center"><font size="2">
              <?php  printf("%.2f", $tb ); ; ?>
              </font></div></td>
          <td bordercolor="#000000"> <div align="center"><font size="2"> 
              <?php 
		  if ($tb >= 45)
		  {
		  echo "Excelente";
		  }
		  if ($tb < 45 & $tb >= 40)
		  {
		  echo "Sobresaliente";
		  }
		  if ($tb < 40 & $tb >= 35)
		  {
		  echo "Bueno";
		  }		  
		  if ($tb < 35 & $tb >= 30)
		  {
		  echo "Satifactorio";
		  }
		  if ($tb < 30)
		  {
		  echo "No satisfactorio";
		  }		  
		  ?>
              </font></div></td>
        </tr>
        <tr bordercolor="#000000"> 
          <td> <div align="center"><font size="2">Formato C Jefe inmediato</font></div></td>
          <td> <div align="center"><font size="2">
              <?php  printf("%.2f", $tc ); ?>
              </font></div></td>
          <td> <div align="center"><font size="2"> 
              <?php 
		  if ($tc >= 45)
		  {
		  echo "Excelente";
		  }
		  if ($tc < 45 & $tc>= 40)
		  {
		  echo "Sobresaliente";
		  }
		  if ($tc < 40 & $tc >= 35)
		  {
		  echo "Bueno";
		  }		  
		  if ($tc < 35 & $tc >= 30)
		  {
		  echo "Satifactorio";
		  }
		  if ($tc < 30)
		  {
		  echo "No satisfactorio";
		  }		  
		  ?>
              </font></div></td>
        </tr>
        <tr bordercolor="#000000"> 
          <td height="28"> <div align="center"><font size="2"><strong>PUNTAJE 
              TOTAL</strong></font></div></td>
          <td> <div align="center"><font size="2"><?php printf("%.2f", $tt ); ?></font></div></td>
          <td> <div align="center"><font size="2"> 
              <?php 
		  if ($tt >= 45)
		  {
		  echo "Excelente";
		  }
		  if ($tt < 45 & $tt >= 40)
		  {
		  echo "Sobresaliente";
		  }
		  if ($tt < 40 & $tt >= 35)
		  {
		  echo "Bueno";
		  }		  
		  if ($tt < 35 & $tt >= 30)
		  {
		  echo "Satifactorio";
		  }
		  if ($tt < 30)
		  {
		  echo "No satisfactorio";
		  }		  
		  ?>
              </font></div></td>
        </tr>
      </table></td>
  </tr>
</table>
<table width="96%" border="0">
  <tr> 
    <td height="18" colspan="2"><font size="2"><br>Notificado______________________________</font></td>
    <td colspan="2"><div align="center"><font size="2"><br>Fecha de notificacion ____________________</font></div></td>
  </tr>
  <tr> 
    <td width="21%" height="27"><font size="2">&nbsp;</font></td>
    <td colspan="2"><div align="center"><font size="2"><br>____________________________________________________</font></td>
    <td width="35%"><font size="3">&nbsp;</font></td>
  </tr>
  <tr> 
    <td height="21"><font size="2">&nbsp;</font></td>
    <td colspan="2"><div align="center"><font size="2">Firma Director de Departamento</font></div></td>
    <td><font size="3">&nbsp;</font></td>
  </tr>
</table>
</body>
</html>
