<?php
session_start();
include "Database.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    // $role = $_POST['role'];
    // Query untuk mencari pengguna dengan username yang sesuai
    $stmt = $conn->prepare("SELECT username, hashed_password, role FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Memeriksa apakah password cocok
        $users = $result -> fetch_assoc();
        $stored_password_hashed = $users['hashed_password'];
        if (password_verify($password, $stored_password_hashed)) {
                echo "Login berhasil!";
            $_SESSION['isLoggedIn'] = true;
            $_SESSION['username'] = $users['username'];
            
            $_SESSION['role'] = $users['role']; 
            header("Location: welcome.php");
            exit;
        } else {
            echo "Login gagal! Password salah.";
            echo '<br> <a href="login_page.html">Back</a>';
        }
    } else {
        echo "Login gagal! Pengguna tidak ditemukan.";
        echo '<br> <a href="login_page.html">Back</a>';
    }
}
?>

