<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: views/login.php");
    exit();
}

require_once 'controllers/UserController.php';

$userController = new UserController();
$userData = $userController->getUserData($_SESSION['username']);

if (!$userData) {
    die("Error: Usuario no encontrado.");
}

include 'views/header.php';
include 'views/navbar.php';
?>

<div class="container">
    <h1>Hola, <?php echo htmlspecialchars($userData['nombre']);?>!</h1>
    <p><strong>Matrícula:</strong> <?php echo htmlspecialchars($userData['matricula']); ?></p>
    <p><strong>Teléfono:</strong> <?php echo htmlspecialchars($userData['telefono']); ?></p>
    <p><strong>Correo:</strong> <?php echo htmlspecialchars($userData['correo']); ?></p>
    <p><strong>Plantel:</strong> <?php echo htmlspecialchars($userData['plantel']); ?></p>
    <p><strong>Asistencia:</strong> <?php echo htmlspecialchars($userData['asistio']); ?></p>
    <p><strong>Status:</strong> <?php echo htmlspecialchars($userData['status']); ?></p>
    <p><strong>Pago:</strong> <?php echo htmlspecialchars($userData['fpago']); ?></p>
    <img src="data:image/jpeg;base64,<?php echo $userData['foto']; ?>" alt="Foto del usuario">
    <img src="data:image/jpeg;base64,<?php echo $userData['qr']; ?>" alt="Código QR">
</div>

<?php include 'views/footer.php'; ?>