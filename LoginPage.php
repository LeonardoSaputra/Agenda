<?php
session_start();
include "Database.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk mencari pengguna dengan username yang sesuai
    $sql = "SELECT * FROM users WHERE username = '$username'and password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // $username = $result->fetch_assoc();
        // Memeriksa apakah password cocok
        // if (password_verify($password, $username['password'])) {
        //     echo "Login berhasil!";
        //     $_SESSION['isLoggedIn'] = true;
        //     $_SESSION['username'] = $username;
        //     // $_SESSION['role'] = $username['role']; 
        //     header("Location: welcome.php");
        //     exit;
        // } else {
        //     echo "Login gagal! Password salah.";
        // }
    } else {
        echo "Login gagal! Pengguna tidak ditemukan.";
    }
}
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="POST">
        <div>
            <label for="Username">Username</label><br>
            <input type="text" name="username"/>
        </div>
            
        <div>
            <label for="Password">Password</label><br>
            <input type="password" name="password" />
        </div>
        
        <button type="submit" value="Submit">Login</button>
    </form>
</body>
</html>
