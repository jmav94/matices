<?php 
/*
$serv = "localhost";
$user = "root";
$pass = "";
$data = "rosef_matices";
*/
/*
$serv = "localhost";
$user = "anuncia2_matices";
$pass = "WESRsK^EQ9_T";
$data = "anuncia2_matices";
*/

$serv = "localhost";
$user = "root";
$pass = "";
$data = "wakecode_matices";

### FUNCIONES DE SEGURIDAD ###
function xss($vuln){
	return htmlentities(strip_tags($vuln));
}
function sqli($vuln){
	return mysql_real_escape_string($vuln);
}
##############################

mysql_connect($serv, $user, $pass);
mysql_select_db($data);

$errorMsg = "";
?>