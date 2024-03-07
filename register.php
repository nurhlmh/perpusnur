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
                        <h2>Form Register Perpustakaan Digital</h2>
                        <form action="action/p_regis.php" method="post">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">username</label>
                                <input type="text" name="username" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" required id="exampleInputPassword1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="text" name="email" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                                <input type="text" name="namalengkap" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Alamat</label>
                                <input type="text" name="alamat" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Level</label>
                                <select class="form-select" name="level" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="peminjam">Pengguna</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                        <p class="mt-3">Sudah memiliki akun?. Buat <a href="index.php" class="btn btn-warning text-white">Disini</a></p>
                    </div>
                    <div class="col">
                        <img src="asset/img/book.jpg" width="500" alt="">
                    </div>
                    <script src="asset/js/bootstrap.js"></script>
</body>

</html>