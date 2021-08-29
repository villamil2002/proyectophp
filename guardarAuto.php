<?php
   include 'conexion.php';

    if(isset($_POST['guardar'])){
 
        $idVehiculo =$_POST['IdVehiculo'];
        $matricula=$_POST['numeroMatricula'];
        $modelo=$_POST['modelo'];
        $color=$_POST['color'];
        $fcreacion=$_POST['fechaIngresoAuto'];
        
        $query="INSERT INTO automovil (IdVehiculo, numeroMatricula,modelo,color,fechaIngresoAuto) VALUES ('$idVehiculo','$matricula','$modelo','$color','$fcreacion')";
        $resultadoauto= mysqli_query($conn,$query);

        if(!$resultadoauto){
            die("Falla");

        }
        $_SESSION['message']= 'Informacion guardada';
        $_SESSION['message_type']= 'success';
        header("Location: autoIndex.php");
    }
?>