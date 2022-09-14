<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="/accest/css/main.css">
    <link rel="stylesheet" href="/accest/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <header>Mi primera aplicacion </header>
        <h1>Formulario de Pacientes</h1>
        <form class="row g-3" action="guardar.php" method="POST">
            <div class="col-md-6">
                <label for="first_name" class="form-label">Nombre</label>
                <input type="text" name="first_name" placeholder="Nombre del paciente" class="form-control" >
            </div>
            <div class="col-md-6">
                <label for="last_name" class="form-label">Apellido</label>
                <input type="text" name="last_name" placeholder="Apelido del  paciente" class="form-control" >
            </div>
            <div class="col-12">
                <label for="direction" class="form-label">Direccion</label>
                <textarea type="text" name="direction" class="form-control"  placeholder="Ingrese la direcion"></textarea>
            </div>
            <div class="col-md-4">
                <label for="type_document" class="form-label">Tipo documento</label>
                <select id="type_document" name="type_document" class="form-select">
                <option value="CI">CI</option>
                <option value="DNI">DNI</option>
                <option value="Pasaporte">Pasaporte</option>
                </select>
            </div>
  
            <div class="col-md-6">
                <label for="document" class="form-label">Nro Documento</label>
                <input type="number" name="document" class="form-control" id="document">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
 

    </div>
</body>

</html>