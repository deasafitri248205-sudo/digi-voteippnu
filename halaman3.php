<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Daftar Kandidat</title>
<link rel="stylesheet" href="style.css">

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, Helvetica, sans-serif;
}

body{
    background-image:url("background.jpg");
    background-size:cover;
    background-position:center;
    height:100vh;
}

.container{
    display:flex;
    height:100vh;
}

.sidebar{
    width:220px;
    background:rgba(150,190,160,0.8);
    padding:40px 20px;
    color:white;
    display:flex;
    flex-direction:column;
    align-items:center;
    justify-content:space-between; /* biar logout ke bawah */
}

.sidebar h2{
    text-align:center;
}

.sidebar ul{
    list-style:none;
    text-align:center;
    padding:0;
    margin-top:50px;
}

.sidebar li{
    margin:25px 0; /* jarak antar menu */
    font-size:20px;
}

.sidebar a{
    text-decoration:none;
    color:white;
}

.logout{
    margin-bottom:20px;
    font-size:18px;
}

.main{
    flex:1;
    text-align:center;
    padding:40px;
    position:relative;
}

.logo{
    position:absolute;
    top:20px;
    right:20px;
    width:70px;
}

.main h1{
    margin-bottom:40px;
    letter-spacing:2px;
}

.card-container{
    display:flex;
    justify-content:center;
    gap:40px;
}

.card{
    background:#f2f2f2;
    padding:20px;
    width:220px;
    border-radius:15px;
    box-shadow:0 8px 15px rgba(0,0,0,0.2);
}

.card h2{
    margin-bottom:10px;
}

.card img{
    width:120px;
    margin:15px 0;
}

.btn{
    display:inline-block;
    background:#2e7d32;
    color:white;
    padding:10px 25px;
    border-radius:10px;
    font-size:16px;
    text-decoration:none;
}

.btn:hover{
    background:#1b5e20;
}
</style>
</head>

<body>

<div class="container">

    <div class="sidebar">
        <h2>Sistem<br>E-Voting</h2>

        <ul>
            <li><a>Voting</a></li>
            <li><a href="halaman10.php">Hasil Voting</a></li>
        </ul>

        <div class="logout">
            <a href="halaman1.php">Log Out →</a>
        </div>
    </div>

    <div class="main">

        <img src="logo.png" class="logo">

        <h1>DAFTAR KANDIDAT</h1>

        <div class="card-container">

            <div class="card">
                <h2>KANDIDAT 1</h2>
                <img src="kandidat1.png">
                <a href="halaman4.php" class="btn">DETAIL</a>
            </div>

            <div class="card">
                <h2>KANDIDAT 2</h2>
                <img src="kandidat2.png">
                <a href="halaman6.php" class="btn">DETAIL</a>
            </div>

            <div class="card">
                <h2>KANDIDAT 3</h2>
                <img src="kandidat3.png">
                <a href="halaman8.php" class="btn">DETAIL</a>
            </div>

        </div>

    </div>

</div>

</body>
</html>