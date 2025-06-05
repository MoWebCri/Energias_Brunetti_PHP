<nav class="bg-white sticky top-0 shadow-sm z-50">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
        <a href="<?php echo $base_url; ?>" class="flex items-center text-primary font-bold">
            <img src="<?php echo $base_url; ?>assets/img/logos/logo_nav.png" alt="Logo Energías Brunetti" class="h-10 mr-3">
            <span>Energías Brunetti LTDA</span>
        </a>
        
        <button class="md:hidden text-primary text-xl focus:outline-none" id="navbar-toggle">
            <i class="fas fa-bars"></i>
        </button>
        
        <div class="hidden md:flex space-x-6" id="navbar-menu">
            <a href="<?php echo $base_url; ?>" class="text-primary font-medium hover:text-accent relative after:absolute after:bottom-[-5px] after:left-0 after:w-0 after:h-0.5 after:bg-accent after:transition-all hover:after:w-full">Inicio</a>
            <a href="<?php echo $base_url; ?>pages/servicios.php" class="text-primary font-medium hover:text-accent relative after:absolute after:bottom-[-5px] after:left-0 after:w-0 after:h-0.5 after:bg-accent after:transition-all hover:after:w-full">Servicios</a>
            <a href="<?php echo $base_url; ?>pages/calderas.php" class="text-primary font-medium hover:text-accent relative after:absolute after:bottom-[-5px] after:left-0 after:w-0 after:h-0.5 after:bg-accent after:transition-all hover:after:w-full">Calderas</a>
            <a href="<?php echo $base_url; ?>pages/sobre_nosotros.php" class="text-primary font-medium hover:text-accent relative after:absolute after:bottom-[-5px] after:left-0 after:w-0 after:h-0.5 after:bg-accent after:transition-all hover:after:w-full">Sobre Nosotros</a>
            <a href="<?php echo $base_url; ?>pages/contacto.php" class="text-primary font-medium hover:text-accent relative after:absolute after:bottom-[-5px] after:left-0 after:w-0 after:h-0.5 after:bg-accent after:transition-all hover:after:w-full">Contacto</a>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const navbarToggle = document.getElementById('navbar-toggle');
        const navbarMenu = document.getElementById('navbar-menu');
        
        navbarToggle.addEventListener('click', function() {
            navbarMenu.classList.toggle('hidden');
            navbarMenu.classList.toggle('flex');
            navbarMenu.classList.toggle('flex-col');
            navbarMenu.classList.toggle('absolute');
            navbarMenu.classList.toggle('top-16');
            navbarMenu.classList.toggle('left-0');
            navbarMenu.classList.toggle('right-0');
            navbarMenu.classList.toggle('bg-white');
            navbarMenu.classList.toggle('p-4');
            navbarMenu.classList.toggle('shadow-md');
        });
    });
</script> 