<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Voting Berhasil</title>

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

.main{
  flex:1;
  padding:40px;
  position:relative;
  display:flex;
  justify-content:center;
  align-items:center;
}

.logo{
  position:absolute;
  top:20px;
  right:20px;
  width:70px;
}

.card{
  background:#eaeaea;
  width:520px;
  padding:50px 60px;
  border-radius:20px;
  text-align:center;
  box-shadow:0 10px 20px rgba(0,0,0,0.2);
}

.card p{
  font-size:22px;
  font-weight:600;
  line-height:1.8;
  color:#2b2b2b;
}

.btn{
  margin-top:35px;
  display:inline-block;
  padding:12px 30px;
  border:none;
  border-radius:10px;
  background:#b5b5b5;
  font-weight:bold;
  font-size:13px;
  letter-spacing:1px;
  cursor:pointer;
  color:#333;
  text-decoration:none;
  transition:0.2s;
}

.btn:hover{
  background:#9e9e9e;
}
</style>
</head>

<body>

<div class="container">

  <div class="sidebar">
    <h2>Sistem<br>E-Voting</h2>

    <div class="menu">
      <ul>
        <li><a href="halaman3.php">Voting</a></li>
        <li><a href="halaman11.php">Hasil Voting</a></li>
      </ul>
    </div>

    <div class="logout">
      <a href="halaman1.php">Log Out →</a>
    </div>
  </div>

  <div class="main">

    <img src="logo.png" class="logo" alt="Logo">

    <div class="card">
      <p>
        Pilihan anda sudah kami simpan,<br>
        Terima kasih sudah berpartisipasi<br>
        dalam voting ini.
      </p>

      <a href="halaman1.php" class="btn">
        KEMBALI KE HALAMAN LOGIN
      </a>
    </div>

  </div>

</div>

</body>
</html>