<?php
session_start();
include("config/db.php");

if(!isset($_SESSION['user'])){
header("Location: auth/login.php");
exit();
}

$pacienti = $conn->query("SELECT COUNT(*) as total FROM pacienti")->fetch_assoc()['total'];
$programari = $conn->query("SELECT COUNT(*) as total FROM programari")->fetch_assoc()['total'];
$consultatii = $conn->query("SELECT COUNT(*) as total FROM consultatii")->fetch_assoc()['total'];
?>

<!DOCTYPE html>
<html>
<head>

<title>Dashboard Spital</title>
<link rel="stylesheet" href="style/style.css">

</head>

<body>

<header>
<h1>Sistem Management Spital</h1>
</header>

<nav>

<a href="dashboard.php">Dashboard</a>
<a href="pacienti/lista.php">Pacienti</a>
<a href="programari/istoric.php">Programari</a>
<a href="consultatii/istoric.php">Consultatii</a>
<a href="auth/logout.php">Logout</a>

</nav>

<div class="container">

<h2>Statistici</h2>

<p>Total Pacienti: <?php echo $pacienti; ?></p>
<p>Total Programari: <?php echo $programari; ?></p>
<p>Total Consultatii: <?php echo $consultatii; ?></p>

</div>

</body>
</html>