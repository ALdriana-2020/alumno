<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
    <link rel="stylesheet" href="estilosestudiante.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,800,900" rel="stylesheet">
</head>

<body>

    <form action="..//controlador/coestudiante.php" method="GET">
        <div class="form">
            <h1>Formulario de estudiantes</h1>
            <div class="grupo">
                <input type="text" name="Cedula_estudiante" id="Cedula_estudiante" required><span class="barra"></span>
                <label>Cedula del estudiante</label>
            </div>
            <div class="grupo">
                <input type="text" name="Nombre_estudiante" id="Nombre_estudiante" required><span class="barra"></span>
                <label>Nombre</label>
            </div>
            <div class="grupo">
                <input type="email" name="Correo_estudiante" id="Correo_estudiante" required><span class="barra"></span>
                <label>Email</label>
            </div>
            <div class="grupo">
                <input type="number" name="Celular_estudiante" id="Celular_esudiante" required><span class="barra"></span>
                <label>Celular</label>
            </div>
            <div class="grupo">
                <input type="date" name="Fecha_estudiante" id="Fecha_estudiante" required">
                <span class="barra"></span>
                <label>Fecha de nacimiento</label>
            </div>
            <button name="Boton" value="Enviar" id="Boton" type="submit">Enviar</button>

        </div>
    </form>
</body>

</html>