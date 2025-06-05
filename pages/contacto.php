<?php include '../includes/header.php'; ?>

/**
 * Función para validar un RUT chileno
 * @param string $rut El RUT a validar
 * @return bool True si el RUT es válido, False en caso contrario
 */
function validarRut($rut) {
    // Eliminar puntos y guión del RUT
    $rut = str_replace(['.', '-'], '', $rut);
    
    // Validar formato
    if (!preg_match('/^[0-9]{7,8}[0-9K]$/', $rut)) {
        return false;
    }
    
    // Separar número y dígito verificador
    $numero = substr($rut, 0, strlen($rut) - 1);
    $dv = strtoupper(substr($rut, -1));
    
    // Calcular dígito verificador
    $factor = 2;
    $suma = 0;
    
    for ($i = strlen($numero) - 1; $i >= 0; $i--) {
        $suma += $numero[$i] * $factor;
        $factor = $factor == 7 ? 2 : $factor + 1;
    }
    
    $dvCalculado = 11 - ($suma % 11);
    
    if ($dvCalculado == 11) {
        $dvCalculado = '0';
    } elseif ($dvCalculado == 10) {
        $dvCalculado = 'K';
    } else {
        $dvCalculado = (string)$dvCalculado;
    }
    
    return $dv == $dvCalculado;
}

/**
 * Función para verificar el límite de envíos por email
 * @param string $email Dirección de correo electrónico
 * @param int $limite Límite de envíos permitidos (5 por defecto)
 * @return bool True si no se ha excedido el límite, False en caso contrario
 */
function verificarLimiteEnvios($email, $limite = 5) {
    $archivo_registro = "../logs/envios_email.json";
    $tiempo_actual = time();
    $tiempo_limite = 24 * 60 * 60; // 24 horas en segundos
    
    // Crear directorio de logs si no existe
    if (!is_dir("../logs")) {
        @mkdir("../logs", 0755, true);
    }
    
    // Leer archivo de registro o crear uno nuevo
    if (file_exists($archivo_registro)) {
        $registro = json_decode(file_get_contents($archivo_registro), true);
    } else {
        $registro = [];
    }
    
    // Limpiar registros antiguos (más de 24 horas)
    foreach ($registro as $email_registro => $datos) {
        foreach ($datos as $timestamp => $count) {
            if ($tiempo_actual - $timestamp > $tiempo_limite) {
                unset($registro[$email_registro][$timestamp]);
            }
        }
        // Eliminar emails sin registros
        if (empty($registro[$email_registro])) {
            unset($registro[$email_registro]);
        }
    }
    
    // Verificar límite para el email actual
    $contador = 0;
    if (isset($registro[$email])) {
        foreach ($registro[$email] as $count) {
            $contador += $count;
        }
    }
    
    // Si no ha excedido el límite, registrar el envío
    if ($contador < $limite) {
        if (!isset($registro[$email])) {
            $registro[$email] = [];
        }
        $registro[$email][$tiempo_actual] = 1;
        file_put_contents($archivo_registro, json_encode($registro));
        return true;
    }
    
    return false;
}

// Mensajes de error
$errores = [];

