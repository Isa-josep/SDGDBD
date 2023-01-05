<?php 
    include("conexion.php") ; 
    if(isset($_POST)){
       /* $Bachillerato = $_POST["bachi"] ; 
        $No_control = $_POST["noControl"]  ; */
        //$respuestaMYSQL = mysqli_query($conexion,"UPDATE Alumnos SET Bachillerato = '$bachi' WHERE NO_CONTROL = '$noControl'" ) ;
        //print_r($respuestaMYSQL);
        $a=$_POST['noControl'];
        $b=$_POST['bachi'];
        $regi="INSERT INTO Bachilleratos (NOMBRE,Id)
        VALUES('19416070200327','1')";
        print_r($regi);
        $query=mysqli_query($conexion,$regi);
        
        //$sql = "UPDATE Alumnos SET Bachillerato = '$bachi' WHERE NO_CONTROL = '$noControl'";
         if(mysqli_query($conexion, $query)){
            echo "DATOS ACTUALIZADOS" ; 
                // aca un  window.location.assign("tablaPrincipal.php")  ; xD para ver que si se aya actuali
        
        }else{
            echo "DATOS NO ACTUALIZADOS" ;
        }         
    }
    
?>