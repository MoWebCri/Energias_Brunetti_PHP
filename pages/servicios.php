<?php include '../includes/header.php'; ?>

<!-- Hero Section para Servicios -->
<section class="relative text-white bg-dark py-16 md:py-24">
    <div class="absolute inset-0 z-0">
        <img src="<?php echo $base_url; ?>assets/img/camion.png" alt="Camión Energías Brunetti" class="w-full h-full object-cover opacity-30">
    </div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center max-w-3xl mx-auto">
            <h1 class="text-5xl md:text-6xl font-bold mb-6 animate__animated animate__fadeInDown">Energías Brunetti LTDA</h1>
            <p class="text-xl md:text-2xl mb-8 animate__animated animate__fadeInUp animate__delay-1s">Soluciones integrales en calderas industriales de última generación</p>
            <div class="flex flex-wrap justify-center gap-4 mt-24">
                <a href="#servicios" class="bg-green-400 hover:bg-green-500 text-blue-900 font-semibold py-3 px-6 rounded-lg inline-block animate__animated animate__fadeInUp animate__delay-2s">
                    Nuestros Servicios
                </a>
                <a href="calderas.php" class="bg-white hover:bg-gray-100 text-blue-900 font-semibold py-3 px-6 rounded-lg inline-block animate__animated animate__fadeInUp animate__delay-2s">
                    Catálogo de Calderas
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Sección de Servicios -->
<section id="servicios" class="py-20 bg-gradient-to-b from-white to-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center mb-16 text-blue-900" data-aos="fade-up">
            Servicios Industriales
        </h2>
        
        <!-- Grid de Servicios -->
        <div class="grid lg:grid-cols-2 gap-8 mb-20">
            <!-- Arriendo de Calderas -->
            <div class="transform hover:scale-105 transition-all duration-300" 
                 data-aos="fade-up" 
                 data-aos-delay="100">
                <div class="bg-card rounded-xl shadow-2xl overflow-hidden h-full border border-gray-100">
                    <div class="flex flex-col md:flex-row h-full">
                        <div class="md:w-5/12 bg-gradient-to-br from-blue-900 to-blue-700 p-8 flex items-center justify-center">
                            <i class="fas fa-handshake text-6xl text-white animate__animated animate__pulse animate__infinite"></i>
                        </div>
                        <div class="md:w-7/12 p-8 flex flex-col">
                            <h3 class="text-2xl font-bold text-blue-900 mb-4">Arriendo de Calderas</h3>
                            <p class="text-gray-600 flex-grow mb-6">
                                Contamos con calderas que nos permite atender las necesidades de corto, mediano y largo plazo de empresas e instituciones de todos los rubros que son usados para generar vapor o agua caliente.
                            </p>
                            <a href="contacto.php" 
                               class="inline-block bg-green-400 hover:bg-green-500 text-blue-900 font-semibold py-3 px-6 rounded-lg shadow-sm transition-all transform hover:scale-105">
                                <i class="fas fa-info-circle mr-2"></i>Solicitar Información
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Reparación de Calderas -->
            <div class="transform hover:scale-105 transition-all duration-300" 
                 data-aos="fade-up" 
                 data-aos-delay="200">
                <div class="bg-card rounded-xl shadow-2xl overflow-hidden h-full border border-gray-100">
                    <div class="flex flex-col md:flex-row h-full">
                        <div class="md:w-5/12 bg-gradient-to-br from-green-600 to-green-400 p-8 flex items-center justify-center">
                            <i class="fas fa-tools text-6xl text-white animate__animated animate__wrench animate__infinite"></i>
                        </div>
                        <div class="md:w-7/12 p-8 flex flex-col">
                            <h3 class="text-2xl font-bold text-blue-900 mb-4">Reparación de Calderas</h3>
                            <p class="text-gray-600 flex-grow mb-6">
                                Servicio Integral de eficiencia energética. Contamos con un equipo experto en reparaciones para garantizar el óptimo funcionamiento de tus equipos.
                            </p>
                            <a href="contacto.php" 
                               class="inline-block bg-green-400 hover:bg-green-500 text-blue-900 font-semibold py-3 px-6 rounded-lg shadow-sm transition-all transform hover:scale-105">
                                <i class="fas fa-info-circle mr-2"></i>Solicitar Información
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mantención de Calderas -->
            <div class="transform hover:scale-105 transition-all duration-300" 
                 data-aos="fade-up" 
                 data-aos-delay="300">
                <div class="bg-card rounded-xl shadow-2xl overflow-hidden h-full border border-gray-100">
                    <div class="flex flex-col md:flex-row h-full">
                        <div class="md:w-5/12 bg-gradient-to-br from-yellow-500 to-yellow-300 p-8 flex items-center justify-center">
                            <i class="fas fa-clipboard-check text-6xl text-white animate__animated animate__heartBeat animate__infinite"></i>
                        </div>
                        <div class="md:w-7/12 p-8 flex flex-col">
                            <h3 class="text-2xl font-bold text-blue-900 mb-4">Mantención de Calderas</h3>
                            <p class="text-gray-600 flex-grow mb-6">
                                Servicio integral de mantención y limpieza para todo tipo de calderas. Realizamos mantención preventiva y correctiva, incluyendo limpieza profunda de componentes, revisión de sistemas de combustión y optimización de rendimiento. Garantizamos el funcionamiento óptimo y la eficiencia energética de tus equipos.
                            </p>
                            <a href="contacto.php" 
                               class="inline-block bg-green-400 hover:bg-green-500 text-blue-900 font-semibold py-3 px-6 rounded-lg shadow-sm transition-all transform hover:scale-105">
                                <i class="fas fa-info-circle mr-2"></i>Solicitar Información
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Compra de Calderas -->
            <div class="transform hover:scale-105 transition-all duration-300" 
                 data-aos="fade-up" 
                 data-aos-delay="400">
                <div class="bg-card rounded-xl shadow-2xl overflow-hidden h-full border border-gray-100">
                    <div class="flex flex-col md:flex-row h-full">
                        <div class="md:w-5/12 bg-gradient-to-br from-red-600 to-red-400 p-8 flex items-center justify-center">
                            <i class="fas fa-shopping-cart text-6xl text-white animate__animated animate__bounce animate__infinite"></i>
                        </div>
                        <div class="md:w-7/12 p-8 flex flex-col">
                            <h3 class="text-2xl font-bold text-blue-900 mb-4">Compra de Calderas</h3>
                            <p class="text-gray-600 flex-grow mb-6">
                                Ofrecemos calderas reacondicionadas de alta calidad, restauradas a condiciones óptimas de funcionamiento. Cada unidad pasa por un riguroso proceso de reacondicionamiento que incluye pruebas de rendimiento y certificación de seguridad. Te asesoramos para encontrar la solución perfecta que se adapte a tus necesidades.
                            </p>
                            <a href="contacto.php" 
                               class="inline-block bg-green-400 hover:bg-green-500 text-blue-900 font-semibold py-3 px-6 rounded-lg shadow-sm transition-all transform hover:scale-105">
                                <i class="fas fa-info-circle mr-2"></i>Solicitar Información
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Llamada a la acción -->
        <div class="text-center mt-16" data-aos="fade-up">
            <h3 class="text-3xl font-bold text-blue-900 mb-6">¿Necesitas más información sobre nuestros servicios?</h3>
            <p class="text-xl text-gray-600 mb-8">Nuestro equipo está listo para ayudarte a encontrar la mejor solución para tu empresa.</p>
            <div class="flex flex-wrap justify-center gap-6">
                <a href="https://wa.me/56996952092?text=Hola,%20me%20interesa%20obtener%20información%20sobre%20sus%20servicios%20de%20calderas" 
                   target="_blank"
                   class="group inline-flex items-center bg-green-400 hover:bg-green-500 text-blue-900 font-semibold py-4 px-8 rounded-lg shadow-lg transition-all transform hover:scale-105">
                    <i class="fab fa-whatsapp text-2xl mr-3 group-hover:animate__animated group-hover:animate__bounce"></i>
                    <span class="text-lg">WhatsApp</span>
                </a>
                <a href="contacto.php" 
                   class="group inline-flex items-center bg-blue-900 hover:bg-blue-800 text-white font-semibold py-4 px-8 rounded-lg shadow-lg transition-all transform hover:scale-105">
                    <i class="fas fa-envelope text-2xl mr-3 group-hover:animate__animated group-hover:animate__pulse"></i>
                    <span class="text-lg">Formulario de Contacto</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Estilos personalizados -->
