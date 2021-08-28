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
            <a href="index.php" class="navbar-brand"> PROYECTO CRUD </a>
        </div> 
    </nav>

<?php include 'conexion.php';?>

<div class="container p-4"> 
    <div class="row"> 
        <div class="col-md-4"> 
<!--Mensaje-->
        <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <? = $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>


            <div class="card card-body"> 
                <form action="guardar.php" method="POST">
                <session>INFORMACION CLIENTE</session>
                    <div class ="form-group">
                      
                        <label>N° Indentificacion</label>
                        <input type="number" name="numeroIdentificacion" class="form-control">
                        <label>Tipo de documento </label>
                        <input type="text" name="tipoDocumento" class="form-control">
                        <label>Nombre </label>
                        <input type="text" name="nombre" class="form-control">
                        <label>Apellido </label>
                        <input type="text" name="apellido" class="form-control">
                        <label>Direccion </label>
                        <input type="text" name="direccion" class="form-control">
                        <label>Telefono </label>
                        <input type="number" name="telefono" class="form-control"><br>
                        
                    </div>  
                    <center>
                        <input type="submit" class="btn btn-success btn-block" value="Guardar" name="guardar">  
                    </center>
                </form>
            </div>
        </div>
        <div class="col-md-8"> 
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Numero Indentificacion</th>
                        <th>Tipo de documento</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Direccion</th>
                        <th>Telefono</th>
                        <th>Acciones</th>
                     </tr>
                </thead>
                <tbody>
                    <?php
                    $query= "SELECT * FROM cliente";
                    $resultado_cliente = mysqli_query($conn, $query);

                    while($row = mysqli_fetch_array($resultado_cliente)) { ?>
                       <tr>
                            <td><?php echo $row['idCliente'] ?></td>
                           <td><?php echo $row['numeroIdentificacion'] ?></td>
                           <td><?php echo $row['tipoDocumento'] ?></td>
                           <td><?php echo $row['nombre'] ?></td>
                           <td><?php echo $row['apellido'] ?></td>
                           <td><?php echo $row['direccion'] ?></td>
                           <td><?php echo $row['telefono'] ?></td>
                           <td>
                                <a href="editar.php?id=<?php echo $row['idCliente'] ?>" >
                                <i class="fas fa-edit"></i>
                                 </a>
                                <a href="eliminar.php?id=<?php echo $row['idCliente'] ?>">
                                <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                           
                        </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>
    </div>
</div>

<form action="autoIndex.php" method="POST">
<center>
<input type="submit" class="btn btn-danger" value="Informacion Automovil" name="automovil">  
</center>

<?php
session_start();
if(isset($_SESSION["automovil"])){
header("Location: autoIndex.php");

}else{
header("Location: index.php");
}
?>
</form>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  
</body>
</html>