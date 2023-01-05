<?php 
    include("conexion.php") ; 
    if(isset($_POST)){
        $Bachillerato = $_POST["bachi"] ; 
        $No_control = $_POST["noControl"]  ; 
        //$respuestaMYSQL = mysqli_query($conexion,"UPDATE Alumnos SET Bachillerato = '$bachi' WHERE NO_CONTROL = '$noControl'" ) ;
       // print_r($respuestaMYSQL);
        $sql = "UPDATE Alumnos SET Bachillerato = '$Bachillerato' WHERE NO_CONTROL = '$No_control'";
         if(mysqli_query($conexion, $sql)){
            echo "DATOS ACTUALIZADOS" ; 
                // aca un  window.location.assign("tablaPrincipal.php")  ; xD para ver que si se aya actuali
        
        }else{
            echo "DATOS NO ACTUALIZADOS" ; 
        }         
    }
    
?>