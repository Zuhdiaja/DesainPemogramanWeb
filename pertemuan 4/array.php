<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];

$nilaiLulus = [];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
        $nilaiLulus[] = $nilai;
    }
}

echo "Daftar nilai siswa yang lulus: " . implode(', ', $nilaiLulus);

echo "<br><br>";

$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
];

$karyawanPengalamanLimaTahun = [];

foreach ($daftarKaryawan as $karyawan) {
    if ($karyawan[1] > 5) {
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}

echo "Daftar Karyawan dengan Pengalaman Kerja Lebih dari 5 Tahun: " . implode(', ', $karyawanPengalamanLimaTahun);

echo "<br><br>";

$daftar_nilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78]
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75]
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85]
    ]
];

$mata_kuliah = 'Fisika';

echo "Daftar nilai mahasiswa dalam mata kuliah $mata_kuliah: <br>";

foreach ($daftar_nilai[$mata_kuliah] as $nilai) {
    echo "Nama: {$nilai[0]}, nilai: {$nilai[1]} <br>";
}

echo "<br><br>";

$data_siswa = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90]
];

$total_nilai_siswa = 0;

foreach ($data_siswa as $data) {
    $total_nilai_siswa += $data[1];
}

$rata_rata_nilai = $total_nilai_siswa / count($data_siswa);


echo "Nilai rata-rata: $rata_rata_nilai <br>";
echo "Daftar siswa yang nilai ujian matematika lebih dari rata-rata: ";
echo "<ol>";
foreach ($data_siswa as $data) {
    if ($data[1] > $rata_rata_nilai) {
        echo "<li>$data[0] - $data[1]</li>";
    }
}
echo "</col>";
?>