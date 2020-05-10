<?php 
    $id_keluhan = $_GET['n']; 
?>
<!DOCTYPE html>
<html>
<head>
	<title>website keluhan</title>
</head>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	
<body>

	<nav class="navbar navbar-light bg-dark">
        <a class="navbar-brand" href="index.php">
            <img src="logo3.png" width="50" height="30" class="d-inline-block align-top" alt="">
           <font color="white"> Suaramu!</font>
        </a>

        <a class="navbar-brand ml-auto" href="masuk.php"><font color="white">Masuk Admin</a></font>
    </nav>

     <div class="container mt-5">
        <div class="card">
            <h5 class="card-header">Selamat</h5>
            <div class="card-body">
                <h5 class="card-title">Keluhanmu Berhasil Terkirim!</h5>
                <p class="card-text">laporanmu dengan nomor <strong><?= $id_keluhan ?></strong> berhasil terkirim dan akan segera di proses!</p>
                <a href="index.php" class="btn btn-secondary btn-sm">Kembali ke home</a>
            </div>
        </div>
    </div>
