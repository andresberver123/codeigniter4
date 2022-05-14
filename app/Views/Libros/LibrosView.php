<html>
    <header>
        <!-- CSS only -->
        <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/grid/">
        <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet" >
        <link href="https://getbootstrap.com/docs/4.0/examples/grid/grid.css" rel="stylesheet" >
    </header>
    <body>
        <div class="container">
            <h1>Listado de libros</h1>
            <a href="/codeigniter/public/libros/crear/" class="btn btn-primary">Agregar nuevo libro</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Autor</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach( $libros as $libro): ?>
                    <tr>
                        <th scope="row"><?=$libro["pk"];?></th>
                        <td><?=$libro["Name"];?></td>
                        <td><?=$libro["Autor"];?></td>
                        <td>
                            <a href="<?= base_url("libros/actualizar/".$libro['pk']) ?>" class="btn btn-secondary">Actualizar</a> <a href="<?= base_url("libros/delete/".$libro['pk']) ?>" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>                    
                </tbody>
            </table>

        </div>
    </body>
</html>
