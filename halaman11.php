<!DOCTYPE html>
<html>
<head>
<title>Hasil Voting</title>
<link rel="stylesheet" href="style.css">
<style>
    
    body{
margin:0;
font-family: serif;
background-image:url("bg.jpeg");
background-size:cover;
}

.container{
display:flex;
height:100vh;
}

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

.logo-text{
font-size:18px;
text-align:center;
}

.menu{
display:flex;
flex-direction:column;
gap:40px;
font-size:18px;
text-align:center;
}

.menu a{
text-decoration:none;
color:white;
}

.logout{
font-size:16px;
}

.content{
flex:1;
padding:40px;
position:relative;
text-align:center;
}

.content h1{
margin-top:10px;
letter-spacing:2px;
}

.logo{
position:absolute;
top:20px;
right:30px;
width:80px;
}

.kandidat-container{
display:flex;
justify-content:center;
gap:40px;
margin-top:50px;
}

.card{
background:#e8e8e8;
width:180px;
padding:20px;
border-radius:10px;
box-shadow:0 5px 10px rgba(0,0,0,0.2);
}

.card img{
width:120px;
margin:10px 0;
}

.nama{
background:#2f7d32;
color:white;
padding:6px;
border-radius:8px;
font-size:14px;
margin-top:5px;
}

.vote{
background:#2f7d32;
color:white;
margin-top:15px;
padding:6px;
border-radius:8px;
}
</style>
</head>

<body>

<div class="container">

    <div class="sidebar">
        <div class="logo-text">
            Sistem<br>E-voting
        </div>

        <div class="menu">
            <a href="#">Voting</a>
            <a href="#">Hasil Voting</a>
        </div>

        <div class="logout">
            Log Out ↪
        </div>
    </div>


    <div class="content">

        <h1>HASIL VOTING</h1>

        <img src="logo.png" class="logo">

        <div class="kandidat-container">

            <div class="card">
                <h3>KANDIDAT 1</h3>
                <img src="kandidat1.png">
                <div class="nama">PUTRI AYU</div>
                <div class="vote">0%</div>
            </div>

            <div class="card">
                <h3>KANDIDAT 2</h3>
                <img src="kandidat2.png">
                <div class="nama">DWI RATNA</div>
                <div class="vote">0%</div>
            </div>

            <div class="card">
                <h3>KANDIDAT 3</h3>
                <img src="kandidat3.png">
                <div class="nama">NIARA SARI</div>
                <div class="vote">0%</div>
            </div>

        </div>

    </div>

</div>

</body>
</html>