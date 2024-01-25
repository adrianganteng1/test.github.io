<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $email = $_POST["email"];
    $nomor_telepon = $_POST["nomor_telepon"];
    $agama = $_POST["agama"];

    
    echo "Pendaftaran berhasil! Selamat datang, $nama.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <style>
        body {
            background-image: url(drk.jpg); 
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: 	#000000; 
        }
    </style>
</head>
<body>
    <div class="container">
        <center><h2>Form Pendaftaran</h2></center>
        <marquee>isi dengan benar ya</marquee>

        <form action="" method="post">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="alamat">Alamat:</label>
                        <textarea class="form-control" id="alamat" name="alamat" required></textarea>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="email">Alamat Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="nomor_telepon">Nomor Telepon:</label>
                        <input type="tel" class="form-control" id="nomor_telepon" name="nomor_telepon" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Jenis Kelamin:</label>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="laki" name="jenis_kelamin" value="Laki-laki" required>
                            <label class="form-check-label" for="laki">Laki-laki</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="perempuan" name="jenis_kelamin" value="Perempuan" required>
                            <label class="form-check-label" for="perempuan">Perempuan</label>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir:</label>
                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="agama">Agama:</label>
                        <select class="form-control" id="agama" name="agama" required>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Konghucu">Konghucu</option>
                            <option value="Hitam">Hitam</option>
                        </select>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Kirim</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </form>
    </div>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
