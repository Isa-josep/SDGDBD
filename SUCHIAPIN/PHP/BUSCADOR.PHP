<?php
    include("conexion.php");
    if(!isset($_POST['entrada'])){$_POST['entrada'] = '';}
    if(!empty($_POST)){
        $aKeyword = explode(" ", $_POST['entrada']);
        $query = "SELECT * FROM ALUMNOS where NO_CONTROL LIKE '%".$_POST['entrada']."%'";
        $resultado = mysqli_query($conexion, $query);
        if(mysqli_num_rows($resultado) > 0 ){
            $persona = "" ;  
           // echo '<link rel="stylesheet" href="STYLE.CSS">';
           /* echo '<table class="tabla_alumnos">
            <tr>
                <th>No Control</th>
                <th>Nombre</th>
                <th>Grupo</th>
                <th></th>
            </tr>';*/ 
            while($row = $resultado->fetch_assoc()){
                $persona =  $row ; 
                
               /* echo"<tr>
                <td><center>".$row["NO_CONTROL"]."</center></td>
                <td><center>".$row["NOMBRE"]." ".$row["AP_P"]." ".$row["AP_M"]."</center></td>
                <td><center>".$row["SEMESTRE"]."</center></td>
                </tr>";*/
            }
            echo '</table>';
            
           ?>
            <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/STYLE2.CSS">
    <script defer src="https://app.embed.im/snow.js">
    </script>
</head>
<body>
<center>
    <section>
        <center><H1>REGISTRO USUARIO</H1></center>
        <form action="REGISTRO.PHP" method="post">
        <div class="input-group">
            <p><input placeholder="NO_CONTROL" type="text"  required="" class="input" name="noControl" readonly id="noControl" value="<?php echo $persona["NO_CONTROL"]; ?>" /></p>
            <p><input placeholder="NOMBRE" type="text"  required="" name="nombre" class="input" readonly id="nombre" value="<?php echo $persona["NOMBRE"]; ?>"/></p>
            <p><input placeholder="APELLIDO PATERNO" type="text"  required="" class="input" name="apellido_p" readonly id="apellido_p" value="<?php echo $persona["AP_P"]; ?>"/></p>
            <p><input placeholder="APELLIDO MATERNO" type="text"  required=""  class="input" name="apelldio_m" readonly value="<?php echo $persona["AP_M"]; ?>"/>
            <p><input placeholder="SEMESTRE" type="text"  required="" class="input" name="SEMESTRE" readonly value="<?php echo $persona["Grupo"]; ?>"/>
            <p> <label for="bachi">Elija El Bachillerato:</label></p>
            <select id="bachi" name="bachi">
              <option value="1">Fisico Matematico</option>
              <option value="2">Quimico Biologo</option>
              <option value="3">Humanidades</option>
              <option value="4">Historico Social</option>
            </select>
            <BR><br>
            <button type="submit"> <span class="text">REGISTRAR</span>
                <span class="blob"></span>
                <span class="blob"></span>
                <span class="blob"></span>
                <span class="blob"></span>
            </button>
        </div>
        </form>
    </section>
        </body>
</html>
           <?php
        }else if(mysqli_num_rows($resultado) <= 0 && $_POST['entrada'] != ''){
            echo '<center><p>No se encuentran datos </p></center> ';
           /*colocar un boton de regreso al buscador, este aparecera 
           en dado caso de que no haya resultados*/
        }
    }
?>
