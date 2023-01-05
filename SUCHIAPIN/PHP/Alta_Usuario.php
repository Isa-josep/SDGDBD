<?php
    include("conexion.php");
    date_default_timezone_set('America/Mexico_City');
    //echo "Se realizó exitósamene la conexión a la base de datos";
    $a=$_POST['noControl'];
    $b=$_POST['nombre'];
    $c=$_POST['apellido_p'];
    $d=$_POST['apelldio_m'];
    $e=$_POST['SEMESTRE'];
    $f=$_POST['bachi'];
    $FECHA=date("F j, Y, g:i a");
    //print_r($_POST);
    $regi="INSERT INTO PRUEBA (NO_CONTROL,NOMBRE,AP_P,AP_M,SEMESTRE,BACHI ,FECHA)
    VALUES('$a','$b','$c','$d','$e','$f','$FECHA')";
    //print_r($regi);
    $query=mysqli_query($conexion,$regi);
    if($query){
        echo "DATOS GUARDADOS";
        $N=$_POST["nombres"];
        $apellido_p=$_POST["apellido_p"];
        $apellido_M=$_POST["apellido_m"];
        $tel=$_POST["telefono"];
        $cor=$_POST["Correo"];
    }
    else{
        echo "no se guardaron los datos ";
    }
?>