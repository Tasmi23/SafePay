<?php
session_start();
require_once('db.php');

if(isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password']; 
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $salary = $_POST['salary'];

    // Insert user data into database
    $query = "INSERT INTO employees (username, password, full_name, email, phone, address, salary)
              VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param('ssssssd', $username, $password, $full_name, $email, $phone, $address, $salary);

    if($stmt->execute()) {
        $_SESSION['message'] = 'Registration successful! You can now login.';
        header('Location: index.php');
        exit;
    } else {
        $_SESSION['error'] = 'Registration failed. Please try again.';
    }

    $stmt->close();
}

$mysqli->close();
?>
