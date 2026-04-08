<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Detail Kandidat</title>

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
margin-bottom:60px;
}

.sidebar ul{
list-style:none;
text-align:center;
}

.sidebar li{
margin:30px 0;
font-size:20px;
}

.sidebar a{
color:white;
text-decoration:none;
}

.sidebar a:hover{
text-decoration:underline;
}

.logout{
margin-top:auto;
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

.photo-card img{
width:200px;
}

.candidate{
display:flex;
flex-direction:column;
align-items:center;
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
margin:10px 0;
font-size:16px;
}

.buttons{
margin-top:20px;
display:flex;
gap:20px;
}

.vote, .back{
display:inline-block;
text-decoration:none;
background:#2e7d32;
color:white;
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

    <ul>
      <li>Voting</a></li>
      <li><a href="halaman9.php">Hasil Voting</a></li>
    </ul>

    <div class="logout">Log Out →</div>
  </div>

  <div class="main">

    <img src="logo.png" class="logo">

    <h1>KANDIDAT 2</h1>

    <div class="content">

      <div class="candidate">
        <div class="photo-card">
          <img src="kandidat2.png">
        </div>

        <div class="name-banner">
          DWI RATNA
        </div>
      </div>

      <div class="vision-mission">

        <div class="section">
          <img src="visi.png" class="title-img">

          <div class="box">
            <p><span>✔</span><span>Mewujudkan IPNU sebagai wadah pelajar NU yang solid, kreatif, dan berlandaskan nilai Ahlussunnah Wal Jama’ah..</span></p>
          </div>
        </div>

        <div class="section">
          <img src="misi.png" class="title-img">

          <div class="box">
            <p>✔ Meningkatkan keaktifan anggota dalam setiap kegiatan IPNU</p>
            <p>✔ Menumbuhkan sikap disiplin dan tanggung jawab dalam berorganisasi</p>
            <p>✔ Mengadakan kegiatan yang mendukung prestasi pelajar</p>
          </div>
        </div>

        <div class="buttons">
          <a href="halaman7.php" class="vote">VOTING</a>
          <a href="halaman3.php" class="back">KEMBALI</a>
        </div>

      </div>

    </div>

  </div>

</div>

</body>
</html>