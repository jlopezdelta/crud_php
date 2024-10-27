<?php

include "../modelo/conexion.php";

$id = $_GET["id"];

$sql = $conexion->query(" select * from persona where id_persona = $id ");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD en php y mysql</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <form class="col-xl-4 p-5" method="POST">
                <h3 class="text-center text-secondary">Modificar usuario</h3>
                <input type="hidden" name="id" value=" <?= $_GET["id"] ?> ">
                <?php 

                include "../controlador/modificar_persona.php";

                    while($datos = $sql -> fetch_object()){ ?>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombres</label>
                    <input type="text" class="form-control" name="name" value="<?= $datos->nombre ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" name="lastname" value="<?=$datos->apellido ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">DPI</label>
                    <input type="text" class="form-control" name="dpi" value="<?=$datos->dpi ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
                    <input type="date" class="form-control" name="birthdate" value="<?= $datos->fecha_nacimiento ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Correo</label>
                    <input type="text" class="form-control" name="email"  value="<?= $datos->correo ?>">
                </div>
                <button type="submit" class="btn btn-primary" name="btnSave" value="ok">Actualizar</button>

                <?php  } ?>
               
            </form>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>