<style>
    @keyframes wrench {
        0% { transform: rotate(-12deg); }
        8% { transform: rotate(12deg); }
        10% { transform: rotate(24deg); }
        18% { transform: rotate(-24deg); }
        20% { transform: rotate(-24deg); }
        28% { transform: rotate(24deg); }
        30% { transform: rotate(24deg); }
        38% { transform: rotate(-24deg); }
        40% { transform: rotate(-24deg); }
        48% { transform: rotate(24deg); }
        50% { transform: rotate(0deg); }
        100% { transform: rotate(0deg); }
    }
    
    .animate__wrench {
        animation: wrench 2.5s ease infinite;
    }
</style>

<!-- Botón flotante de WhatsApp -->
<a href="https://wa.me/56996952092?text=Hola,%20me%20interesa%20obtener%20información%20sobre%20sus%20servicios%20de%20calderas" class="whatsapp-button" target="_blank">
    <i class="fab fa-whatsapp"></i>
</a>

<?php include '../includes/footer.php'; ?> 

<!-- Scripts adicionales para esta página -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Inicializar acordeón de FAQ
        const faqItems = document.querySelectorAll('.faq-item');
        
        faqItems.forEach(item => {
            const question = item.querySelector('.faq-question');
            
            question.addEventListener('click', () => {
                // Cerrar todos los items
                faqItems.forEach(otherItem => {
                    if (otherItem !== item) {
                        otherItem.classList.remove('active');
                    }
                });
                
                // Alternar el estado del item actual
                item.classList.toggle('active');
            });
        });
        
        // Inicializar el carrusel de testimonios
        var testimonialsSwiper = new Swiper('.testimonials', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.testimonials-pagination',
                clickable: true,
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            }
        });
    });
</script> 