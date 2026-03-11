<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
body {
    margin: 0;
    font-family: 'Serif', 'Palatino Linotype', 'Book Antiqua', serif; 
    background-color: #BEE9CC; 
}

.wrapper {
    display: flex;
    min-height: 100vh;
}

.sidebar {
    width: 200px;
    background-color: #BEE9CC; 
    padding: 30px 20px;
    display: flex;
    flex-direction: column;
    color: white;
}

.sidebar h2 { font-size: 20px; margin-bottom: 60px; }
.sidebar-menu a { 
    display: block; 
    color: white; 
    text-decoration: none; 
    margin-bottom: 25px;
    font-weight: bold;
}
.sidebar-bottom { margin-top: auto; }

.content {
    flex: 1;
    padding: 40px;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.main-header {
    width: 100%;
    display: flex;
    justify-content: center;
    position: relative;
    margin-bottom: 40px;
}

.logo-ipnu { width: 60px; position: absolute; right: 0; top: -10px; }

.candidate-section {
    display: flex;
    gap: 50px;
    align-items: flex-start;
    justify-content: center;
    width: 100%;
}

.photo-card {
    background: white;
    padding: 10px;
    border-radius: 20px;
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
}

.photo-inner img {
    width: 250px;
    border-radius: 15px;
    display: block;
}

.ribbon-name {
    background: linear-gradient(to right, #2D8225, #2D8225);
    color: white;
    text-align: center;
    padding: 10px;
    border-radius: 8px;
    font-weight: bold;
    margin-top: -25px; 
    position: relative;
    z-index: 2;
}

.info-box {
    background: white;
    border-radius: 25px;
    padding: 20px 40px;
    margin-bottom: 40px;
    width: 500px;
    position: relative;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
}

.label {
    background: #E1B12C; 
    color: white;
    padding: 5px 40px;
    border-radius: 5px;
    position: absolute;
    top: -15px;
    left: 50%;
    transform: translateX(-50%);
    font-weight: bold;
}

.button-group {
    margin-top: 20px;
    display: flex;
    gap: 30px;
}

.btn {
    padding: 12px 50px;
    border: none;
    border-radius: 15px;
    color: white;
    font-weight: bold;
    cursor: pointer;
}

.btn-vote { background-color: #2D8225; }
.btn-back { background-color: #2d8225; }
    </style>
</head>
<body>
    <div class="wrapper">
    <aside class="sidebar">
        <div class="sidebar-top">
            <h2>Sistem<br>E-voting</h2>
        </div>
        <nav class="sidebar-menu">
            <a href="#">Voting</a>
            <a href="#">Hasil Voting</a>
        </nav>
        <div class="sidebar-bottom">
            <a href="#">Log Out &rarr;</a>
        </div>
    </aside>

    <main class="content">
        <header class="main-header">
            <h1 class="title">KANDIDAT 1</h1>
            <img src="digi-voteippnu/logo.png" class="logo-ipnu">
        </header>

        <section class="candidate-section">
            <div class="photo-card">
                <div class="photo-inner">
                    <img src="digi-voteippnu/kandidat1.png" alt="Putri Ayu">
                    <div class="ribbon-name">PUTRI AYU</div>
                </div>
            </div>

            <div class="info-container">
                <div class="info-box">
                    <span class="label">VISI</span>
                    <p>Terwujudnya IPNU yang aktif, berakhlak, dan berprestasi dalam organisasi maupun akademik.</p>
                </div>

                <div class="info-box">
                    <span class="label">MISI</span>
                    <ul>
                        <li>Meningkatkan keaktifan anggota dalam setiap kegiatan IPNU</li>
                        <li>Menumbuhkan sikap disiplin dan tanggung jawab dalam berorganisasi</li>
                        <li>Mengadakan kegiatan yang mendukung prestasi pelajar</li>
                    </ul>
                </div>
            </div>
        </section>

        <div class="button-group">
            <button class="btn btn-vote">VOTING</button>
            <button class="btn btn-back">KEMBALI</button>
        </div>
    </main>
</div>
</body>
</html>