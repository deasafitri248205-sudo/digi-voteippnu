<!DOCTYPE html>
<html>
<head>
    <title>Sistem E-Voting</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body{
    margin:0;
    font-family: serif;
    background-image: url("background.jpeg");
    background-size: cover;
}

.container{
    display: flex;
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
margin-bottom:60px;
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
margin-top:auto;
font-size:18px;
}


.title{
    text-align:center;
    color:white;
    font-size:32px;
    font-weight:600;
}

.title span{
    font-weight:800;
}

.menu{
    display:flex;
    flex-direction:column;
    align-items:center;
    gap:40px;
}

.menu a{
    color:white;
    font-size:26px;
    text-decoration:none;
}

.logout a{
    color:white;
    font-size:24px;
    text-decoration:none;
}

.content{
    flex:1;
    display:flex;
    justify-content:center;
    align-items:center;
}

.card{
    background:#e6e6e6;
    padding:50px;
    width:450px;
    text-align:center;
    border-radius:15px;
    box-shadow:0 4px 10px rgba(0,0,0,0.2);
}

.card p{
    font-size:22px;
    font-weight:bold;
}

button{
    margin-top:20px;
    padding:10px 20px;
    border:none;
    border-radius:8px;
    background:#bfbfbf;
    font-weight:bold;
    cursor:pointer;
}
    </style>
</head>

<body>

<div class="container">

    <div class="sidebar">
    <h2>Sistem<br>E- Voting</h2>

    <ul>
      <li>Voting</li>
      <li>Hasil Voting</li>
    </ul>

    <div class="logout">Log Out →</div>
  </div>


    <div class="content">
        <div class="card">
            <p>
                Pilihan anda sudah kami simpan, Terima kasih sudah
                berpartisipasi dalam voting ini.
            </p>
            
            <button type="submit" class="btn">KEMBALI KE HALAMAN LOGIN</button>

        </div>
    </div>

</div>

</body>
</html>