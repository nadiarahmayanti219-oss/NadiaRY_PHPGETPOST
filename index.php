<?php
// Data mahasiswa
$mahasiswa = [
    [
        "nim" => "2503001",
        "nama" => "Andi",
        "email" => "andi@gmail.com",
        "jurusan" => "PSTI",
        "nilai" => 85
    ],
    [
        "nim" => "2503002",
        "nama" => "Budi",
        "email" => "budi@gmail.com",
        "jurusan" => "PSTI",
        "nilai" => 75
    ],
    [
        "nim" => "2503003",
        "nama" => "Citra",
        "email" => "citra@gmail.com",
        "jurusan" => "PSTI",
        "nilai" => 65
    ],
    [
        "nim" => "2503004",
        "nama" => "Dinda",
        "email" => "dinda@gmail.com",
        "jurusan" => "PSTI",
        "nilai" => 55
    ],
    [
        "nim" => "2503005",
        "nama" => "Eko",
        "email" => "eko@gmail.com",
        "jurusan" => "PSTI",
        "nilai" => 90
    ]
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Mahasiswa</title>
  <link rel="stylesheet" href="style.css?v=2">
</head>
<body class="halaman-1">

    <div class="card">
        <div class="header">
            <div>
                <h1>Daftar Mahasiswa</h1>
                <p class="sub">Mini Website PHP Dasar</p>
            </div>

            <div>
                <a class="btn" href="form_pesan.php">Isi Form Pesan</a>
            </div>
        </div>

        <div class="tabel-wrap">
            <table>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Jurusan</th>
                        <th>Nilai</th>
                        <th>Grade</th>
                        <th>Status</th>
                        <th>Detail</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $no = 1;

                    foreach ($mahasiswa as $mhs) :

                        if ($mhs["nilai"] >= 80) {
                            $grade = "A";
                        } elseif ($mhs["nilai"] >= 70) {
                            $grade = "B";
                        } elseif ($mhs["nilai"] >= 60) {
                            $grade = "C";
                        } else {
                            $grade = "D";
                        }

                        if ($mhs["nilai"] >= 70) {
                            $status = "Lulus";
                        } else {
                            $status = "Tidak Lulus";
                        }
                    ?>

                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $mhs["nim"] ?></td>
                        <td><?= $mhs["nama"] ?></td>
                        <td><?= $mhs["email"] ?></td>
                        <td><?= $mhs["jurusan"] ?></td>
                        <td><?= $mhs["nilai"] ?></td>
                        <td><?= $grade ?></td>
                        <td>
                            <?php if ($status == "Lulus") : ?>
                                <span class="lulus">Lulus</span>
                            <?php else : ?>
                                <span class="tidak">Tidak Lulus</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <a class="btn btn-detail"
                               href="detail.php?nim=<?= urlencode($mhs["nim"]) ?>&nama=<?= urlencode($mhs["nama"]) ?>&jurusan=<?= urlencode($mhs["jurusan"]) ?>&email=<?= urlencode($mhs["email"]) ?>&nilai=<?= urlencode($mhs["nilai"]) ?>&grade=<?= urlencode($grade) ?>&status=<?= urlencode($status) ?>">Lihat Detail</a>
                        </td>
                    </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>