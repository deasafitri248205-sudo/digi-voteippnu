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
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

body {
    background-color: #C1E1C1; 
    background-image: radial-gradient(circle, #d4edda 10%, transparent 20%); 
    background-size: 30px 30px;
}

.container {
    display: flex;
    height: 100vh;
}

.sidebar {
    width: 150px;
    background-color: rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;
    padding: 20px;
    color: white;
    text-shadow: 1px 1px 2px rgba(0,0,0,0.2);
}

.logo-text {
    font-weight: bold;
    margin-bottom: 100px;
    text-align: center;
}

.menu-item {
    margin-bottom: 30px;
    cursor: pointer;
    text-align: center;
}

.logout {
    margin-top: auto;
    cursor: pointer;
}

.main-content {
    flex: 1;
    padding: 40px;
    text-align: center;
}

header {
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    margin-bottom: 50px;
}

header h1 {
    font-size: 2rem;
    letter-spacing: 2px;
    color: #333;
}

.top-logo {
    position: absolute;
    right: 0;
    height: 80px;
}

.candidate-list {
    display: flex;
    justify-content: center;
    gap: 30px;
}

.card {
    background: white;
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    width: 200px;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.card h3 {
    margin-bottom: 15px;
    font-size: 1.1rem;
    color: #444;
}

.photo-placeholder {
    width: 150px;
    height: 180px;
    background: #eee;
    margin-bottom: 15px;
    overflow: hidden;
    border-radius: 5px;
}

.photo-placeholder img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.btn-detail {
    background-color: #28a745;
    color: white;
    border: none;
    padding: 8px 25px;
    border-radius: 8px;
    cursor: pointer;
    font-weight: bold;
    transition: 0.3s;
}

.btn-detail:hover {
    background-color: #218838;
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

    <div class="container">
        <nav class="sidebar">
            <div class="logo-text">Sistem<br>E-voting</div>
            <div class="menu-item active">Voting</div>
            <div class="menu-item">Hasil Voting</div>
            <div class="logout">Log Out <span>→</span></div>
        </nav>

        <main class="main-content">
            <header>
                <h1>DAFTAR KANDIDAT</h1>
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a2/Logo_IPPNU.png/600px-Logo_IPPNU.png" alt="Logo" class="top-logo">
            </header>

            <section class="candidate-list">
                <div class="card">
                    <h3>KANDIDAT 1</h3>
                    <div class="photo-placeholder">
                        <img src="https://via.placeholder.com/150x180" alt="Foto Kandidat">
                    </div>
                    <button class="btn-detail">DETAIL</button>
                </div>

                <div class="card">
                    <h3>KANDIDAT 2</h3>
                    <div class="photo-placeholder">
                        <img src="https://via.placeholder.com/150x180" alt="Foto Kandidat">
                    </div>
                    <button class="btn-detail">DETAIL</button>
                </div>

                <div class="card">
                    <h3>KANDIDAT 3</h3>
                    <div class="photo-placeholder">
                        <img src="https://via.placeholder.com/150x180" alt="Foto Kandidat">
                    </div>
                    <button class="btn-detail">DETAIL</button>
                </div>
            </section>
        </main>
    </div>

</body>
</html>
</body>
</html>