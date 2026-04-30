<?php
// Memberi tahu bahwa outputnya adalah JSON
header("Content-Type: application/json");

// Link Firebase Anda (Wajib ditambahkan /mahasiswa.json)
$firebase_url = "https://tugas-rio-default-rtdb.asia-southeast1.firebasedatabase.app/mahasiswa.json";

// Ambil data dari Firebase
$data_firebase = file_get_contents($firebase_url);

// Tampilkan datanya
if ($data_firebase !== false) {
    echo $data_firebase;
} else {
    echo json_encode([
        "status" => "error",
        "pesan" => "Gagal mengambil data dari Firebase."
    ], JSON_PRETTY_PRINT);
}
?>