<?php require_once("../../templates/header.php") ?>
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
                    <tr class="">
                        <td scope="row">1</td>
                        <td>Fabio D. Argañaraz A.</td>
                        <td>imagen.jpg</td>
                        <td>cv.pdf</td>
                        <td>profesor full stack</td>
                        <td>15/04/2020</td>
                        <td>
                            <a name="" id="" class="btn btn-primary" href="#" role="button">Carta</a>
                            <a name="" id="" class="btn btn-info" href="#" role="button">Editar</a>
                            <a name="" id="" class="btn btn-danger" href="#" role="button"> Eliminar </a>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>

    </div>

</div>
<?php require_once("../../templates/footer.php") ?>