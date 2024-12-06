<?php
include('config.php');

function addPatient($cnp, $address, $birth_date, $age, $email, $phone) {
    global $conn;
    $sql = "INSERT INTO patients (cnp, address, birth_date, age, email, phone) 
            VALUES ('$cnp', '$address', '$birth_date', '$age', '$email', '$phone')";
    if ($conn->query($sql) === TRUE) {
        echo "New patient added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


?>
