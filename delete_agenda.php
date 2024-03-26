<?php
include "Database.php";

// Ambil ID agenda yang akan dihapus dari formulir
$id = $_POST['id'];

// Query untuk menghapus agenda berdasarkan ID
$sql = "DELETE FROM agenda WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Agenda berhasil dihapus <br><br>";
    echo '<a href="welcome.php">Back</a>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
