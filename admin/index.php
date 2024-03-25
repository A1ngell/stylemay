<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración de Precios</title>
    <link rel="icon" href="assets/logo2.ico">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
    // Verificar si el usuario ha iniciado sesión como administrador
    session_start();
    if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
        // Si el usuario no ha iniciado sesión, redirigir al formulario de login
        header("Location: login.html");
        exit();
    }?>
    <?php
        include('conexion.php');
        $sel="SELECT id, nombre ,precio FROM autoprecio order by nombre";
        $resultado= $conex->query($sel);
        $contador=0;
    ?>

    <table border='3'>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Actualizar</th>
        </tr>

        <?php
            while ($fila = $resultado ->fetch_assoc()) {
                $contador=$contador+1
        ?>
        <tr>
            <td><?php echo $fila['id']?></td>
            <td><?php echo $fila['nombre']?></td>
            <td><?php echo $fila['precio']?></td>
            <td><a href='modificar.php?id=<?php echo $fila['id'] ?>'>Actualizar</a></td>
        </tr>
    <?php
    }  
    ?>
</body>
</html>