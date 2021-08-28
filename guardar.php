<?php
   include 'conexion.php';

    if(isset($_POST['guardar'])){
 
        $idCliente =$_POST['idCliente'];
        $nidentidad=$_POST['numeroIdentificacion'];
        $tDocumento=$_POST['tipoDocumento'];
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $direccion=$_POST['direccion'];
        $telefono=$_POST['telefono'];
        
        $query="INSERT INTO cliente(idCliente,numeroIdentificacion,tipoDocumento,nombre,apellido,direccion,telefono) VALUES ('$idCliente','$nidentidad','$tDocumento','$nombre','$apellido','$direccion','$telefono')";
        $resultado= mysqli_query($conn,$query);

        if(!$resultado){
            die("Falla");

        }
        $_SESSION['message']= 'Informacion guardada';
        $_SESSION['message_type']= 'sucsess';
        header("Location: index.php");
    }
?>