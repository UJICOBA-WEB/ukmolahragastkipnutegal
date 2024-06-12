<?php
$servername = "localhost";
$username = "root";  // Ganti dengan username database Anda
$password = "";      // Ganti dengan password database Anda
$dbname = "ukm_olahraga";

// Membuat koneksi ke database
$conn = mysqli connect($localhost, $root, $password, $ukm_olahraga); 
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}


// Mengambil data dari form
$full_name = $_POST['full_name'];
$prodi = $_POST['prodi'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$address = $_POST['address'];

// Menyiapkan pernyataan SQL untuk memasukkan data ke tabel members
$sql = "INSERT INTO "members" (full_name, email, phone, dob, gender, address)
VALUES ('$full_name', '$email', '$phone', '$dob', '$gender', '$address')";

if ($conn->query($sql) === TRUE) {
    echo "Pendaftaran berhasil!";
} else {
    echo "Error: " . $mysqli . "<br>" . $conn->error;
}

// Menutup koneksi
$conn->close();
?>
