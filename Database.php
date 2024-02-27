<?php
$servername = "localhost";
$username = "admin" or "user";
$password = "admin"  or "user";
$dbname = "secprogproject";
$conn = new mysqli($servername, $username, $password, $dbname);

// Fungsi registrasi pengguna
function loginUser($username, $password) {
    global $conn;
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            return $user;
        } else {
            return false;
        }
    } else {
        return false;
    }
}
?>
