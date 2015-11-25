<?php
/**
 * Main Module and Routing contoroller of framework
 *
 */
$param1 = $_GET['param1'];
include '../Model/model'.$param1.'.php';


header("location: ../View/View{$table}.php");

?>