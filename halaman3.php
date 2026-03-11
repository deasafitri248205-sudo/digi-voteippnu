<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> 
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Serif', 'Palatino Linotype', 'Book Antiqua', serif; 
}

body {
    background: #bcd9c4;
    height: 100vh;
    overflow: hidden;
}

.app-wrapper {
    display: flex;
    height: 100%;
}

.sidebar {
    width: 130px;
    background-color: rgba(144, 191, 161, 0.6); 
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: 30px 15px;
    color: #f0f0f0;
    text-align: center;
    border-right: 1px solid rgba(255,255,255,0.2);
}

.nav-item {
    margin-bottom: 50px;
    font-size: 1.1rem;
    font-weight: 500;
    cursor: pointer;
    line-height: 1.2;
}

.nav-item.active {
    color: #fff;
    font-weight: bold;
}

.logout {
    font-size: 1.1rem;
    cursor: pointer;
}

.main-content {
    flex: 1;
    position: relative;
    padding: 60px;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.logo-top-right {
    position: absolute;
    top: 20px;
    right: 20px;
    width: 70px;
    filter: drop-shadow(0 2px 4px rgba(0,0,0,0.2));
}

.title {
    font-size: 2.2rem;
    letter-spacing: 4px;
    color: #1a1a1a;
    margin-bottom: 60px;
    font-weight: normal;
}

.candidate-container {
    display: flex;
    gap: 40px;
}

.card {
    background: #fff;
    padding: 30px 25px;
    border-radius: 30px;
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15); 
    text-align: center;
    width: 220px;
    transition: transform 0.3s ease;
}

.card:hover {
    transform: translateY(-5px);
}

.card h2 {
    font-size: 1.3rem;
    margin-bottom: 20px;
    letter-spacing: 1px;
    color: #333;
}

.image-box {
    width: 100%;
    height: 200px;
    background: #f0f0f0;
    margin-bottom: 20px;
    border-radius: 30px;
    overflow: hidden;
}

.image-box img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.btn-detail {
    background-color: #2b7a3a;
    color: white;
    border: none;
    padding: 10px 35px;
    border-radius: 10px;
    font-size: 0.9rem;
    font-weight: bold;
    cursor: pointer;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
}

.btn-detail:hover {
    background-color: #215d2c;
}
    </style>
</head>
<body>
    <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Voting IPPNU</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="app-wrapper">
        <nav class="sidebar">
            <div class="menu-top">
                <div class="nav-item">Sistem<br>E-voting</div>
                <div class="nav-item active">Voting</div>
                <div class="nav-item">Hasil<br>Voting</div>
            </div>
            <div class="logout">Log Out <span class="arrow">→</span></div>
        </nav>

        <main class="main-content">
            <img src="logo.png" alt="Logo" class="logo-top-right">
            
            <h1 class="title">DAFTAR KANDIDAT</h1>

            <div class="candidate-container">
                <div class="card">
                    <h2>KANDIDAT 1</h2>
                    <div class="image-box">
                        <img src="kandidat1.png" alt="Foto">
                    </div>
                    <button class="btn-detail">DETAIL</button>
                </div>

                <div class="card">
                    <h2>KANDIDAT 2</h2>
                    <div class="image-box">
                        <img src="kandidat2.png" alt="Foto">
                    </div>
                    <button class="btn-detail">DETAIL</button>
                </div>

                <div class="card">
                    <h2>KANDIDAT 3</h2>
                    <div class="image-box">
                        <img src="kandidat3.png" alt="Foto">
                    </div>
                    <button class="btn-detail">DETAIL</button>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
</body>
</html>