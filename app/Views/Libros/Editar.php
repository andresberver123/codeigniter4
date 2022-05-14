<html>
    <header>
        <!-- CSS only -->
        <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/grid/">
        <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet" >
        <link href="https://getbootstrap.com/docs/4.0/examples/grid/grid.css" rel="stylesheet" >
    </header>
    <body>
        <div class="container">
            <h1>Crear un libro</h1>
            
            <form method="POST" action="<?= base_url('/libros/update/'.$libro['pk']) ?>">
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" value="<?=$libro['Name'] ?>" name="Name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="autor">Autor</label>
                    <input type="text" value="<?=$libro['Autor'] ?>" name="Autor" class="form-control" >
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>

        </div>
    </body>
</html>
