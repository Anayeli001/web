

@include('./conexion.blade.php);

    

    $Consulta = "UPDATE valor SET va = '1'";
    $result =  mysqli_query($conectar,$Consulta);
