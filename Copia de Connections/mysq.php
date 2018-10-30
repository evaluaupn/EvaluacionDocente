<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_mysq = "localhost";
$database_mysq = "2018-2";
$username_mysq = "root";
$password_mysq = "";
$mysq = mysql_pconnect($hostname_mysq, $username_mysq, $password_mysq) or trigger_error(mysql_error(),E_USER_ERROR); 
?>