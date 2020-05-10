<?php
    include "koneksi.php";
?>
<!DOCTYPE html>

<html>
<head>
    <title> cari keluhan anda</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-light bg-dark">
        <a class="navbar-brand" href="index.php">
            <img src="logo3.png" width="50" height="30" class="d-inline-block align-top" alt="">
           <font color="white"> Suaramu!</font>
        </a>

        <a class="navbar-brand ml-auto" href="masuk.php"><font color="white">Masuk Admin</a></font>
    </nav>
</body>
<form action="" method="post" class="form-inline mt-5">
        <div class="form-group mx-sm-3 mb-2">
            <input type="text" name="cari" class="form-control" placeholder="Cari">
        </div>
        <button type="submit" name="search" class="btn btn-secondary mb-2">Confirm identity</button>
    </form>

     <div class="container-fluid mt-5">
        <table class="table table-bordered table-responsive-sm">
            <thead>
                <tr>
                    <th scope="col">Nomor</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Keluhan</th>
                    <th scope="col">Lokasi</th>
                    <th scope="col">Status</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">gambar</th>
                </tr>
            </thead>
            <tbody>
            <?php
               
                if (isset($_POST['search'])) {
                    $cari = $_POST['cari'];
                    $query = mysqli_query($conn, "SELECT * FROM keluhan WHERE id_keluhan LIKE '%$cari%'");

                    
                    if (mysqli_num_rows($query) > 0) {
                        while ($result = mysqli_fetch_assoc($query)) : ?>
                        <tr>
                            <td><?= $result['id_keluhan'] ?></td>
                            <td><?= $result['kategori'] ?></td>
                            <td><?= $result['keluhan'] ?></td>
                            <td><?= $result['lokasi'] ?></td>
                            <td><?= $result['status'] ?></td>
                            <td><?= $result['tanggal'] ?></td>
                            <td><img src=".$result['gambar']"></td>
                        </tr>
            <?php
                        endwhile;
                    }else { ?>
                        <td colspan="6">Data Tidak Ada</td>
            <?php
                    }
                }
            ?>
            </tbody>
        </table>
    </div>
</html>