<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Hasil Voting</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, Helvetica, sans-serif;
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

.sidebar{
    width:220px;
    background:rgba(150,190,160,0.8);
    padding:40px 20px;
    color:white;
    display:flex;
    flex-direction:column;
    align-items:center;
}

.sidebar h2{
    text-align:center;
    margin-bottom:250px;
    font-size:24px;
    font-weight:bold;
    line-height:1.2;
}

.sidebar ul{
    list-style:none;
    flex:1;
    text-align:center;
    padding:0;
}

.sidebar li{
    margin:25px 0;
    font-size:20px;
}

.sidebar a{
    text-decoration:none;
    color:white;
}

.logout{
    margin-top:auto;
    margin-bottom:20px;
    font-size:18px;
    text-align:center;
}

.main{
    flex:1;
    padding:40px;
    position:relative;
    text-align:center;
}

.logo{
    position:absolute;
    top:20px;
    right:20px;
    width:70px;
}

.main h1{
    font-size:32px;
    font-weight:bold;
    margin-bottom:80px;
    color:#000;
    margin-top:0;
}

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
            <li><a href="halaman11.php">Hasil Voting</a></li>
        </ul>

        <div class="logout">
            <a href="index.php">Log Out →</a>
        </div>
    </div>

    <div class="main">

        <img src="logo.png" class="logo" alt="Logo">

        <h1>HASIL VOTING</h1>

        <div class="card-container">

            <div class="card">
                <h3>KANDIDAT 1</h3>
                <img src="kandidat1.png" alt="Kandidat 1">
                <div class="nama">PUTRI AYU</div>
                <div class="vote">0%</div>
            </div>

            <div class="card">
                <h3>KANDIDAT 2</h3>
                <img src="kandidat2.png" alt="Kandidat 2">
                <div class="nama">DWI RATNA</div>
                <div class="vote">0%</div>
            </div>

            <div class="card">
                <h3>KANDIDAT 3</h3>
                <img src="kandidat3.png" alt="Kandidat 3">
                <div class="nama">NIA RASARI</div>
                <div class="vote">0%</div>
            </div>

        </div>

    </div>

</div>

</body>
</html>