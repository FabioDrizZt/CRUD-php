<?php require_once("../../templates/header.php") ?>
Mostrar Empleados

<div class="card">
    <div class="card-header">
        Empleados
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
                        <td>imagen.jpg/td>
                        <td>cv.pdf</td>
                        <td>profesor full stack</td>
                        <td>15/04/2020</td>
                        <td> Carta | Editar | Eliminar </td>
                    </tr>

                </tbody>
            </table>
        </div>

    </div>

</div>
<?php require_once("../../templates/footer.php") ?>