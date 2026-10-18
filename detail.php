<?php
if (isset(
    $_GET["nim"],
    $_GET["nama"],
    $_GET["jurusan"],
    $_GET["email"],
    $_GET["nilai"],
    $_GET["grade"],
    $_GET["status"]
)) {
    $nim = $_GET["nim"];
    $nama = $_GET["nama"];
    $jurusan = $_GET["jurusan"];
    $email = $_GET["email"];
    $nilai = $_GET["nilai"];
    $grade = $_GET["grade"];
    $status = $_GET["status"];
} else {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
  <link rel="stylesheet" href="style.css?v=2">
</head>
<body class="halaman-2">

    <div class="card kecil">
        <h1>Detail Mahasiswa</h1>

        <div class="item">
            <b>NIM:</b> <?= htmlspecialchars($nim) ?>
        </div>

        <div class="item">
            <b>Nama:</b> <?= htmlspecialchars($nama) ?>
        </div>

        <div class="item">
            <b>Jurusan:</b> <?= htmlspecialchars($jurusan) ?>
        </div>

        <div class="item">
            <b>Email:</b> <?= htmlspecialchars($email) ?>
        </div>

        <div class="item">
            <b>Nilai:</b> <?= htmlspecialchars($nilai) ?>
        </div>

        <div class="item">
            <b>Grade:</b> <?= htmlspecialchars($grade) ?>
        </div>

        <div class="item">
            <b>Status:</b>
            <?php if ($status == "Lulus") : ?>
                <span class="lulus">Lulus</span>
            <?php else : ?>
                <span class="tidak">Tidak Lulus</span>
            <?php endif; ?>
        </div>

        <a class="btn btn-kembali" href="index.php">Kembali</a>
    </div>

</body>
</html>