// Procesar el formulario cuando se envía
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario y sanitizarlos
    $empresa = isset($_POST['empresa']) ? htmlspecialchars(trim($_POST['empresa'])) : '';
    $rut = isset($_POST['rut']) ? htmlspecialchars(trim($_POST['rut'])) : '';
    $nombre = isset($_POST['nombre']) ? htmlspecialchars(trim($_POST['nombre'])) : '';
    $email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_SANITIZE_EMAIL) : '';
    $telefono = isset($_POST['telefono']) ? htmlspecialchars(trim($_POST['telefono'])) : '';
    $mensaje = isset($_POST['mensaje']) ? htmlspecialchars(trim($_POST['mensaje'])) : '';
    
    // Validar RUT
    if (!validarRut($rut)) {
        $errores[] = "El RUT ingresado no es válido. Por favor verifica el formato y el dígito verificador.";
    }
    
    // Verificar límite de envíos por email
    if (!verificarLimiteEnvios($email)) {
        $errores[] = "Has excedido el límite de 5 envíos en 24 horas. Por favor, intenta más tarde o contáctanos por WhatsApp.";
    }
    
    // Si no hay errores, proceder con el envío
    if (empty($errores)) {
        // Destinatario del correo (el correo de la empresa)
        $para = "contacto@mowebcri.com";
        
        // Asunto del correo
        $asunto = "Nuevo mensaje de contacto desde el sitio web - " . $empresa;
        
        // Construir el cuerpo del mensaje
        $mensaje_correo = "Se ha recibido un nuevo mensaje desde el formulario de contacto:\n\n";
        $mensaje_correo .= "Empresa: " . $empresa . "\n";
        $mensaje_correo .= "RUT: " . $rut . "\n";
        $mensaje_correo .= "Nombre: " . $nombre . "\n";
        $mensaje_correo .= "Email: " . $email . "\n";
        $mensaje_correo .= "Teléfono: " . $telefono . "\n\n";
        $mensaje_correo .= "Mensaje:\n" . $mensaje . "\n";
        
        // Guardar una copia del mensaje en un archivo de registro
        $fecha_hora = date('Y-m-d H:i:s');
        $log_mensaje = "====================\n";
        $log_mensaje .= "Fecha y Hora: " . $fecha_hora . "\n";
        $log_mensaje .= $mensaje_correo . "\n";
        
        $archivo_log = "../logs/contactos.log";
        // Asegurar que el directorio exista
        if (!is_dir("../logs")) {
            @mkdir("../logs", 0755, true);
        }
        
        // Intentar guardar en el archivo de registro
        @file_put_contents($archivo_log, $log_mensaje, FILE_APPEND);
        
        // Cabeceras del correo
        $cabeceras = "From: contacto@mowebcri.com\r\n"; // Usar el dominio propio para evitar problemas de spam
        $cabeceras .= "Reply-To: " . $email . "\r\n";
        $cabeceras .= "X-Mailer: PHP/" . phpversion() . "\r\n";
        $cabeceras .= "MIME-Version: 1.0\r\n";
        $cabeceras .= "Content-Type: text/plain; charset=UTF-8\r\n";
        
        // Enviar el correo
        $enviado = @mail($para, $asunto, $mensaje_correo, $cabeceras);
        
        // Variable para mostrar mensaje de éxito o error
        $mensaje_estado = "";
        
        if ($enviado) {
            $mensaje_estado = "success";
        } else {
            $mensaje_estado = "error";
        }
    }
} ?>

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

