<?php 
require_once('Connections/mysql.php'); 
?>
<?php
$p=0;
include ("conexionfed.php");
$sql = "select avg(r1) as r1,avg(r2) as r2,avg(r3) as r3,avg(r4) as r4,avg(r5) as r5,avg(r6) as r6,avg(r7) as r7 from fa1 WHERE docente = '{$_POST['doc']}' group by docente"; 
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
$tad=$row[nestudiantes];
$t1=($r1+$r2+$r3+$r4+$r5+$r6+$r7)/7;
$p=$p+1;
}
include ("conexionfed.php");
$sql = "select avg(r8) as r8, avg(r9) as r9,avg(r10) as r10,avg(r11) as r11,avg(r12) as r12,avg(r13) as r13 from fa2 WHERE docente = '{$_POST['doc']}' group by docente"; 
$sql = mysql_query($sql) or die(mysql_error("OCURRIO UN PROBLEMA CON LA CONEXION"));
while($row = mysql_fetch_array($sql))
{
$r8=$row[r8];
$r9=$row[r9];
$r10=$row[r10];
$r11=$row[r11];
$r12=$row[r12];
$r13=$row[r13];
$tad=$row[nestudiantes];
$t2=($r8+$r9+$r10+$r11+$r12+$r13)/6;
$p=$p+1;
}
include ("conexionfed.php");
$sql = "select avg(r14) as r14, avg(r15) as r15,avg(r16) as r16,avg(r17) as r17, count(docente) as nestudiantes, materia as materia from fa3 WHERE docente = '{$_POST['doc']}' group by docente"; 
$sql = mysql_query($sql) or die(mysql_error("OCURRIO UN PROBLEMA CON LA CONEXION"));
while($row = mysql_fetch_array($sql))
{
$r14=$row[r14];
$r15=$row[r15];
$r16=$row[r16];
$r17=$row[r17];
$tad=$row[nestudiantes];
$materia=$row[materia];
$t3=($r14+$r15+$r16+$r17)/4;
$p=$p+1;
}

////////////////////////////////////////////////////

?>

<html>
<head>
<title>Evaluacion formato A del Docente</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<table width="71%" border="1" align="center">
  <tr> 
    <td width="36%" height="23" bgcolor="#66CCFF">Docente</td>
    <td width="64%"><?php echo $_POST['doc'] ;?></td>
  </tr>
