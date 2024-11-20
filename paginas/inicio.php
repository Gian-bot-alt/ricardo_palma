<?php
$titulo = 'Inicio';
include_once '../includes/header.php';

$slides = [
    [
        'img' => '../assets/images/imagen1.jpeg',
        'title' => 'Excelencia Académica',
        'desc' => 'Formando líderes del mañana con educación integral y valores.',
        'btn' => 'Etapas Académicas',
        'link' => 'etapas_academicas.php'
    ],
    [
        'img' => '../assets/images/imagen2.jpg',
        'title' => 'Infraestructura Moderna',
        'desc' => 'Espacios diseñados para potenciar el aprendizaje y desarrollo.',
        'btn' => 'Contáctanos',
        'link' => 'contacto.php'
    ],
    [
        'img' => '../assets/images/imagen1.jpeg',
        'title' => 'Comunidad Educativa',
        'desc' => 'Un ambiente acogedor donde cada estudiante alcanza su máximo potencial.',
        'btn' => 'Sobre Nosotros',
        'link' => 'nosotros.php'
    ]
];
?>

<style>
    
</style>

<div class="container-fluid p-0">
    <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <?php foreach ($slides as $index => $slide): ?>
                <button type="button" 
                        data-bs-target="#mainCarousel" 
                        data-bs-slide-to="<?= $index ?>" 
                        class="<?= $index === 0 ? 'active' : '' ?>"
                        aria-current="<?= $index === 0 ? 'true' : 'false' ?>" 
                        aria-label="Slide <?= $index + 1 ?>">
                </button>
            <?php endforeach; ?>
        </div>

        <div class="carousel-inner">
            <?php foreach ($slides as $index => $slide): ?>
                <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>" 
                     style="background-image: url('<?= htmlspecialchars($slide['img']) ?>')">
                    <div class="carousel-content-wrapper">
                        <div class="carousel-caption">
                            <h2><?= htmlspecialchars($slide['title']) ?></h2>
                            <p><?= htmlspecialchars($slide['desc']) ?></p>
                            <a href="<?= htmlspecialchars($slide['link']) ?>" 
                               class="btn">
                                <?= htmlspecialchars($slide['btn']) ?>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const carousel = new bootstrap.Carousel(document.getElementById('mainCarousel'), {
        interval: 6000,
        pause: 'hover',
        wrap: true,
        keyboard: true
    });

    // Mejorar la interactividad de los controles
    document.querySelectorAll('[data-bs-slide]').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const slideDir = this.getAttribute('data-bs-slide');
            carousel[slideDir === 'next' ? 'next' : 'prev']();
        });
    });

    // Añadir efecto de pausa al hacer hover
    const carouselElement = document.getElementById('mainCarousel');
    carouselElement.addEventListener('mouseenter', () => {
        carousel.pause();
    });
    carouselElement.addEventListener('mouseleave', () => {
        carousel.cycle();
    });
});
</script>



    <!-- Barra de Anuncios -->
    <div class="announcement-bar">
        <div class="announcement-slider">
            <div class="announcement-item">📢 Inscripciones abiertas para el ciclo 2024-2025</div>
            <div class="announcement-item">🎓 Próxima ceremonia de graduación - 15 de julio</div>
            <div class="announcement-item">🏆 Ganadores del concurso estatal de matemáticas</div>
        </div>
    </div>




