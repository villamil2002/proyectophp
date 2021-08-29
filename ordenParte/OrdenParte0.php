<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <title>Informacion Orden Parte</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
   <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="repuesto.php" class="navbar-brand">INFORMACION ORDEN PARTE </a>
        </div>
    </nav>
<?php include("../conexion.php"); ?>
<select class="form-control" >

  <?php
    $queryRepuestos = "SELECT * FROM repuesto";
    $resultado_repuesto= mysqli_query($conn, $queryRepuestos);

    foreach ($resultado_repuesto as $valores):
    echo '<option value="'.$valores["Id_Repuesto"].'">'.$valores["Descripcion"].'</option>';
    endforeach;


?>

</select>

<select name="clientes" id="clientes">
    <?php foreach ($resultado_repuesto as $r): ?>
        <option value="<?php echo $r['Id_Repuesto']; ?>"<?php echo $r['Descripcion']; ?></option>
    <?php endforeach; ?>
</select>



<table border="1">
    <thead>
        <tr>
            <th>Id_Repuesto</th>
            <th>Descripcion</th>
            <th>Cantidad </th>
            <th>Precio_unitario</th>
        </tr>
    </thead>
    <?php
    foreach ($resultado_repuesto as $r):
        echo "<tr>";
        echo "<td>" . $r['Id_Repuesto'] . "</td>";
        echo "<td>" . $r['Descripcion'] . "</td>";
        echo "<td>" . $r['Cantidad'] . "</td>";
        echo "<td>" . $r['Precio_unitario'] . "</td>";
        echo "</tr>";
    endforeach;
    ?>
</table>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

</body>
</html>
