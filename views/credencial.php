<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

require_once '../controllers/UserController.php';

$userController = new UserController();
$userData = $userController->getUserData($_SESSION['username']);

if (!$userData) {
    die("Error: Usuario no encontrado.");
}

include 'header.php';
include 'navbar.php';
?>

<div class="credencial-container">
    <div class="credencial-header">
        <h1>UVM</h1>
    </div>
    <div class="credencial-body">
        <div class="user-info">
            <h2><?php echo htmlspecialchars($userData['nombre']); ?></h2>
            <p><?php echo htmlspecialchars($userData['carrera']); ?></p>
            <p><?php echo htmlspecialchars($userData['plantel']); ?></p>
        </div>
        <div class="user-details">
            <p><strong>Matrícula:</strong> <?php echo htmlspecialchars($userData['matricula']); ?></p>
            <p><strong>Vence el:</strong> <?php echo htmlspecialchars($userData['fecha_vencimiento']); ?></p>
        </div>
        <div class="user-images">
            <img src="data:image/jpeg;base64,<?php echo $userData['foto']; ?>" alt="Foto del usuario">
            <img src="data:image/jpeg;base64,<?php echo $userData['qr']; ?>" alt="Código QR">
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>