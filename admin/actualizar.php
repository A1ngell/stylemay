<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
</head>
<body>
    <?php
        $id=$_REQUEST['id'];
        $n=$_GET['nom'];
        $p=$_GET['pre'];
        echo $id;
        echo $n;
        echo $p;
        echo "<br>";
        $update="UPDATE autoprecio SET nombre='$n', precio=$p    WHERE id = $id";
        include ('conexion.php');
        $r=$conex->query($update);
        header ('Location: index.php');
    ?>
</body>
</html>