<!-- Comunidad -->
<section class="community-section">
    <div class="container">
        <div class="community-header text-center">
            <h1>¿Por qué pertenecer al Complejo Educativo Ricardo Palma?</h1>
            <p class="lead">Experiencia y excelencia al servicio de la educación en el puerto de Acapulco.</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="feature-card">
                    <i class="fas fa-book"></i>
                    <h5>Valores</h5>
                    <p>En nuestra institución se promueven los valores humanos. Educamos con amor y valores.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-card">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <h5>Capacitación a Docentes</h5>
                    <p>Nuestro personal se capacita constantemente para elevar su potencial.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-card">
                    <i class="fas fa-user-graduate"></i>
                    <h5>Filosofía antigua</h5>
                    <p>El espíritu del gran libertador de América presente en el siglo XXI.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="feature-card">
                    <i class="fas fa-map-marker-alt"></i>
                    <h5>Nuestras Ubicaciones</h5>
                    <p>Contamos con un Campus CSB cerca de ti.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="feature-card">
                    <i class="fas fa-paint-brush"></i>
                    <h5>Actividades</h5>
                    <p>Realizamos actividades artísticas, deportivas y culturales.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="500">
                <div class="feature-card">
                    <i class="fas fa-globe"></i>
                    <h5>Innovación Educativa</h5>
                    <p>Implementamos las últimas tendencias en educación y tecnología.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .academic-stages {
        background-color: #f8f9fa;
    }

    .card-stage {
        position: relative;
        overflow: hidden;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .card-stage img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .card-stage .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 100, 166, 0.7);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        color: #fff;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .card-stage:hover {
        transform: translateY(-5px);
    }

    .card-stage:hover .overlay {
        opacity: 1;
    }

    .card-stage .overlay h3 {
        font-size: 1.5rem;
        font-weight: bold;
        margin-bottom: 0.5rem;
    }

    .card-stage .overlay p {
        font-size: 1.2rem;
        margin-bottom: 1rem;
    }

    .card-stage .overlay .btn {
        background-color: #0064A6;
        border-color: #0064A6;
    }

    .card-stage .overlay .btn:hover {
        background-color: #004D80;
        border-color: #004D80;
    }
</style>





