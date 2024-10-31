<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $codigo = $_POST['codigo'];
  
    // Verificar código y mostrar alerta de bienvenida personalizada
    switch ($codigo) {
        case '74950634':
            $_SESSION['loggedin'] = true;
            header("Location: app.php");
            exit;
        case '76978478':
            $_SESSION['loggedin'] = true;
            header("Location: app.php");
            exit;
        default:
            $error = "Código incorrecto.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Iniciar Sesión - ECOSISTEMA</title>
</head>
<body>
    <div class="container">
        <h2>𝑰𝒏𝒊𝒄𝒊𝒂𝒓 𝑺𝒆𝒔𝒊ó𝒏</h2>
        <hr>
        <img src="logo.jpg" alt="" class="logo">
        <?php if (isset($error)) { echo "<p class='error'>$error</p>"; } ?>
        <form method="POST">
            <input type="text" name="codigo" placeholder="Ingrese el código" class="inpu" required>
            <button type="submit">𝗜𝗡𝗚𝗥𝗘𝗦𝗔𝗥</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>