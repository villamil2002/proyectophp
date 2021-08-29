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
            <a href="autoIndex.php" class="navbar-brand">INFORMACION AUTOMOVIL</a>
        </div> 
    </nav>
<?php include("conexion.php"); ?>

<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
 
      <div class="card card-body">
      <session>INFORMACION AUTOMOVIL</session>
        <form action="guardarAuto.php" method="POST">
          <div class="form-group">
                        <label>Numero de matricula</label>
                        <input type="number" name="numeroMatricula" class="form-control">
                        <label>Modelo</label>
                        <input type="text" name="modelo" class="form-control">
                        <label>Color </label>
                        <input type="text" name="color" class="form-control">
                        <label>Fecha de creacion </label>
                        <input type="date" name="fechaIngresoAuto" class="form-control">
                        
          </div>
          <input type="submit" name="guardar" class="btn btn-success btn-block" value="Guardar">
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
          <th>Id</th>
            <th>Numero de matricula</th>
            <th>Modelo</th>
            <th>Color</th>
            <th>Fecha de creacion</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM vehiculo";
          $resultado_vehiculo = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($resultado_vehiculo)) { ?>
          <tr>
            <td><?php echo $row['numeroMatricula']; ?></td>
            <td><?php echo $row['modelo']; ?></td>
            <td><?php echo $row['color']; ?></td>
            <td><?php echo $row['fechaIngresoAuto']; ?></td>
            <td>
              <a href="editarAuto.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="eliminarAuto.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  
</body>
</html>
