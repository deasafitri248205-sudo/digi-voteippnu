<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Daftar Kandidat</title>
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

.sidebar{
    width:220px;
    background:rgba(150,185,155,0.7);
    backdrop-filter: blur(8px);
    padding:60px 20px;
    color:white;
    display:flex;
    flex-direction:column;
    align-items: center; 
}

.sidebar h2{
    font-size: 22px;
    font-weight: 500;
    line-height: 1.2;
    margin-bottom: 300px;
    text-align: center; 
}

.sidebar ul{
    list-style: none;
    flex-grow: 1;
    text-align: center;
} 

.sidebar li{
    margin-bottom: 40px;
    font-size: 18px;
    cursor: pointer;
}

.sidebar a{
    text-decoration: none;
    color: white;
    transition: 0.3s;
}

.sidebar a:hover {
    opacity: 0.7;
}

.logout{
    margin-top: auto;
    font-size: 18px;
    padding-bottom: 20px;
    text-align: center; 
}

.main{
    flex: 1;
    padding: 40px;
    position: relative;
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.logo{
    position: absolute;
    top: 30px;
    right: 40px;
    width: 80px;
}

.main h1{
    font-size: 32px;
    margin-top: 50px;
    margin-bottom: 60px;
    letter-spacing: 3px;
    color: #333;
    font-weight: bold;
}

.card-container{
    display: flex;
    justify-content: center;
    align-items: flex-start;
    gap: 35px;
}

.card{
    background: #f9f9f9;
    padding: 30px 20px;
    width: 240px; 
    border-radius: 20px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    display: flex;
    flex-direction: column;
    align-items: center;
    transition: 0.3s;
}

.card:hover {
    transform: translateY(-10px);
}

.card h2{
    font-size: 18px;
    margin-bottom: 20px;
    letter-spacing: 1px;
    color: #333;
}

.card img{
    width: 150px; 
    height: 180px;
    object-fit: cover;
    border-radius: 10px;
    margin-bottom: 25px;
}

.btn{
    display: block;
    background: #2e7d32;
    color: white;
    padding: 12px 0;
    border-radius: 8px;
    font-size: 16px;
    font-weight: bold;
    text-decoration: none;
    width: 100%; 
    text-align: center;
    transition: 0.3s;
}

.btn:hover{
    background: #1b5e20;
}
</style>
</head>

<body>

<div class="container">

    <div class="sidebar">
        <h2>Sistem<br>E-Voting</h2>

        <ul>
            <li><a>Voting</a></li>
            <li><a href="halaman11.php">Hasil Voting</a></li>
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