<?php



// sustituye el endpoint por el de tu instancia RDS donde tienes ORACLE 



$conexion = oci_connect('proyecto', 'root1234$', 'ec2-44-196-46-31.compute-1.amazonaws.com:1521/XEPDB1');



if (!$conexion) {



    $e = oci_error();



    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);



}



else 



   echo "conexión con exito";







?>