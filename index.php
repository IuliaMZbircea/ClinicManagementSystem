<?php
include('functions.php');

// Example to add a new patient
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cnp = $_POST['cnp'];
    $address = $_POST['address'];
    $birth_date = $_POST['birth_date'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    addPatient($cnp, $address, $birth_date, $age, $email, $phone);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinic Management</title>
</head>
<body>
    <h1>Add a New Patient</h1>
    <form method="post">
        <input type="text" name="cnp" placeholder="CNP" required>
        <input type="text" name="address" placeholder="Address" required>
        <input type="date" name="birth_date" required>
        <input type="number" name="age" placeholder="Age" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="tel" name="phone" placeholder="Phone" required>
        <button type="submit">Add Patient</button>
    </form>
</body>
</html>
