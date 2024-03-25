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
            <h2 class="titulo">Limpiezas Faciales</h2>
            <p class="texto">Ofrecemos servicios de limpieza facial, un tratamiento que consiste en la aplicación de productos de limpieza especializados para eliminar suciedad, grasa, y células muertas de la piel facial. Este procedimiento ayuda a despejar los poros, prevenir brotes de acné y mejorar la textura de la piel. Puede incluir pasos como la exfoliación, extracción de comedones, aplicación de mascarillas y masajes faciales. En nuestro salón, utilizamos productos de alta calidad y técnicas especializadas para adaptar la limpieza facial a las necesidades específicas de la piel de cada cliente, proporcionando una piel más fresca, suave y revitalizada.</p>
            <span>(imagenes no relacionadas)</span>
        </div>
       <div class="precio" style="font-size: 24px;">
            <?php
            include('conexion.php');
            $sel="SELECT precio FROM autoprecio where nombre='Limpiezas faciales'";
            $resultado= $conex->query($sel);
            $fila = $resultado ->fetch_assoc()
            ?>
            <?php echo"$". $fila['precio']?>
        </div>
        <img class="imginfo" src="assets/cosmepag1.jpg" alt="">
    </div>

    <div class="dividendo">
        <div class="info">
            <h2 class="titulo">Punta de Diamante</h2>
            <p class="texto">Ofrecemos servicios de microdermoabrasión con punta de diamante, un tratamiento no invasivo que utiliza una punta recubierta de diamante para exfoliar suavemente la capa superficial de la piel. Este proceso ayuda a eliminar células muertas, estimular la regeneración celular y mejorar la apariencia de la piel. La microdermoabrasión con punta de diamante puede reducir manchas, líneas finas, y mejorar la textura general de la piel. En nuestro salón, nos esforzamos por proporcionar servicios de alta calidad, adaptando el tratamiento a las necesidades individuales de cada cliente para obtener resultados rejuvenecedores y una piel más radiante.</p>
            <span>(imagenes no relacionadas)</span>
        </div>
       <div class="precio" style="font-size: 24px;">
            <?php
            include('conexion.php');
            $sel="SELECT precio FROM autoprecio where nombre='Punta de diamante'";
            $resultado= $conex->query($sel);
            $fila = $resultado ->fetch_assoc()
            ?>
            <?php echo"$". $fila['precio']?>
        </div>
        <img class="imginfo" src="assets/cosmepag2.jpg" alt="">
    </div>

    <div class="dividendo">
        <div class="info">
            <h2 class="titulo">Limpiezas y Pulido Corporales</h2>
            <p class="texto">Ofrecemos servicios de limpieza y pulido corporales, tratamientos diseñados para rejuvenecer la piel del cuerpo. Combinamos técnicas de limpieza y exfoliación para eliminar impurezas y células muertas de la superficie de la piel. Este proceso puede incluir la aplicación de productos exfoliantes y masajes para mejorar la circulación sanguínea y dejar la piel suave y renovada. En nuestro salón, utilizamos productos de alta calidad y técnicas especializadas para adaptar la limpieza y pulido corporales a las necesidades específicas de cada cliente, proporcionando una experiencia relajante y resultados revitalizantes para la piel.</p>
            <span>(imagenes no relacionadas)</span>
        </div>
       <div class="precio" style="font-size: 24px;">
            <?php
            include('conexion.php');
            $sel="SELECT precio FROM autoprecio where nombre='Limpiezas y pulido corporales'";
            $resultado= $conex->query($sel);
            $fila = $resultado ->fetch_assoc()
            ?>
            <?php echo"$". $fila['precio']?>
        </div>
        <img class="imginfo" src="assets/cosmepag4.jpg" alt="">
    </div>

    <div class="dividendo">
        <div class="info">
            <h2 class="titulo">Blanqueamiento de Zonas </h2>
            <p class="texto">Ofrecemos servicios de blanqueamiento de zonas, un tratamiento que aborda la hiperpigmentación y oscurecimiento en áreas específicas del cuerpo, como las axilas, la entrepierna y el cuello. Este procedimiento utiliza productos especializados que pueden incluir ingredientes aclaradores y exfoliantes para mejorar la apariencia de la piel. El objetivo es reducir manchas oscuras, proporcionar un tono de piel más uniforme y promover una piel más clara y luminosa en estas áreas específicas. En nuestro salón, nos esforzamos por ofrecer servicios de alta calidad, adaptando el tratamiento a las necesidades individuales de cada cliente para lograr resultados satisfactorios y una piel más uniforme.</p>
            <span>(imagenes no relacionadas)</span>
        </div>
       <div class="precio" style="font-size: 24px;">
            <?php
            include('conexion.php');
            $sel="SELECT precio FROM autoprecio where nombre='Blanqueamiento de zonas'";
            $resultado= $conex->query($sel);
            $fila = $resultado ->fetch_assoc()
            ?>
            <?php echo"$". $fila['precio']?>
        </div>
        <img class="imginfo" src="assets/cosmepag3.jpg" alt="">
    </div>

    <footer class="pie-de-pagina">
        <p>Derechos de autor © 2023 StyleMay. Todos los derechos reservados.</p>
        <p>Contacto: maymolina23@gmail.com | Teléfono: (+54 9 11) 32145466</p>
        <p><a href="https://www.tuempresa.com/politica-de-privacidad">Política de privacidad</a> | <a href="https://www.tuempresa.com/terminos-y-condiciones">Términos y condiciones</a></p>
    </footer>
</body>
</html>