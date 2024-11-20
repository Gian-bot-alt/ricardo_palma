<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Conoce complejo educativo privado Ricardo Palma, una institución educativa de excelencia en Interlomas, Estado de México">
    <title>Sobre Nosotros</title>
    
</head>
<style>
    /* Estilos principales */
:root {
  --primary-color: #0F766E;
  --secondary-color: #134E4A;
  --accent-color: #2DD4BF;
  --background-light: #F0FDFA;
  --text-dark: #1E293B;
  --text-light: #64748B;
  --white: #FFFFFF;
  --transition-speed: 0.3s;
}

/* Animaciones */
@keyframes fadeIn {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Estilos generales */
.nosotros-container {
  max-width: 1280px;
  margin: 0 auto;
  margin-top: 150px;
  padding: 2rem 1rem;
}

/* Sección de introducción */
.intro-section {
  text-align: center;
  margin-bottom: 4rem;
  animation: fadeIn 1s ease-out;
}

.intro-section h1 {
  color: var(--primary-color);
  font-size: 2.5rem;
  font-weight: 700;
  margin-bottom: 1.5rem;
}

.intro-section p {
  color: var(--text-light);
  font-size: 1.125rem;
  max-width: 800px;
  margin: 0 auto;
}

/* Tarjetas de Visión y Misión */
.vision-mission-container {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 2rem;
  margin-bottom: 4rem;
}

.card {
  background: var(--white);
  border-radius: 0.5rem;
  padding: 2rem;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  transition: transform var(--transition-speed);
}

.card:hover {
  transform: translateY(-5px);
}

.card-header {
  display: flex;
  align-items: center;
  margin-bottom: 1rem;
}

.card-icon {
  width: 2rem;
  height: 2rem;
  margin-right: 1rem;
  color: var(--primary-color);
}

.card h2 {
  color: var(--primary-color);
  font-size: 1.5rem;
  font-weight: 600;
}

.card p {
  color: var(--text-light);
  line-height: 1.6;
}

/* Características */
.features-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 2rem;
  margin-bottom: 4rem;
}

.feature-card {
  background: var(--white);
  padding: 1.5rem;
  border-radius: 0.5rem;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.feature-card h3 {
  color: var(--primary-color);
  font-size: 1.25rem;
  font-weight: 600;
  margin-bottom: 1rem;
}

/* Sección comunidad */
.community-section {
  background: var(--background-light);
  padding: 3rem 2rem;
  border-radius: 0.5rem;
  text-align: center;
  margin-bottom: 4rem;
}

.community-section h2 {
  color: var(--primary-color);
  font-size: 2rem;
  margin-bottom: 1.5rem;
}

/* Call to Action */
.cta-section {
  text-align: center;
  padding: 2rem;
}

.cta-button {
  background: var(--primary-color);
  color: var(--white);
  padding: 1rem 2rem;
  border-radius: 0.5rem;
  border: none;
  font-size: 1.125rem;
  cursor: pointer;
  transition: background-color var(--transition-speed);
}

.cta-button:hover {
  background: var(--secondary-color);
}

/* Responsive */
@media (max-width: 768px) {
  .intro-section h1 {
    font-size: 2rem;
  }
  
  .vision-mission-container {
    grid-template-columns: 1fr;
  }
  
  .community-section {
    padding: 2rem 1rem;
  }
}

/* Utilidades de accesibilidad */
.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}







.instalaciones {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 1rem;
        }

        .instalaciones h2 {
            text-align: center;
            color: #333;
            margin-bottom: 2rem;
            font-size: 2.5rem;
        }

        .grid-instalaciones {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            padding: 1rem;
        }

        .instalacion-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            overflow: hidden;
            transition: transform 0.3s ease;
            cursor: pointer;
        }

        .instalacion-card:hover {
            transform: translateY(-10px);
        }

        .instalacion-imagen {
            width: 100%;
            height: 200px;
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .laboratorios {
            background-image: url('/api/placeholder/400/320');
        }

        .deportivas {
            background-image: url('/api/placeholder/400/320');
        }

        .biblioteca {
            background-image: url('/api/placeholder/400/320');
        }

        .instalacion-contenido {
            padding: 1.5rem;
        }

        .instalacion-contenido h3 {
            color: #2c3e50;
            margin-bottom: 1rem;
            font-size: 1.5rem;
        }

        .instalacion-contenido p {
            color: #666;
            font-size: 1rem;
        }

        @media (max-width: 768px) {
            .grid-instalaciones {
                grid-template-columns: 1fr;
            }
            
            .instalaciones h2 {
                font-size: 2rem;
            }
        }

        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.5s ease, transform 0.5s ease;
        }

        .visible {
            opacity: 1;
            transform: translateY(0);
        }