</table>
<?php
if ($r1 != "")
{
?>
<table width="71%" border="1" align="center">
  <tr bgcolor="#33CCFF"> 
    <td width="39%" nowrap> 
      <div align="center">Materia</div></td>
    <td width="7%"> 
      <div align="center">r1</div></td>
    <td width="7%"> 
      <div align="center">r2</div></td>
    <td width="7%"> 
      <div align="center">r3</div></td>
    <td width="7%"> 
      <div align="center">r4</div></td>
    <td width="7%"> 
      <div align="center">r5</div></td>
    <td width="7%"> 
      <div align="center">r6</div></td>
    <td width="7%"> 
      <div align="center">r7</div></td>
    <td width="22%"> 
      <div align="center"># Estudiantes</div></td>
  </tr>
<?php
}
include ("conexionfed.php");
$sql = "select avg(r1) as r1, avg(r2) as r2,avg(r3) as r3,avg(r4) as r4,avg(r5) as r5,avg(r6) as r6,avg(r7) as r7, count(docente) as nestudiantes, materia as materia from fa1 WHERE docente = '{$_POST['doc']}' group by materia"; 
$sql = mysql_query($sql) or die(mysql_error("OCURRIO UN PROBLEMA CON LA CONEXION"));
while($row = mysql_fetch_array($sql))
{
echo "<tr>";
$r1=$row[r1];
$r2=$row[r2];
$r3=$row[r3];
$r4=$row[r4];
$r5=$row[r5];
$r6=$row[r6];
$r7=$row[r7];
$tad=$row[nestudiantes];
$materia=$row[materia];
echo "<td width='36%'nowrap>".$materia."</td>" ;
echo "<td width='6%' nowrap>";
printf("%.2f", $r1 );
echo "</td>";
echo "<td width='6%' nowrap>";
printf("%.2f", $r2 );
echo "</td>";
echo "<td width='6%' nowrap>";
printf("%.2f", $r3 );
echo "</td>";
echo "<td width='6%' nowrap>";
printf("%.2f", $r4 );
echo "</td>";
echo "<td width='6%' nowrap>";
printf("%.2f", $r5 );
echo "</td>";
echo "<td width='6%' nowrap>";
printf("%.2f", $r6 );
echo "</td>";
echo "<td width='6%' nowrap>";
printf("%.2f", $r7 );
echo "</td>";
echo "<td width='32%'> <div align='center'>".$tad."</td>";
echo "</tr>";
}
?>
</table>
<?php
if ($r8 != "")
{
?>
<table width="71%" border="1" align="center">
  <tr bgcolor="#66CCFF"> 
    <td width="42%" nowrap> 
      <div align="center">Materia</div></td>
    <td width="6%"> 
      <div align="center">r8</div></td>
    <td width="6%"> 
      <div align="center">r9</div></td>
    <td width="6%"> 
      <div align="center">r10</div></td>
    <td width="6%"> 
      <div align="center">r11</div></td>
    <td width="6%"> 
      <div align="center">r12</div></td>
    <td width="6%"> 
      <div align="center">r13</div></td>
    <td width="22%"> 
      <div align="center"># Estudiantes</div></td>
  </tr>
<?php
}
include ("conexionfed.php");
$sql = "select avg(r8) as r8, avg(r9) as r9,avg(r10) as r10,avg(r11) as r11,avg(r12) as r12,avg(r13) as r13, count(docente) as nestudiantes, materia as materia from fa2 WHERE docente = '{$_POST['doc']}' group by materia"; 
$sql = mysql_query($sql) or die(mysql_error("OCURRIO UN PROBLEMA CON LA CONEXION"));
while($row = mysql_fetch_array($sql))
{
echo "<tr>";
$r8=$row[r8];
$r9=$row[r9];
$r10=$row[r10];
$r11=$row[r11];
$r12=$row[r12];
$r13=$row[r13];
$tad=$row[nestudiantes];
$materia=$row[materia];
echo "<td width='39%'nowrap>".$materia."</td>" ;
echo "<td width='6%' nowrap>";
printf("%.2f", $r8 );
echo "</td>";;
echo "<td width='6%' nowrap>";
printf("%.2f", $r9 );
echo "</td>";
echo "<td width='6%' nowrap>";
printf("%.2f", $r10 );
echo "</td>";
echo "<td width='6%' nowrap>";
printf("%.2f", $r11 );
echo "</td>";
echo "<td width='6%' nowrap>";
printf("%.2f", $r12 );
echo "</td>";
echo "<td width='6%' nowrap>";
printf("%.2f", $r13 );
echo "</td>";
echo "<td width='25%'> <div align='center'>".$tad."</td>";
echo "</tr>";
}
?>
</table>
<?php
if ($r14 != "")
{
?>
<table width="71%" border="1" align="center">
  <tr bgcolor="#66CCFF"> 
    <td width="41%" nowrap> 
      <div align="center">Materia</div></td>
    <td width="6%"> 
      <div align="center">r14</div></td>
    <td width="6%"> 
      <div align="center">r15</div></td>
    <td width="6%"> 
      <div align="center">r16</div></td>
    <td width="6%"> 
      <div align="center">r17</div></td>
    <td width="35%"> 
      <div align="center"># Estudiantes</div></td>
  </tr>
 <?php
 }
 include ("conexionfed.php");
