
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pesan</title>
   <link rel="stylesheet" href="style.css?v=2">
</head>
<body class="halaman-3">
    <div class="card kecil">
        <h1>Form Pesan Mahasiswa</h1>

        <form action="hasil_pesan.php" method="post">
            <div class="item">
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" required>
            </div>

            <div class="item">
                <label for="kelas">Kelas</label>
                <input type="text" id="kelas" name="kelas" required>
            </div>

            <div class="item">
                <label for="pesan">Pesan / Kesan</label>
                <textarea id="pesan" name="pesan" rows="4" required></textarea>
            </div>

            <button type="submit" class="btn btn-simpan">Kirim</button>
            <a class="btn btn-kembali" href="index.php">Kembali</a>
        </form>
    </div>
</body>
</html>
