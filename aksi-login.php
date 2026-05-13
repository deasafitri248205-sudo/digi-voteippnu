<?php

// memanggil koneksi di config.php 
include "./config.php";

// echo $_POST['nisn'];
// echo "<br />";
// echo $_POST['kode'];

// exit();
// memanggil koneksi di config.php 
// include "./config.php";

// echo $_POST['input_email'];
// echo "<br />";
// echo $_POST['input_password'];
// memanggil koneksi di config.php 
// include "./config.php";

// query untuk mengambil data dari user dengan NISN = $_POST['input_NISN']
$query = "SELECT * FROM users WHERE username='".$_POST['kode']."'";

// exit();
// menjalankan query dengan koneksi dari $conn
// result di sini akan digunakan untuk memanggil data
$result = $conn->query($query);

// exit();
// cek jumlah data menggunakan $result
// echo "jumlah data: ";
// echo $result->num_rows;
// echo "<br /> <br />";

// exit();
// cek jumlah data menggunakan $result

// memanggil data dengan $result
$row = $result->fetch_assoc();

// exit();

if ($result->num_rows == 0) {
  // jika num_rows = 0 berarti tidak ada data yang ditemukan dari database 
  // echo "Akun tidak ditemukan";
  header("location:halaman2.php");
  exit(); // langsung akhiri eksekusi tanpa harus lanjut ke bawah
} else {
  if ($_POST['kode'] == $row['plain_code']) {
    // echo "Anda berhasil login";
    header("location:halaman3.php");
  } else {
    // echo "Password anda salah";
    header("location:halaman2.php");
  }
}