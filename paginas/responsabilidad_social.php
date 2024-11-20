<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsabilidad Social y Proyectos Comunitarios</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    
    <style>
        
        h1, .text-primary {
            
            color: #0064A6 !important;
        }
        h1.display-4 {
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.3);
        }
        .bg-light, .card, .carousel-item {
            background-color: #f8f9fa !important;
        }
        .carousel-img {
            max-height: 500px;
            object-fit: cover;
            border-radius: 8px;
        }
        .carousel-caption {
            background-color: rgba(0, 0, 0, 0.5) !important;
            bottom: 1.5rem;
            left: 50%;
            transform: translateX(-50%);
            width: 80%;
            padding: 1rem;
            border-radius: 8px;
        }
        .responsabilidad-social {
    padding: 5rem 2rem;
    background: linear-gradient(to bottom right, #f8f9fa, #ffffff);
    overflow: hidden;
}

.content-wrapper {
    max-width: 1400px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    gap: 4rem;
}

.text-content {
    flex: 1;
    padding-right: 2rem;
}

.display-4 {
    color: #2c3e50;
    font-size: 2.5rem;
    margin-bottom: 1.5rem;
    line-height: 1.2;
}

.text-divider {
    width: 80px;
    height: 4px;
    background: linear-gradient(to right, #3498db, #2ecc71);
    margin: 1.5rem 0;
    border-radius: 2px;
}

.lead {
    color: #596775;
    font-size: 1.1rem;
    line-height: 1.8;
    margin-top: 1.5rem;
}

.image-content {
    flex: 1;
    position: relative;
}

.feature-image {
    width: 100%;
    height: auto;
    border-radius: 12px;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out;
}

.feature-image:hover {
    transform: translateY(-10px);
}

/* Media queries para responsividad */
@media (max-width: 992px) {
    .content-wrapper {
        flex-direction: column;
        gap: 2rem;
    }

    .text-content {
        padding-right: 0;
        text-align: center;
    }

    .text-divider {
        margin: 1.5rem auto;
    }

    .image-content {
        width: 100%;
        max-width: 600px;
        margin: 0 auto;
    }
}

@media (max-width: 768px) {
    .responsabilidad-social {
        padding: 3rem 1rem;
    }

    .display-4 {
        font-size: 2rem;
    }

    .lead {
        font-size: 1rem;
    }
}

@media (max-width: 480px) {
    .responsabilidad-social {
        padding: 2rem 0.5rem;
    }

    .display-4 {
        font-size: 1.75rem;
    }
}








/* Estilos generales de la sección */
.projects-section {
    padding: 4rem 2rem;
    background-color: #f8f9fa;
}

.section-title {
    text-align: center;
    color: #0d6efd;
    font-size: 2.5rem;
    font-weight: bold;
    margin-bottom: 3rem;
    text-transform: uppercase;
    letter-spacing: 1px;
}

/* Contenedor de las cards */
.projects-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    max-width: 1200px;
    margin: 0 auto;
}

/* Estilos de las cards */
.project-card {
    background: white;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.project-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

/* Imagen de la card */
.card-image {
    width: 100%;
    height: 250px;
    overflow: hidden;
}

.card-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.project-card:hover .card-image img {
    transform: scale(1.1);
}

/* Contenido de la card */
.card-content {
    padding: 1.5rem;
}

.card-content h3 {
    color: #2c3e50;
    font-size: 1.4rem;
    font-weight: bold;
    margin-bottom: 1rem;
}

.card-content p {
    color: #666;
    font-size: 1rem;
    line-height: 1.6;
    margin-bottom: 1.5rem;
}

/* Botón de la card */
.card-button {
    background-color: #0d6efd;
    color: white;
    border: none;
    padding: 0.8rem 1.5rem;
    border-radius: 25px;
    font-weight: 500;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.card-button:hover {
    background-color: #0b5ed7;
}

/* Responsive */
@media (max-width: 768px) {
    .section-title {
        font-size: 2rem;
    }

    .projects-container {
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 1.5rem;
    }

    .card-content {
        padding: 1rem;
    }

    .card-content h3 {
        font-size: 1.2rem;
    }
}

@media (max-width: 576px) {
    .projects-section {
        padding: 2rem 1rem;
    }

    .card-image {
        height: 200px;
    }
}
















.my-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }

  .text-center {
    text-align: center !important;
  }

  .text-primary {
    color: #007bff !important;
  }

  .fw-bold {
    font-weight: 700 !important;
  }

  .mt-3 {
    margin-top: 1rem !important;
  }

  .mb-3 {
    margin-bottom: 1rem !important;
  }

  .form-control {
    display: block;
    width: 100%;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  }

  .btn-primary {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    border-radius: 0.25rem;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  }



    </style>
</head>
<body>
<header class="header-inicio header-social">
        <?php include '../includes/header-secundario.php'; ?>
    </header>

    <main class="container mt-5">
        <!-- Sección de Responsabilidad Social -->
<section class="responsabilidad-social">
    <div class="content-wrapper">
        <div class="text-content" data-aos="fade-right">
            <h1 class="display-4 fw-bold">Responsabilidad Social y Proyectos Comunitarios</h1>
            <div class="text-divider"></div>
            <p class="lead">
                En nuestro colegio, creemos en la importancia de contribuir al desarrollo de la comunidad de Junín.
                A través de diversos proyectos y actividades, buscamos involucrar a nuestros estudiantes y a la comunidad
                en la construcción de un entorno más sostenible y solidario.
            </p>
        </div>
        <div class="image-content" data-aos="fade-left">
            <img src="../assets/images/responsabilidad_social.jpg" class="feature-image" alt="Imagen de responsabilidad social">
        </div>
    </div>
</section>

<section class="projects-section">
    <h2 class="section-title">Proyectos Actuales</h2>
    
    <div class="projects-container">
        <!-- Card 1 -->
        <div class="project-card">
            <div class="card-image">
                <img src="../assets/images/limpieza_ambiental.jpg" alt="Limpieza Ambiental">
            </div>
            <div class="card-content">
                <h3>Proyecto de Limpieza Ambiental</h3>
                <p>Iniciativa de recolección de residuos en áreas públicas para mantener un entorno limpio y saludable.</p>
                <button class="card-button">Ver más</button>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="project-card">
            <div class="card-image">
                <img src="../assets/images/reciclaje.jpg" alt="Educación en Reciclaje">
            </div>
            <div class="card-content">
                <h3>Educación en Reciclaje</h3>
                <p>Talleres educativos sobre reciclaje y sostenibilidad para reducir residuos y mejorar el entorno.</p>
                <button class="card-button">Ver más</button>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="project-card">
            <div class="card-image">
                <img src="../assets/images/apoyo_escolar.jpg" alt="Apoyo Escolar">
            </div>
            <div class="card-content">
                <h3>Apoyo Escolar Comunitario</h3>
                <p>Programa de tutoría para estudiantes de bajos recursos en la comunidad de Junín.</p>
                <button class="card-button">Ver más</button>
            </div>
        </div>
    </div>
</section>
    <section class="my-5 text-center">
    <h2 class="text-primary fw-bold" data-aos="fade-up">¿Cómo Puedes Involucrarte?</h2>
    <p data-aos="fade-up" data-aos-delay="100">
        Invitamos a padres, estudiantes y miembros de la comunidad a participar en nuestros proyectos. Puedes inscribirte en actividades específicas.
    </p>
    <form id="involucrateForm" class="mt-3" data-aos="fade-up" data-aos-delay="200">
        <div class="mb-3">
        <input type="text" class="form-control" name="nombre" placeholder="Nombre completo" required>
        </div>
        <div class="mb-3">
        <input type="email" class="form-control" name="email" placeholder="Correo electrónico" required>
        </div>
        <button type="submit" class="btn btn-primary">Inscribirse</button>
    </form>
    <div id="responseMessage" class="mt-3" style="display: none;"></div>
    </section>

 
    </main>

    <footer>
        <?php include '../includes/footer.php'; ?>
    </footer>

    <!-- Bootstrap y AOS Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
  const form = document.getElementById('involucrateForm');
  const responseMessage = document.getElementById('responseMessage');

  form.addEventListener('submit', async (event) => {
    event.preventDefault();

    const formData = new FormData(event.target);
    try {
      const response = await fetch('/api/involucrarse', {
        method: 'POST',
        body: formData
      });
      const data = await response.json();
      responseMessage.textContent = data.message;
      responseMessage.style.display = 'block';
      form.reset();
    } catch (error) {
      responseMessage.textContent = 'Error al enviar el formulario.';
      responseMessage.style.display = 'block';
    }
  });
</script>
    <script>
        // Inicializar AOS
        AOS.init();

        // Enviar formulario con AJAX
        $('#involucrateForm').submit(function(event) {
            event.preventDefault(); // Evitar el envío tradicional del formulario
            const formData = $(this).serialize();

            $.ajax({
                url: 'procesar_formulario.php', // Archivo PHP para procesar la inscripción
                type: 'POST',
                data: formData,
                success: function(response) {
                    $('#responseMessage').html(response).fadeIn();
                    $('#involucrateForm')[0].reset();
                },
                error: function() {
                    $('#responseMessage').html('<p class="text-danger">Hubo un error al enviar el formulario. Inténtalo de nuevo.</p>').fadeIn();
                }
            });
        });
    </script>
</body>
</html>