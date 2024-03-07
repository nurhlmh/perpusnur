<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman login</title>
    <link rel="stylesheet" href="asset/css/bootstrap.css">
</head>

<body>
    <div class="container">
        <div class="conten">
            <div class="card" style="margin-top: 11rem; ">
                <div class="row">
                    <div class="col m-3">
                        <h2>Form Login Perpustakaan Digital</h2>
                        <?php
                        if (isset($_GET['pesan'])) {
                            if ($_GET['pesan'] == "gagal") {
                                echo "<div class='alert alert-danger'> Username atau Password Salah!</div>";
                            }
                        }
                        ?>
                        <form action="action/ceklogin.php" method="post">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">username</label>
                                <input type="text" name="username" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                        <p class="mt-3">Saya belum memiliki akun. Buat <a href="register.php" class="btn btn-warning text-white">Disini</a></p>
                    </div>
                    <div class="col">
                        <img src="asset/img/book.jpg" width="300" alt="">
                    </div>
                    <script src="asset/js/bootstrap.js"></script>
</body>

</html>