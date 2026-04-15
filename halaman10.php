<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Detail Kandidat</title>
<link rel="stylesheet" href="style.css">
<style>

body{
margin:0;
font-family: "Times New Roman", serif;
background-image:url("bg.jpeg");
background-size: cover;
background-position: center;
}

/* CONTAINER */
.container{
display:flex;
min-height:100vh;
position:relative;
}

/* SIDEBAR */
.sidebar{
width:190px;
background:rgba(120,160,130,0.35);
backdrop-filter: blur(10px);
padding:80px 25px;
color:white;
display:flex;
flex-direction:column;
}

/* TITLE */
.sidebar h2{
line-height:1.6;
font-size:22px;
margin-bottom:120px;
}

/* MENU */
.sidebar ul{
list-style:none;
padding:0;
}

.sidebar li{
margin:30px 0;
font-size:18px;
}

/* LINK */
.sidebar a{
text-decoration:none;
color:white;
opacity:0.85;
transition:0.2s;
}

.sidebar a:hover{
opacity:1;
transform:translateX(5px);
}

/* LOGOUT */
.logout{
margin-top:auto;
font-size:16px;
opacity:0.8;
}

/* LOGO */
.logo{
position:absolute;
top:20px;
right:30px;
width:75px;
}

/* CONTENT */
.content{
flex:1;
display:flex;
justify-content:center;
align-items:center;
}

/* CARD */
.card{
background:#eaeaea;
padding:50px 60px;
width:520px;
border-radius:18px;
text-align:center;
box-shadow:0 15px 40px rgba(0,0,0,0.15);
}

/* TEXT */
.card p{
font-size:22px;
font-weight:600;
line-height:1.8;
color:#2b2b2b;
}

/* BUTTON */
.btn{
margin-top:35px;
padding:12px 30px;
border:none;
border-radius:10px;
background:#b5b5b5;
font-weight:bold;
font-size:13px;
letter-spacing:1px;
cursor:pointer;
color:#333;
transition:0.2s;
}

.btn:hover </style>

</head>

<body>

<div class="container">

<img src="logo.png" class="logo">

<!-- SIDEBAR -->
<div class="sidebar">
    <h2>Sistem<br>E - Voting</h2>

    <ul>
        <li><a href="halaman3.php">Voting</a></li>
        <li><a href="halaman11.php">Hasil Voting</a></li>
    </ul>

    <div class="logout">
        <a href="halaman1.php">Log Out →</a>
    </div>
</div>

<!-- CONTENT -->
<div class="content">
    <div class="card">
        <p>
            Pilihan anda sudah kami simpan,<br>
            Terima kasih sudah berpartisipasi<br>
            dalam voting ini.
        </p>

        <a href="halaman1.php">
            <button class="btn">KEMBALI KE HALAMAN LOGIN</button>
        </a>
    </div>
</div>

</div>

</body>
</html>