<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="relative text-white bg-dark py-16 md:py-24">
    <div class="absolute inset-0 z-0">
        <img src="<?php echo $base_url; ?>assets/img/camion.png" alt="Camión Energías Brunetti" class="w-full h-full object-cover opacity-30">
    </div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center max-w-3xl mx-auto">
            <h1 class="text-5xl md:text-6xl font-bold mb-6 animate__animated animate__fadeInDown">Energías Brunetti LTDA</h1>
            <p class="text-xl md:text-2xl mb-8 animate__animated animate__fadeInUp animate__delay-1s">Soluciones integrales en calderas industriales de última generación</p>
            <div class="flex flex-wrap justify-center gap-4 mt-24">
                <a href="pages/servicios.php" class="bg-green-400 hover:bg-green-500 text-blue-900 font-semibold py-3 px-6 rounded-lg inline-block animate__animated animate__fadeInUp animate__delay-2s">
                    Nuestros Servicios
                </a>
                <a href="pages/calderas.php" class="bg-white hover:bg-gray-100 text-blue-900 font-semibold py-3 px-6 rounded-lg inline-block animate__animated animate__fadeInUp animate__delay-2s">
                    Catálogo de Calderas
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Sección de Servicios Destacados -->
<section class="py-12 sm:py-16 md:py-20 bg-gradient-to-b from-white to-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl sm:text-4xl font-bold text-center mb-8 sm:mb-16 text-blue-900" data-aos="fade-up">
            Nuestros Servicios
        </h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 md:gap-8">
            <!-- Arriendo -->
            <div class="bg-card rounded-xl shadow-2xl p-6 transform hover:scale-105 transition-all duration-300 border border-gray-100" 
                 data-aos="fade-up" data-aos-delay="100">
                <div class="text-center mb-4">
                    <i class="fas fa-handshake text-5xl text-blue-900 mb-4 animate__animated animate__pulse animate__infinite"></i>
                    <h3 class="text-xl font-bold text-blue-900">Arriendo de Calderas</h3>
                </div>
                <p class="text-gray-600 text-center">Soluciones flexibles para corto, mediano y largo plazo. Adaptadas a tus necesidades.</p>
            </div>
            <!-- Reparación -->
            <div class="bg-card rounded-xl shadow-2xl p-6 transform hover:scale-105 transition-all duration-300 border border-gray-100" 
                 data-aos="fade-up" data-aos-delay="200">
                <div class="text-center mb-4">
                    <i class="fas fa-tools text-5xl text-blue-900 mb-4 animate__animated animate__wrench animate__infinite"></i>
                    <h3 class="text-xl font-bold text-blue-900">Reparación</h3>
                </div>
                <p class="text-gray-600 text-center">Servicio integral de eficiencia energética con equipo experto en reparaciones.</p>
            </div>
            <!-- Mantención -->
            <div class="bg-card rounded-xl shadow-2xl p-6 transform hover:scale-105 transition-all duration-300 border border-gray-100" 
                 data-aos="fade-up" data-aos-delay="300">
                <div class="text-center mb-4">
                    <i class="fas fa-clipboard-check text-5xl text-blue-900 mb-4 animate__animated animate__heartBeat animate__infinite"></i>
                    <h3 class="text-xl font-bold text-blue-900">Mantención</h3>
                </div>
                <p class="text-gray-600 text-center">Servicio integral de mantención y limpieza para todo tipo de calderas industriales, incluyendo mantención preventiva y correctiva.</p>
            </div>
            <!-- Compra y Venta -->
            <div class="bg-card rounded-xl shadow-2xl p-6 transform hover:scale-105 transition-all duration-300 border border-gray-100" 
                 data-aos="fade-up" data-aos-delay="400">
                <div class="text-center mb-4">
                    <i class="fas fa-exchange-alt text-5xl text-blue-900 mb-4 animate__animated animate__bounce animate__infinite"></i>
                    <h3 class="text-xl font-bold text-blue-900">Compra y Venta de Calderas Reacondicionadas</h3>
                </div>
                <p class="text-gray-600 text-center">Ofrecemos calderas reacondicionadas de alta calidad, restauradas a condiciones óptimas de funcionamiento con certificación de seguridad.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-12 sm:py-16 md:py-20 bg-gradient-to-b from-gray-50 to-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl sm:text-4xl font-bold text-center mb-8 sm:mb-16 text-blue-900" data-aos="fade-up">
            Nuestras Calderas
        </h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 md:gap-8">
            <!-- Alta Capacidad -->
            <div class="bg-card rounded-xl shadow-2xl overflow-hidden transform hover:scale-105 transition-all duration-300 border border-gray-100" 
                 data-aos="flip-left" data-aos-delay="100">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-blue-900 mb-4">Alta Capacidad</h3>
                    <ul class="space-y-3">
                        <li class="flex items-center">
                            <i class="fas fa-fire text-green-400 mr-2"></i>
                            <span>Cleaver Brooks 12.000 KHV Dual (Petróleo/Diesel)</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-fire text-green-400 mr-2"></i>
                            <span>Paradies 10.000 KHV Dual (Petróleo/Diesel)</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-fire text-green-400 mr-2"></i>
                            <span>Caldera de Vapor 5.000 KHV (Vapor Industrial)</span>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Media Capacidad -->
            <div class="bg-card rounded-xl shadow-2xl overflow-hidden transform hover:scale-105 transition-all duration-300 border border-gray-100" 
                 data-aos="flip-left" data-aos-delay="200">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-blue-900 mb-4">Media Capacidad</h3>
                    <ul class="space-y-3">
                        <li class="flex items-center">
                            <i class="fas fa-fire text-green-400 mr-2"></i>
                            <span>ABCO 8.000 KHV Dual (Petróleo/Diesel)</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-fire text-green-400 mr-2"></i>
                            <span>Geat Transfer 5.300 KHV Dual (Petróleo/Diesel)</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-fire text-green-400 mr-2"></i>
                            <span>ICI 5.100 KHV Dual (Petróleo/Diesel)</span>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Baja Capacidad -->
            <div class="bg-card rounded-xl shadow-2xl overflow-hidden transform hover:scale-105 transition-all duration-300 border border-gray-100" 
                 data-aos="flip-left" data-aos-delay="300">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-blue-900 mb-4">Baja Capacidad</h3>
                    <ul class="space-y-3">
                        <li class="flex items-center">
                            <i class="fas fa-fire text-green-400 mr-2"></i>
                            <span>ICI 4.270 KHV Dual (Petróleo/Diesel)</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-fire text-green-400 mr-2"></i>
                            <span>Socometal 1.500 KHV Dual (Petróleo/Diesel)</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-fire text-green-400 mr-2"></i>
                            <span>Bríones 1.000 KHV Diesel</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center mt-12">
            <a href="pages/calderas.php" class="inline-block bg-blue-900 hover:bg-blue-800 text-white font-semibold py-3 px-8 rounded-lg shadow-lg transition-all transform hover:scale-105">
                Ver Catálogo
            </a>
        </div>
    </div>
