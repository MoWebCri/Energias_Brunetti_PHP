<?php include '../includes/header.php'; ?>

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
                <a href="../pages/servicios.php" class="bg-green-400 hover:bg-green-500 text-blue-900 font-semibold py-3 px-6 rounded-lg inline-block animate__animated animate__fadeInUp animate__delay-2s">
                    Nuestros Servicios
                </a>
                <a href="../pages/calderas.php" class="bg-white hover:bg-gray-100 text-blue-900 font-semibold py-3 px-6 rounded-lg inline-block animate__animated animate__fadeInUp animate__delay-2s">
                    Catálogo de Calderas
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Historia + Valores -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl font-bold mb-6 text-blue-900">Nuestra Historia</h2>
                <p class="text-xl mb-4 text-gray-700">Energías Brunetti nace con la misión de proporcionar soluciones energéticas eficientes y confiables para el sector industrial.</p>
                <p class="mb-4 text-gray-700">Con años de experiencia en el mercado, nos hemos consolidado como líderes en el sector de calderas industriales, ofreciendo productos y servicios de la más alta calidad.</p>
                <p class="text-gray-700">Nuestro compromiso con la excelencia y la satisfacción del cliente nos ha permitido crecer y mantener relaciones duraderas con empresas de diversos sectores industriales.</p>
            </div>
            <div class="bg-gradient-to-br from-green-50 to-blue-50 rounded-2xl shadow-xl p-8">
                <h3 class="text-2xl font-bold mb-8 text-green-600">Nuestros Valores</h3>
                <ul class="space-y-6">
                    <li class="flex items-start gap-4">
                        <span class="bg-green-400 text-blue-900 p-3 rounded-lg">
                            <i class="fas fa-star text-xl"></i>
                        </span>
                        <div>
                            <h4 class="text-lg font-semibold text-blue-900 mb-1">Excelencia</h4>
                            <p class="text-gray-600">Compromiso con la calidad en cada aspecto de nuestro trabajo.</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="bg-green-400 text-blue-900 p-3 rounded-lg">
                            <i class="fas fa-lightbulb text-xl"></i>
                        </span>
                        <div>
                            <h4 class="text-lg font-semibold text-blue-900 mb-1">Innovación</h4>
                            <p class="text-gray-600">Búsqueda constante de soluciones más eficientes y sostenibles.</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="bg-green-400 text-blue-900 p-3 rounded-lg">
                            <i class="fas fa-handshake text-xl"></i>
                        </span>
                        <div>
                            <h4 class="text-lg font-semibold text-blue-900 mb-1">Compromiso</h4>
                            <p class="text-gray-600">Dedicación total a la satisfacción de nuestros clientes.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Misión y Visión -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow-xl p-8 transform hover:scale-105 transition-transform duration-300">
                <h3 class="text-2xl font-bold mb-4 text-blue-900">Nuestra Misión</h3>
                <p class="text-gray-700">Proporcionar soluciones energéticas eficientes y confiables que contribuyan al éxito de nuestros clientes, manteniendo los más altos estándares de calidad y servicio.</p>
            </div>
            <div class="bg-white rounded-xl shadow-xl p-8 transform hover:scale-105 transition-transform duration-300">
                <h3 class="text-2xl font-bold mb-4 text-blue-900">Nuestra Visión</h3>
                <p class="text-gray-700">Ser reconocidos como líderes en el sector de soluciones energéticas industriales, innovando constantemente y manteniendo nuestro compromiso con la excelencia y la sostenibilidad.</p>
            </div>
        </div>
    </div>
</section>

<!-- Llamada a la acción -->
<section class="py-16 bg-gradient-to-r from-green-100 via-white to-blue-100">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-4 text-blue-900">¿Quieres trabajar con nosotros?</h2>
        <p class="text-xl mb-8 text-gray-700">Contáctanos y descubre cómo podemos ayudarte a optimizar tu consumo energético.</p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="https://wa.me/56996952092?text=Hola,%20me%20gustaría%20saber%20más%20sobre%20Energías%20Brunetti" target="_blank" class="inline-block bg-green-400 hover:bg-green-500 text-blue-900 font-semibold py-3 px-8 rounded-lg shadow-lg transition-all">
                <i class="fab fa-whatsapp mr-2"></i>WhatsApp
            </a>
            <a href="contacto.php" class="inline-block bg-blue-900 hover:bg-blue-800 text-white font-semibold py-3 px-8 rounded-lg shadow-lg transition-all">
                Formulario de Contacto
            </a>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?> 