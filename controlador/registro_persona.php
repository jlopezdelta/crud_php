<?php
if (!empty($_POST["btnSave"])) {
    if (!empty($_POST["name"]) and !empty($_POST["lastname"]) and !empty($_POST["dpi"]) and !empty($_POST["birthdate"]) and !empty($_POST["email"])) {
        
        $nombre     = $_POST["name"];
        $apellido   = $_POST["lastname"];
        $dpi        = $_POST["dpi"];
        $fecha      = $_POST["birthdate"];
        $correo     = $_POST["email"];
        
        $sql = $conexion->query("insert into persona(nombre, apellido, dpi, fecha_nacimiento, correo) values('$nombre', '$apellido', '$dpi', '$fecha', '$correo')");

        if($sql == 1){
            echo '<div class="alert alert-success">Accion realizada exitosamente.</div>';
        }else{
            echo '<div class="alert alert-danger">Error al registrar el usuario.</div>';
        }

        
    } else {
       echo '<div class="alert alert-danger">Alguno de los campos esta vacio.</div>';
    }
}
?>