<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: system-ui, -apple-system, sans-serif;
        }

        .section-title {
            color: #254978;
            font-size: 2.5rem;
            margin: 2rem 0;
            padding: 0 1rem;
        }

        .stages-container {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
            padding: 1rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .stage-card {
            flex: 1;
            min-width: 300px;
            position: relative;
            border-radius: 1rem;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .stage-card:hover {
            transform: translateY(-5px);
        }

        .stage-image {
            width: 100%;
            height: 500px;
            object-fit: cover;
            display: block;
        }

        .stage-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 2rem;
            background: linear-gradient(transparent, rgba(37, 73, 120, 0.9));

            color: white;
        }

        .stage-title {
            font-size: 2rem;
            margin-bottom: 0.5rem;
        }

        .stage-age {
            font-size: 1.2rem;
            margin-bottom: 1rem;
        }

        .more-info-btn {
            background-color: white;
            color: #d12421;
            border: none;
            padding: 0.8rem 1.5rem;
            border-radius: 2rem;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .more-info-btn:hover {
            background-color: #f0f0f0;
        }
    </style>

    <div class="section-title text-center">
                    <h2>Etapas Académicas</h2>
                </div>  
    <div class="stages-container">
        <!-- Preescolar -->
        <div class="stage-card">
            <img src="../assets/images/inicial.jpg" alt="Preescolar" class="stage-image">
            <div class="stage-overlay">
                <h2 class="stage-title">Inicial</h2>
                <p class="stage-age">1 - 6 años</p>
                <button class="more-info-btn" onclick="showMore('preescolar')">MÁS INFORMACIÓN</button>
            </div>
        </div>

        <!-- Primaria -->
        <div class="stage-card">
            <img src="../assets/images/primaria.jpg" alt="Primaria" class="stage-image">
            <div class="stage-overlay">
                <h2 class="stage-title">Primaria</h2>
                <p class="stage-age">6 - 12 años</p>
                <button class="more-info-btn" onclick="showMore('primaria')">MÁS INFORMACIÓN</button>
            </div>
        </div>

        <!-- Secundaria -->
        <div class="stage-card">
            <img src="../assets/images/secundaria.jpg" alt="Secundaria" class="stage-image">
            <div class="stage-overlay">
                <h2 class="stage-title">Secundaria</h2>
                <p class="stage-age">12 - 16 años</p>
                <button class="more-info-btn" onclick="showMore('secundaria')">MÁS INFORMACIÓN</button>
            </div>
        </div>
    </div>

    <script>
        function showMore(stage) {
            // Aquí puedes agregar la lógica para mostrar más información
            // Por ejemplo, redirigir a una página específica o mostrar un modal
            console.log(`Mostrando más información sobre: ${stage}`);
            alert(`Más información sobre ${stage}`);
        }
    </script>




















    <!-- Estadísticas -->
    <section class="stats-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-4" data-aos="fade-up">
                    <div class="stat-box">
                        <i class="fas fa-user-friends"></i>
                        <h2 class="count" data-target="30">0</h2>
                        <p>Profesores </p>
                    </div>
                </div>
                <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="stat-box">
                        <i class="fas fa-calendar-alt"></i>
                        <h2 class="count" data-target="24">0</h2>
                        <p>Años en funcionamiento</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="stat-box">
                        <i class="fas fa-users"></i>
                        <h2 class="count" data-target="240">0</h2>
                        <p>Alumnos</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="stat-box">
                        <i class="fas fa-flask"></i>
                        <h2 class="count" data-target="240">0</h2>
                        <p>Alumnos</p>
                    </div>
                </div>
            </div>
        </div>
    </section>






















    <!-- Próximos Eventos -->
    <section class="events-section">
        <div class="container">
            
            <div class="section-title text-center">
                <h2>Próximos Eventos</h2>
            </div>
            <div class="row">
                <div class="col-md-4" data-aos="fade-up">
                    <div class="event-card">
                        <div class="event-date">
                            <h3>15</h3>
                            <p>JUL</p>
                        </div>
                        <div class="card-body">
                            <h5>Ceremonia de Graduación de 6to primaria</h5>
                            <p>Auditorio Principal - 10:00 AM</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="event-card">
                        <div class="event-date">
                            <h3>20</h3>
                            <p>JUL</p>
                        </div>
                        <div class="card-body">
                            <h5>Feria de Ciencias</h5>
                            <p>Patio - 9:00 AM</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="event-card">
                        <div class="event-date">
                            <h3>25</h3>
                            <p>JUL</p>
                        </div>
                        <div class="card-body">
                            <h5>Torneo Deportivo</h5>
                            <p>Canchas Deportivas - 8:00 AM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Galería -->
    <section class="gallery-section">
        <div class="container">
            
            <div class="section-title text-center">
                <h2>Nuestra Galería</h2>
            </div>
            <div class="row">
                <div class="col-md-4" data-aos="zoom-in">
                    <div class="gallery-item">
                        <img src="../assets/images/galeria/galeria1.jpg" alt="Imagen 1">
                        <div class="gallery-overlay">
                            <i class="fas fa-search-plus fa-2x text-white"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="gallery-item">
                        <img src="../assets/images/galeria/galeria2.jpg" alt="Imagen 2">
                        <div class="gallery-overlay">
                            <i class="fas fa-search-plus fa-2x text-white"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="gallery-item">
                        <img src="../assets/images/galeria/galeria3.jpg" alt="Imagen 3">
                        <div class="gallery-overlay">
                            <i class="fas fa-search-plus fa-2x text-white"></i>
                        </div>
                    </div>
                </div>



                <div class="col-md-4" data-aos="zoom-in">
                    <div class="gallery-item">
                        <img src="../assets/images/galeria/galeria4.jpg" alt="Imagen 1">
                        <div class="gallery-overlay">
                            <i class="fas fa-search-plus fa-2x text-white"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="gallery-item">
                        <img src="../assets/images/galeria/galeria5.jpg" alt="Imagen 2">
                        <div class="gallery-overlay">
                            <i class="fas fa-search-plus fa-2x text-white"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="gallery-item">
                        <img src="../assets/images/galeria/galeria6.jpg" alt="Imagen 3">
                        <div class="gallery-overlay">
                            <i class="fas fa-search-plus fa-2x text-white"></i>
                        </div>
                    </div>
                </div>



                <div class="col-md-4" data-aos="zoom-in">
                    <div class="gallery-item">
                        <img src="../assets/images/galeria/galeria7.jpg" alt="Imagen 1">
                        <div class="gallery-overlay">
                            <i class="fas fa-search-plus fa-2x text-white"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="gallery-item">
                        <img src="../assets/images/galeria/galeria8.jpg" alt="Imagen 2">
                        <div class="gallery-overlay">
                            <i class="fas fa-search-plus fa-2x text-white"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="gallery-item">
                        <img src="../assets/images/galeria/galeria2.jpg" alt="Imagen 3">
                        <div class="gallery-overlay">
                            <i class="fas fa-search-plus fa-2x text-white"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog -->
    <section class="blog-section">
        <div class="container">
            
            <div class="section-title text-center">
                <h2>Últimas Noticias</h2>
            </div>
            <div class="row">
                <div class="col-md-4" data-aos="fade-up">
                    <div class="blog-card">
                        <img src="../assets/images/noticias/noticia1.jpg" class="blog-image" alt="Blog 1">
                        <div class="card-body">
                            <h5>Exitosa Feria de Ciencias</h5>
                            <p class="text-muted">15 Junio, 2024</p>
                            <p>Nuestros estudiantes demostraron su talento...</p>
                            <a href="#" class="btn btn-outline-primary">Leer más</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="blog-card">
                        <img src="../assets/images/noticias/noticia2.jpg" class="blog-image" alt="Blog 2">
                        <div class="card-body">
                            <h5>Logros Deportivos</h5>
                            <p class="text-muted">10 Junio, 2024</p>
                            <p>El equipo de fútbol ganó el campeonato...</p>
                            <a href="#" class="btn btn-outline-primary">Leer más</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="blog-card">
                        <img src="../assets/images/noticias/noticia3.jpg" class="blog-image" alt="Blog 3">
                        <div class="card-body">
                            <h5>Nuevas Instalaciones</h5>
                            <p class="text-muted">5 Junio, 2024</p>
                            <p>Inauguramos nuestro nuevo laboratorio...</p>
                            <a href="#" class="btn btn-outline-primary">Leer más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonios -->
    <section class="testimonials-section">
        <div class="container">
            <h2 class="text-center mb-5">Lo que dicen nuestras familias</h2>
            <div class="row">
                <div class="col-md-4" data-aos="fade-right">
                    <div class="testimonial-card">
                        <img src="../assets/images/testimonios/testimonio1.png" class="testimonial-image" alt="Testimonio 1">
                        <p>"Excelente educación y valores. Mi hijo ha crecido mucho académicamente."</p>
                        <h5>María González</h5>
                        <p class="text-muted">Madre de familia</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up">
                    <div class="testimonial-card">
                        <img src="../assets/images/testimonios/testimonio1.png" class="testimonial-image" alt="Testimonio 2">
                        <p>"El ambiente escolar es increíble. Los maestros son muy profesionales."</p>
                        <h5>Carlos Pérez</h5>
                        <p class="text-muted">Padre de familia</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-left">
                    <div class="testimonial-card">
                        <img src="../assets/images/testimonios/testimonio1.png" class="testimonial-image" alt="Testimonio 3">
                        <p>"Las actividades extracurriculares son muy enriquecedoras."</p>
                        <h5>Ana Martínez</h5>
                        <p class="text-muted">Madre de familia</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

















    <section class="contact-section bg-light py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-5">
                <div class="contact-info bg-white p-4 rounded shadow-sm">
                    <h2 class="h3 mb-4 text-primary">Información de Contacto</h2>
                    
                    <div class="contact-info-item mb-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-map-marker-alt text-primary me-3 fs-4"></i>
                            <div>
                                <h5 class="mb-1">Dirección</h5>
                                <p class="text-muted mb-0">Av. Mariscal Castilla N°1235, San Agustin de Cajas</p>
                            </div>
                        </div>
                    </div>

                    <div class="contact-info-item mb-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-phone text-primary me-3 fs-4"></i>
                            <div>
                                <h5 class="mb-1">Teléfono</h5>
                                <p class="text-muted mb-0">
                                    <a href="tel:+1234567890" class="text-decoration-none text-muted">+51 987 654 212</a>
                                </p>
                                <p class="text-muted mb-0">
                                    <a href="tel:+1234567800" class="text-decoration-none text-muted">+51 987 654 452</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="contact-info-item mb-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-envelope text-primary me-3 fs-4"></i>
                            <div>
                                <h5 class="mb-1">Email</h5>
                                <p class="text-muted mb-0">
                                    <a href="mailto:info@colegio.edu" class="text-decoration-none text-muted">info@ricardopalma.edu.pe</a>
                                </p>
                                <p class="text-muted mb-0">
                                    <a href="mailto:admisiones@colegio.edu" class="text-decoration-none text-muted">admisiones@colegio.edu.pe</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-clock text-primary me-3 fs-4"></i>
                            <div>
                                <h5 class="mb-1">Horario de Atención</h5>
                                <p class="text-muted mb-0">Lunes a Viernes: 8:30 AM - 1:30 PM</p>
                                <p class="text-muted mb-0">Sábados: NO HAY ATENCIÓN</p>
                                <p class="text-muted mb-0">Domingos: NO HAY ATENCIÓN</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="contact-form bg-white p-4 rounded shadow-sm">
                    <h2 class="h3 mb-4 text-primary">Envíanos un Mensaje</h2>
                    <form id="contactForm" novalidate>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="nombreInput" class="form-label visually-hidden">Nombre</label>
                                <input type="text" id="nombreInput" class="form-control" placeholder="Nombre" required>
                                <div class="invalid-feedback">Por favor, ingrese su nombre.</div>
                            </div>
                            <div class="col-md-6">
                                <label for="emailInput" class="form-label visually-hidden">Email</label>
                                <input type="email" id="emailInput" class="form-control" placeholder="Email" required>
                                <div class="invalid-feedback">Por favor, ingrese un email válido.</div>
                            </div>
                            <div class="col-12">
                                <label for="asuntoInput" class="form-label visually-hidden">Asunto</label>
                                <input type="text" id="asuntoInput" class="form-control" placeholder="Asunto">
                            </div>
                            <div class="col-12">
                                <label for="mensajeTextarea" class="form-label visually-hidden">Mensaje</label>
                                <textarea id="mensajeTextarea" class="form-control" placeholder="Mensaje" rows="4" required></textarea>
                                <div class="invalid-feedback">Por favor, escriba su mensaje.</div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary w-100">Enviar Mensaje</button>
                            </div>
                        </div>
                    </form>

                    <div id="successMessage" class="alert alert-success mt-3 d-none">
                        ¡Mensaje enviado con éxito! Nos pondremos en contacto pronto.
                    </div>
                </div>

                <div class="map-container mt-4 rounded overflow-hidden shadow-sm">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15610.286718003747!2d-75.2499762!3d-12.0041116!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x910ebe78444f3cf3%3A0x256f7c16eeb215b5!2sColegio%20%22Ricardo%20Palma%22!5e0!3m2!1ses-419!2spe!4v1732130601570!5m2!1ses-419!2spe" 
                        width="100%" 
                        height="400" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contactForm');
    const successMessage = document.getElementById('successMessage');

    form.addEventListener('submit', function(event) {
        event.preventDefault();
        event.stopPropagation();

        if (form.checkValidity()) {
            // Here you would typically add AJAX form submission
            successMessage.classList.remove('d-none');
            form.reset();
        }

        form.classList.add('was-validated');
    });
});
</script>
   

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            // Aquí iría la lógica de envío del formulario
            
            // Mostrar mensaje de éxito
            document.querySelector('.success-message').style.display = 'block';
            
            // Limpiar el formulario
            this.reset();
            
            // Ocultar mensaje después de 5 segundos
            setTimeout(() => {
                document.querySelector('.success-message').style.display = 'none';
            }, 5000);
        });
    </script>
























