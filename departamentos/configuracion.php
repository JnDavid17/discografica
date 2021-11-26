<?php 

//Datos del servidor y base de datos 

$server="sql204.260mb.net"; 
$username="n260m_28421966"; 
$password= "JSPP1421"; 
$database_name="n260m_28421966_servidorJSPP";
//Establecemos la conexión con el servidor 
$conexion=mysql_connect($server, $username, $password) 
or die("Problemas al tratar de establecer la conexion"); 
//Seleccionamos la base de datos 
$bd_sel=mysql_select_db($database_name) or die("Problemas al seleccionar la base de datos"); 
?>


