<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Institución Educativa</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<header class="header-inicio header-social">
        <?php include '../includes/header-secundario.php'; ?>
    </header>
<body class="bg-gray-50">

    <div class="bg-white shadow-sm">
        <div class="container mx-auto px-4 py-6">
            <h2 class="text-3xl font-bold text-gray-800">Contacto</h1>
        </div>
</div>

    <main class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <!-- Información de Contacto -->
            <div class="bg-white rounded-lg shadow-lg p-8">
                <h2 class="text-2xl font-semibold text-gray-800 mb-6">Información de Contacto</h2>
                
                <div class="space-y-6">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <i class="fas fa-map-marker-alt text-blue-600 text-xl"></i>
                        </div>
                        <div class="ml-4">
                            <h3 class="font-medium text-gray-800">Dirección</h3>
                            <p class="text-gray-600">Av. Mariscal Castilla N°1235, San Agustin de Cajas</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <i class="fas fa-phone text-blue-600 text-xl"></i>
                        </div>
                        <div class="ml-4">
                            <h3 class="font-medium text-gray-800">Teléfono</h3>
                            <p class="text-gray-600">+51 987 654 212</p>
                            <p class="text-gray-600">+51 987 654 452</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <i class="fas fa-envelope text-blue-600 text-xl"></i>
                        </div>
                        <div class="ml-4">
                            <h3 class="font-medium text-gray-800">Email</h3>
                            <p class="text-gray-600">info@ricardopalma.edu.pe</p>
                            <p class="text-gray-600">admisiones@colegio.edu.pe</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <i class="fas fa-clock text-blue-600 text-xl"></i>
                        </div>
                        <div class="ml-4">
                            <h3 class="font-medium text-gray-800">Horario de Atención</h3>
                            <p class="text-gray-600">Lunes a Viernes: 8:30 AM - 1:30 PM</p>
                            <p class="text-gray-600">Sábados: NO HAY ATENCIÓN</p>
                            <p class="text-gray-600">Domingos: NO HAY ATENCIÓN</p>
                        </div>
                    </div>
                </div>

                <div class="mt-8 h-64 rounded-lg overflow-hidden">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15610.286718003747!2d-75.2499762!3d-12.0041116!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x910ebe78444f3cf3%3A0x256f7c16eeb215b5!2sColegio%20%22Ricardo%20Palma%22!5e0!3m2!1ses-419!2spe!4v1732130601570!5m2!1ses-419!2spe"
                        class="w-full h-full"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy">
                    </iframe>


                    
                </div>
            </div>

            <!-- Formulario de Contacto -->
            <div class="bg-white rounded-lg shadow-lg p-8">
                <h2 class="text-2xl font-semibold text-gray-800 mb-6">Envíanos un Mensaje</h2>
                
                <form id="contactForm" class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Nombre</label>
                            <input type="text" 
                                   class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500" 
                                   required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                            <input type="email" 
                                   class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500" 
                                   required>
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Asunto</label>
                        <input type="text" 
                               class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Mensaje</label>
                        <textarea 
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 h-32"
                            required></textarea>
                    </div>

                    <button type="submit" 
                            class="w-full bg-blue-600 text-white py-3 px-6 rounded-md hover:bg-blue-700 transition duration-300 font-medium">
                        Enviar Mensaje
                    </button>
                </form>

                <div id="successMessage" 
                     class="hidden mt-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded-md">
                    ¡Mensaje enviado con éxito! Nos pondremos en contacto pronto.
                </div>
            </div>
        </div>
    </main>
    <footer>
        <?php include '../includes/footer.php'; ?>
    </footer>
    <script>
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const successMessage = document.getElementById('successMessage');
            
            // Mostrar mensaje de éxito
            successMessage.classList.remove('hidden');
            
            // Limpiar el formulario
            this.reset();
            
            // Ocultar mensaje después de 5 segundos
            setTimeout(() => {
                successMessage.classList.add('hidden');
            }, 5000);
        });
    </script>
</body>
</html>