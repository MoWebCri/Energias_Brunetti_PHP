<footer class="bg-dark text-white py-8 sm:py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <div>
                    <div class="flex items-center space-x-2 mb-3 sm:mb-4">
                        <img src="<?php echo $base_url; ?>assets/img/logos/logo_footer.png" 
                             alt="Logo Energías Brunetti" 
                             class="h-40 w-auto sm:h-25 rounded-md shadow ">
                    </div>
                    <p class="text-sm sm:text-base text-gray-300">Expertos en calderas industriales</p>
                </div>
                <div>
                    <h5 class="text-lg sm:text-xl font-bold mb-3 sm:mb-4">Contacto</h5>
                    <p class="text-sm sm:text-base text-gray-300">
                        <i class="fas fa-phone mr-2"></i> +56 9 96952092<br>
                        <i class="fas fa-envelope mr-2"></i> contacto@energiasbrunetti.cl
                    </p>
                </div>
                <div>
                    <h5 class="text-lg sm:text-xl font-bold mb-3 sm:mb-4">Síguenos</h5>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-300 hover:text-green-400 transition-colors">
                            <i class="fab fa-facebook text-xl sm:text-2xl"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-green-400 transition-colors">
                            <i class="fab fa-instagram text-xl sm:text-2xl"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-green-400 transition-colors">
                            <i class="fab fa-linkedin text-xl sm:text-2xl"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="text-center mt-6 sm:mt-8 pt-6 sm:pt-8 border-t border-gray-700">
                <p class="text-xs sm:text-sm">
                    © 2025 Energías Brunetti LTDA. Todos los derechos reservados.
                </p>
                <p class="text-xs mt-2 text-gray-400">
                    Creada por <a href="#" class="text-green-400 hover:text-green-300 transition-colors">MoWebCri</a>
                </p>
            </div>
        </div>
    </footer>
<!-- Scripts JS -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    // Inicialización de AOS (Animate On Scroll)
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true
    });
    
    // Mobile menu toggle
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    
    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    }
</script>
</body>
</html> 