<!-- Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    // Inicializar AOS
    AOS.init({
        duration: 800,
        once: true
    });

    // Animación de contador para estadísticas
    const counters = document.querySelectorAll('.count');
    counters.forEach(counter => {
        const target = +counter.getAttribute('data-target');
        const increment = target / 200;
        
        const updateCounter = () => {
            const count = +counter.innerText;
            if (count < target) {
                counter.innerText = Math.ceil(count + increment);
                setTimeout(updateCounter, 1);
            } else {
                counter.innerText = target;
            }
        };
        
        updateCounter();
    });
</script>






<div class="nav-bottom">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <div class="popup-whatsapp fadeIn">
        <div class="content-whatsapp -top">
            <button type="button" class="closePopup">
                <i class="material-icons icon-font-color">close</i>
            </button>
            <p>
                <img src="../assets/images/logo-circular.png" width="50"> Hola, ¿en qué podemos ayudarle?
            </p>
        </div>
        <div class="content-whatsapp -bottom">
            <input class="whats-input" id="whats-in" type="text" placeholder="Enviar mensaje..." />
            <button class="send-msPopup" id="send-btn" type="button">
                <i class="material-icons icon-font-color--black">send</i>
            </button>
        </div>
    </div>
    <button type="button" id="whats-openPopup" class="whatsapp-button">
        <div class="float">
            <i class="fab fa-whatsapp my-float"></i>
        </div>
    </button>
    <div class="circle-anime"></div>
