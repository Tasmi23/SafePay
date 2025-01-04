<?php
session_start();
require_once('db.php');

if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Retrieve user data from database
    $query = "SELECT * FROM employees WHERE username = ? AND password = ?";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param('ss', $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['username'] = $row['username'];
        $_SESSION['full_name'] = $row['full_name'];
        $_SESSION['salary'] = $row['salary'];
        header('Location: dashboard.php');
        exit;
    } else {
        $_SESSION['error'] = 'Invalid username or password. Please try again.';
        header('Location: index.php');
        exit;
    }
}

$mysqli->close();
?>
