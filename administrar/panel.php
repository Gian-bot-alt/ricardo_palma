<?php 
session_start(); 
if (!isset($_SESSION['usuario'])) {     
    header("Location: login.php");     
    exit(); 
} 

// Mensaje de bienvenida según el rol del usuario
$mensaje_bienvenida = '';
switch ($_SESSION['rol']) {
    case 1:
        $mensaje_bienvenida = 'Bienvenido ' . $_SESSION['usuario'] . ' - Admin';
        break;
    case 2:
        $mensaje_bienvenida = 'Bienvenido ' . $_SESSION['usuario'] . ' - Empleado Nivel 2';
        break;
    case 3:
        $mensaje_bienvenida = 'Bienvenido ' . $_SESSION['usuario'] . ' - Empleado Nivel 3';
        break;
    default:
        $mensaje_bienvenida = 'Bienvenido ' . $_SESSION['usuario'];
        break;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración</title>

    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"> <!-- CSS de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Incluir jQuery primero -->
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script> <!-- Luego Bootstrap -->
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <!-- Barra lateral de navegación -->
                <h4>Panel de Administración</h4>
                <p><?php echo $mensaje_bienvenida; ?></p> <!-- Mostrar el mensaje de bienvenida -->
                <ul class="list-group">
                    <!-- El admin (rol 1) puede acceder a todo -->
                    <?php if ($_SESSION['rol'] == 1) : ?>
                        <li class="list-group-item"><a href="#" class="nav-link" data-section="dashboard">Dashboard</a></li>
                        <li class="list-group-item"><a href="#" class="nav-link" data-section="usuarios/usuarios">Gestión de Usuarios</a></li>
                        <li class="list-group-item"><a href="#" class="nav-link" data-section="publicaciones/publicaciones">Gestión de Publicaciones</a></li>
                        <li class="list-group-item"><a href="#" class="nav-link" data-section="configuracion">Configuración del Sitio</a></li>
                    <!-- El empleado nivel 2 solo puede acceder a configuración -->
                    <?php elseif ($_SESSION['rol'] == 2) : ?>
                        <li class="list-group-item"><a href="#" class="nav-link" data-section="configuracion">Configuración del Sitio</a></li>
                    <!-- El empleado nivel 3 solo puede acceder a publicaciones -->
                    <?php elseif ($_SESSION['rol'] == 3) : ?>
                        <li class="list-group-item"><a href="#" class="nav-link" data-section="publicaciones/publicaciones">Gestión de Publicaciones</a></li>
                    <?php endif; ?>
                    <li class="list-group-item"><a href="logout.php" class="text-danger">Cerrar sesión</a></li>
                </ul>
            </div>
            <div class="col-md-9" id="content">
                <?php include_once '../admin/dashboard.php'; ?>
            </div>
        </div>
    </div>

    <!-- Ruta corregida para el JavaScript de Bootstrap -->
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            // Manejar el clic en los enlaces de la barra lateral
            $('.nav-link').on('click', function(e) {
                e.preventDefault(); // Prevenir el comportamiento por defecto

                var section = $(this).data('section'); // Obtener el valor del data-section

                // Realizar la solicitud AJAX
                $.ajax({
                    url: '../admin/' + section + '.php', // URL del archivo a cargar
                    method: 'GET',
                    dataType: 'html', // Esperar una respuesta en formato HTML
                    success: function(data) {
                        $('#content').html(data); // Cargar el contenido en el div
                    },
                    error: function() {
                        $('#content').html('<h3>Error al cargar la sección.</h3>');
                    }
                });
            });
        });
    </script>
</body>
</html>
