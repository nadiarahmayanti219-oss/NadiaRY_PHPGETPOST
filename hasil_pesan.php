
<?php
if (isset($_POST["nama"], $_POST["kelas"], $_POST["pesan"])) {
    $nama = $_POST["nama"];
    $kelas = $_POST["kelas"];
    $pesan = $_POST["pesan"];
} else {
    header("Location: form_pesan.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pesan</title>
   <link rel="stylesheet" href="style.css?v=2">
</head>
<body class="halaman-4">
    <div class="card kecil">
        <h1>Pesan Berhasil Dikirim</h1>

        <p>Terima kasih, <?= $nama ?>!</p>

        <div class="item">
            <b>Nama:</b> <?= $nama ?>
        </div>

        <div class="item">
            <b>Kelas:</b> <?= $kelas ?>
        </div>

        <div class="item">
            <b>Pesan / Kesan:</b> <?= $pesan ?>
        </div>

        <a class="btn btn-kembali" href="index.php">
            Kembali ke Data Mahasiswa
        </a>
    </div>
</body>
</html>
