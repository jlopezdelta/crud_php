<?php
if (!empty($_POST["btnSave"])) {
    if (!empty($_POST["name"]) and !empty($_POST["lastname"]) and !empty($_POST["dpi"]) and !empty($_POST["birthdate"]) and !empty($_POST["email"])) {
        
        $id         = $_POST["id"];
        $nombre     = $_POST["name"];
        $apellido   = $_POST["lastname"];
        $dpi        = $_POST["dpi"];
        $fecha      = $_POST["birthdate"];
        $correo     = $_POST["email"];
        
        $sql = $conexion->query(" update persona set nombre = '$nombre', apellido = '$apellido', dpi = '$dpi', fecha_nacimiento = '$fecha', correo = '$correo' where id_persona = '$id' ");

        if($sql == 1){
           
            header("location: /proyectos_php/crud_php/index.php");

        }else{
            echo '<div class="alert alert-danger">Error al actualizar el usuario.</div>';
        }

        
    } else {
       echo '<div class="alert alert-danger">Alguno de los campos esta vacio.</div>';
    }
}
?>
