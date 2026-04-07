<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Gagal</title>
<link rel="stylesheet" href="style.css">
<style>
    *{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial, Helvetica, sans-serif;
}

body{
height:100vh;
background-image:url("background.jpeg");
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
width:60px;
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
width:150px;
margin-bottom:15px;
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
}

.circle{
width:15px;
height:15px;
border:2px solid white;
border-radius:50%;
display:inline-block;
}
</style>
</head>

<body>

<img src="logo.png" class="logo">

<div class="container">

    <div class="card">

        <img src="icon.png" class="illustration">

        <h2>LOGIN GAGAL!</h2>

        <p>Nomor anggota dan Kode salah</p>

        <button class="btn">
            COBA LAGI
            <span class="circle"></span>
        </button>

    </div>

</div>

</body>
</html>