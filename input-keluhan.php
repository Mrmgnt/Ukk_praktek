

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

      <div class="container mt-3">
        <form action="" method="post">
            <div class="form-group">
                <label>Kategori</label>
                <select name="kategori" class="form-control" required>
                    <option value=""></option>
                    <option value="keamanan">Keamanan</option>
                    <option value="kebersihan">Kebersihan</option>
                </select>
            </div>
            <div class="form-group">
                <label>Keluhan</label>
                <textarea name="keluhan" cols="30" rows="5" class="form-control" placeholder="Keluhan" required></textarea>
            </div>
            <div class="form-group">
                <label>Lokasi</label>
                <input type="text" name="lokasi" class="form-control" placeholder="lokasi" required>
            </div>


           <div class="form-group">
                <label>Gambar</label>
                <input type="file" name="gambar" class="form-control-file" placeholder="gambar....">
            </div> 


            <br>
            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-secondary btn-block">Kirim</button>
            </div>
        </form>
    </div>
    </html>
    <?php
	include "koneksi.php";
	
if (isset($_POST['submit'])) {
    $id_keluhan = date("dhs").rand(11,99);
    $kategori = $_POST['kategori'];
    $keluhan = $_POST['keluhan'];
    $lokasi = $_POST['lokasi'];
    $status = "proses";
    $file = $_FILES['gambar'];
    $fileTmpName = $file['tmp_name'];

        $gambar = date('dhs').rand(11, 99).'.'.$ext;
        
        $separate = explode('.', $file['name']);
        $ext = strtolower(end($separate));
        move_uploaded_file($fileTmpName, 'asset/upload/'.$gambar);


        $query = mysqli_query($conn, "INSERT INTO keluhan(id_keluhan, kategori, keluhan, lokasi, status, gambar) VALUES('$id_keluhan', '$kategori', '$keluhan', '$lokasi', '$status', '$gambar')");

        if ($query) {
            header("location: berhasil.php?n='$id_keluhan'");
        }else{
            echo mysqli_error($conn);
        }

    }
?>