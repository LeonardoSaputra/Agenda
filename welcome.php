<?php
include "Database.php";
include "LoginPage.php";

$username = $_SESSION['username'];
$role = $_SESSION['role'];

// Pesan selamat datang berdasarkan peran pengguna
$welcomeMessage = '';
if ($role == 'admin') {
    $welcomeMessage = "Halo, Admin $username! Selamat datang! <br>";
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
    <form action="AddAgenda.html" method="post">
        <button type="submit">Tambah Agenda</button>
    </form>
    <br><br>
    <form action="DeleteAgenda.html" method="post">
        <button type="submit">Hapus Agenda</button>
    </form>
    <br><br>
</body>

<?php
include "filter_dataBulan.php";

$query = "SELECT DISTINCT MONTH(date) AS bulan FROM agenda ORDER BY bulan";
$result = mysqli_query($conn, $query);

// Mengambil hasil query ke dalam array
$bulan = [];
while ($row = mysqli_fetch_assoc($result)) {
    $bulan[] = $row['bulan'];
}

// Menampilkan tombol untuk setiap bulan
foreach ($bulan as $bln) {
    $nama_bulan = date("F", mktime(0, 0, 0, $bln, 1));
    echo '<form method="get" action="filter_dataBulan.php">';
    echo '<input type="hidden" name="bulan" value="' . $bln . '">';
    echo '<button type="submit">' . $nama_bulan . '</button>';
    echo '</form>';
}

 echo '<br> <a href="login_page.html">Logout</a>';
?>

</html>