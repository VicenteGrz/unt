<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once '../models/UserModel.php';
    $userModel = new UserModel();
    $userData = $userModel->getUserData($_POST['username']);
    
    if ($userData && password_verify($_POST['password'], $userData['password'])) {
        $_SESSION['username'] = $userData['username'];
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Usuario o contraseña incorrectos";
    }
}
?>

<form method="POST">
    <label>Usuario:</label>
    <input type="text" name="username" required>
    <label>Contraseña:</label>
    <input type="password" name="password" required>
    <button type="submit">Ingresar</button>
</form>