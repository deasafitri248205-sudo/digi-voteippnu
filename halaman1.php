<?php
$nomorBenar = "123456";
$kodeBenar = "ippnu";
$error = false;

if(isset($_POST['nomor'])){
    $nomor = $_POST['nomor'];
    $kode = $_POST['kode'];

    if($nomor == $nomorBenar && $kode == $kodeBenar){
        header("Location: voting.html");
        exit;
    }else{
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Digi Vote IPPNU</title>

<style>

*{
    box-sizing:border-box;
}

body{
    margin:0;
    font-family:Arial;
    background:#f5f5f5;
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
}

.badan{
    width:900px;
    height:600px;
    background-image:
    linear-gradient(rgba(207,232,213,0.9),rgba(207,232,213,0.9)),
    url("batik.png");
    background-size:cover;
    background-position:center;
    display:flex;
    justify-content:center;
    align-items:center;
    border-radius:10px;
}

.kotaktabel{
    background:white;
    width:360px;
    padding:35px;
    border-radius:15px;
    box-shadow:0 10px 25px rgba(0,0,0,0.15);
    text-align:center;
}

.logo{
    width:90px;
    margin-bottom:10px;
}

.input-box{
    margin-bottom:15px;
}

input{
    width:100%;
    padding:12px;
    border:none;
    border-radius:8px;
    background:#d7e7d7;
}

button{
    width:100%;
    padding:12px;
    border:none;
    border-radius:8px;
    background:#2f6d3a;
    color:white;
    font-size:16px;
    cursor:pointer;
}

button:hover{
    background:#245a2f;
}

.error{
    display:none;
}

.error img{
    width:120px;
    margin-bottom:10px;
}

</style>
</head>

<body>

<div class="badan">
<?php if(!$error){ ?>
<div class="kotaktabel">
    <img src="logo.png" class="logo">
    <h3>DIGI-VOTE KETUA IPPNU<br>DESA TEGAL SARI</h3>
    <p>Silahkan masuk untuk memberikan hak suara</p>

<form method="post">
<div class="input-box">
    <input type="text" name="nomor" placeholder="Masukkan Nomor Anggota">
</div>

<div class="input-box">
    <input type="password" name="kode" placeholder="Masukkan Kode">
</div>

<button type="submit">MASUK</button>
</form>
</div>

<?php } else { ?>
<div class="kotaktabel error">
    <img src="perempuan.png">
    <h3 style="color:#2f6d3a;">LOGIN GAGAL!</h3>
    <p>Nomor anggota atau kode salah</p>

    <a href="index.php">
        <button>COBA LAGI</button>
    </a>
</div>
<?php } ?>

</body>
</html>

<?php