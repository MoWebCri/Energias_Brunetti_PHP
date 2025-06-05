<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : 'Energías Brunetti'; ?></title>
    <meta name="description" content="Empresa líder en distribución e instalación de calderas industriales en toda la región. Servicio técnico y mantenimiento especializado.">
    
    <?php
    // Fix paths for subpages
    $current_page = basename($_SERVER['PHP_SELF']);
    $base_url = '';
    if (strpos($_SERVER['PHP_SELF'], '/pages/') !== false) {
        $base_url = '../';
    }
    ?>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo $base_url; ?>favicon.ico" type="image/x-icon">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Tailwind CSS output -->
    <link rel="stylesheet" href="<?php echo $base_url; ?>dist/output.css">
    
    <!-- Custom styles (for any styles not handled by Tailwind) -->
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/style.css">
    
    <!-- Scripts -->
    <script src="https://unpkg.com/aos@next/dist/aos.js" defer></script>
    <script src="<?php echo $base_url; ?>assets/js/main.js" defer></script>
</head>
<body class="font-sans antialiased text-gray-900">

<header class="bg-dark text-white">
    <div class="container mx-auto px-4">
        <nav class="flex justify-between items-center py-4">
            <div class="flex items-center">
                <a href="<?php echo $base_url; ?>" class="flex items-center">
                    <img src="<?php echo $base_url; ?>assets/img/logos/logo_nav.png" alt="Logo Energías Brunetti" class="h-10 mr-3">
                    <span class="font-bold text-xl">Energías Brunetti</span>
                </a>
            </div>
            
            <div class="hidden md:flex space-x-6">
                <a href="<?php echo $base_url; ?>" class="hover:text-accent transition-colors <?php echo $active_page === 'home' ? 'text-accent' : ''; ?>">Inicio</a>
                <a href="<?php echo $base_url; ?>pages/sobre_nosotros.php" class="hover:text-accent transition-colors <?php echo $active_page === 'nosotros' ? 'text-accent' : ''; ?>">Nosotros</a>
                <a href="<?php echo $base_url; ?>pages/servicios.php" class="hover:text-accent transition-colors <?php echo $active_page === 'servicios' ? 'text-accent' : ''; ?>">Servicios</a>
                <a href="<?php echo $base_url; ?>pages/calderas.php" class="hover:text-accent transition-colors <?php echo $active_page === 'calderas' ? 'text-accent' : ''; ?>">Calderas</a>
                <a href="<?php echo $base_url; ?>pages/contacto.php" class="hover:text-accent transition-colors <?php echo $active_page === 'contacto' ? 'text-accent' : ''; ?>">Contacto</a>
            </div>
            
            <div class="md:hidden">
                <button type="button" class="text-white focus:outline-none" id="mobile-menu-button">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </nav>
        
        <!-- Mobile Menu -->
        <div class="md:hidden hidden" id="mobile-menu">
            <div class="flex flex-col space-y-4 py-4 border-t border-gray-700">
                <a href="<?php echo $base_url; ?>" class="hover:text-accent transition-colors <?php echo $active_page === 'home' ? 'text-accent' : ''; ?>">Inicio</a>
                <a href="<?php echo $base_url; ?>pages/sobre_nosotros.php" class="hover:text-accent transition-colors <?php echo $active_page === 'nosotros' ? 'text-accent' : ''; ?>">Nosotros</a>
                <a href="<?php echo $base_url; ?>pages/servicios.php" class="hover:text-accent transition-colors <?php echo $active_page === 'servicios' ? 'text-accent' : ''; ?>">Servicios</a>
                <a href="<?php echo $base_url; ?>pages/calderas.php" class="hover:text-accent transition-colors <?php echo $active_page === 'calderas' ? 'text-accent' : ''; ?>">Calderas</a>
                <a href="<?php echo $base_url; ?>pages/contacto.php" class="hover:text-accent transition-colors <?php echo $active_page === 'contacto' ? 'text-accent' : ''; ?>">Contacto</a>
            </div>
        </div>
    </div>
</header> 