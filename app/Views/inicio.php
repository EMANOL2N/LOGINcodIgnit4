<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Inicio</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <style>
        /* Fondo gradiente para la página de inicio */
        body {
            background: linear-gradient(135deg, #4e54c8, #8f94fb);
            color: #fff;
            font-family: Arial, sans-serif;
        }
        /* Tarjeta de bienvenida */
        .welcome-card {
            background-color: #ffffff;
            color: #333;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 600px;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Bienvenido, <?php echo session('usuario') ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('/salir') ?>">Salir</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Contenido principal -->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="welcome-card text-center">
            <h1 class="mb-4">¡Bienvenido a la Plataforma!</h1>
            <p class="lead">Has iniciado sesión exitosamente. Usa el menú de navegación para explorar las opciones disponibles.</p>
            <p class="text-muted">Si se pudo burro si se pudo XD.</p>
            <a href="<?php echo base_url('/salir') ?>" class="btn btn-primary mt-3">Cerrar Sesión</a>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
