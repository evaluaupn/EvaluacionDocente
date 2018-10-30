<?php 
require_once('Connections/mysql.php'); 
?>
<?php
$p=0;
include ("conexionfed.php");
$sql1 = "select nombre from datosp order by nombre asc";
$sql1 = mysql_query($sql1) or die(mysql_error("OCURRIO UN PROBLEMA CON LA CONEXION"));
while($row = mysql_fetch_array($sql1))
{
$nom = $row['nombre'];
echo "<table width='96%' border='2'>";
echo " <tr>";
echo "<td height='17' width='40%'>".$nom."</td>";
$sql = "select avg(r1) as r1,avg(r2) as r2,avg(r3) as r3,avg(r4) as r4,avg(r5) as r5,avg(r6) as r6,avg(r7) as r7 from fa1 WHERE docente = '{$nom}' group by docente"; 
$sql = mysql_query($sql) or die(mysql_error("OCURRIO UN PROBLEMA CON LA CONEXION"));
while($row1 = mysql_fetch_array($sql))
	{
$r1=$row1[r1];
$r2=$row1[r2];
$r3=$row1[r3];
$r4=$row1[r4];
$r5=$row1[r5];
$r6=$row1[r6];
$r7=$row1[r7];
$tad=$row1[nestudiantes];
$t1=($r1+$r2+$r3+$r4+$r5+$r6+$r7)/7;
$p=$p+1;
	}
$sql2 = "select avg(r8) as r8, avg(r9) as r9,avg(r10) as r10,avg(r11) as r11,avg(r12) as r12,avg(r13) as r13 from fa2 WHERE docente = '{$nom}' group by docente"; 
$sql2 = mysql_query($sql2) or die(mysql_error("OCURRIO UN PROBLEMA CON LA CONEXION"));
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
$sql3 = "select avg(r14) as r14, avg(r15) as r15,avg(r16) as r16,avg(r17) as r17, count(docente) as nestudiantes, materia as materia from fa3 WHERE docente = '{$nom}' group by docente"; 
$sql3 = mysql_query($sql3) or die(mysql_error("OCURRIO UN PROBLEMA CON LA CONEXION"));
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
//////////////////////////////////////////////////////////
	if ($p != 0)
	{
	$tt=($t1+$t2+$t3)/$p;
	echo "<td width='20%'>";
	printf("%.2f", $tt );
	echo "</td>";
	$p=0;
	$tt= 0;
	$t1=0;
	$t2=0;
	$t3=0;
	}
	else
	{
	echo "<td width='20%' bgcolor= '#AB6487'>";
	echo "no tiene A";
	echo "</td>";
	}
/////////////////////////formato b
echo $row['nombre'];
$sqlb = "select * from fb WHERE nombre = '{$nom}'"; 
$sqlb = mysql_query($sqlb) or die(mysql_error("OCURRIO UN PROBLEMA CON LA CONEXION"));
while($rowb = mysql_fetch_array($sqlb))
{
$b1=$rowb[b1]; 
$b2=$rowb[b2];
$b3=$rowb[b3];
$b4=$rowb[b4];
$b5=$rowb[b5];
$b6=$rowb[b6];
$b7=$rowb[b7];
$b8=$rowb[b8];
$b9=$rowb[b9];
$b10=$rowb[b10];
$b11=$rowb[b11];
$b12=$rowb[b12];
$b13=$rowb[b13];
$b14=$rowb[b14];
$b15=$rowb[b15];
$b16=$rowb[b16];
$b17=$rowb[b17];
$b18=$rowb[b18];
$b19=$rowb[b19];
$b20=$rowb[b20];
$nombre=$rowb[nombre]; 
$cedula=$row[cedula];
$programa=$rowb[programa];
$vinculacion=$rowb[vinculacion];
$dedicacion=$rowb[dedicacion];
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
if ($c != 0)
{
$tb=($b1+$b2+$b3+$b4+$b5+$b6+$b7+$b8+$b9+$b10+$b11+$b12+$b13+$b14+$b15+$b16+$b17+$b18+$b19+$b20)/$c;
 echo "<td width='20%'>";
 printf("%.2f", $tb );
 echo "</td>";
 $c = 0 ;
 $b1="";
 $b2="";
 $b3="";
 $b4="";
 $b5="";
 $b6="";
 $b7="";
 $b8="";
 $b9="";
 $b10="";
 $b11="";
 $b12="";
 $b13="";
 $b14="";
 $b15="";
 $b16="";
 $b17="";
 $b18="";
 $b19="";
 $b20="";
 $tb=0;
}
else
{
echo "<td width='20%' bgcolor= '#AB6487'>";
echo "no tiene";
echo "<td>";
 $tb = 0;
 $c = 0 ;
}
////////////////////formato c
include ("conexionfed.php");;
$sqlc = "select ca,ca1,ca2,cb,cc,cd from fc WHERE nombre = '{$nom}'"; 
$sqlc = mysql_query($sqlc) or die(mysql_error("OCURRIO UN PROBLEMA CON LA CONEXION"));
while($rowc = mysql_fetch_array($sqlc))
{
$ca=$rowc[ca];
$ca1=$rowc[ca1];
$ca2=$rowc[ca2];
$cb=$rowc[cb];
$cc=$rowc[cc];
$cd=$rowc[cd];
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
if ($c1!= 0)
{
$tc=($ca+$ca1+$ca2+$cb+$cc+$cd)/$c1;
echo "<td width='20%'>";
printf("%.2f", $tc );
echo "</td>";
$c1 = 0 ;
$ca="";
$ca1="";
$ca2="";
$cb="";
$cb="";
$cd="";
$tc = 0 ;
}
else
{
echo "<td width='20%' bgcolor= '#AB6487' >";
echo "no tiene";
echo "</td>";
$c1 = 0 ;
$tc = 0 ;
}
echo "</tr>";	
}	
?>
<html>
<head>
<title>Documento sin t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>

</body>
</html>
<table width="96%" border="0">