</div>

<script>
    // Número de teléfono en formato internacional (sin "+" ni espacios)
    const phoneNumber = "51987654321"; // Ejemplo para México

    // Evento al presionar "Enter" en el campo de entrada
    document.getElementById("whats-in").addEventListener("keypress", function(event) {
        if (event.key === "Enter") {  // Si se presiona "Enter"
            event.preventDefault();  // Evita el comportamiento predeterminado
            sendMessage();  // Llama a la función de envío
        }
    });

    // Evento al hacer clic en el botón de enviar
    document.getElementById("send-btn").addEventListener("click", sendMessage);

    // Función para enviar el mensaje a través de WhatsApp
    function sendMessage() {
        const message = document.getElementById("whats-in").value;
        if (message.trim() !== "") {  // Verifica que el mensaje no esté vacío
            const encodedMessage = encodeURIComponent(message); // Codifica el mensaje
            const whatsappUrl = `https://api.whatsapp.com/send?phone=${phoneNumber}&text=${encodedMessage}`;
            window.open(whatsappUrl, "_blank");  // Abre WhatsApp en una nueva pestaña
            document.getElementById("whats-in").value = "";  // Limpia el campo de entrada
        }
    }
</script>



<style>
    
    @import url("https://fonts.googleapis.com/css?family=Roboto");
