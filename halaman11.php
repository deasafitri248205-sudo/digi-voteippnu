<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Hasil Voting</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins', Arial, sans-serif;
}

body{
    background-image:url("bg.jpeg");
    background-size:cover;
    background-position:center;
    height:100vh;
    overflow:hidden;
}

.container{
    display:flex;
    height:100vh;
}

/* SIDEBAR */
.sidebar{
    width:220px;
    background:rgba(150,185,155,0.7);
    backdrop-filter:blur(8px);
    padding:60px 20px;
    color:white;
    display:flex;
    flex-direction:column;
    align-items:center;
}

.sidebar h2{
    font-size:22px;
    font-weight:500;
    line-height:1.2;
    margin-bottom:300px;
    text-align:center;
}

.sidebar ul{
    list-style:none;
    flex-grow:1;
    text-align:center;
}

.sidebar li{
    margin-bottom:40px;
    font-size:18px;
}

.sidebar a{
    text-decoration:none;
    color:white;
}

.logout{
    margin-top:auto;
    font-size:18px;
    padding-bottom:20px;
    text-align:center;
}

/* CONTENT */
.main{
    flex:1;
    padding:40px;
    position:relative;
    text-align:center;
}

.logo{
    position:absolute;
    top:30px;
    right:40px;
    width:80px;
}

.main h1{
    font-size:32px;
    margin-top:30px;
    margin-bottom:80px;
    letter-spacing:3px;
    color:#333;
    font-weight:bold;
}

/* CARD HASIL */
.card-container{
    display:flex;
    justify-content:center;
    gap:50px;
    flex-wrap:wrap;
}

.card{
    background:#f9f9f9;
    padding:30px 25px;
    width:230px;
    border-radius:20px;
    box-shadow:0 10px 25px rgba(0,0,0,0.15);
    transition:0.3s;
    cursor:pointer;
}

.card:hover{
    transform:scale(1.06);
    box-shadow:0 15px 30px rgba(0,0,0,0.25);
}

.card h3{
    font-size:20px;
    margin-bottom:15px;
    color:#333;
}

.card img{
    width:150px;
    height:190px;
    object-fit:cover;
    margin-bottom:18px;
}

.nama{
    background:#2e7d32;
    color:white;
    padding:10px;
    border-radius:10px;
    font-size:17px;
    margin-bottom:15px;
}

.vote{
    background:#2e7d32;
    color:white;
    padding:10px;
    border-radius:10px;
    font-size:17px;
}
</style>
</head>

<body>

<div class="container">

    <div class="sidebar">
        <h2>Sistem<br>E-Voting</h2>

        <ul>
            <li><a href="halaman3.php">Voting</a></li>
            <li><a href="halaman10.php">Hasil Voting</a></li>
        </ul>

        <div class="logout">
            <a href="halaman1.php">Log Out →</a>
        </div>
    </div>

    <div class="main">

        <img src="logo.png" class="logo">

        <h1>HASIL VOTING</h1>

        <div class="card-container">

            <div class="card">
                <h3>KANDIDAT 1</h3>
                <img src="kandidat1.png">
                <div class="nama">PUTRIAYU</div>
                <div class="vote">0%</div>
            </div>

            <div class="card">
                <h3>KANDIDAT 2</h3>
                <img src="kandidat2.png">
                <div class="nama">DWIRATNA</div>
                <div class="vote">0%</div>
            </div>

            <div class="card">
                <h3>KANDIDAT 3</h3>
                <img src="kandidat3.png">
                <div class="nama">NIARASARI</div>
                <div class="vote">0%</div>
            </div>

        </div>

    </div>

</div>

</body>
</html>