</style>
<body>
<header class="header-inicio header-social">
        <?php include '../includes/header-secundario.php'; ?>
    </header>
    <main class="nosotros-container">
        <!-- Sección de Introducción -->
        <section class="intro-section" aria-labelledby="intro-title">
            <h1 id="intro-title">Bienvenidos al Complejo Educativo Privado Ricardo Palma</h1>
            <p>Situado en San Agustin de Cajas, es más que una institución educativa; somos una comunidad dedicada a formar líderes globales del mañana.</p>
        </section>

        <!-- Sección Visión y Misión -->
        <section class="vision-mission-container" aria-label="Visión y Misión">
            <div class="card vision-card">
                <div class="card-header">
                    <svg class="card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                    <h2>Nuestra Visión</h2>
                </div>
                <p>Es crear un ambiente donde los estudiantes puedan tomar el control de su propia educación y crecer libres para crear el futuro que desean para sí mismos y sus comunidades.</p>
            </div>

            <div class="card mission-card">
                <div class="card-header">
                    <svg class="card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                    <h2>Nuestra Misión</h2>
                </div>
                <p>Potenciar mentes, abrazar la diversidad, fomentar el crecimiento en un entorno seguro y afectuoso que promueva el bienestar en cada miembro de la comunidad.</p>
            </div>
        </section>

        <!-- Sección Características -->
        <section class="features-grid" aria-label="Características principales">
            <div class="feature-card">
                <h3>Excelencia Académica</h3>
                <p>Ofrecemos una educación integral desde jardín hasta secundaria, con un enfoque educativo personalizado que se adapta a las necesidades individuales de cada estudiante.</p>
            </div>

            <div class="feature-card">
                <h3>Educación Bilingüe</h3>
                <p>Nuestro programa bilingüe prepara a los estudiantes para sobresalir en un mundo globalizado, desarrollando habilidades lingüísticas y culturales esenciales.</p>
            </div>

            <div class="feature-card">
                <h3>Comunidad Internacional</h3>
                <p>Fomentamos un ambiente multicultural que promueve conexiones y amistades para toda la vida, mientras cultivamos una visión global en nuestros estudiantes.</p>
            </div>
        </section>

        <!-- Sección Comunidad -->
        <section class="community-section" aria-labelledby="community-title">
            <h2 id="community-title">Nuestra Comunidad</h2>
            <p>En El Roble, creemos en el poder de la comunidad. Nuestro ambiente de apoyo y colaboración fomenta el crecimiento personal y académico, preparando a nuestros estudiantes para destacar en un mundo en constante cambio.</p>
        </section>

        








        <section class="instalaciones">
    <h2>Nuestras Instalaciones</h2>
    <div class="grid-instalaciones">
        <div class="instalacion-card fade-in">
            
            <div class="instalacion-imagen laboratorios">
        <img src="../assets/images/laboratorio-computo.jpg" alt="Laboratorio de computo">
    </div>
    <div class="instalacion-contenido">
        <h3>Laboratorio de computo</h3>
        <p>Espacios equipados para la informática y la computación.</p>
    </div>
        </div>
        
        <div class="instalacion-card fade-in">
            <div class="instalacion-imagen deportivas">
                <img src="../assets/images/area-deportiva.jpg" alt="Área Deportiva">
            </div>
            <div class="instalacion-contenido">
                <h3>Área Deportiva</h3>
                <p>Instalaciones modernas para el desarrollo físico y deportivo.</p>
            </div>
        </div>
        
        <div class="instalacion-card fade-in">
            <div class="instalacion-imagen biblioteca">
                <img src="../assets/images/biblioteca-escolar.jpg" alt="Laboratorio">
            </div>
            <div class="instalacion-contenido">
                <h3>Biblioteca escolar</h3>
                <p>Centro de recursos y aprendizaje con tecnología de vanguardia.</p>
            </div>
        </div>
    </div>
</section>

<style>


.instalacion-card {
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: center;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    padding: 16px;
}

.instalacion-imagen {
    width: 100%;
    overflow: hidden;
    border-bottom: 1px solid #eaeaea;
}

.instalacion-imagen img {
    width: 100%;
    height: auto;
    display: block;
    border-radius: 8px 8px 0 0;
}

.instalacion-contenido {
    padding: 16px;
    text-align: center;
}

.instalacion-contenido h3 {
    font-size: 1.5em;
    margin: 0 0 8px;
    color: #333;
}

.instalacion-contenido p {
    font-size: 1em;
    color: #666;
    margin: 0;
}


