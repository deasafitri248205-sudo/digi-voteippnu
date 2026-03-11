<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
body{
    margin:0;
    font-family: 'Serif', 'Palatino Linotype', 'Book Antiqua', serif; 
    background: #cfe3d3;
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
}

.container{
    width:100%;
    display:flex;
    justify-content:center;
}

.card{
    background:white;
    width:700px;
    padding:100px;
    border-radius:15px;
    text-align:center;
    box-shadow:0 10px 25px rgba(0,0,0,0.2);
}
.avatar{
    width:200px;
    margin-bottom:20px;
}

h2{
    color:#2f6b1e;
    margin:10px 0;
}

p{
    color:#2f6b1e;
    font-size:18px;
}

button{
    margin-top:20px;
    padding:12px 30px;
    border:none;
    border-radius:8px;
    background:#3a7d1c;
    color:white;
    font-size:18px;
    cursor:pointer;
}

button:hover{
    background:#2c5f15;
}
    </style>
</body>
</html>
    <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Gagal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <div class="card">

        <img src="ICON-removebg-preview.png" class="avatar">

        <h2>LOGIN GAGAL !<b></h2>
        <p>Nomor anggota dan Kode salah<b></p>

        <button onclick="reloadPage()">COBA LAGI</button>

    </div>

</div>

<script src="script.js"></script>

</body>
</html>
</head>
<body>
    