<?php 

if($_SERVER['REQUEST_METHOD']=='POST'){
    
    require_once('conexion.php');
    
    $nom = $_POST['nombre'];
    $sl = $_POST['sl'];
    $des = $_POST['des'];
    $nocort = $_POST['nocorto'];
    $pre = $_POST['pre'];
    $img= $_POST['img'];
    
    $path = "$nom.jpg";
    
    $url = "https://proyectoaff.proyectostics.com/img/productos/$path";
    
    file_put_contents($path,base64_decode($img));
    
    $bytesArchivo=file_get_contents($path);
    
    
    $Insert = "INSERT INTO check_products (name, slug, descriptions, extract, price, image) VALUES ('$nom','$sl','$des','$nocort',$pre,'$path')";
    $result =  mysqli_query($conectar,$Insert);
    
    if(!$Insert){
        
        echo"ERROR";
        
    }else{
        
        echo"OK";
       
}     
}