/* offset-x > | offset-y ^| blur-radius | spread-radius | color */
@keyframes pulse {
  0% {
    transform: scale(1, 1);
  }
  50% {
    opacity: 0.3;
  }
  100% {
    transform: scale(1.45);
    opacity: 0;
  }
}
.pulse {
  -webkit-animation-name: pulse;
  animation-name: pulse;
}

.nav-bottom {
  display: flex;
  flex-direction: row;
  justify-content: flex-end;
  align-content: flex-end;
  width: auto;
  height: auto;
  position: fixed;
  z-index: 8;
  bottom: 0px;
  right: 0px;
  padding: 5px;
  margin: 0px;
}
@media (max-width: 360px) {
  .nav-bottom {
    width: 320px;
  }
}

.whatsapp-button {
  display: flex;
  justify-content: center;
  align-content: center;
  width: 60px;
  height: 60px;
  z-index: 8;
  transition: .3s;
  margin: 10px;
  padding: 7px;
  border: none;
  outline: none;
  cursor: pointer;
  border-radius: 50%;
  background-color: white;
  /* offset-x > | offset-y ^| blur-radius | spread-radius | color */
  -webkit-box-shadow: 1px 1px 6px 0px rgba(68, 68, 68, 0.705);
  -moz-box-shadow: 1px 1px 6px 0px rgba(68, 68, 68, 0.705);
  box-shadow: 1px 1px 6px 0px rgba(68, 68, 68, 0.705);
}

.circle-anime {
  display: flex;
  position: absolute;
  justify-content: center;
  align-content: center;
  width: 60px;
  height: 60px;
  top: 15px;
  right: 15px;
  border-radius: 50%;
  transition: .3s;
  background-color: #77bb4a;
  animation: pulse 1.2s 4.0s ease 4;
}

.popup-whatsapp {
  display: none;
  position: absolute;
  flex-direction: column;
  justify-content: flex-start;
  align-items: flex-start;
  width: auto;
  height: auto;
  padding: 10px;
  bottom: 85px;
  right: 6px;
  transition: .5s;
  border-radius: 10px;
  background-color: white;
  /* offset-x > | offset-y ^| blur-radius | spread-radius | color */
  -webkit-box-shadow: 2px 1px 6px 0px rgba(68, 68, 68, 0.705);
  -moz-box-shadow: 2px 1px 6px 0px rgba(68, 68, 68, 0.705);
  box-shadow: 2px 1px 6px 0px rgba(68, 68, 68, 0.705);
  animation: slideInRight .6s 0.0s both;
}
.popup-whatsapp > div {
  margin: 5px;
}
@media (max-width: 680px) {
  .popup-whatsapp p {
    font-size: 0.9em;
  }
}
.popup-whatsapp > .content-whatsapp.-top {
  display: flex;
  flex-direction: column;
}
.popup-whatsapp > .content-whatsapp.-top p {
  color: #585858;
  font-family: 'Roboto';
  font-weight: 400;
  font-size: 1.0em;
}
.popup-whatsapp > .content-whatsapp.-bottom {
  display: flex;
  flex-direction: row;
}

.closePopup {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 28px;
  height: 28px;
  margin: 0px 0px 15px 0px;
  border-radius: 50%;
  border: none;
  outline: none;
  cursor: pointer;
  background-color: #4cc370;
  -webkit-box-shadow: 1px 1px 2px 0px rgba(68, 68, 68, 0.705);
  -moz-box-shadow: 1px 1px 2px 0px rgba(68, 68, 68, 0.705);
  box-shadow: 1px 1px 2px 0px rgba(68, 68, 68, 0.705);
}
.closePopup:hover {
  background-color: #3d9e5a;
  transition: .3s;
}

