<?php require_once "vistas/parte_superior.php"?>
<h3>Repuestos utilizados</h3>
<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <div class="card card-body">
     
        <form action="#" method="POST">
          <div class="form-group">

                        <label>Cantidad</label>
                        <input type="number" name="cantidad" class="form-control">
                        <label>Repuesto </label>
                        <input type="number" name="" class="form-control">
                        <label>Mecanico</label>
                        <input type="text" name="" class="form-control">

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
            <th>Cantidad</th>
            <th>Repuesto</th>
            <th>Mecanico</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM repuesto";
          $resultado_vehiculo = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($resultado_vehiculo)) { ?>
          <tr>
            <td><?php echo $row['descripcion']; ?></td>
            <td><?php echo $row['cantidad']; ?></td>
            <td><?php echo $row['precio']; ?></td>
            <td>
              <a href="#?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="#?id=<?php echo $row['id']?>" class="btn btn-danger">
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
<?php include("conexion.php"); ?>
<?php require_once "vistas/parte_inferior.php"?>