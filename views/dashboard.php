<?php
session_start();
require_once '../controllers/UserController.php';
$userController = new UserController();
$userData = $userController->getUserData($_SESSION['username']);
$grades = $userController->getUserGrades($_SESSION['username']);
?>

<h1>Bienvenido, <?php echo htmlspecialchars($userData['nombre']); ?>!</h1>
<a href="calendario.php">Ver Calendario</a>
<a href="boleta.php">Ver Boleta de Calificaciones</a>
<a href="recursos.php">Recursos Digitales</a>
<a href="pagos.php">Próxima Fecha de Pago</a>
<a href="logout.php">Cerrar Sesión</a>