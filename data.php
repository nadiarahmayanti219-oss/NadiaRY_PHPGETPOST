<?php session_start();  
$mahasiswa = [
    ["nim" => "25001", "nama" => "Andi Pratama", "jurusan" => "Pendidikan Sistem dan Teknologi Informasi", "email" => "andi@upi.edu",  "nilai" => 88],
    ["nim" => "25002", "nama" => "Budi Santoso", "jurusan" => "Sistem Telekomunikasi",                     "email" => "budi@upi.edu",  "nilai" => 76],
    ["nim" => "25003", "nama" => "Citra Lestari", "jurusan" => "Mekatronika dan Kecerdasan Buatan",       "email" => "citra@upi.edu", "nilai" => 67],
    ["nim" => "25004", "nama" => "Dina Maharani", "jurusan" => "Pendidikan Sistem dan Teknologi Informasi", "email" => "dina@upi.edu",  "nilai" => 92],
    ["nim" => "25005", "nama" => "Eko Saputra",   "jurusan" => "Sistem Telekomunikasi",                     "email" => "eko@upi.edu",   "nilai" => 58],
];
 


// Gabungkan data baru (hasil form tambah) ke dalam array $mahasiswa
if (isset($_SESSION["mahasiswa_baru"])) {
    foreach ($_SESSION["mahasiswa_baru"] as $baru) {
        $mahasiswa[] = $baru;
    }
}
 
// FUNCTION 1: menentukan grade dari nilai (PERCABANGAN if - elseif - else)
function hitungGrade($nilai)
{
    if ($nilai >= 85) {
        return "A";
    } elseif ($nilai >= 70) {
        return "B";
    } elseif ($nilai >= 60) {
        return "C";
    } else {
        return "D";
    }
}
 
// FUNCTION 2: menentukan status lulus / tidak lulus (PERCABANGAN if else)
// Batas lulus = 70. Contoh: Budi nilai 98 -> Lulus, nilai 50 -> Tidak Lulus
function tentukanStatus($nilai)
{
    if ($nilai >= 70) {
        return "Lulus";
    } else {
        return "Tidak Lulus";
    }
}
 
// FUNCTION 3: mencari 1 mahasiswa berdasarkan NIM (PERULANGAN foreach)
function cariMahasiswa($daftar, $nim)
{
    foreach ($daftar as $mhs) {
        if ($mhs["nim"] === $nim) {
            return $mhs; // ketemu -> kembalikan datanya
        }
    }
    return null;  // tidak ketemu
}

?>