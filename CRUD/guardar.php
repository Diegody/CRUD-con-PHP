<?php include("conexion.php");?>

<?php
if(isset($_POST["guardar"])) {
    $id = $_POST["id"];
    $nom = $_POST["nom"];
    $ape = $_POST["ape"];
    $dir = $_POST["dir"];
    $tel = $_POST["tel"];

    $query = "INSERT INTO $db.usuarioweb(id, nombre, apellido, direccion, telefono)
            VALUES ('$id', '$nom', '$ape', '$dir', '$tel')";

    $res = mysqli_query($con, $query);
    if(!$res) {
        die("Falla en la base de datos");
    }

    $_SESSION["message"] = "Usuario Guardado Satisfactoriamente";
    $_SESSION["message_type"] = "success";

    header("Location: index.php");
}
?>