<?php
include "Database.php";
include "LoginPage.php";
// Memeriksa apakah pengguna sudah login
// if (!isset($_SESSION['isLoggedIn']) || $_SESSION['isLoggedIn'] !== true) {
//     header("Location: LoginPage.php"); // Redirect ke halaman login jika belum login
//     exit;
// }

$username = $_SESSION['username'];
$role = $_SESSION['role'];

// Pesan selamat datang berdasarkan peran pengguna
$welcomeMessage = '';
if ($role == 'admin') {
    $welcomeMessage = "Halo, Admin $username! Selamat datang!";
} else {
    $welcomeMessage = "Halo, $username! Selamat datang!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1>Agenda Perusahaan X</h1>
    <p><?php echo $welcomeMessage; ?></p>
    <a href="login_page.html">Logout</a>
</body>
</html>
