<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $anggotaBenar = "123456";
    $kodeBenar = "ippnu";

    $anggota = $_POST['anggota'];
    $kode = $_POST['kode'];

    if ($anggota != $anggotaBenar && $kode != $kodeBenar) {
        header("Location: halaman2.php?error=keduanya");
        exit;
    } elseif ($anggota != $anggotaBenar) {
        header("Location: halaman2.php?error=anggota");
        exit;
    } elseif ($kode != $kodeBenar) {
        header("Location: halaman2.php?error=kode");
        exit;
    } else {
        header("Location: halaman3.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Digi Vote IPPNU</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

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
    align-items:center;
    justify-content:center;
}

.container{
    width:100%;
    display:flex;
    justify-content:center;
    align-items:center;
}

.login-card{
    background:#f5f5f5;
    padding:40px;
    width:350px;
    border-radius:15px;
    text-align:center;
    box-shadow:0 8px 20px rgba(0,0,0,0.2);
}

.logo{
    width:80px;
    margin-bottom:10px;
}

.login-card h2{
    color:#2f6f3e;
    font-size:20px;
    margin-bottom:8px;
}

.login-card p{
    font-size:13px;
    margin-bottom:20px;
}

.input-box{
    display:flex;
    align-items:center;
    background:#9bbf9c;
    padding:10px;
    border-radius:8px;
    margin-bottom:15px;
}

.input-box i{
    margin-right:10px;
    color:#1e3d27;
}

.input-box input{
    border:none;
    outline:none;
    background:none;
    width:100%;
    color:#1e3d27;
    font-size:16px;
    box-shadow:none;
}

.input-box input::placeholder{
    color:#4d6b53;
}

input:-webkit-autofill,
input:-webkit-autofill:hover,
input:-webkit-autofill:focus,
input:-webkit-autofill:active{
    -webkit-box-shadow: 0 0 0 30px #9bbf9c inset !important;
    -webkit-text-fill-color: #1e3d27 !important;
    border:none !important;
}

input[type="password"]::-ms-reveal,
input[type="password"]::-ms-clear{
    display:none;
}

input[type="password"]::-webkit-credentials-auto-fill-button,
input[type="password"]::-webkit-textfield-decoration-container{
    display:none !important;
}

.btn{
    width:100%;
    padding:12px;
    border:none;
    background:#3d6e2f;
    color:white;
    font-weight:bold;
    border-radius:8px;
    cursor:pointer;
}

.btn:hover{
    background:#2c5223;
}
</style>
</head>
<body>

<div class="container">
    <div class="login-card">

        <img src="logo.png" class="logo" alt="Logo IPPNU">

        <h2>DIGI-VOTE KETUA IPPNU<br>DESA TEGAL SARI</h2>

        <p>Silahkan masuk untuk memberikan hak suara</p>

        <form method="POST">

            <div class="input-box">
                <i class="fa fa-user"></i>
                <input type="text" name="anggota" placeholder="Masukkan Nomor Anggota" required>
            </div>

            <div class="input-box">
                <i class="fa fa-lock"></i>
                <input type="password" name="kode" placeholder="Masukkan Kode" required>
                <i class="fa fa-eye-slash"></i>
            </div>

            <button class="btn" type="submit">MASUK</button>

        </form>

    </div>
</div>

</body>
</html>