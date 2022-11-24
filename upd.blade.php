<?php

@include('./app/conexion.php');

    //$us = $_POST['val'];

    $Consulta = "UPDATE valor SET va = '1'";
    $result =  mysqli_query($conectar,$Consulta);
?>
