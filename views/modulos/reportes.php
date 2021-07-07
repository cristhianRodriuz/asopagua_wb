
<div class="row p-2">
    <div class="col-md-10 mx-auto">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3 class="text-center">Reportes de administración</h3>
            </div>
            <div class="card-body">

                <table class="table text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Usuarios</td>
                            <td>
                                <form action="<?php echo URL;?>reportes/usuarios.php" method="POST">
                                    <input type="hidden" name="filter" value="usuarios">
                                    <button type="submit" class="btn btn-warning btnGenerateReport" filter-report="usuarios">
                                    <i class="fa fa-file-pdf"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Productos</td>
                            <td>
                            <a href="views/modulos/descargar-reporte.php?reporte=produtos">
                                <button class="btn btn-warning">
                                    <i class="fa fa-file-pdf"></i>
                                </button>
                            </a>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Categorías</td>
                            <td><button class="btn btn-warning btnGenerateReport" filter-report="categorias"><i class="fa fa-file-pdf"></i></button></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Clientes</td>
                            <td><button class="btn btn-warning btnGenerateReport" filter-report="clientes"><i class="fa fa-file-pdf"></i></button></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Nuevos Pedidos</td>
                            <td><button class="btn btn-warning btnGenerateReport" filter-report="pedidos-pendientes"><i class="fa fa-file-pdf"></i></button></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Pedidos Verificados</td>
                            <td><button class="btn btn-warning btnGenerateReport" filter-report="pedidos-verificados"><i class="fa fa-file-pdf"></i></button></td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Pedidos Enviados</td>
                            <td><button class="btn btn-warning btnGenerateReport" filter-report="pedidos-enviados"><i class="fa fa-file-pdf"></i></button></td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Todos los pedidos</td>
                            <td><button class="btn btn-warning btnGenerateReport" filter-report="pedidos"><i class="fa fa-file-pdf"></i></button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
