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
<?php require_once "vistas/parte_superior.php"?>
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

    <?php require_once "vistas/parte_inferior.php"?>
