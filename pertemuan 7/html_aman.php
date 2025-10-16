<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $input = $_POST['email'];
    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

    $email = $_POST['email'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email valid!<br>";
        echo "Email Anda: " . $email;
    } else {
        echo "Email tidak valid!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Validasi Email</title>
</head>
<body>
    <h2>Form Validasi Email</h2>
    <form method="post" action="">
        <label>Masukkan email:</label>
        <input type="email" name="email" required><br><br>

        <input type="submit" value="Kirim">
    </form>
</body>
</html>

