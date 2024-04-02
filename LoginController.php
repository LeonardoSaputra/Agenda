<?php
session_start();
include "Database.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Query untuk mencari pengguna dengan username yang sesuai
    $sql = "SELECT * FROM users WHERE username = '$username' and password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        
        // Memeriksa apakah password cocok
        // if (password_verify($password, $username['password'])) {
        //     echo "Login berhasil!";
            $_SESSION['isLoggedIn'] = true;
            $_SESSION['username'] = $username;
            $role = $_POST['role'];
            $_SESSION['role'] = $role; 
            header("Location: welcome.php");
        //     exit;
        // } else {
        //     echo "Login gagal! Password salah.";
        // }
    } else {
        echo "Login gagal! Pengguna tidak ditemukan.";
    }
}
// session_destroy();
?>


