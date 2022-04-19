<?php include("conexion.php"); ?>

<?php
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "DELETE FROM `usuarioweb` WHERE id = $id";
        $resD = mysqli_query($con, $query);

        if(!$resD) {
            die("Fallo en la sentencia o error");
        }

        $_SESSION['message'] = 'Usuario eliminado conrrectamente!';  
        $_SESSION['message_type'] = 'success';
        
        header("Location: index.php");
    }
?>