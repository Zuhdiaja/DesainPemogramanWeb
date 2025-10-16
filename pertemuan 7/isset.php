<?php

$umur;
if (isset($umur) && $umur >= 18) {
    echo "Anda sudah dewasa.";
} else {
    echo "anda belum dewasa atau variable 'umur' tidak ditemuakan.";
}

echo "<br><br>";

$data = array("nama"=> "jane", "usia" => 25);
if (isset($data["nama"])) {
    echo "Nama: " . $data['nama'];
} else {
    echo "Variabel 'nama' tidak ditemukan dalam array";
}