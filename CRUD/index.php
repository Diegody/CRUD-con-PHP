<?php include("conexion.php") ?>
<?php include("header.php") ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <?php if (isset($_SESSION["message"])) { ?>
                <div class="alert alert-<?= $_SESSION["message_type"]; ?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION["message"] ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php session_unset();
            } ?>
            <div class="card card-body">
                <form action="guardar.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="id" class="form-control" placeholder="Código" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="nom" class="form-control" placeholder="Nombre" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="ape" class="form-control" placeholder="Apellido" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="dir" class="form-control" placeholder="Dirección" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="tel" class="form-control" placeholder="Teléfono" autofocus>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="guardar" value="Guardar">
                </form>
            </div>
        </div>
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <h1>
                        <center>Usuarios Disponibles</center>
                    </h1><br>
                    <tr>
                        <th>
                            <center>Identificación</center>
                        </th>
                        <th>
                            <center>Nombre</center>
                        </th>
                        <th>
                            <center>Apellido</center>
                        </th>
                        <th>
                            <center>Dirección</center>
                        </th>
                        <th>
                            <center>Teléfono</center>
                        </th>
                        <th>
                            <center>Acción</center>
                        </th>
                    </tr>
                <tbody>
                    <?php
                    $query = "SELECT * FROM `usuarioweb` WHERE 1";
                    $resT = mysqli_query($con, $query);

                    while ($row = mysqli_fetch_array($resT)) { ?>
                        <tr>
                            <td>
                                <center><?php echo $row['id'] ?></center>
                            </td>
                            <td>
                                <center><?php echo $row["nombre"] ?></center>
                            </td>
                            <td>
                                <center><?php echo $row["apellido"] ?></center>
                            </td>
                            <td>
                                <center><?php echo $row["direccion"] ?></center>
                            </td>
                            <td>
                                <center><?php echo $row["telefono"] ?></center>
                            </td>
                            <td>
                                <center>
                                    <a href="actualizar.php?id=<?php echo $row['id'] ?>">
                                        Editar
                                    </a><br>
                                    <a href="eliminar.php?id=<?php echo $row['id'] ?>">
                                        Eliminar
                                    </a>
                                </center>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
                </thead>
            </table>
        </div>
    </div>
</div>

<?php include("footer.php") ?>