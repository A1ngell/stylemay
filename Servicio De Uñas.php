<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <link rel="icon" href="assets/logo2.ico">
    <title>Servicios De Unas</title>
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
            <h2 class="titulo">Belleza de Manos</h2>
            <p class="texto">
            En nuestro salón de belleza, ofrecemos servicios de belleza de manos que abarcan desde manicuras básicas hasta tratamientos especializados. Esto incluye cuidado de uñas, esmaltado, uñas de gel, nail art, tratamientos de hidratación, parafina para manos y manicuras spa. Utilizamos productos de alta calidad y técnicas especializadas para mejorar la apariencia y salud de tus manos.</p>
            <span>(imagenes no relacionadas)</span>
        </div>
        <div class="precio" style="font-size: 24px;">
            <?php
            include('conexion.php');
            $sel="SELECT precio FROM autoprecio where nombre='Belleza de manos'";
            $resultado= $conex->query($sel);
            $fila = $resultado ->fetch_assoc()
            ?>
            <?php echo"$". $fila['precio']?>
        </div>
        <img class="imginfo" src="assets/Uñas2.jpg" alt="">
    </div>

    <div class="dividendo">
        <div class="info">
            <h2 class="titulo">Kapping</h2>
            <p class="texto">El Kapping consiste en aplicar una fina capa de acrílico o gel fortificador sobre la uña que actuará como una barrera protectora. A diferencia de las uñas esculpidas, este baño en gel kapping no alarga la uña natural sino que acompaña el crecimiento de la misma y dura hasta 20 días.</p>
            <span>(imagenes no relacionadas)</span>
        </div>
        <div class="precio" style="font-size: 24px;">
            <?php
            include('conexion.php');
            $sel="SELECT precio FROM autoprecio where nombre='Kapping'";
            $resultado= $conex->query($sel);
            $fila = $resultado ->fetch_assoc()
            ?>
            <?php echo"$". $fila['precio']?>
        </div>
        <img class="imginfo" src="assets/Uñas1.jpg" alt="">
    </div>

    <div class="dividendo">
        <div class="info">
            <h2 class="titulo">Semi Permanente en Manos y Pies</h2>
            <p class="texto">Ofrecemos servicios de esmaltado semipermanente para manos y pies, utilizando un esmalte que se endurece con luz LED o UV. Este proceso proporciona un acabado duradero que puede resistir el desgaste diario y mantener un aspecto fresco y brillante durante más tiempo. El esmaltado semipermanente es una opción popular para aquellos que desean una manicura y pedicura de larga duración sin comprometer la calidad y el estilo. Nuestros profesionales utilizan productos de alta calidad para garantizar resultados satisfactorios y un cuidado duradero para tus manos y pies.</p>
            <span>(imagenes no relacionadas)</span>
        </div>
        <div class="precio" style="font-size: 24px;">
            <?php
            include('conexion.php');
            $sel="SELECT precio FROM autoprecio where nombre='Semi permanente en manos y pies'";
            $resultado= $conex->query($sel);
            $fila = $resultado ->fetch_assoc()
            ?>
            <?php echo"$". $fila['precio']?>
        </div>
        <img class="imginfo" src="assets/Uñas4.jpg" alt="">
    </div>

    <div class="dividendo">
        <div class="info">
            <h2 class="titulo">Uñas Esculpidas en Gel</h2>
            <p class="texto">Ofrecemos servicios de uñas esculpidas en gel, una técnica donde se aplica un gel moldeable y ligero sobre las uñas naturales o extensiones para crear una forma y longitud deseadas. Este gel se cura con luz LED o UV, proporcionando una uñas fuertes, flexibles y con un aspecto natural. Este método es ideal para quienes buscan una alternativa duradera y estética para lucir uñas hermosas y bien cuidadas.</p>
            <span>(imagenes no relacionadas)</span>
        </div>
        <div class="precio" style="font-size: 24px;">
            <?php
            include('conexion.php');
            $sel="SELECT precio FROM autoprecio where nombre='Uñas esculpidas en gel'";
            $resultado= $conex->query($sel);
            $fila = $resultado ->fetch_assoc()
            ?>
            <?php echo"$". $fila['precio']?>
        </div>
        <img class="imginfo" src="assets/Uñas5.jpg" alt="">
    </div>

    <div class="dividendo">
        <div class="info">
            <h2 class="titulo">Reconstruccion de Uñas</h2>
            <p class="texto">Ofrecemos servicios de reconstrucción de uñas, un tratamiento diseñado para mejorar la apariencia y salud de las uñas dañadas o debilitadas. Utilizando técnicas especializadas y materiales de alta calidad, nuestros profesionales trabajan para restaurar la forma, fuerza y belleza de las uñas afectadas. Ya sea debido a lesiones, uñas quebradizas o problemas estéticos, la reconstrucción de uñas es una solución personalizada para obtener resultados duraderos y estéticamente atractivos.</p>
            <span>(imagenes no relacionadas)</span>
        </div>
        <div class="precio" style="font-size: 24px;">
            <?php
            include('conexion.php');
            $sel="SELECT precio FROM autoprecio where nombre='Reconstruccion de uñas'";
            $resultado= $conex->query($sel);
            $fila = $resultado ->fetch_assoc()
            ?>
            <?php echo"$". $fila['precio']?>
        </div>
        <img class="imginfo" src="assets/Uñas3.jpg" alt="">
    </div>
    
    <footer class="pie-de-pagina">
        <p>Derechos de autor © 2023 StyleMay. Todos los derechos reservados.</p>
        <p>Contacto: maymolina23@gmail.com | Teléfono: (+54 9 11) 32145466</p>
        <p><a href="https://www.tuempresa.com/politica-de-privacidad">Política de privacidad</a> | <a href="https://www.tuempresa.com/terminos-y-condiciones">Términos y condiciones</a></p>
    </footer>
</body>
</html>