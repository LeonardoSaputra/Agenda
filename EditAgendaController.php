<?php
include 'Database.php';
function escape_string($input) {
    $connection = mysqli_connect("localhost", "root", "", "secprogproject");
    return mysqli_real_escape_string($connection, $input);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['edit_agenda'])) {
    $agenda_id = $_POST['id'];
    $agenda_title = $_POST['title'];
    $agenda_description = $_POST['content'];

    // Menghindari SQL Injection dengan escape string
    $agenda_id = escape_string($agenda_id);
    $agenda_title = escape_string($agenda_title);
    $agenda_description = escape_string($agenda_description);


    $query = "UPDATE agenda SET title='$agenda_title', content='$agenda_description' WHERE id=$agenda_id";

    if (mysqli_query($conn, $query)) {
        echo "Agenda berhasil diupdate. <br> <br>";
        echo '<a href="welcome.php">Back</a>'; 
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>

