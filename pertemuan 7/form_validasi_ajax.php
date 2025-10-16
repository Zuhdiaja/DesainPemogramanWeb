<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>

    <form id="myForm">
        <label for="nama">Nama: </label>
        <input type="text" name="nama" id="nama">
        <span id="nama-error" style="color:red;"></span>
        <br>

        <label for="email">Email: </label>
        <input type="text" name="email" id="email">
        <span id="email-error" style="color:red;"></span>
        <br>

        <label for="password">Password: </label>
        <input type="password" name="password" id="password">
        <span id="password-error" style="color:red;"></span>
        <br>

        <input type="submit" value="Submit">
    </form>

    <div id="hasil"></div>

    <script>
        $(document).ready(() => {
            $("#myForm").submit(function (e) {
                e.preventDefault()

                var nama = $("#nama").val();
                var email = $("#email").val();
                var password = $("#password").val();
                var valid = true;

                if (nama === "") {
                    $("#nama-error").text("Nama harus diisi!")
                    valid = false
                } else {
                    $("#nama-error").text("")
                }
    
                if (email === "") {
                    $("#email-error").text("Email harus diisi!")
                    valid = false
                } else {
                    $("#email-error").text("")
                }

                if (password.length < 8) {
                    $("#password-error").text("Password minimal 8 karakter!");
                    valid = false;
                } else {
                    $("#password-error").text("");
                }

                if (valid) {
                    $.ajax({
                        url: "proses_validasi.php",
                        type: "POST",
                        data: { nama: nama, email: email, password: password  },
                        success: function (response) {
                            $("#hasil").html(response);
                        },
                        error: function () {
                            $("#hasil").html("<span style='color:red;'>Terjadi kesalahan saat mengirim data!</span>");
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>