</style>








        <!-- Call to Action -->
        <section class="cta-section" aria-labelledby="cta-title">
            <h2 id="cta-title">¡Únete a la Familia El Roble!</h2>
            <p>Descubre cómo podemos ayudar a tu hijo a alcanzar su máximo potencial en un ambiente educativo excepcional.</p>
            <button class="cta-button" data-tooltip="Haz clic para solicitar más información">
                Solicitar Información
            </button>
        </section>
    </main>
    <footer>
        <?php include '../includes/footer.php'; ?>
    </footer>
    <!-- Scripts -->
    <script >
        // Esperar a que el DOM esté completamente cargado
document.addEventListener('DOMContentLoaded', function() {
  // Inicializar elementos animados
  initializeAnimations();
  
  // Inicializar eventos de scroll
  initializeScrollEffects();
  
  // Inicializar eventos de botones
  initializeButtons();
});

// Función para inicializar animaciones
function initializeAnimations() {
  const animatedElements = document.querySelectorAll('.card, .feature-card');
  
  // Crear el observador de intersección
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.style.opacity = '1';
        entry.target.style.transform = 'translateY(0)';
      }
    });
  }, {
    threshold: 0.1
  });
  
  // Observar cada elemento
  animatedElements.forEach(element => {
    element.style.opacity = '0';
    element.style.transform = 'translateY(20px)';
    element.style.transition = 'opacity 0.5s ease-out, transform 0.5s ease-out';
    observer.observe(element);
  });
}

// Función para inicializar efectos de scroll
function initializeScrollEffects() {
  const header = document.querySelector('.nosotros-container');
  let lastScroll = 0;
  
  window.addEventListener('scroll', () => {
    const currentScroll = window.pageYOffset;
    
    // Añadir sombra al header cuando se hace scroll
    if (currentScroll > 0) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
    
    lastScroll = currentScroll;
  });
}

// Función para inicializar botones
function initializeButtons() {
  const ctaButton = document.querySelector('.cta-button');
  
  if (ctaButton) {
    ctaButton.addEventListener('click', handleCtaClick);
  }
  
  // Inicializar tooltips si existen
  const tooltips = document.querySelectorAll('[data-tooltip]');
  tooltips.forEach(initializeTooltip);
}

// Manejador de click para el botón CTA
function handleCtaClick(event) {
  event.preventDefault();
  
  // Smooth scroll al formulario de contacto si existe
  const contactForm = document.querySelector('#contact-form');
  if (contactForm) {
    contactForm.scrollIntoView({ behavior: 'smooth' });
  } else {
    // Si no hay formulario, redirigir a la página de contacto
    window.location.href = '/contacto';
  }
}

// Función para inicializar tooltips
function initializeTooltip(element) {
  let timeout;
  
  element.addEventListener('mouseenter', (e) => {
    timeout = setTimeout(() => {
      showTooltip(e.target);
    }, 200);
  });
  
  element.addEventListener('mouseleave', () => {
    clearTimeout(timeout);
    hideTooltip(element);
  });
}

// Funciones auxiliares para tooltips
function showTooltip(element) {
  const tooltip = document.createElement('div');
  tooltip.classList.add('tooltip');
  tooltip.textContent = element.dataset.tooltip;
  
  element.appendChild(tooltip);
}

function hideTooltip(element) {
  const tooltip = element.querySelector('.tooltip');
  if (tooltip) {
    tooltip.remove();
  }
}

// Utilidad para detectar soporte de características
const supports = {
  intersectionObserver: 'IntersectionObserver' in window,
  smoothScroll: 'scrollBehavior' in document.documentElement.style
};

// Polyfills condicionales
if (!supports.intersectionObserver) {
  // Fallback simple para navegadores antiguos
  document.querySelectorAll('.card, .feature-card').forEach(element => {
    element.style.opacity = '1';
    element.style.transform = 'translateY(0)';
  });
}

// Funciones de utilidad
function debounce(func, wait) {
  let timeout;
  return function executedFunction(...args) {
    const later = () => {
      clearTimeout(timeout);
      func(...args);
    };
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
  };
}

// Optimización de rendimiento para scroll
const optimizedScroll = debounce(() => {
  // Lógica de scroll aquí
}, 16);

window.addEventListener('scroll', optimizedScroll);














document.addEventListener('DOMContentLoaded', () => {
            const cards = document.querySelectorAll('.fade-in');
            
            const observador = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, {
                threshold: 0.1
            });

            cards.forEach(card => {
                observador.observe(card);
            });

            // Efecto hover adicional para las tarjetas
            const tarjetas = document.querySelectorAll('.instalacion-card');
            tarjetas.forEach(tarjeta => {
                tarjeta.addEventListener('click', () => {
                    // Aquí puedes agregar funcionalidad adicional al hacer clic
                    console.log('Tarjeta clickeada:', tarjeta.querySelector('h3').textContent);
                });
            });
        });
    </script>
</body>
</html>