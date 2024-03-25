<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <link rel="icon" href="assets/logo2.ico">
    <title>Servicios De Pestañas</title>
</head>
<body>
    <!-- BARRA DE NAVEGACION -->
    <header class="header">
        <nav class="nav">
            <ul class="nav-links">
                <li><a href="index.html#myCarousel">Inicio</a></li>
                <li><a href="index.html#nosotros">Sobre nosotros</a></li>
                <li><a href="index.html#servs">Nuestros Servicios:</a></li>
                <li><a href="Servicios De Pestañas.php">Pestañas</a></li>
                <li><a href="Servicio De Uñas.php">Uñas</a></li>
                <li><a href="Servicio De Cejas.php">Cejas</a></li>
                <li><a href="Servicio De Cosmetologia.php">Cosmetologia</a></li>
            </ul>
        </nav>
        <a href="index.html#contacto" class="btn"><button>Contacto</button></a>
    </header>

    <div class="dividendo">
        <div class="info">
            <h2 class="titulo">Lash Lifting</h2>
            <p class="texto">El Lash Lifting es un tratamiento que realza y da forma a las pestañas naturales para lograr un efecto de curvatura y elevación. Se utiliza una solución química suave para modificar temporalmente la estructura de las pestañas, proporcionando un rizo natural y duradero. En nuestro salón, ofrecemos este servicio con profesionales capacitados y productos de alta calidad para resaltar la belleza de tus ojos de manera segura y efectiva.</p>
            <span>(imagenes no relacionadas)</span>
        </div>
        <div class="precio" style="font-size: 24px;">
            <?php
            include('conexion.php');
            $sel="SELECT precio FROM autoprecio where nombre='Lash lifting'";
            $resultado= $conex->query($sel);
            $fila = $resultado ->fetch_assoc()
            ?>
            <?php echo"$". $fila['precio']?>
        </div>
        <img class="imginfo" src="assets/nosotras2.jpg" alt="">
    </div>

    <div class="dividendo">
        <div class="info">
            <h2 class="titulo">Nutricion</h2>
            <p class="texto">
            La Nutrición de Pestañas es un tratamiento diseñado para fortalecer y mejorar la salud de las pestañas naturales. Utilizando productos nutritivos y acondicionadores, este procedimiento ayuda a mantener las pestañas fuertes, flexibles y con un aspecto más saludable. En nuestro salón, ofrecemos servicios de Nutrición de Pestañas con productos de alta calidad, proporcionando un cuidado especializado para lograr unas pestañas más resistentes y radiantes.</p>
            <span>(imagenes no relacionadas)</span>
        </div>
        <div class="precio" style="font-size: 24px;">
            <?php
            include('conexion.php');
            $sel="SELECT precio FROM autoprecio where nombre='Nutricion'";
            $resultado= $conex->query($sel);
            $fila = $resultado ->fetch_assoc()
            ?>
            <?php echo"$". $fila['precio']?>
        </div>
        <img class="imginfo" src="assets/pestanabanner.jpg" alt="">
    </div>
    <div class="dividendo">
        <div class="info">
            <h2 class="titulo">Tinte</h2>
            <p class="texto">El Tinte para Pestañas es un procedimiento que consiste en aplicar un colorante especial a las pestañas para resaltar y definir su tono natural. Este tratamiento es ideal para realzar la apariencia de las pestañas, otorgándoles un color más intenso y vibrante. En nuestro salón, ofrecemos servicios de Tinte para Pestañas con productos de calidad, proporcionando a nuestros clientes una mirada más definida y expresiva sin necesidad de maquillaje diario.
            </p>
            <span>(imagenes no relacionadas)</span>
        </div>
        <div class="precio" style="font-size: 24px;">
            <?php
            include('conexion.php');
            $sel="SELECT precio FROM autoprecio where nombre='Tinte'";
            $resultado= $conex->query($sel);
            $fila = $resultado ->fetch_assoc()
            ?>
            <?php echo"$". $fila['precio']?>
        </div>
        <img class="imginfo" src="assets/cejaspag1.jpg" alt="">
    </div>

    <div class="dividendo">
        <div class="info">
            <h2 class="titulo">Extenciones de Pestañas</h2>
            <p class="texto">
            Las Extensiones de Pestañas son un tratamiento estético en el cual se aplican individualmente fibras sintéticas o de seda a las pestañas naturales, con el objetivo de agregar longitud, volumen y definición. Este procedimiento proporciona un aspecto más completo y dramático a las pestañas, creando una mirada intensa y expresiva. En nuestro salón de belleza, ofrecemos servicios de Extensiones de Pestañas con profesionales capacitados y materiales de alta calidad, garantizando resultados naturales y duraderos que realzan la belleza de los ojos.</p>
            <span>(imagenes no relacionadas)</span>
        </div>
        <div class="precio" style="font-size: 24px;">
            <?php
            include('conexion.php');
            $sel="SELECT precio FROM autoprecio where nombre='Extenciones de pestañas'";
            $resultado= $conex->query($sel);
            $fila = $resultado ->fetch_assoc()
            ?>
            <?php echo"$". $fila['precio']?>
        </div>
        <img class="imginfo" src="assets/cejaspag3.jpg" alt="">
    </div>

    <div class="dividendo">
        <div class="info">
            <h2 class="titulo">Tecnica clasica a mega volumen</h2>
            <p class="texto">La técnica clásica a mega volumen en extensiones de pestañas es un procedimiento especializado que implica la aplicación de múltiples extensiones más delgadas y ligeras en cada pestaña natural. Esta técnica busca lograr un efecto de volumen extremo y densidad, proporcionando una apariencia dramática y exuberante a las pestañas. En nuestro salón de belleza, ofrecemos servicios de extensiones de pestañas desde la técnica clásica hasta el mega volumen, utilizando habilidades avanzadas y productos de alta calidad para obtener resultados impactantes y personalizados según las preferencias de nuestros clientes.</p>
            <span>(imagenes no relacionadas)</span>
        </div>
        <div class="precio" style="font-size: 24px;">
            <?php
            include('conexion.php');
            $sel="SELECT precio FROM autoprecio where nombre='Mega volumen'";
            $resultado= $conex->query($sel);
            $fila = $resultado ->fetch_assoc()
            ?>
            <?php echo"$". $fila['precio']?>
        </div>
        <img class="imginfo" src="assets/pestanapag1.jpeg" alt="">
    </div>

    <div class="dividendo">
        <div class="info">
            <h2 class="titulo">Efecto humedo/rimel</h2>
            <p class="texto">El efecto húmedo o rimelado en extensiones de pestañas es un estilo que imita el aspecto de pestañas recién aplicado con máscara de pestañas. Se logra aplicando extensiones con una textura suave y brillosa, dando la apariencia de pestañas recién maquilladas con rimel. Este efecto aporta un toque de glamour y definición a las pestañas, resaltando la mirada de manera sutil y elegante. En nuestro salón de belleza, ofrecemos la opción de extensiones de pestañas con efecto húmedo o rimelado, utilizando productos de calidad para proporcionar un look pulido y natural con un toque de sofisticación.</p>
            <span>(imagenes no relacionadas)</span>
        </div>
        <div class="precio" style="font-size: 24px;">
            <?php
            include('conexion.php');
            $sel="SELECT precio FROM autoprecio where nombre='Efecto humedo'";
            $resultado= $conex->query($sel);
            $fila = $resultado ->fetch_assoc()
            ?>
            <?php echo"$". $fila['precio']?>
        </div>
        <img class="imginfo" src="assets/pestanapag2.jpeg" alt="">
    </div>

    <div class="dividendo">
        <div class="info">
            <h2 class="titulo">Foxy Lash</h2>
            <p class="texto">Las Extensiones de Pestañas Foxy son una técnica especializada que implica la aplicación de abanicos (fans) de 4 a 6 pelos en cada pestaña. Estos abanicos se colocan con largos ascendentes, creando un efecto intenso de ojos delineados. El objetivo es resaltar la mirada, especialmente en personas con pestañas naturalmente más cortas. En nuestro salón de belleza, ofrecemos servicios de Extensiones de Pestañas Foxy, utilizando abanicos y técnicas diseñadas para lograr un efecto impactante y una mirada intensa y expresiva. Nuestros profesionales capacitados utilizan productos de alta calidad para garantizar resultados duraderos y satisfactorios.</p>
            <span>(imagenes no relacionadas)</span>
        </div>
        <div class="precio" style="font-size: 24px;">
            <?php
            include('conexion.php');
            $sel="SELECT precio FROM autoprecio where nombre='Foxy lash'";
            $resultado= $conex->query($sel);
            $fila = $resultado ->fetch_assoc()
            ?>
            <?php echo"$". $fila['precio']?>
        </div>
        <img class="imginfo" src="assets/pestanapag3.jpeg" alt="">
    </div>

    <footer class="pie-de-pagina">
        <p>Derechos de autor © 2023 StyleMay. Todos los derechos reservados.</p>
        <p>Contacto: maymolina23@gmail.com | Teléfono: (+54 9 11) 32145466</p>
        <p><a href="https://www.tuempresa.com/politica-de-privacidad">Política de privacidad</a> | <a href="https://www.tuempresa.com/terminos-y-condiciones">Términos y condiciones</a></p>
    </footer>
</body>
</html>