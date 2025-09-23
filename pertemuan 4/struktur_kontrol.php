<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100){
    echo "Nilai huruf : A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik <= 90){
    echo "Nilai huruf : B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik <= 90){
    echo "Nilai huruf : C";
} elseif ($nilaiNumerik < 70){
    echo "Nilai huruf : D";
}

echo "<br><br>";

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
$jarakSaatIni += $peningkatanHarian;
$hari++;
}

echo "Atlet tersebut memerlukan **$hari** hari untuk mencapai jarak 500
kilometer.";

echo "<br><br>";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah:  . $jumlahBuah";

echo "<br><br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: " . $totalSkor;

echo "<br><br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

    echo "Nilai mahasiswa <br><br>";

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}

echo "<br><br>";

$nilaiSiswa = [80, 95, 67, 72, 88, 91, 76, 84, 69, 93, 78, 85];
sort($nilaiSiswa);

array_shift($nilaiSiswa);
array_shift($nilaiSiswa);

array_pop($nilaiSiswa);
array_pop($nilaiSiswa);

$totalNilai = array_sum($nilaiSiswa);

echo "Total nilai yang digunakan untuk rata-rata kelas: " . $totalNilai;

echo "<br><br>";

$harga_produk = 120000;
$jumlah_belanja = 1;
$diskon = 0.2;
$batas_minimum = 100000;

$harga_dibayar = $harga_produk * $jumlah_belanja;
if ($harga_produk > $batas_minimum) {
    $harga_dibayar = $harga_produk -  $harga_produk * $diskon;
}

echo "Harga yang harus dibayar: $harga_dibayar";

echo "<br><br>";

$poin = 666;
echo "Total skor pemain adalah: $poin <br>";

echo "Apakah pemain mendapatkan hadiah tambahan ? ";
echo ($poin > 500) ? "YA" : "TIDAK";
?>