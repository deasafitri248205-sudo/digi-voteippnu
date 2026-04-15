<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Detail Kandidat</title>
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
  justify-content:space-between; 
}

.sidebar h2{
  text-align:center;
}

.menu{
  flex:1;
  display:flex;
  align-items:center; 
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
  margin-bottom:20px;
  font-size:18px;
}

.main{
  flex:1;
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
  text-align:center;
  margin-bottom:40px;
}

.content{
  display:flex;
  justify-content:center;
  gap:60px;
}

.photo-card{
  background:#eee;
  padding:30px;
  border-radius:20px;
  width:320px;
  display:flex;
  justify-content:center;
  box-shadow:0 5px 15px rgba(0,0,0,0.2);
}

.candidate{
  display:flex;
  flex-direction:column;
  align-items:center;
}

.candidate-img{
  width:220px;
  display:block;
}

.name-banner{
  background-image:url("button.png");
  background-size:100% 100%;
  background-repeat:no-repeat;
  width:320px;
  height:90px;
  display:flex;
  align-items:center;
  justify-content:center;
  color:white;
  font-weight:bold;
  font-size:22px;
  letter-spacing:1px;
  margin-top:-35px; 
  text-align:center;
}

.vision-mission{
  width:450px;
}

.section{
  margin-bottom:30px;
}

.title-img{
  width:150px;
  margin-bottom:-10px;
}

.box{
  background:#f5f5f5;
  padding:20px;
  border-radius:15px;
  box-shadow:0 5px 10px rgba(0,0,0,0.2);
}

.box p{
  display:flex;
  align-items:flex-start;
  gap:10px;
  font-size:16px;
  margin:10px 0;
}

.box span:first-child{
  min-width:20px;
}

.buttons{
  margin-top:20px;
  display:flex;
  gap:20px;
}

.vote, .back{
  background:#2e7d32;
  color:white;
  border:none;
  padding:10px 25px;
  border-radius:10px;
  font-size:16px;
  cursor:pointer;
}

.vote:hover, .back:hover{
  background:#1b5e20;
}
</style>
</head>

<body>

<div class="container">

  <div class="sidebar">
    <h2>Sistem<br>E-Voting</h2>

    <div class="menu">
      <ul>
        <li>Voting</a></li>
        <li><a href="halaman11.php">Hasil Voting</a></li>
      </ul>
    </div>

    <div class="logout">
      <a href="halaman1.php">Log Out →</a>
    </div>
  </div>

  <div class="main">

    <img src="logo.png" class="logo">

    <h1>KANDIDAT 1</h1>

    <div class="content">

      <div class="candidate">
        <div class="photo-card">
          <img src="kandidat1.png" class="candidate-img">
        </div>

        <div class="name-banner">
          PUTRI AYU
        </div>
      </div>

      <div class="vision-mission">

        <div class="section">
          <img src="visi.png" class="title-img">

          <div class="box">
            <p><span>✔</span><span>Terwujudnya IPNU yang aktif, berakhlak, dan berprestasi dalam organisasi maupun akademik.</span></p>
          </div>
        </div>

        <div class="section">
          <img src="misi.png" class="title-img">

          <div class="box">
            <p><span>✔</span><span>Meningkatkan keaktifan anggota dalam setiap kegiatan IPNU</span></p>
            <p><span>✔</span><span>Menumbuhkan sikap disiplin dan tanggung jawab dalam berorganisasi</span></p>
            <p><span>✔</span><span>Mengadakan kegiatan yang mendukung prestasi pelajar</span></p>
          </div>
        </div>

        <div class="button.png">
          <button class="vote" onclick="window.location.href='halaman5.php'">VOTING</button>
          <button class="back" onclick="window.location.href='halaman3.php'">KEMBALI</button>
        </div>

      </div>

    </div>

  </div>

</div>

</body>
</html>