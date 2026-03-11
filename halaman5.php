<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>E-Voting - Detail Kandidat</title>
    <link rel="stylesheet" href="style.css">
    <style>
       * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    background-image: url('background2.png');
    background-size: 100% 100%;
    background-repeat: no-repeat;
    height: 100vh;
    font-family: 'Arial', sans-serif;
    overflow: hidden;
}

.app-container {
    display: flex;
    height: 100vh;
}
.sidebar {
    width: 18.5%; 
    padding: 50px 30px;
    display: flex;
    flex-direction: column;
    color: white;
}

.sidebar-title { font-size: 22px; margin-bottom: 60px; line-height: 1.2; }
.sidebar-nav a { 
    display: block; 
    color: white; 
    text-decoration: none; 
    margin-bottom: 30px; 
    font-weight: bold;
    font-size: 18px;
}
.sidebar-footer { margin-top: auto; font-weight: bold; }
.sidebar-footer a { color: white; text-decoration: none; }

.main-body {
    flex: 1;
    padding: 30px 50px;
    display: flex;
    flex-direction: column;
}

.header-section {
    display: flex;
    justify-content: center;
    position: relative;
    margin-bottom: 30px;
}

.candidate-header { font-size: 35px; font-weight: bold; letter-spacing: 3px; }
.ipnu-logo { width: 65px; position: absolute; right: 0; top: -10px; }

.content-flex {
    display: flex;
    justify-content: center;
    gap: 60px;
    align-items: flex-start;
    margin-top: 20px;
}


.photo-card {
    background: white;
    padding: 12px;
    border-radius: 15px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    text-align: center;
}

.photo-card img {
    width: 230px;
    border-radius: 10px;
    display: block;
}

.name-ribbon {
    background: linear-gradient(to bottom, #2E7D32, #1B5E20);
    color: white;
    padding: 10px;
    font-weight: bold;
    border-radius: 5px;
    margin-top: -25px;
    position: relative;
    z-index: 5;
    box-shadow: 0 4px 8px rgba(0,0,0,0.3);
}


.card-white {
    background: rgba(255, 255, 255, 0.9); 
    border-radius: 20px;
    padding: 25px 40px;
    margin-bottom: 35px;
    width: 480px;
    position: relative;
    box-shadow: 0 4px 15px rgba(0,0,0,0.05);
}

.card-label {
    background: #E1B12C;
    color: white;
    padding: 5px 35px;
    border-radius: 5px;
    font-weight: bold;
    position: absolute;
    top: -15px;
    left: 50%;
    transform: translateX(-50%);
}

.card-white p, .card-white ul { margin-top: 10px; line-height: 1.6; color: #333; }

.action-footer {
    display: flex;
    justify-content: center;
    gap: 25px;
    margin-top: auto;
    margin-bottom: 20px;
}

.btn {
    padding: 12px 50px;
    border: none;
    border-radius: 10px;
    color: white;
    font-weight: bold;
    cursor: pointer;
    font-size: 16px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.2);
}

.btn-green-bright { background-color: #388E3C; }
.btn-green-dark { background-color: #1B5E20; }</style>
</head>
<body>

<div class="app-container">
    <aside class="sidebar">
        <h2 class="sidebar-title">Sistem<br>E-voting</h2>
        <nav class="sidebar-nav">
            <a href="#">Voting</a>
            <a href="#">Hasil Voting</a>
        </nav>
        <div class="sidebar-footer">
            <a href="#">Log Out &rarr;</a>
        </div>
    </aside>

    <main class="main-body">
        <header class="header-section">
            <h1 class="candidate-header">KANDIDAT 1</h1>
            <img src="logo.png" class="ipnu-logo" alt="Logo">
        </header>

        <section class="content-flex">
            <div class="photo-container">
                <div class="photo-card">
                    <img src="kandidat1.png" alt="Putri Ayu">
                    <div class="name-ribbon">PUTRI AYU</div>
                </div>
            </div>

            <div class="info-container">
                <div class="card-white">
                    <span class="card-label">VISI</span>
                    <p>Terwujudnya IPPNU yang aktif, berakhlak, dan berprestasi dalam organisasi maupun akademik.</p>
                </div>

                <div class="card-white">
                    <span class="card-label">MISI</span>
                    <ul>
                        <li>Meningkatkan keaktifan anggota dalam setiap kegiatan IPNU</li>
                        <li>Menumbuhkan sikap disiplin dan tanggung jawab dalam berorganisasi</li>
                        <li>Mengadakan kegiatan yang mendukung prestasi pelajar</li>
                    </ul>
                </div>
            </div>
        </section>

        <footer class="action-footer">
            <button class="btn btn-green-bright">VOTING</button>
            <button class="btn btn-green-dark">KEMBALI</button>
        </footer>
    </main>
</div>

</body>
</html>

</body>
</html>