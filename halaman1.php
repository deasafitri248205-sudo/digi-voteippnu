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
font-family:Arial, sans-serif;
background:#f5f5f5;

display:flex;
justify-content:center;
align-items:center;
height:100vh;
}

.bg-box{
width:980px;
height:680px;
background-image:
linear-gradient(rgba(207,232,213,0.9),rgba(207,232,213,0.9)),
url("c:\Users\RPL\Downloads\WhatsApp Image 2026-03-11 at 08.44.26.jpeg")
background-size:cover;
background-position:center;
display:flex;
justify-content:center;
align-items:center;
border-radius:10px;
}

.card{
background:white;
width:400px;
height: 470px;
padding:30px;
border-radius:15px;
box-shadow:0 10px 25px rgba(0,0,0,0.15);
text-align:center;
}

.logo{
width:100px;
margin-bottom:10px;
}

h2{
color:#2f6d3a;
margin:5px 0;
}

p{
font-size:14px;
margin-bottom:25px;
}

.input-box{
margin-bottom:15px;
}

.input-box input{
width:100%;
padding:12px;
border:none;
border-radius:8px;
background:#d7e7d7;
font-size:14px;
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

</style>
</head>

<body>

<div class="bg-box">

<div class="card">

<img src="logo.png" class="logo">

<h2>DIGI-VOTE KETUA IPPNU</h2>
<h2>DESA TEGAL SARI</h2>

<p>Silahkan masuk untuk memberikan hak suara</p>

<div class="input-box">
    <input type="number" placeholder="Masukkan Nomor Anggota">
</div>

<div class="input-box">
<input type="password" placeholder="Masukkan Kode">
</div>

<button>MASUK</button>

</div>

</div>

</body>
</html>

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

/* kotak hijau */
.bg-box{
width:900px;
height:450px;

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

/* card */
.card{
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

<div class="bg-box">

<!-- LOGIN -->
<div class="card" id="loginBox">

<img src="logo.png" class="logo">

<h3>DIGI-VOTE KETUA IPPNU<br>DESA TEGAL SARI</h3>

<p>Silahkan masuk untuk memberikan hak suara</p>

<div class="input-box">
<input type="text" id="nomor" placeholder="Masukkan Nomor Anggota">
</div>

<div class="input-box">
<input type="password" id="kode" placeholder="Masukkan Kode">
</div>

<button onclick="login()">MASUK</button>

</div>

<!-- LOGIN GAGAL -->
<div class="card error" id="errorBox">

<img src="error.png">

<h3 style="color:#2f6d3a;">LOGIN GAGAL!</h3>

<p>Nomor anggota dan Kode salah</p>

<button onclick="cobaLagi()">COBA LAGI</button>

</div>

</div>

<script>

function login(){

let nomor=document.getElementById("nomor").value
let kode=document.getElementById("kode").value

/* contoh data benar */
if(nomor=="123" && kode=="ippnu"){

alert("Login Berhasil")

}else{

document.getElementById("loginBox").style.display="none"
document.getElementById("errorBox").style.display="block"

}

}

function cobaLagi(){

document.getElementById("loginBox").style.display="block"
document.getElementById("errorBox").style.display="none"

}

</script>

</body>
</html>