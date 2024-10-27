<?php
if (!empty($_GET["id"])) {
    $id = $_GET["id"];
    $sql = $conexion->query("DELETE FROM persona WHERE id_persona = $id");
    if ($sql == 1) {
        echo '<div class="alert alert-success m-5">Persona eliminada correctamente</div>';
    } else {
        echo '<div class="alert alert-danger m-5">Error al eliminar la persona</div>';
    }
}
?>