.send-msPopup {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background-color: #ffffff;
  margin: 0px 0px 0px 5px;
  border: none;
  outline: none;
  cursor: pointer;
  -webkit-box-shadow: 1px 1px 2px 0px rgba(68, 68, 68, 0.705);
  -moz-box-shadow: 1px 1px 2px 0px rgba(68, 68, 68, 0.705);
  box-shadow: 1px 1px 2px 0px rgba(68, 68, 68, 0.705);
}
.send-msPopup:hover {
  background-color: #f8f8f8;
  transition: .3s;
}

.is-active-whatsapp-popup {
  display: flex;
  animation: slideInRight .6s 0.0s both;
  background-color: #fafafa;
}

input.whats-input[type=text] {
  width: 250px;
  height: 40px;
  box-sizing: border-box;
  border: 0px solid #ffffff;
  border-radius: 20px;
  font-size: 1em;
  background-color: #ffffff;
  padding: 0px 0px 0px 10px;
  -webkit-transition: width 0.3s ease-in-out;
  transition: width 0.3s ease-in-out;
  outline: none;
  transition: .3s;
}
@media (max-width: 420px) {
  input.whats-input[type=text] {
    width: 225px;
  }
}
input.whats-input::placeholder {
  /* Most modern browsers support this now. */
  color: rgba(68, 68, 68, 0.705);
  opacity: 1;
}
input.whats-input[type=text]:focus {
  background-color: #f8f8f8;
  -webkit-transition: width 0.3s ease-in-out;
  transition: width 0.3s ease-in-out;
  transition: .3s;
}

.icon-whatsapp-small {
  width: 24px;
  height: 24px;
}

.icon-whatsapp {
  width: 45px;
  height: 45px;
}

.icon-font-color {
  color: #ffffff;
}

.icon-font-color--black {
  color: #333333;
}
    .float{
	position:fixed;
	width:60px;
	height:60px;
	bottom: 15px;
    right: 16px;
	background-color:#4cc370;
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:30px;
	box-shadow: 2px 2px 3px #999;
  z-index:100;
}
.float:hover {
	text-decoration: none;
	color: #fff;
  background-color:#3d9e5a;
}

.my-float{
	margin-top:16px;
}
</style>
<!-- JavaScript -->
<script>
popupWhatsApp = () => {
  
  let btnClosePopup = document.querySelector('.closePopup');
  let btnOpenPopup = document.querySelector('.whatsapp-button');
  let popup = document.querySelector('.popup-whatsapp');
  let sendBtn = document.getElementById('send-btn');

  btnClosePopup.addEventListener("click",  () => {
    popup.classList.toggle('is-active-whatsapp-popup')
  })
  
  btnOpenPopup.addEventListener("click",  () => {
    popup.classList.toggle('is-active-whatsapp-popup')
     popup.style.animation = "fadeIn .6s 0.0s both";
  })
  
  sendBtn.addEventListener("click", () => {
  let msg = document.getElementById('whats-in').value;
  let relmsg = msg.replace(/ /g,"%20");
     
   window.open('https://wa.me/51987654321?text='+relmsg, '_blank'); 
  
  });

  setTimeout(() => {
    popup.classList.toggle('is-active-whatsapp-popup');
  }, 3000);
}

popupWhatsApp();

</script>

<script>
        // Animación para los contadores de estadísticas
        const countElements = document.querySelectorAll('.count');
        
        const animateValue = (element, start, end, duration) => {
            let startTimestamp = null;
            const step = (timestamp) => {
                if (!startTimestamp) startTimestamp = timestamp;
                const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                element.innerHTML = Math.floor(progress * (end - start) + start);
                if (progress < 1) {
                    window.requestAnimationFrame(step);
                }
            };
            window.requestAnimationFrame(step);
        };

        // Función para verificar si un elemento está visible en la ventana
        const isElementInViewport = (el) => {
            const rect = el.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        };

        // Iniciar animación cuando los elementos sean visibles
        const handleScroll = () => {
            countElements.forEach(counter => {
                if (isElementInViewport(counter) && !counter.classList.contains('animated')) {
                    counter.classList.add('animated');
                    animateValue(counter, 0, parseInt(counter.getAttribute('data-target')), 2000);
                }
            });
        };

        // Escuchar el evento scroll
        window.addEventListener('scroll', handleScroll);
        // Ejecutar una vez al cargar la página
        handleScroll();
    </script>

<!-- Footer -->
<?php include_once '../includes/footer.php'; ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
