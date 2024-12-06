<?php
session_start();
include('includes/config.php');

if (!isset($_SESSION['doctor_logged_in'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Clinic Management System</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <header>
        <h1>Welcome to Clinic Management System</h1>
        <nav>
            <ul>
                <li><a href="patient.php">Patients</a></li>
                <li><a href="consultations.php">Consultations</a></li>
                <li><a href="statistics.php">Statistics</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Dashboard</h2>
        <p>Welcome, Dr. <?php echo $_SESSION['doctor_name']; ?>!</p>
    </main>
</body>
</html>
