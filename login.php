<?php
session_start();
include 'db.php'; // Include database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role']; // Role comes from the button clicked

    // Check credentials for the selected role
    $sql = "SELECT * FROM users WHERE username = ? AND password = ? AND role = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $password, $role);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows == 1) {
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $role;

        // Redirect based on role
        if ($role == 'admin') {
            header("Location: admin.html");
        } elseif ($role == 'manager') {
            header("Location: manager.html");
        } elseif ($role == 'employee') {
            header("Location: employee.html");
        }
        exit();
    } else {
        echo "<script>alert('Invalid username, password, or role selection!'); window.location.href='index.php';</script>";
    }
}
?>
