<?php
include "admin_forms.php";
include "Database.php";
include "LoginController.php";
if (!isset($_SESSION['username'])) {
    // User is not logged in, redirect to login page
    header("Location: login_page.html");
    exit();
}
$username = $_SESSION['username'];
$role = $_SESSION['role'];

// Logout Logic
if (isset($_POST['logout'])) {
    // Destroy the session
    session_destroy();
    // Redirect to login page after logout
    header("Location: login_page.html");
    exit();
}

// Pesan selamat datang berdasarkan peran pengguna
$welcomeMessage = '';
if ($role == 'admin') {
    $welcomeMessage = "Halo, Admin! Selamat datang! <br>";
} else {
    $welcomeMessage = "Halo, $username! Selamat datang! <br><br>";
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
    <form method="get" action="filter_dataBulan.php">
        <label for="bulan">Pilih Bulan:</label>
        <select name="bulan" id="bulan">
            <?php
            // Include file PHP untuk mendapatkan data bulan
            include 'data_bulan.php';
            
            // Menampilkan opsi dropdown untuk setiap bulan
            foreach ($bulan as $bln) {
                $nama_bulan = date("F", mktime(0, 0, 0, $bln, 1));
                echo '<option value="' . $bln . '">' . $nama_bulan . '</option>';
            }
            ?>
        </select>
        <button type="submit">Filter</button>
    </form>
    <?php if ($_SESSION['role'] == 'admin'){
        displayAdminForms();
    }
    ?>
    <br><br>
    <a href="login_page.html" name ="logout">Logout</a>
</body>

</html>