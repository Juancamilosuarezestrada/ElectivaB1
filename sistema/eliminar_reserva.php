<?php
if (!empty($_GET['id'])) {
    require("../conexion.php");
    $id = $_GET['id'];
    $query_delete = mysqli_query($conexion, "DELETE FROM reservas1 WHERE idreservas1 = $id");
    mysqli_close($conexion);
    header("location: reservas1.php");
}
?>