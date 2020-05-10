<!DOCTYPE html>
<html>
<head>
	<title>website keluhan</title>
</head>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	
<body>

	<nav class="navbar navbar-light bg-secondary">
        <a class="navbar-brand" href="index.php">
            <img src="logo3.png" width="50" height="30" class="d-inline-block align-top" alt="">
           <font color="white"> Suaramu!</font>
        </a>

        <a class="navbar-brand ml-auto" href="masuk.php"><font color="white">Masuk Admin</a></font>
    </nav>

     <div class="container mt-5">
        <h3>Hi Admin!</h3>
        <form action="" method="post" class="mt-5">
            <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="Nama Pengguna">
            </div>

            <br>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Kata Sandi">
            </div>
            
            <br>
            <div class="form-group">
                <button type="submit" name="masuk" class="btn btn-secondary btn-block">Masuk</button>
            </div>
        </form>
    </div>

    <?php
    // Koneksi
    include "koneksi.php";

    $query = mysqli_query($conn, "SELECT * FROM admin");
    $result = mysqli_fetch_assoc($query);

    // Proses login
    if (isset($_POST['masuk'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username == $result['username'] && $password == $result['password']) {
            header("location: halaman_admin/index.php?n=admin");
        }else {
            ?>
                <script>
                    alert("gagal!")
                </script>
            <?php
        }
    }

?>