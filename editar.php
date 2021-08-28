<?php
    include("conexion.php");

        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $query = "SELECT * FROM cliente WHERE idCliente = $id";
            $resultado = mysqli_query($conn, $query);
        
            if (mysqli_num_rows($resultado) == 1) {
            $row = mysqli_fetch_array($resultado);
            $nidentidad=$row['numeroIdentificacion'];
            $tDocumento=$row['tipoDocumento'];
            $nombre=$row['nombre'];
            $apellido=$row['apellido'];
            $direccion=$row['direccion'];
            $telefono=$row['telefono'];
            
            
        }
    }

    if(isset($_POST['actualizar'])){
        $id = $_GET['id'];
        $nidentidad=$_POST['numeroIdentificacion'];
        $tDocumento=$_POST['tipoDocumento'];
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $direccion=$_POST['direccion'];
        $telefono=$_POST['telefono'];


        $query = "UPDATE cliente SET numeroIdentificacion = '$nidentidad', tipoDocumento = '$tDocumento',nombre = '$nombre',apellido = '$apellido',direccion = '$direccion',telefono = '$telefono' WHERE idCliente = $id";
        
        $resultado = $conn->query($query);
        header('Location: index.php');	
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <title>Informacion Clientes</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
   <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="index.php" class="navbar-brand"> EDITAR CLIENTE </a>
        </div> 
</nav>
    <div class="container p-4">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card card-body">
                    <form action="editar.php?id=<?php echo $_GET['id']; ?>" method="POST">
                            <div class="form-group">
                                <label>N° Indentificacion</label>
                                <input type="number" name="numeroIdentificacion" class="form-control" value="<?php echo $nidentidad; ?>" placeholder="Actualizar Numero">
                                <label>Tipo de documento </label>
                                <input type="text" name="tipoDocumento" class="form-control" value="<?php echo $tDocumento; ?>" placeholder="Actualizar Documento">
                                <label>Nombre </label>
                                <input type="text" name="nombre" class="form-control" value="<?php echo $nombre; ?>" placeholder="Actualizar Nombre">
                                <label>Apellido </label>
                                <input type="text" name="apellido" class="form-control" value="<?php echo $apellido; ?>" placeholder="Actualizar Apellido">
                                <label>Direccion </label>
                                <input type="text" name="direccion" class="form-control" value="<?php echo $direccion; ?>" placeholder="Actualizar direccion">
                                <label>Telefono </label>
                                <input type="number" name="telefono" class="form-control" value="<?php echo $telefono; ?>" placeholder="Actualizar telefono"><br>
                            </div>
                            <button class="btn btn-success" name="actualizar">
                                Actualizar
                             </button>
                    </form>
                </div>
            </div>
        </div>
    </div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  
</body>
</html>
