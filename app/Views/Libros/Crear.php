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
            
            <form method="POST" action="<?= base_url() ?>/libros/add">
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" name="Name" class="form-control" id="name" placeholder="Ingrese nombre">
                </div>
                <div class="form-group">
                    <label for="autor">Autor</label>
                    <input type="text" name="Autor" class="form-control" id="autor" placeholder="Ingrese Autor">
                </div>
                <button type="submit" class="btn btn-primary">Crear</button>
            </form>

        </div>
    </body>
</html>
