<!DOCTYPE html>
<html>
<head>
    <title>Sistem E-Voting</title>

    <style>
body{
    margin:0;
    font-family: serif;
    background-image:url("background.jpg");
    background-size: cover;
    background-position: center;
}

/* LINK */
a{
    text-decoration: none;
    color: white;
}

.sidebar a:visited{
    color: white;
}

/* LAYOUT */
.container{
    display:flex;
    min-height:100vh;
}

/* SIDEBAR */
.sidebar{
    width:180px;
background:rgba(140,170,150,0.6);
color:white;
display:flex;
flex-direction:column;
justify-content:space-between;
align-items:center;
padding:30px 10px;
}

.sidebar h2{
    margin-bottom:80px;
    line-height:1.5;
    margin-top:-30px;
}

.sidebar ul{
    list-style:none;
    padding:0;
    margin:auto 0;
}

.sidebar li{
    margin:25px 0;
    font-size:20px;
}

.logout{
    margin-top:auto;
    font-size:18px;
}

/* CONTENT */
.content{
    flex:1;
    display:flex;
    justify-content:center;
    align-items:center;
    padding:20px;
}

/* CARD */
.card{
    background:#f5f5f5;
    padding:70px 60px;
    width:600px;
    border-radius:20px;
    text-align:center;
    box-shadow:0 10px 30px rgba(0,0,0,0.2);
}

.card p{
    font-size:26px;
    font-weight:bold;
    line-height:1.6;
    color:#333;
}

/* BUTTON */
.btn{
    margin-top:40px;
    padding:14px 35px;
    border:none;
    border-radius:12px;
    background:#bfbfbf;
    font-weight:bold;
    letter-spacing:1px;
    cursor:pointer;
    transition:0.2s;
}

.btn:hover{
    background:#9e9e9e;
}
    </style>
</head>

<body>

<div class="container">

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