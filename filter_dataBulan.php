<?php

include "Database.php";
// Di dalam filter_data.php

if (isset($_GET['bulan'])) {
    $bulan = $_GET['bulan'];
    $query = "SELECT * FROM agenda WHERE MONTH(date) = $bulan";
    // Lakukan query ke database untuk mendapatkan data yang sesuai dengan bulan yang dipilih

        $result = mysqli_query($conn, $query);
        //Mengolah dan menampilkan data
        if (mysqli_num_rows($result) > 0) {
            // Output data dari setiap baris
            while ($row = mysqli_fetch_assoc($result)) {
                echo "ID: " . $row["id"] . "<br>";
                echo "Title: " . $row["title"] . "<br>";
                echo "Content: " . $row["content"] . "<br>";
                echo "Date: " . $row["date"] . "<br>" . "<br>";
            }
        }
        // session_destroy();
    }
?>