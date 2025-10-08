<?php
$conn = pg_connect("host=localhost port=5432 dbname=phpdatabase user=postgres password=12345678");
if ($conn) {
    echo "✅ Koneksi PostgreSQL berhasil!";
} else {
    echo "❌ Koneksi gagal: " . pg_last_error();
}
?>