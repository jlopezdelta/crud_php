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

<script>
    function eliminar(){
        var respuesta = confirm("Esta seguro de eliminar el registro?");
        return respuesta;
    }
</script>

    <div class="container-fluid">
     
        <div class="row">
        <?php 
            include("modelo/conexion.php");
            include("controlador/eliminar_persona.php");
        ?>
            <form class="col-xl-4 p-5" method="POST">
                <?php 
                    include("modelo/conexion.php");
                    include("controlador/registro_persona.php");
                ?>
                <h3 class="text-center text-secondary">Registro de personas</h3>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombres</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" name="lastname">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">DPI</label>
                    <input type="text" class="form-control" name="dpi">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
                    <input type="date" class="form-control" name="birthdate">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Correo</label>
                    <input type="text" class="form-control" name="email">
                </div>
                <button type="submit" class="btn btn-primary" name="btnSave" value="ok">Registrar</button>
            </form>
            <div class="col-xl-8 p-5">
                <table class="table">
                    <thead class="bg-info">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">NOMBRES</th>
                            <th scope="col">APELLIDOS</th>
                            <th scope="col">DPI</th>
                            <th scope="col">FECHA DE NACIMIENTO</th>
                            <th scope="col">CORREO</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "modelo/conexion.php";
                        $sql = $conexion->query(" select * from persona ");
                        while($datos = $sql->fetch_object() ){ ?>
                        <tr>
                            <th><?= $datos -> id_persona ?> </th>
                            <td><?= $datos -> nombre ?></td>
                            <td><?= $datos -> apellido ?></td>
                            <td><?= $datos -> dpi ?></td>
                            <td><?= $datos -> fecha_nacimiento ?></td>
                            <td><?= $datos -> correo ?></td>
                            <td>
                                <a href="vistas/modificar_usuarios.php?id=<?= $datos -> id_persona ?>" class="btn btn-small btn-warning"> <i class="fa-solid fa-pen-to-square"></i> </a>
                                <a onclick="return eliminar()" href="index.php?id=<?= $datos -> id_persona ?>" class="btn btn-small btn-danger"> <i class="fa-solid fa-trash"></i> </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>