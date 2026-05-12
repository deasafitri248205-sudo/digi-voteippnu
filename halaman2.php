<?php
$error = $_GET['error'] ?? '';

if ($error == "anggota") {
    $pesan = "Nomor anggota salah";
}
elseif ($error == "kode") {
    $pesan = "Kode salah";
}
elseif ($error == "keduanya") {
    $pesan = "Nomor anggota dan kode salah";
}
else {
    $pesan = "Terjadi kesalahan login";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Gagal</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, Helvetica, sans-serif;
}

body{
    height:100vh;
    background-image:url("bg.jpeg");
    background-size:cover;
    background-position:center;
    display:flex;
    justify-content:center;
    align-items:center;
}

.logo{
    position:absolute;
    top:20px;
    left:20px;
    width:80px; 
}

.container{
    display:flex;
    justify-content:center;
    align-items:center;
    width:100%;
}

.card{
    background:#f2f2f2;
    width:420px;
    padding:40px;
    border-radius:20px;
    text-align:center;
    box-shadow:0 10px 20px rgba(0,0,0,0.2);
}

.illustration{
    width:250px; 
    margin-bottom:20px;
}

.card h2{
    color:#2e6b2e;
    margin-bottom:5px;
}

.card p{
    color:#2e6b2e;
    margin-bottom:25px;
    font-size:18px;
}

.btn{
    background:#2f6f1f;
    color:white;
    border:none;
    padding:12px 30px;
    font-size:18px;
    border-radius:8px;
    cursor:pointer;
    display:inline-flex;
    align-items:center;
    gap:10px;
    text-decoration:none;
}

.circle{
    width:15px;
    height:15px;
    border:2px solid white;
    border-top-color: transparent;
    border-radius:50%;
    display:inline-block;
    animation: spin 1s linear infinite;
}

@keyframes spin{
    from{
        transform: rotate(0deg);
    }
    to{
        transform: rotate(360deg);
    }
}
</style>
</head>

<body>

<img src="logo.png" class="logo" alt="Logo">

<div class="container">

    <div class="card">


        <img src="ICON-removebg-preview.png" class="illustration">

        <h2>LOGIN GAGAL!</h2>

        <p><?php echo $pesan; ?></p>

        <a href="halaman1.php" class="btn">
            COBA LAGI
            <span class="circle"></span>
        </a>

    </div>

</div>

</body>
</html>