<?php
require_once("../../bd.php");
$sentencia = $conexion->prepare("SELECT *,
    (SELECT nombredelpuesto 
    FROM `tbl_puestos`
    WHERE tbl_puestos.id=tbl_empleados.idpuesto
    LIMIT 1)  AS puesto
FROM `tbl_empleados`");
$sentencia->execute();
$lista_tbl_empleados = $sentencia->fetchAll(PDO::FETCH_ASSOC);
require_once("../../templates/header.php") ?>
<h1>Empleados</h1>
<div class="card">
    <div class="card-header">
        <a name="" id="" class="btn btn-primary" href="./crear.php" role="button">Agregar registro</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th><!-- 1er y 2do nombre y 1er y 2do apellido -->
                        <th scope="col">Foto</th>
                        <th scope="col">CV</th>
                        <th scope="col">Puesto</th>
                        <th scope="col">Fecha de Ingreso</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($lista_tbl_empleados as $registro) { ?>
                        <tr class="">
                            <td scope="row">
                                <?php echo $registro['id']; ?>
                            </td>
                            <td>
                                <?php echo $registro['primernombre']; ?>
                                <?php echo $registro['segundonombre']; ?>
                                <?php echo $registro['primerapellido']; ?>
                                <?php echo $registro['segundoapellido']; ?>
                            </td>
                            <td>
                                <img width="50" class="img-fluid rounded" src="./img/<?php echo $registro['foto']; ?>" />
                            </td>
                            <td>
                                <a href="./cv/<?php echo $registro['cv']; ?>">CV</a>

                            </td>
                            <td>
                                <?php echo $registro['puesto']; ?>
                            </td>
                            <td>
                                <?php echo $registro['fechadeingreso']; ?>
                            </td>
                            <td>
                                <a name="" id="" class=" btn btn-primary" href="#" role="button">Carta</a>
                                <a name="" id="" class="btn btn-info" href="#" role="button">Editar</a>
                                <a name="" id="" class="btn btn-danger" href="#" role="button"> Eliminar </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>

</div>
<?php require_once("../../templates/footer.php") ?>