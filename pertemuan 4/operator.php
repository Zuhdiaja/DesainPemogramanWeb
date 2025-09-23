<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "<h3>Operator Logika</h3>";
echo "Nilai \$a = $a dan nilai \$b = $b <br><br>";

echo "Hasil dari (\$a && \$b): " . ($hasilAnd ? 'true' : 'false') . "<br>";
echo "Hasil dari (\$a || \$b): " . ($hasilOr ? 'true' : 'false') . "<br>";
echo "Hasil dari (!\$a): " . ($hasilNotA ? 'true' : 'false') . "<br>";
echo "Hasil dari (!\$b): " . ($hasilNotB ? 'true' : 'false') . "<br>";

echo "<h3>Operator Pembanding</h3>";
echo "Nilai \$a = $a dan nilai \$b = $b <br><br>";
echo "Apakah \$a sama dengan \$b? (" . ($a == $b ? 'true' : 'false') . ") <br>";
echo "Apakah \$a tidak sama dengan \$b? (" . ($a != $b ? 'true' : 'false') . ")
<br>";
echo "Apakah \$a lebih kecil dari \$b? (" . ($a < $b ? 'true' : 'false') . ")
<br>";
echo "Apakah \$a lebih besar dari \$b? (" . ($a > $b ? 'true' : 'false') . ")
<br>";
echo "Apakah \$a lebih kecil dari atau sama dengan \$b? (" . ($a <= $b ? 'true' : 'false') . ") <br>";
echo "Apakah \$a lebih besar dari atau sama dengan \$b? (" . ($a >= $b ? 'true' : 'false') . ") <br>";

echo "<h3>Operator Aritmatika dan Pemangkatan</h3>";
echo "Nilai \$a = $a dan nilai \$b = $b <br><br>";

echo "Hasil Penambahan (\$a + \$b): $hasilTambah <br>";
echo "Hasil Pengurangan (\$a - \$b): $hasilKurang <br>";
echo "Hasil Perkalian (\$a * \$b): $hasilKali <br>";
echo "Hasil Pembagian (\$a / \$b): $hasilBagi <br>";
echo "Sisa Bagi (\$a % \$b): $sisaBagi <br>";
echo "Hasil Pangkat (\$a ** \$b): $pangkat <br>";

echo "<h3>Operator Penugasan</h3>";
echo "Nilai awal \$a = $a dan nilai \$b = $b <br><br>";

$a += $b;
echo "Hasil Penugasan Tambah (\$a += \$b): \$a sekarang bernilai " . $a . "<br>";
$a = 10;

$a -= $b;
echo "Hasil Penugasan Kurang (\$a -= \$b): \$a sekarang bernilai " . $a . "<br>";
$a = 10;

$a *= $b;
echo "Hasil Penugasan Kali (\$a *= \$b): \$a sekarang bernilai " . $a . "<br>";
$a = 10;

$a /= $b;
echo "Hasil Penugasan Bagi (\$a /= \$b): \$a sekarang bernilai " . $a . "<br>";
$a = 10;

$a %= $b;
echo "Hasil Penugasan Sisa Bagi (\$a %= \$b): \$a sekarang bernilai " . $a .
"<br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "<h3>Operator Identik</h3>";
echo "hasil identik: " . ($hasilIdentik ? 'true' : 'false') . "<br>";
echo "hasil tidak identik: " . ($hasilTidakIdentik ? 'true' : 'false') . "<br>";
?>