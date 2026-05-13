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
    padding:50px;
    width:450px;
    border-radius:20px;
    text-align:center;
    box-shadow:0 8px 20px rgba(0,0,0,0.2);
}

.logo{
    width:90px;
    margin-bottom:15px;
}

.login-card h2{
    color:#2f6f3e;
    font-size:24px;
    margin-bottom:10px;
}

.login-card p{
    font-size:14px;
    margin-bottom:25px;
}

.error{
    background:red;
    color:white;
    padding:10px;
    border-radius:8px;
    margin-bottom:15px;
    font-size:13px;
}

.input-box{
    display:flex;
    align-items:center;
    background:#9bbf9c;
    padding:12px;
    border-radius:8px;
    margin-bottom:18px;
}

.input-box i{
    color:#1e3d27;
    font-size:18px;
}

.input-box i:first-child{
    margin-right:10px;
}

.input-box input{
    border:none;
    outline:none;
    background:none;
    width:100%;
    color:#1e3d27;
    font-size:17px;
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

.btn{
    width:100%;
    padding:14px;
    border:none;
    background:#3d6e2f;
    color:white;
    font-weight:bold;
    font-size:16px;
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

        <form method="POST" action = "aksi-login.php">

            <div class="input-box">
                <i class="fa fa-user"></i>
                <input type="text" name="anggota" placeholder="Masukkan Nomor Anggota" required>
            </div>

            <div class="input-box">
                <i class="fa fa-lock"></i>
                <input type="password" name="kode" placeholder="Masukkan Kode" required>
            </div>

            <button class="btn" type="submit">MASUK</button>

    </div>
</div>

</body>
</html>