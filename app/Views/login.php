<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        /* Fondo gradiente para toda la página */
        body {
            background: linear-gradient(135deg, #007bff 0%, #00d4ff 100%);
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="col-md-4 bg-white p-4 rounded shadow">
            <!-- Título y Subtítulo -->
            <h1 class="text-center mb-4">Iniciar Sesión</h1>
            <p class="text-center text-muted">Ingrese sus credenciales para acceder</p>

            <!-- Mensaje de Error -->
            <?php if (session('mensaje') == '0'): ?>
                <div class="alert alert-danger text-center">Usuario o contraseña incorrectos.</div>
            <?php endif; ?>

            <!-- Formulario de Login -->
            <form action="<?= base_url('login') ?>" method="POST">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" name="usuario" class="form-control" placeholder="Usuario" required>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                    </div>
                    <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Entrar</button>
            </form>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
