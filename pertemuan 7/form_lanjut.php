<!DOCTYPE html>
<html>
<head>
    <title>Form Lanjutan PHP</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h2>Form contoh</h2>
    <form method="POST" action="proses_lanjut.php">
        <label for="buah">Pilih buah: </label>
        <select name="buah" id="buah">
            <option value="apel">Apel</option>
            <option value="pisang">Pisang</option>
            <option value="mangga">Mangga</option>
            <option value="jeruk">Jeruk</option>
        </select>

        <br>

        <label>Pilih warna favorit: </label><br>
        <input type="checkbox" name="wanra[]" value="merah">Merah <br>
        <input type="checkbox" name="warna[]" value="biru">Biru <br>
        <input type="checkbox" name="warna[]" value="hijau">Hijau <br>

        <br>

        <label>Pilih jenis kelamin: </label><br>
        <input type="radio" name="jenis_kelamin" value="laki-laki">Laki-laki <br>
        <input type="radio" name="jenis_kelamin" value="perempuan">Perempuan <br>

        <br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>