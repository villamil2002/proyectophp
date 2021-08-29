
<?php require_once "vistas/parte_superior.php"?>
<div class="container" style="margin-left: 5%">
<?php include 'conexion.php';?><br>
<session>INFORMACION CLIENTE</session>

<div class="container p-4"> 
    <div class="row"> 
        <div class="col-md-4"> 
<!--Mensaje-->
        <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>
     
      <center>
        <div class="card card-body" style="margin-left: 5%">
                <form action="guardar.php" method="POST">
                    <div class ="form-row">
                            <div class="form-group col-md-6">
                                <label>N° Indentificacion</label>
                                <input type="number" name="numeroIdentificacion" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Tipo de documento </label>
                                <input type="text" name="tipoDocumento" class="form-control">
                            </div>
                             <div class="form-group col-md-6">
                                <label>Nombre </label>
                                <input type="text" name="nombre" class="form-control">
                            </div>
                             <div class="form-group col-md-6">
                                <label>Apellido </label>
                                <input type="text" name="apellido" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Direccion </label>
                                <input type="text" name="direccion" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Telefono </label>
                                <input type="number" name="telefono" class="form-control"><br>
                            </div>
                    </div>  
                    <center>
                        <input type="submit" class="btn btn-success btn-block" value="Guardar" name="guardar">  
                    </center>
                </form>
            
        </div><br></center>

        <div class="col-md-2"> 
            <table class="table">
                <thead class="thead-dark"> 
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
</div>

<?php require_once "vistas/parte_inferior.php"?>