$sql = "select avg(r14) as r14, avg(r15) as r15,avg(r16) as r16,avg(r17) as r17, count(docente) as nestudiantes, materia as materia from fa3 WHERE docente = '{$_POST['doc']}' group by materia"; 
$sql = mysql_query($sql) or die(mysql_error("OCURRIO UN PROBLEMA CON LA CONEXION"));
while($row = mysql_fetch_array($sql))
{
echo "<tr>";
$r14=$row[r14];
$r15=$row[r15];
$r16=$row[r16];
$r17=$row[r17];
$tad=$row[nestudiantes];
$materia=$row[materia];
echo "<td width='39%'nowrap>".$materia."</td>" ;
echo "<td width='6%' nowrap>";
printf("%.2f", $r14 );
echo "</td>";
echo "<td width='6%' nowrap>";
printf("%.2f", $r15 );
echo "</td>";
echo "<td width='6%' nowrap>";
printf("%.2f", $r16 );
echo "</td>";
echo "<td width='6%' nowrap>";
printf("%.2f", $r17);
echo "</td>";
echo "<td width='37%'> <div align='center'>".$tad."</td>";
echo "</tr>";
}
?>
</table>
<table width="20%" border="1" align="center">
  <tr>
    <td width="25%" bgcolor="#66CCFF">
<div align="center">TOTAL FORMATO A</div></td>
    <td width="75%"> <div align="center">
	<?php
	if ($p != 0)
	{
	$tt=($t1+$t2+$t3)/$p;
	printf("%.2f", $tt );
	}
	else
	{
	echo "El docente no tiene calificacion en el formato A";
	}
	?>
	</div>
	</td>
  </tr>
</table>

<form name="form1" method="post" action="">
  <div align="center">
    <p>&nbsp;</p>
    <p>OBSERVACIONES</p>
    <p>
      <select name="obser" size="5" multiple id="obser">
<?php
	include ("conexionfed.php");
$sql = "select ob as ob from fa1 WHERE ob != '' && docente = '{$_POST['doc']}'"; 
$sql = mysql_query($sql) or die(mysql_error("OCURRIO UN PROBLEMA CON LA CONEXION"));
while($row = mysql_fetch_array($sql))
{
$ob=$row[ob];
echo "<option>".$ob."</option>";

}
?>
<?php
	include ("conexionfed.php");
$sql = "select ob as ob from fa2 WHERE ob != '' && docente = '{$_POST['doc']}'"; 
$sql = mysql_query($sql) or die(mysql_error("OCURRIO UN PROBLEMA CON LA CONEXION"));
while($row = mysql_fetch_array($sql))
{
$ob=$row[ob];
echo "<option>".$ob."</option>";

}
?>
<?php
	include ("conexionfed.php");
$sql = "select ob as ob from fa3 WHERE ob != '' && docente = '{$_POST['doc']}'"; 
$sql = mysql_query($sql) or die(mysql_error("OCURRIO UN PROBLEMA CON LA CONEXION"));
while($row = mysql_fetch_array($sql))
{
$ob=$row[ob];
echo "<option>".$ob."</option>";

}
?>
      </select>
    </p>
  </div>
</form>
/////////////////////////////////////////////////////////////////
<!--
table {  
    font: 11px Verdana, Arial, Helvetica, sans-serif;  
    color: #777;  
    padding:7px;  
}  
-->  
<?php  
$datosTabla = array(  
        array( "r1", $r1, "#BDDA4C"),  
        array( "r2", $r2, "#FF9A68"),  
        array( "r3", $r3, "#69ABBF"),  
        array( "r4", $r4, "#FFDE68"), 
		array( "r5", $r5, "#1FDE98"), 
		array( "r6", $r6, "#FF1EB8"),  
        array( "r7", $r7, "#AB6487")  
);  
$maximo = 0;  
foreach ( $datosTabla as $ElemArray ) { $maximo += $ElemArray[1]; }  
?>  
<table width="400" cellspacing="5" cellpadding="2">  
<?php foreach( $datosTabla as $ElemArray ) {  
$porcentaje = round((( $ElemArray[1] / $maximo ) * 100),2);  
?>  
<tr>  
    <td width="20%"><strong><?php echo( $ElemArray[0] ) ?></strong></td>  
    <td width="10%"><?php echo( $ElemArray[1] ) ?>%</td>  
    <td>  
        <table width="<?php echo($porcentaje) ?>%" bgcolor="<?php echo($ElemArray[2]) ?>">  
        <tr><td></td></tr>  
    </table>  
    </td>  
    </tr>  
    <?php } ?>  
</body>
</html>