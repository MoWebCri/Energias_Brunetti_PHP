document.addEventListener('DOMContentLoaded', () => {
    // Navegación móvil
    const navbarToggle = document.querySelector('.navbar-toggle');
    const navbarMenu = document.querySelector('.navbar-menu');
    
    if (navbarToggle && navbarMenu) {
        navbarToggle.addEventListener('click', () => {
            navbarMenu.classList.toggle('active');
        });
    }
    
    // Cierra el menú al hacer clic en un enlace
    const navLinks = document.querySelectorAll('.navbar-menu a');
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (navbarMenu.classList.contains('active')) {
                navbarMenu.classList.remove('active');
            }
        });
    });

    // Animaciones al scroll (usando AOS si está disponible)
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            mirror: false
        });
    }
    
    // Galería de imágenes con lightbox (opcional)
    const galeriaItems = document.querySelectorAll('.galeria-item');
    
    galeriaItems.forEach(item => {
        item.addEventListener('click', function() {
            const imgSrc = this.querySelector('img').getAttribute('src');
            const imgAlt = this.querySelector('img').getAttribute('alt');
            
            // Crear modal lightbox
            const lightbox = document.createElement('div');
            lightbox.classList.add('lightbox');
            lightbox.innerHTML = `
                <div class="lightbox-content">
                    <span class="lightbox-close">&times;</span>
                    <img src="${imgSrc}" alt="${imgAlt}">
                    <p class="lightbox-caption">${imgAlt}</p>
                </div>
            `;
            
            document.body.appendChild(lightbox);
            
            // Cerrar lightbox
            const closeBtn = lightbox.querySelector('.lightbox-close');
            closeBtn.addEventListener('click', () => {
                lightbox.remove();
            });
            
            // Cerrar lightbox con Esc
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    lightbox.remove();
                }
            });
            
            // Cerrar al hacer clic fuera de la imagen
            lightbox.addEventListener('click', function(e) {
                if (e.target === lightbox) {
                    lightbox.remove();
                }
            });
        });
    });
    
    // Formulario de contacto (validación básica)
    const contactForm = document.getElementById('contactForm');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            let isValid = true;
            const nombre = document.getElementById('nombre');
            const email = document.getElementById('email');
            const mensaje = document.getElementById('mensaje');
            
            // Validación simple
            if (!nombre.value.trim()) {
                showError(nombre, 'Por favor ingresa tu nombre');
                isValid = false;
            } else {
                clearError(nombre);
            }
            
            if (!email.value.trim()) {
                showError(email, 'Por favor ingresa tu email');
                isValid = false;
            } else if (!isValidEmail(email.value)) {
                showError(email, 'Por favor ingresa un email válido');
                isValid = false;
            } else {
                clearError(email);
            }
            
            if (!mensaje.value.trim()) {
                showError(mensaje, 'Por favor ingresa tu mensaje');
                isValid = false;
            } else {
                clearError(mensaje);
            }
            
            if (isValid) {
                // Aquí se enviaría el formulario o se haría una petición AJAX
                // Por ahora, mostramos mensaje de éxito
                const successMessage = document.createElement('div');
                successMessage.classList.add('alert', 'alert-success');
                successMessage.textContent = 'Mensaje enviado correctamente. Nos pondremos en contacto contigo pronto.';
                
                contactForm.reset();
                contactForm.parentNode.insertBefore(successMessage, contactForm);
                
                // Eliminar mensaje después de 5 segundos
                setTimeout(() => {
                    successMessage.remove();
                }, 5000);
            }
        });
    }
    
    // Funciones auxiliares para validación de formulario
    function showError(input, message) {
        const formControl = input.parentElement;
        const errorMessage = formControl.querySelector('.error-message') || document.createElement('small');
        
        if (!formControl.querySelector('.error-message')) {
            errorMessage.classList.add('error-message', 'text-red-500', 'text-sm', 'mt-1');
            formControl.appendChild(errorMessage);
        }
        
        errorMessage.textContent = message;
        input.classList.add('border-red-500');
    }
    
    function clearError(input) {
        const formControl = input.parentElement;
        const errorMessage = formControl.querySelector('.error-message');
        
        if (errorMessage) {
            errorMessage.textContent = '';
        }
        
        input.classList.remove('border-red-500');
    }
    
    function isValidEmail(email) {
        const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }
}); 