<!-- Sección de Contacto -->
<section class="py-12 md:py-16 lg:py-20 bg-gradient-to-b from-white to-gray-50">
    <div class="container mx-auto px-4 sm:px-6">
        <?php if (isset($mensaje_estado) && $mensaje_estado == "success"): ?>
        <!-- Mensaje de éxito -->
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-8" role="alert">
            <strong class="font-bold">¡Mensaje enviado!</strong>
            <span class="block sm:inline"> Gracias por contactarnos. Nos pondremos en contacto contigo a la brevedad.</span>
        </div>
        <?php elseif (isset($mensaje_estado) && $mensaje_estado == "error"): ?>
        <!-- Mensaje de error -->
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-8" role="alert">
            <strong class="font-bold">¡Error!</strong>
            <span class="block sm:inline"> No se pudo enviar el mensaje. Por favor, inténtalo de nuevo más tarde o contáctanos directamente por WhatsApp.</span>
        </div>
        <?php elseif (!empty($errores)): ?>
        <!-- Errores de validación -->
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-8" role="alert">
            <strong class="font-bold">¡Error!</strong>
            <ul class="mt-2 list-disc list-inside">
                <?php foreach ($errores as $error): ?>
                <li><?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <?php endif; ?>
        
        <div class="grid lg:grid-cols-2 gap-8 md:gap-12 items-start">
            <!-- Información de Contacto -->
            <div class="space-y-6 md:space-y-8" data-aos="fade-right">
                <div class="bg-white rounded-xl shadow-xl p-6 md:p-8 transform hover:scale-105 transition-all duration-300">
                    <h2 class="text-2xl md:text-3xl font-bold text-blue-900 mb-4 md:mb-6">Información de Contacto</h2>
                    <div class="space-y-4 md:space-y-6">
                        <div class="flex items-start space-x-3 md:space-x-4">
                            <div class="w-10 h-10 md:w-12 md:h-12 bg-blue-900 rounded-full flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-building text-white text-lg md:text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-blue-900 text-base md:text-lg">Empresa</h3>
                                <p class="text-gray-600 text-sm md:text-base">Energías Brunetti LTDA</p>
                                <p class="text-xs md:text-sm text-gray-500">RUT: 77.777.777-7</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3 md:space-x-4">
                            <div class="w-10 h-10 md:w-12 md:h-12 bg-blue-900 rounded-full flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-phone text-white text-lg md:text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-blue-900 text-base md:text-lg">Teléfono</h3>
                                <p class="text-gray-600 text-sm md:text-base">+56 9 9695 2092</p>
                                <p class="text-xs md:text-sm text-gray-500">Disponible 24/7 para emergencias</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3 md:space-x-4">
                            <div class="w-10 h-10 md:w-12 md:h-12 bg-blue-900 rounded-full flex items-center justify-center flex-shrink-0">
                                <i class="fab fa-whatsapp text-white text-lg md:text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-blue-900 text-base md:text-lg">WhatsApp</h3>
                                <p class="text-gray-600 text-sm md:text-base">+56 9 9695 2092</p>
                                <p class="text-xs md:text-sm text-gray-500">Respuesta rápida en horario laboral</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3 md:space-x-4">
                            <div class="w-10 h-10 md:w-12 md:h-12 bg-blue-900 rounded-full flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-envelope text-white text-lg md:text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-blue-900 text-base md:text-lg">Email</h3>
                                <p class="text-gray-600 text-sm md:text-base">contacto@mowebcri.com</p>
                                <p class="text-xs md:text-sm text-gray-500">Respondemos en menos de 24 horas</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Botón de WhatsApp -->
                <a href="https://wa.me/56996952092?text=Hola,%20me%20interesa%20obtener%20información%20sobre%20sus%20servicios%20de%20calderas" 
                   target="_blank"
                   class="block w-full bg-green-400 hover:bg-green-500 text-blue-900 font-semibold py-3 md:py-4 px-6 md:px-8 rounded-xl shadow-lg transition-all transform hover:scale-105 text-center group">
                    <div class="flex items-center justify-center">
                        <i class="fab fa-whatsapp text-xl md:text-2xl mr-2 md:mr-3 group-hover:animate__animated group-hover:animate__bounce"></i>
                        <span class="text-base md:text-lg">Chatear por WhatsApp</span>
                    </div>
                </a>
            </div>

            <!-- Formulario de Contacto -->
            <div class="bg-white rounded-xl shadow-xl p-6 md:p-8" data-aos="fade-left">
                <h2 class="text-2xl md:text-3xl font-bold text-blue-900 mb-4 md:mb-6">Envíanos un mensaje</h2>
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="space-y-4 md:space-y-6">
                    
                    <!-- Nombre Empresa -->
                    <div class="space-y-1 md:space-y-2">
                        <label for="empresa" class="block text-sm font-medium text-gray-700">
                            Nombre Empresa
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-building text-gray-400 text-sm md:text-base"></i>
                            </div>
                            <input type="text" name="empresa" id="empresa" class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" placeholder="Nombre de tu empresa" required>
                        </div>
                    </div>

                    <!-- RUT Empresa -->
                    <div class="space-y-1 md:space-y-2">
                        <label for="rut" class="block text-sm font-medium text-gray-700">
                            RUT Empresa
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-id-card text-gray-400 text-sm md:text-base"></i>
                            </div>
                            <input type="text" name="rut" id="rut" class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" placeholder="XX.XXX.XXX-X" required>
                        </div>
                    </div>
                    
                    <!-- Nombre y Apellido -->
                    <div class="space-y-1 md:space-y-2">
                        <label for="nombre" class="block text-sm font-medium text-gray-700">
                            Nombre y Apellido
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-user text-gray-400 text-sm md:text-base"></i>
                            </div>
                            <input type="text" name="nombre" id="nombre" class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" placeholder="Tu nombre y apellido" required>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="space-y-1 md:space-y-2">
                        <label for="email" class="block text-sm font-medium text-gray-700">
                            Correo electrónico
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-envelope text-gray-400 text-sm md:text-base"></i>
                            </div>
                            <input type="email" name="email" id="email" class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" placeholder="tucorreo@ejemplo.com" required>
                        </div>
                    </div>

                    <!-- Número Celular -->
                    <div class="space-y-1 md:space-y-2">
                        <label for="telefono" class="block text-sm font-medium text-gray-700">
                            Número Celular
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-mobile-alt text-gray-400 text-sm md:text-base"></i>
                            </div>
                            <input type="tel" name="telefono" id="telefono" class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" placeholder="+56 9 1234 5678" required>
                        </div>
                    </div>

                    <!-- Mensaje -->
                    <div class="space-y-1 md:space-y-2">
                        <label for="mensaje" class="block text-sm font-medium text-gray-700">
                            Mensaje
                        </label>
                        <div class="relative">
                            <div class="absolute top-3 left-3 flex items-start pointer-events-none">
                                <i class="fas fa-comment-alt text-gray-400 text-sm md:text-base"></i>
                            </div>
                            <textarea name="mensaje" id="mensaje" rows="4" class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" placeholder="Escribe tu mensaje aquí..." required></textarea>
                        </div>
                    </div>

                    <!-- Botón de envío -->
                    <button type="submit" 
                            class="w-full bg-blue-900 hover:bg-blue-800 text-white font-semibold py-3 md:py-4 px-6 md:px-8 rounded-xl shadow-lg transition-all transform hover:scale-105 group">
                        <div class="flex items-center justify-center">
                            <i class="fas fa-paper-plane text-lg md:text-xl mr-2 md:mr-3 group-hover:animate__animated group-hover:animate__bounce"></i>
                            <span class="text-base md:text-lg">Enviar Mensaje</span>
                        </div>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Scripts adicionales para esta página -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Validación del RUT en tiempo real
        const rutInput = document.getElementById('rut');
        if (rutInput) {
            rutInput.addEventListener('blur', function() {
                const rutValue = this.value.trim();
                if (rutValue !== '') {
                    if (!validarRutJs(rutValue)) {
                        this.classList.add('border-red-500');
                        this.classList.remove('border-gray-300');
                        
                        // Verificar si ya existe un mensaje de error
                        let errorElement = this.parentNode.parentNode.querySelector('.rut-error');
                        if (!errorElement) {
                            errorElement = document.createElement('p');
                            errorElement.className = 'rut-error text-red-500 text-xs mt-1';
                            this.parentNode.parentNode.appendChild(errorElement);
                        }
                        errorElement.textContent = 'RUT inválido. Formato correcto: 12.345.678-9';
                    } else {
                        this.classList.remove('border-red-500');
                        this.classList.add('border-gray-300');
                        
                        // Eliminar mensaje de error si existe
                        const errorElement = this.parentNode.parentNode.querySelector('.rut-error');
                        if (errorElement) {
                            errorElement.remove();
                        }
                    }
                }
            });
            
            // Formatear RUT mientras se escribe
            rutInput.addEventListener('input', function() {
                let value = this.value.replace(/[^0-9kK-]/g, '');
                
                // Aplicar formato 12.345.678-9
                if (value.length > 1) {
                    let result = '';
                    let parts = value.split('-');
                    let num = parts[0].replace(/\./g, '');
                    
                    // Formatear la parte numérica
                    for (let i = 0; i < num.length; i++) {
                        if (i > 0 && i % 3 === 0 && i < num.length - 1) {
                            result = '.' + result;
                        }
                        result = num[num.length - 1 - i] + result;
                    }
                    
                    // Añadir guión y dígito verificador
                    if (parts.length > 1) {
                        result += '-' + parts[1].substring(0, 1);
                    } else if (value.includes('-')) {
                        result += '-';
                    }
                    
                    this.value = result;
                }
            });
        }
    });
    
    // Función para validar RUT chileno en JavaScript
    function validarRutJs(rut) {
        // Eliminar puntos y guión
        rut = rut.replace(/\./g, '').replace(/-/g, '');
        
        // Validar formato
        if (!/^[0-9]{7,8}[0-9kK]$/i.test(rut)) {
            return false;
        }
        
        // Separar número y dígito verificador
        const dv = rut.slice(-1).toUpperCase();
        const numero = parseInt(rut.slice(0, -1), 10);
        
        // Calcular dígito verificador
        let suma = 0;
        let multiplicador = 2;
        
        // Recorrer dígitos de derecha a izquierda
        let numeroStr = numero.toString();
        for (let i = numeroStr.length - 1; i >= 0; i--) {
            suma += parseInt(numeroStr.charAt(i), 10) * multiplicador;
            multiplicador = multiplicador === 7 ? 2 : multiplicador + 1;
        }
        
        // Calcular dígito verificador
        let dvCalculado = 11 - (suma % 11);
        
        // Convertir a string según reglas del RUT
        if (dvCalculado === 11) {
            dvCalculado = '0';
        } else if (dvCalculado === 10) {
            dvCalculado = 'K';
        } else {
            dvCalculado = dvCalculado.toString();
        }
        
        // Comparar con el dígito verificador del RUT
        return dv === dvCalculado;
    }
</script>
<?php include '../includes/footer.php'; ?> 