</section>

<!-- Sección Por qué Elegirnos -->
<section class="py-12 sm:py-16 md:py-20 bg-gradient-to-b from-gray-50 to-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl sm:text-4xl font-bold text-center mb-8 sm:mb-16 text-blue-900" data-aos="fade-up">
            ¿Por qué elegirnos?
        </h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 md:gap-8">
            <!-- Experiencia -->
            <div class="bg-card rounded-xl shadow-2xl p-6 text-center transform hover:scale-105 transition-all duration-300 border border-gray-100" 
                 data-aos="zoom-in" data-aos-delay="100">
                <div class="w-20 h-20 bg-blue-900 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-medal text-3xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-blue-900 mb-3">Experiencia</h3>
                <p class="text-gray-600">Más de 3 años en el mercado industrial, brindando soluciones confiables.</p>
            </div>
            <!-- Equipo Técnico -->
            <div class="bg-card rounded-xl shadow-2xl p-6 text-center transform hover:scale-105 transition-all duration-300 border border-gray-100" 
                 data-aos="zoom-in" data-aos-delay="200">
                <div class="w-20 h-20 bg-blue-900 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-users text-3xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-blue-900 mb-3">Equipo Técnico</h3>
                <p class="text-gray-600">Personal altamente capacitado con su certificador ante la SEREMI.</p>
            </div>
            <!-- Servicio 24/7 -->
            <div class="bg-card rounded-xl shadow-2xl p-6 text-center transform hover:scale-105 transition-all duration-300 border border-gray-100" 
                 data-aos="zoom-in" data-aos-delay="300">
                <div class="w-20 h-20 bg-blue-900 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-clock text-3xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-blue-900 mb-3">Servicio 24/7</h3>
                <p class="text-gray-600">Soporte técnico disponible las 24 horas para emergencias.</p>
            </div>
            <!-- Garantía -->
            <div class="bg-card rounded-xl shadow-2xl p-6 text-center transform hover:scale-105 transition-all duration-300 border border-gray-100" 
                 data-aos="zoom-in" data-aos-delay="400">
                <div class="w-20 h-20 bg-blue-900 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-shield-alt text-3xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-blue-900 mb-3">Garantía</h3>
                <p class="text-gray-600">Todos nuestros servicios y equipos cuentan con garantía extendida.</p>
            </div>
        </div>
    </div>
