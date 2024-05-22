<?php
session_start();
// Hancurkan semua sesi
session_unset();
session_destroy();
// Arahkan pengguna kembali ke halaman login
header("Location: login_page.html");
exit;
?>
