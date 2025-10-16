<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    <form action="proses_validasi.php" method="post" id="myForm">
        <label for="nama">Nama: </label>
        <input type="text" name="nama" id="nama">
        <span id="nama-error" style="color: red"></span>
        <br>

        <label for="email">Email: </label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red"></span>
        <br>

        <input type="submit" value="Submit">
    </form>

    <script>
        $(document).ready(function () {
            $("#myForm").submit(function (e) {
                const nama = $("#nama").val()
                const email = $("#email").val()
                let valid = true
    
                if (nama === "") {
                    $("#nama-error").text("Nama harus diisi!")
                    valid = false
                }
    
                if (email === "") {
                    $("#email-error").text("Email harus diisi!")
                    valid = false
                }
    
                if (!valid) {
                    e.preventDefault()
                }
            })
        })
    </script>
</body>
</html>
