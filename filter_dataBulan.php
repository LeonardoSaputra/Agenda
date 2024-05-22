<?php

include "Database.php";


if (isset($_GET['bulan'])) {
    $bulan = $_GET['bulan'];
    $query = "SELECT * FROM agenda WHERE MONTH(date) = ?";
    
    // Siapkan statement untuk menghindari SQL Injection
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $bulan);
    $stmt->execute();
    $result = $stmt->get_result();
    // Lakukan query ke database untuk mendapatkan data yang sesuai dengan bulan yang dipilih

        // $result = mysqli_query($conn, $query);
        //Mengolah dan menampilkan data
        if (mysqli_num_rows($result) > 0) {
            // Output data dari setiap baris
            while ($row = mysqli_fetch_assoc($result)) {
                echo "ID: " . htmlspecialchars($row["id"]) . "<br>";
                echo "Title: " . htmlspecialchars($row["title"]) . "<br>";
                echo "Content: " . htmlspecialchars($row["content"]) . "<br>";
                echo "Date: " . htmlspecialchars($row["date"]) . "<br>" . "<br>";
            }
            echo '<br> <a href="welcome.php">Back</a>' ;
        }
        
    }
?>