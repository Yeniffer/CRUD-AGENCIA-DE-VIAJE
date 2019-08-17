<?php
// conexion a base de datos
require_once 'model/database.php';

$controller = 'viajero';

if(!isset($_REQUEST['cont']))
{
  require_once "controller/$controller.controller.php";
  $controller = ucwords($controller).'Controller';
  $controller = new $controller;
  $controller->Index();
}
else
{
  //obtiene el controlador a cargar
  $controller = strtolower($_REQUEST['c']);
  $accion = isset($_REQUEST['a']) ? $_REQUEST['a']:'Index';

  //instancia C
  require_once "controller/$controller.controller.php";
  $controller = ucwords($controller).'controller';
  $controller = new $controller;
  
  //
  call_user_func( array($controller,$accion));

}

?>