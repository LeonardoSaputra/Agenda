<?php
session_start();
include "Database.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    // Query untuk mencari pengguna dengan username yang sesuai
    $stmt = $conn->prepare("SELECT username, password, role FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $username = $result -> fetch_assoc();
        // Memeriksa apakah password cocok
        // if (password_verify($password, $username['password'])) {
        //     echo "Login berhasil!";
            // $_SESSION['isLoggedIn'] = true;
            $_SESSION['username'] = $username['username'];
            
            $_SESSION['role'] = $username['role']; 
            header("Location: welcome.php");
        //     exit;
        // } else {
        //     echo "Login gagal! Password salah.";
        // }
    } else {
        echo "Login gagal! Pengguna tidak ditemukan.";
        echo '<br> <a href="login_page.html">Back</a>';
    }
}

?>


