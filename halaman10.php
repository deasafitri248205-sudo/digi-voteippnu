<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Detail Kandidat</title>

<style>
body{
  margin:0;
  font-family:"Times New Roman", serif;
  background-image:url("bg.jpeg");
  background-size: cover;
  background-position: center;
}

.container{
  display:flex;
  min-height:100vh;
  position:relative;
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
}

.menu{
  flex:1;
  display:flex;
  justify-content:center;
}

.sidebar ul{
  list-style:none;
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

.logo{
  position:absolute;
  top:20px;
  right:30px;
  width:75px;
}

.content{
  flex:1;
  display:flex;
  justify-content:center;
  align-items:center;
}

.card{
  background:#eaeaea;
  padding:50px 60px;
  width:520px;
  border-radius:18px;
  text-align:center;
  box-shadow:0 15px 40px rgba(0,0,0,0.15);
}

.card p{
  font-size:22px;
  font-weight:600;
  line-height:1.8;
  color:#2b2b2b;
}

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

.btn:hover{
  background:#9e9e9e;
}
</style>
</head>

<body>

<div class="container">

<img src="logo.png" class="logo">

<div class="sidebar">
  <h2>Sistem<br>E-Voting</h2>

  <div class="menu">
    <ul>
      <li>Voting</li>
      <li><a href="halaman3.php">Hasil Voting</a></li>
    </ul>
  </div>

  <div class="logout">
    <a href="halaman1.php">Log Out →</a>
  </div>
</div>

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