<?php
// Fungsi untuk menampilkan form admin
function displayAdminForms() {
    echo '<br><br>';
    echo '<form action="AddAgenda.html" method="post">';
    echo '<button type="submit">Tambah Agenda</button>';
    echo '</form>';
    echo '<br><br>';
    echo '<form action="EditAgenda.html" method="post">';
    echo '<button type="submit">Edit Agenda</button>';
    echo '</form>';
    echo '<br><br>';
    echo '<form action="DeleteAgenda.html" method="post">';
    echo '<button type="submit">Hapus Agenda</button>';
    echo '</form>';
}
?>
