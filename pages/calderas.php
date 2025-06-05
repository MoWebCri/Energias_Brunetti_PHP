<?php include '../includes/header.php'; ?>
<style>
    .card-hover {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .card-hover:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }
    .image-overlay {
        position: relative;
        overflow: hidden;
    }
    .image-overlay::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(to bottom, rgba(0,0,0,0) 0%, rgba(0,0,0,0.3) 100%);
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    .image-overlay:hover::after {
        opacity: 1;
    }
    .btn-primary {
        @apply bg-blue-700 hover:bg-blue-600 text-white font-semibold py-3 px-6 rounded-lg transition-all duration-300 transform hover:scale-105 hover:shadow-lg focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 focus:outline-none;
    }
    .btn-secondary {
        @apply bg-green-500 hover:bg-green-400 text-white font-semibold py-3 px-6 rounded-lg transition-all duration-300 transform hover:scale-105 hover:shadow-lg focus:ring-2 focus:ring-green-500 focus:ring-opacity-50 focus:outline-none;
    }
    .card-gradient {
        background: linear-gradient(135deg, var(--background-primary) 0%, var(--background-secondary) 100%);
    }
</style>
<!-- Hero Section para Calderas -->
<section class="relative text-white bg-dark py-16 md:py-24">
    <div class="absolute inset-0 z-0">
        <img src="<?php echo $base_url; ?>assets/img/camion.png" alt="Camión Energías Brunetti" class="w-full h-full object-cover opacity-30">
    </div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center max-w-3xl mx-auto">
            <h1 class="text-5xl md:text-6xl font-bold mb-6 animate__animated animate__fadeInDown">Energías Brunetti LTDA</h1>
            <p class="text-xl md:text-2xl mb-8 animate__animated animate__fadeInUp animate__delay-1s">Soluciones integrales en calderas industriales de última generación</p>
            <div class="flex flex-wrap justify-center gap-4 mt-24">
                <a href="../pages/servicios.php" class="bg-green-400 hover:bg-green-500 text-blue-900 font-semibold py-3 px-6 rounded-lg inline-block animate__animated animate__fadeInUp animate__delay-2s">
                    Nuestros Servicios
                </a>
                <a href="#calderas" class="bg-white hover:bg-gray-100 text-blue-900 font-semibold py-3 px-6 rounded-lg inline-block animate__animated animate__fadeInUp animate__delay-2s">
                    Catálogo de Calderas
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Sección de Calderas mejorada -->
<section id="calderas" class="py-24 bg-gradient-to-b from-neutral-50 to-white">
        <!-- Lista Completa de Calderas -->
        <div class="bg-white rounded-2xl shadow-2xl p-8 mb-20 backdrop-blur-sm bg-opacity-90" data-aos="fade-up">
            <h3 class="text-3xl font-bold text-blue-900 mb-16 text-center tracking-tight">Catálogo Completo de Calderas</h3>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
        <!-- Alta Capacidad -->
                <div class="card-gradient p-8 rounded-2xl shadow-lg card-hover" data-aos="fade-right" data-aos-delay="100">
                    <h4 class="text-2xl font-bold text-blue-900 mb-8 pb-3 border-b-2 border-blue-200 tracking-tight">Alta Capacidad</h4>
                    <div class="space-y-8">
                        <div class="bg-white rounded-xl shadow-md overflow-hidden card-hover">
                            <div class="image-overlay">
                                <img src="../assets/img/calderas/caldera_12000.png" 
                                     class="w-full h-64 object-cover transform transition-transform duration-500 hover:scale-110" 
                                     alt="Caldera Cleaver Brooks">
                            </div>
                            <div class="p-6">
                                <h5 class="text-xl font-bold text-blue-900 mb-3 tracking-tight">Cleaver Brooks</h5>
                                <p class="text-gray-600 mb-4 font-light">12.000 KHV Dual (Petróleo/Diesel)</p>
                                <a href="contacto.php" class="btn-secondary w-full text-center">
                                    <i class="fas fa-info-circle mr-2"></i>Solicitar Información
                                </a>
                            </div>
                        </div>
                        <div class="bg-white rounded-xl shadow-md overflow-hidden card-hover">
                            <div class="image-overlay">
                                <img src="../assets/img/calderas/caldera_12000.png" 
                                     class="w-full h-64 object-cover transform transition-transform duration-500 hover:scale-110" 
                                     alt="Caldera Paradies">
                    </div>
                            <div class="p-6">
                                <h5 class="text-xl font-bold text-blue-900 mb-3 tracking-tight">Paradies</h5>
                                <p class="text-gray-600 mb-4 font-light">10.000 KHV Dual (Petróleo/Diesel)</p>
                                <a href="contacto.php" class="btn-secondary w-full text-center">
                                    <i class="fas fa-info-circle mr-2"></i>Solicitar Información
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Media Capacidad -->
                <div class="card-gradient p-8 rounded-2xl shadow-lg card-hover" data-aos="fade-up" data-aos-delay="200">
                    <h4 class="text-2xl font-bold text-blue-900 mb-8 pb-3 border-b-2 border-blue-200 tracking-tight">Media Capacidad</h4>
                    <div class="space-y-8">
                        <div class="bg-white rounded-xl shadow-md overflow-hidden card-hover">
                            <div class="image-overlay">
                                <img src="../assets/img/calderas/caldera_5300.png" 
                                     class="w-full h-64 object-cover transform transition-transform duration-500 hover:scale-110" 
                                     alt="Caldera ABCO">
                    </div>
                            <div class="p-6">
                                <h5 class="text-xl font-bold text-blue-900 mb-3 tracking-tight">ABCO</h5>
                                <p class="text-gray-600 mb-4 font-light">8.000 KHV Dual (Petróleo/Diesel)</p>
                                <a href="contacto.php" class="btn-secondary w-full text-center">
                                    <i class="fas fa-info-circle mr-2"></i>Solicitar Información
                        </a>
                    </div>
                </div>
                        <div class="bg-white rounded-xl shadow-md overflow-hidden card-hover">
                            <div class="image-overlay">
                                <img src="../assets/img/calderas/caldera_5200.png" 
                                     class="w-full h-64 object-cover transform transition-transform duration-500 hover:scale-110" 
                                     alt="Caldera Geat Transfer">
                    </div>
                            <div class="p-6">
                                <h5 class="text-xl font-bold text-blue-900 mb-3 tracking-tight">Geat Transfer</h5>
                                <p class="text-gray-600 mb-4 font-light">5.300 KHV Dual (Petróleo/Diesel)</p>
                                <a href="contacto.php" class="btn-secondary w-full text-center">
                                    <i class="fas fa-info-circle mr-2"></i>Solicitar Información
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
                <!-- Baja Capacidad -->
                <div class="card-gradient p-8 rounded-2xl shadow-lg card-hover" data-aos="fade-left" data-aos-delay="300">
                    <h4 class="text-2xl font-bold text-blue-900 mb-8 pb-3 border-b-2 border-blue-200 tracking-tight">Baja Capacidad</h4>
                    <div class="space-y-8">
                        <div class="bg-white rounded-xl shadow-md overflow-hidden card-hover">
                            <div class="image-overlay">
                                <img src="../assets/img/calderas/caldera_2500.png" 
                                     class="w-full h-64 object-cover transform transition-transform duration-500 hover:scale-110" 
                                     alt="Caldera 2500 KHV">
                    </div>
                            <div class="p-6">
                                <h5 class="text-xl font-bold text-blue-900 mb-3 tracking-tight">Caldera Industrial</h5>
                                <p class="text-gray-600 mb-4 font-light">2.500 KHV Dual (Petróleo/Diesel)</p>
                                <a href="contacto.php" class="btn-secondary w-full text-center">
                                    <i class="fas fa-info-circle mr-2"></i>Solicitar Información
                        </a>
                    </div>
                </div>
                        <div class="bg-white rounded-xl shadow-md overflow-hidden card-hover">
                            <div class="image-overlay">
                                <img src="../assets/img/calderas/caldera_1000.png" 
                                     class="w-full h-64 object-cover transform transition-transform duration-500 hover:scale-110" 
                                     alt="Caldera Bríones">
                    </div>
                            <div class="p-6">
                                <h5 class="text-xl font-bold text-blue-900 mb-3 tracking-tight">Bríones</h5>
                                <p class="text-gray-600 mb-4 font-light">1.000 KHV Diesel</p>
                                <a href="contacto.php" class="btn-secondary w-full text-center">
                                    <i class="fas fa-info-circle mr-2"></i>Solicitar Información
                                </a>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                
            <!-- Edición Especial mejorada -->
            <div class="mt-16 bg-gradient-to-br from-red-50 to-white p-10 rounded-2xl shadow-xl" data-aos="zoom-in" data-aos-delay="400">
                <h4 class="text-2xl font-bold text-blue-900 mb-8 pb-3 border-b-2 border-red-200 text-center tracking-tight">Edición Especial</h4>
                <div class="max-w-4xl mx-auto">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                        <div class="flex flex-col md:flex-row gap-8 items-center p-6">
                            <div class="md:w-1/2 image-overlay">
                                <img src="../assets/img/calderas/caldera_5000_vapor.png" 
                                     class="w-full h-80 object-cover rounded-lg transform transition-transform duration-500 hover:scale-110" 
                                     alt="Caldera de Vapor Industrial">
                    </div>
                            <div class="md:w-1/2">
                                <h5 class="text-2xl font-bold text-blue-900 mb-4 tracking-tight">Caldera de Vapor Industrial</h5>
                                <p class="text-gray-600 mb-6 font-light">Caldera especializada en generación de vapor para procesos industriales que requieren alta presión y temperatura.</p>
                                <ul class="text-gray-600 mb-8 space-y-3">
                                    <li class="flex items-center transform hover:translate-x-2 transition-transform duration-300">
                                        <i class="fas fa-check text-red-500 mr-3"></i>
                                        <span class="font-light">Capacidad: 5.000 KHV</span>
                                    </li>
                                    <li class="flex items-center transform hover:translate-x-2 transition-transform duration-300">
                                        <i class="fas fa-check text-red-500 mr-3"></i>
                                        <span class="font-light">Tipo: Vapor Industrial</span>
                                    </li>
                                    <li class="flex items-center transform hover:translate-x-2 transition-transform duration-300">
                                        <i class="fas fa-check text-red-500 mr-3"></i>
                                        <span class="font-light">Especializada en procesos de vapor</span>
                                    </li>
                        </ul>
                                <a href="contacto.php" class="btn-primary w-full text-center">
                                    <i class="fas fa-info-circle mr-2"></i>Solicitar Información Especial
                        </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Galería de Imágenes -->
        <div class="bg-gradient-to-br from-blue-50 to-white rounded-xl shadow-xl p-8 mb-20" data-aos="fade-up">
            <h3 class="text-3xl font-bold text-blue-900 mb-8 text-center">Galería de Calderas Instaladas y en Ruta</h3>
            
            <!-- Calderas Instaladas -->
            <div class="mb-12" data-aos="fade-up" data-aos-delay="100">
                <h4 class="text-2xl font-bold text-blue-900 mb-6 pb-2 border-b-2 border-blue-200">Calderas Instaladas</h4>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Caldera 1000 KHV Instalada -->
                    <div class="bg-gray-200 rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300 animate__animated animate__fadeIn">
                        <img src="../assets/img/calderas/caldera_1000.png" 
                             class="w-full h-72 object-cover" 
                             alt="Caldera 1000 KHV Instalada">
                        <div class="p-6">
                            <h5 class="text-xl font-bold text-blue-900 mb-2">Caldera 1000 KHV</h5>
                            <p class="text-gray-600">Instalación Completada</p>
                        </div>
                    </div>
                    <!-- Caldera 5300 KHV Instalada -->
                    <div class="bg-gray-200 rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300 animate__animated animate__fadeIn animate__delay-1s">
                        <img src="../assets/img/calderas/caldera_5300.png" 
                             class="w-full h-72 object-cover" 
                             alt="Caldera 5300 KHV Instalada">
                        <div class="p-6">
                            <h5 class="text-xl font-bold text-blue-900 mb-2">Caldera 5300 KHV</h5>
                            <p class="text-gray-600">Instalación Completada</p>
                        </div>
                    </div>
                    <!-- Caldera 2500 KHV Instalada -->
                    <div class="bg-gray-200 rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300 animate__animated animate__fadeIn animate__delay-2s">
                        <img src="../assets/img/calderas/caldera_2500.png" 
                             class="w-full h-72 object-cover" 
                             alt="Caldera 2500 KHV Instalada">
                        <div class="p-6">
                            <h5 class="text-xl font-bold text-blue-900 mb-2">Caldera 2500 KHV</h5>
                            <p class="text-gray-600">Instalación Completada</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Calderas en Ruta -->
            <div data-aos="fade-up" data-aos-delay="200">
                <h4 class="text-2xl font-bold text-blue-900 mb-6 pb-2 border-b-2 border-blue-200">Calderas en Ruta</h4>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Caldera 12000 KHV en Ruta -->
                    <div class="bg-gray-200 rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300 animate__animated animate__fadeIn">
                        <img src="../assets/img/calderas/caldera_12000_ruta.png" 
                             class="w-full h-72 object-cover" 
                             alt="Caldera 12000 KHV en Ruta">
                        <div class="p-6">
                            <h5 class="text-xl font-bold text-blue-900 mb-2">Caldera 12000 KHV</h5>
                            <p class="text-gray-600">En Proceso de Instalación</p>
                        </div>
                    </div>
                    <!-- Caldera 5000 Vapor en Ruta -->
                    <div class="bg-gray-200 rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300 animate__animated animate__fadeIn animate__delay-1s">
                        <img src="../assets/img/calderas/caldera_5000_v_ruta.png" 
                             class="w-full h-72 object-cover" 
                             alt="Caldera 5000 Vapor en Ruta">
                        <div class="p-6">
                            <h5 class="text-xl font-bold text-blue-900 mb-2">Caldera 5000 Vapor</h5>
                            <p class="text-gray-600">En Proceso de Instalación</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Llamada a la acción -->
        <div class="text-center mt-16" data-aos="fade-up" data-aos-delay="300">
            <h3 class="text-3xl font-bold text-blue-900 mb-6">¿Necesitas asesoría para elegir tu caldera?</h3>
            <p class="text-xl text-gray-600 mb-8">Nuestro equipo de expertos te ayudará a encontrar la caldera perfecta para tu empresa.</p>
            <div class="flex flex-wrap justify-center gap-6">
                <a href="https://wa.me/56996952092?text=Hola,%20me%20interesa%20obtener%20información%20sobre%20sus%20calderas" 
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

<?php include '../includes/footer.php'; ?> 