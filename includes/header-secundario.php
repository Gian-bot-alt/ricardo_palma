<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo ?? 'Colegio Ricardo Palma'; ?></title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <!-- Tu archivo CSS personalizado -->
    <link rel="stylesheet" href="../assets/css/estilos.css">

    <style>
    .header-inicio {
        background-color: #254978 !important; /* Fondo gris claro */
        position: fixed;
        width: 100%;
        top: 0;
        z-index: 1000;
    }

    .navbar {
        transition: all 0.5s ease;
        padding: 10px 0;
    }

    .navbar .nav-item .nav-link {
        color: #fff !important; /* Texto negro siempre */
    }

    .navbar .btn-outline-primary {
        color: #fff; /* Botón negro */
        border-color: #fff;
    }

    /* Mantener el logo sin cambios */
    .navbar-brand img {
        filter: none !important;
        -webkit-filter: none !important;
        height: 45px; /* Ajusta el tamaño según prefieras */
        margin-right: 10px;
        transition: all 0.5s ease;
    }

    /* Botón de menú móvil */
    .navbar-toggler {
        border-color: rgba(0, 0, 0, 0.5);
        padding: 4px 8px;
    }

    .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(0, 0, 0, 0.7)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        width: 1.5em;
        height: 1.5em;
    }

    /* Menú desplegable en móviles */
    @media (max-width: 992px) {
        .navbar-collapse {
            background-color: #254978; /* Fondo gris claro en móviles */
            padding: 0.5rem;
            border-radius: 8px;
            margin-top: 0.5rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .navbar-collapse .nav-link {
            color: #000 !important; /* Enlaces negros */
        }
    }
</style>

</head>

<body>
<header id="header" class="header-inicio"> 
    <nav class="navbar navbar-expand-lg navbar-light inicial">
        <div class="container">
            <!-- Agregamos la clase preserve-color al logo -->
            <a class="navbar-brand preserve-color" href="/index.php">
                <img id="logo" src="../assets/images/logo.png" alt="Logo Colegio" style="filter: none !important;">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="../paginas/inicio.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../paginas/nosotros.php">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../paginas/etapas_academicas.php">Etapas Académicas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../paginas/responsabilidad_social.php">Responsabilidad Social</a>
                    </li>
                    
                </ul>
                <a href="../paginas/contacto.php" class="btn btn-outline-primary ms-lg-3">Contáctanos</a>
            </div>
        </div>
    </nav>

    <!-- Scripts de Bootstrap -->
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Script para el efecto scroll -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navbar = document.querySelector('.navbar');
            
            function updateNavbar() {
                if (window.scrollY > 50) {
                    navbar.classList.remove('inicial');
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.add('inicial');
                    navbar.classList.remove('scrolled');
                }
            }

            // Ejecutar al cargar la página
            updateNavbar();
            
            // Ejecutar al hacer scroll
            window.addEventListener('scroll', updateNavbar);
        });
    </script>
</header>