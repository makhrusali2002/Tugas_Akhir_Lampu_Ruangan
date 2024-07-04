<?php
// Sesuaikan kredensial database
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'lampu';


// Membuat koneksi ke database
$koneksi = new mysqli($host, $user, $password, $database);

// Memeriksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Mengambil data dari formulir
$relay = $_POST['relay'];
//$vitamin = $_POST['vitamin'];
//$pupuk = $_POST['pupuk'];

// Menyimpan data ke database
$sql = "INSERT INTO lampu (relay) VALUES ('$relay')";

if ($koneksi->query($sql) === TRUE) {
    //echo "Data berhasil disimpan";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

// Menutup koneksi ke database
$koneksi->close();
?>
