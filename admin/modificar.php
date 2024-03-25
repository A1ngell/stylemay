<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles2.css">
    <link rel="icon" href="assets/logo2.ico">
	<title>Formulario Para modificar Registros</title>
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
	<h3>Modificar registros</h3>
	<?php
    $id = $_REQUEST['id'];
    include('conexion.php');
    $sel = "SELECT id, nombre, precio FROM autoprecio WHERE id = $id";
    $res = $conex->query($sel);
    $dato = $res->fetch_assoc();     
    ?>
	<form action="actualizar.php" method="get">
		Ingresa el nombre
        <input type="text" name="nom"  value="<?php echo $dato['nombre']?>">
        <br>
        Ingresa el precio
        <input type="text" name="pre"  value="<?php echo $dato['precio']?>">
        <br>
        <input type="hidden" name="id"  value="<?php echo $id?>">
        <input type="submit" name="" value="Actualizar">
       
	</form>
</body>
</html>
