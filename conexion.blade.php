$user = 'proye341_alvaroHHz';
        $pass = 'alvaroHHz123';
        $bd = 'proye341_ahh';
        $host = 'localhost';

        $conectar = mysqli_connect($host,$user,$pass,$bd);

        if($conectar->connect_errno){
            die("ERROR EN LA CONEXION".$conectar->connect_error);
        //exit;
        }
