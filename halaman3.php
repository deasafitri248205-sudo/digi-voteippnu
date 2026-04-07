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
}

.sidebar h2{
text-align:center;
margin-bottom:50px;
}

.sidebar ul{
list-style:none;
text-align:center;
}

.sidebar li{
margin:30px 0;
font-size:20px;
cursor:pointer;
}

.logout{
margin-top:120px;
font-size:18px;
cursor:pointer;
text-align:center;
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
cursor:pointer;
transition:0.2s;
}

/* hover */
.card:hover{
transform: translateY(-5px);
}

/* klik */
.card:active{
transform: scale(0.97);
}

.card h2{
margin-bottom:10px;
}

.card img{
width:120px;
margin:15px 0;
}

.card button{
background:#2e7d32;
color:white;
border:none;
padding:10px 25px;
border-radius:10px;
font-size:16px;
cursor:pointer;
transition:0.2s;
}

/* hover tombol */
.card button:hover{
background:#1b5e20;
transform: scale(1.05);
}

/* klik tombol */
.card button:active{
transform: scale(0.95);
background:#145a1a;
}
</style>
</head>

<body>

<div class="container">

    <div class="sidebar">
        <h2>Sistem<br>DIGI-VOTE</h2>

        <ul>
            <li>Voting</li>
            <li>Hasil Voting</li>
        </ul>

        <div class="logout">
            Log Out →
        </div>
    </div>

    <div class="main">

        <img src="logo.png" class="logo">

        <h1>DAFTAR KANDIDAT</h1>

        <div class="card-container">

            <div class="card" onclick="window.location.href='halaman4.php'">
                <h2>KANDIDAT 1</h2>
                <img src="kandidat1.jpg">
                <button>DETAIL</button>
            </div>

            <div class="card" onclick="window.location.href='halaman4.php'">
                <h2>KANDIDAT 2</h2>
                <img src="kandidat2.jpg">
                <button>DETAIL</button>
            </div>

            <div class="card" onclick="window.location.href='halaman4.php'">
                <h2>KANDIDAT 3</h2>
                <img src="kandidat3.jpg">
                <button>DETAIL</button>
            </div>

        </div>

    </div>

</div>

</body>
</html>