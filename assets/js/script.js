
    document.addEventListener('DOMContentLoaded', function() {
        var header = document.getElementById('header');

        // Establecer la clase predeterminada al cargar
        header.classList.add('header-inicio');

        // Escuchar el evento de desplazamiento
        window.onscroll = function() {
            if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                header.classList.remove('header-inicio');
                header.classList.add('header-default');
            } else {
                header.classList.remove('header-default');
                header.classList.add('header-inicio');
            }
        };
    });


 







