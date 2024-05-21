<?php
include "Database.php";

// Ambil data dari formulir
$agenda = $_POST['title'];
$content = $_POST['content'];
$tanggal = $_POST['tanggal'];

// Query untuk menambahkan agenda baru
$sql = "INSERT INTO agenda (title, content, date) VALUES ('$agenda', '$content', '$tanggal')";

if ($conn->query($sql) === TRUE) {
    echo "Agenda berhasil ditambahkan <br> <br>";
    echo '<a href="welcome.php">Back</a>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
