<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etapas Académicas - Colegio</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <style>
        .stage-card {
            transition: all 0.3s ease;
            background-size: cover;
            background-position: center;
            height: 400px;
        }

        .stage-card:hover {
            transform: translateY(-10px);
        }

        .overlay {
            background: rgba(0, 0, 0, 0.5);
            transition: all 0.3s ease;
        }

        .stage-card:hover .overlay {
            background: rgba(0, 0, 0, 0.7);
        }

        .content-box {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.3s ease;
        }

        .stage-card:hover .content-box {
            opacity: 1;
            transform: translateY(0);
        }

        .feature-icon {
            transition: all 0.3s ease;
        }

        .feature-card:hover .feature-icon {
            transform: scale(1.1);
        }
    </style>
</head>

<header class="header-inicio header-social">
        <?php include '../includes/header-secundario.php'; ?>
    </header>
<body class="bg-gray-50">
    <!-- Hero Section -->
    <section class="relative h-screen flex items-center justify-center bg-black">
        <div class="absolute inset-0 overflow-hidden">
            <img src="../assets/images/imagen2.jpg" alt="Education Background" class="w-full h-full object-cover opacity-50">
        </div>
        <div class="relative text-center text-white z-10 px-4">
            <h1 class="text-5xl md:text-6xl font-bold mb-6" data-aos="fade-down">Etapas Académicas</h1>
            <p class="text-xl md:text-2xl mb-8" data-aos="fade-up">Formando el futuro, paso a paso</p>
            <a href="#stages" class="inline-block animate-bounce">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                </svg>
            </a>
        </div>
    </section>

    <!-- Stages Section -->
    <section id="stages" class="py-20 px-4">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Inicial -->
                <div class="stage-card rounded-xl overflow-hidden relative" data-aos="fade-up" style="background-image: url('../assets/images/inicial.jpg')">
                    <div class="overlay absolute inset-0 flex items-center justify-center">
                        <div class="text-white text-center p-6">
                            <h3 class="text-3xl font-bold mb-3">Inicial</h3>
                            <div class="content-box">
                                <p class="mb-4">Edad: 3-5 años</p>
                                <ul class="text-left space-y-2 mb-6">
                                    <li>• Desarrollo socioemocional</li>
                                    <li>• Estimulación temprana</li>
                                    <li>• Juego y aprendizaje</li>
                                    <li>• Desarrollo psicomotriz</li>
                                </ul>
                                <button class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-full transition duration-300">
                                    Más Información
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Primaria -->
                <div class="stage-card rounded-xl overflow-hidden relative" data-aos="fade-up" data-aos-delay="100" style="background-image: url('../assets/images/primaria.jpg')">
                    <div class="overlay absolute inset-0 flex items-center justify-center">
                        <div class="text-white text-center p-6">
                            <h3 class="text-3xl font-bold mb-3">Primaria</h3>
                            <div class="content-box">
                                <p class="mb-4">Edad: 6-11 años</p>
                                <ul class="text-left space-y-2 mb-6">
                                    <li>• Fundamentos académicos</li>
                                    <li>• Desarrollo integral</li>
                                    <li>• Valores y ciudadanía</li>
                                    <li>• Habilidades básicas</li>
                                </ul>
                                <button class="bg-green-500 hover:bg-green-600 text-white px-6 py-2 rounded-full transition duration-300">
                                    Más Información
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Secundaria -->
                <div class="stage-card rounded-xl overflow-hidden relative" data-aos="fade-up" data-aos-delay="200" style="background-image: url('../assets/images/secundaria.jpg')">
                    <div class="overlay absolute inset-0 flex items-center justify-center">
                        <div class="text-white text-center p-6">
                            <h3 class="text-3xl font-bold mb-3">Secundaria</h3>
                            <div class="content-box">
                                <p class="mb-4">Edad: 12-16 años</p>
                                <ul class="text-left space-y-2 mb-6">
                                    <li>• Pensamiento crítico</li>
                                    <li>• Preparación universitaria</li>
                                    <li>• Desarrollo personal</li>
                                    <li>• Orientación vocacional</li>
                                </ul>
                                <button class="bg-purple-500 hover:bg-purple-600 text-white px-6 py-2 rounded-full transition duration-300">
                                    Más Información
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-16" data-aos="fade-up">Características de Nuestro Programa</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Feature 1 -->
                <div class="feature-card text-center p-6" data-aos="fade-up">
                    <div class="feature-icon bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Educación Personalizada</h3>
                    <p class="text-gray-600">Atención individualizada para cada estudiante</p>
                </div>

                <!-- Feature 2 -->
                <div class="feature-card text-center p-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-icon bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Innovación Educativa</h3>
                    <p class="text-gray-600">Metodologías modernas y tecnología</p>
                </div>

                <!-- Feature 3 -->
                <div class="feature-card text-center p-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-icon bg-purple-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Desarrollo Integral</h3>
                    <p class="text-gray-600">Formación académica y humana</p>
                </div>

                <!-- Feature 4 -->
                <div class="feature-card text-center p-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-icon bg-red-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Valores Sólidos</h3>
                    <p class="text-gray-600">Formación ética y moral</p>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <?php include '../includes/footer.php'; ?>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        // Inicializar AOS (Animate On Scroll)
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });

        // Smooth scroll para el botón de scroll down
        document.querySelector('a[href="#stages"]').addEventListener('click', function(e) {
            e.preventDefault();
            document.querySelector('#stages').scrollIntoView({
                behavior: 'smooth'
            });
        });

        // Animación para las tarjetas al hacer hover
        document.querySelectorAll('.stage-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.querySelector('.content-box').style.opacity = '1';
                this.querySelector('.content-box').style.transform = 'translateY(0)';
            });

            card.addEventListener('mouseleave', function() {
                this.querySelector('.content-box').style.opacity = '0';
                this.querySelector('.content-box').style.transform = 'translateY(20px)';
            });
        });
    </script>
</body>
</html>