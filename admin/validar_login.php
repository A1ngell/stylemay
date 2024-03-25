<?php
session_start();

// Verificar las credenciales del administrador
$admin_username = "mayra123";
$admin_password = "12345";

if ($_POST["username"] === $admin_username && $_POST["password"] === $admin_password) {
    // Credenciales válidas, iniciar sesión como administrador
    $_SESSION['admin_logged_in'] = true;
    // Redirigir al panel de administración
    header("Location: index.php");
    exit();
} else {
    // Credenciales inválidas, redirigir de nuevo al formulario de login con un mensaje de error
    header("Location: login.html?error=1");
    exit();
}
?>