</section>

<!-- Llamada a la acción -->
<section class="py-12 sm:py-16 md:py-20 bg-gradient-to-r from-blue-900 via-blue-700 to-blue-500 relative overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="container mx-auto px-4 text-center relative z-10" data-aos="zoom-in">
        <h2 class="text-3xl sm:text-4xl font-bold mb-4 sm:mb-6 text-white">
            ¿Listo para optimizar tu sistema de calderas?
        </h2>
        <p class="text-lg sm:text-xl text-white mb-6 sm:mb-10 max-w-2xl mx-auto">
            Contáctanos hoy mismo y descubre cómo podemos ayudarte a mejorar la eficiencia de tu empresa.
        </p>
        <div class="flex flex-wrap justify-center gap-3 sm:gap-6">
            <a href="https://wa.me/56996952092?text=Hola,%20me%20interesa%20obtener%20información%20sobre%20sus%20servicios%20de%20calderas" 
               target="_blank"
               class="group inline-flex items-center bg-green-400 hover:bg-green-500 text-blue-900 font-semibold py-3 sm:py-4 px-6 sm:px-8 rounded-lg shadow-lg transition-all transform hover:scale-105 text-sm sm:text-base">
                <i class="fab fa-whatsapp text-xl sm:text-2xl mr-2 sm:mr-3 group-hover:animate__animated group-hover:animate__bounce"></i>
                <span>WhatsApp</span>
            </a>
            <a href="pages/contacto.php" 
               class="group inline-flex items-center bg-white hover:bg-gray-100 text-blue-900 font-semibold py-3 sm:py-4 px-6 sm:px-8 rounded-lg shadow-lg transition-all transform hover:scale-105 text-sm sm:text-base">
                <i class="fas fa-envelope text-xl sm:text-2xl mr-2 sm:mr-3 group-hover:animate__animated group-hover:animate__pulse"></i>
                <span>Formulario de Contacto</span>
            </a>
        </div>
    </div>
</section>

<!-- Botón flotante de WhatsApp -->
<a href="https://wa.me/56996952092?text=Hola,%20me%20interesa%20obtener%20información%20sobre%20sus%20servicios%20de%20calderas" class="whatsapp-button" target="_blank">
    <i class="fab fa-whatsapp"></i>
</a>

<!-- Footer -->
<?php include 'includes/footer.php'; ?>

<!-- Scripts adicionales para esta página -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Inicializar el carrusel Swiper
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                },
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