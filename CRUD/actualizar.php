<?php include("conexion.php"); ?>

<head><title>Actualizar Usuario</title></head>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM `usuarioweb` WHERE id = $id";
    $resU = mysqli_query($con, $query);

    if (mysqli_num_rows($resU) == 1) {
        $row = mysqli_fetch_array($resU);
        $id = $row['id'];
        $nom = $row["nombre"];
        $ape = $row["apellido"];
        $dir = $row["direccion"];
        $tel = $row["telefono"];
    }
}

if (isset($_POST['Actualizar'])) {
    $ide = $_GET['id'];
    $id = $_POST["id"];
    $nom = $_POST["nom"];
    $ape = $_POST["ape"];
    $dir = $_POST["dir"];
    $tel = $_POST["tel"];

    $query = "UPDATE $db.usuarioweb SET id = '$id', nombre = '$nom', apellido = '$ape', direccion = '$dir', telefono = '$tel' WHERE id = $ide";

    mysqli_query($con, $query);
    

    $_SESSION["message"] = "Usuario Actualizado Satisfactoriamente";
    $_SESSION["message_type"] = "success";

    header("Location: index.php");
}
?>

<?php include("header.php") ?>

<div class="container p-4">
    <h1>
        <center>Información</center>
    </h1>
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="carda card-body">
                <form action="actualizar.php?id=<?php echo $_GET['id']; ?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="id" value="<?php echo $id; ?>" class="form-control" placeholder="Actualiza el ID">
                    </div>
                    <div class="form-group">
                        <input type="text" name="nom" value="<?php echo $nom; ?>" class="form-control" placeholder="Actualiza el Nombre">
                    </div>
                    <div class="form-group">
                        <input type="text" name="ape" value="<?php echo $ape; ?>" class="form-control" placeholder="Actualiza el Apellido">
                    </div>
                    <div class="form-group">
                        <input type="text" name="dir" value="<?php echo $dir; ?>" class="form-control" placeholder="Actualiza la Dirección">
                    </div>
                    <div class="form-group">
                        <input type="text" name="tel" value="<?php echo $tel; ?>" class="form-control" placeholder="Actualiza el Teléfono">
                    </div>
                    <button class="btn btn-success" name="Actualizar">
                        Actualizar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("footer.php") ?>