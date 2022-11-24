<?php

class Conexion
{
    const usuario = 'proye324_ahh';
    const password = '~$#d]+aZDP!r';
    const db = 'proye324_proyectoaff';
    const host = 'localhost';

    public function Conectar()
    {
        $Conectar = new mysqli(
            self::host,
            self::usuario,
            self::password,
            self::db
        );
        if ($Conectar->connect_errno) {
            die("Error de Conexion" . $Conectar->connect_error);
        }
        return $Conectar;
    }
}

$Conn = new Conexion();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    //VARIABLES DE LA IMAGEN
    $imagen = $_POST['foto'];
    $nombre = $_POST['nombre'];


    //VARIABLES DE LOS DETALLES DEL PRODUCTO
    $Nombre_Producto = $_POST['Nombre_Producto'];
    $Slug_Producto = $_POST['Slug_Producto'];
    $Descripcion_Producto = $_POST['Descripcion_Producto'];
    $Nombrecorto_Producto = $_POST['Nombrecorto_Producto'];
    $Precio_Producto = $_POST['Precio_Producto'];


    // RUTA DONDE SE GUARDARAN LAS IMAGENES [AQUI NO LE MUEVAS...]
    //____________________________________________________________________________
    $path = "$nombre.png";
    $actualpath = "https://proyectoaff.proyectostics.com/img/productos/$path";
    file_put_contents($path, base64_decode($imagen));
    //_____________________________________________________________________________



    //AQUI HAS UN INSERT A LA BASE DE DATOS CON LOS DATOS DE ARRIBA [DETALLES DE PRODUCTO]
    //PARA LA CUESTION DEL CAMPO  IMAGEN, COLOCAS COMO VARIABLE $path que contiene el nombre de la imagen, ejemplo "gato.jpg"

    // $Insert = "INSERT INTO check_products (name, slug, descripctions, extract, price, image, visible, 'categoria_id') VALUES ('$Nombre_Producto', '$Slug_Producto', '$Descripcion_Producto', '$Nombrecorto_Producto','$Precio_Producto', '$path', 0, 1)";
    // $Confing=mysqli_query($Conn->Conectar(), $Insert);


    $Insert = "INSERT INTO check_products (name, slug, descriptions, extract, price, image) VALUES ('$Nombre_Producto','$Slug_Producto','$Descripcion_Producto','$Nombrecorto_Producto',$Precio_Producto,'$path')";
    $result =  mysqli_query($conectar,$Insert);


    echo "SE SUBIO EXITOSAMENTE";
} else {
    echo "Error";
}
