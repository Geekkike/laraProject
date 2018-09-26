<?php

$hostname="localhost";
$username="root";
$password="alpine";

if (!isset ($HTTP_RAW_POST_DATA)) $HTTP_RAW_POST_DATA = file_get_contents('php:// imput');

$server=new SOAP_server();
$server->register("Clientes");
$server->service("$HTTP_RAW_POST_DATA");

exit;

$seleccion=Mysql_select_db("Clientes");
die("No hay conexion db");

   echo"Conexion a una base de datos";
   
   sql = 'CREATE DATABASE Clientes';
   
if (mysql_query($sql, $enlace)) {
    
    echo "La base de datos mi_bd se creó correctamente\n";
 
 
 $dbhandle = Mysql_connect($hostname, $username, $password);
 
 die("No hay conexion con la DB");
 
 ?>