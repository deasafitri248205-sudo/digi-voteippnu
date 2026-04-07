<?php
$nomorBenar = "123456";
$kodeBenar = "ippnu";

if(isset($_POST['nomor'])){
    $nomor = $_POST['nomor'];
    $kode = $_POST['kode'];

    if($nomor == $nomorBenar && $kode == $kodeBenar){
        header("Location: halaman3.php");
        exit;
    }else{
        if($nomor != $nomorBenar){
            header("Location: halaman2.php?error=nomor");
        }else{
            header("Location: halaman2.php?error=kode");
        }
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
<link rel="stylesheet" href="style.css">

<!-- icon -->
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
background-image:url("background.jpg");
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
background:transparent;
width:100%;
color:#fff;
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

<form method="POST">
<div class="container">

    <div class="login-card">

        <img src="logo.png" class="logo">

        <h2>DIGI-VOTE KETUA IPPNU<br>DESA TEGAL SARI</h2>

        <p>Silahkan masuk untuk memberikan hak suara</p>

    <div class="input-box">
        <i class="fa fa-user"></i>
        <input type="text" name="nomor" placeholder="Masukkan Nomor Anggota" required>
    </div>

    <div class="input-box">
        <i class="fa fa-lock"></i>
        <input type="password" name="kode" placeholder="Masukkan Kode" required>
        <i class="fa fa-eye-slash"></i>
    </div>

    <button type="submit" class="btn">MASUK</button>

</form>
    </div>

</div>

</body>
</html>