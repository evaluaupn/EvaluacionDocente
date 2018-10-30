<?php
require_once('Connections/mysql.php'); 
$db_selected = mysql_select_db("2018-2", $mysql);
if (!$db_selected) {
    die ('Error al abrir la base de datos: ' . mysql_error());
}
?> 