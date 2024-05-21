<?php

include 'Database.php';
include 'filter_dataBulan.php';

// Query untuk mengambil bulan yang berbeda dari tabel agenda
$query = "SELECT DISTINCT MONTH(date) AS bulan FROM agenda ORDER BY bulan";
$result = mysqli_query($conn, $query);

// Mengambil hasil query ke dalam array
$bulan = [];
while ($row = mysqli_fetch_assoc($result)) {
    $bulan[] = $row['bulan'];
}
?>
