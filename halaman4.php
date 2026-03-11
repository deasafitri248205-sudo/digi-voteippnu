<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>E-Voting Detail Kandidat</title>
    <style>
        * { box-sizing: border-box; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        
        body, html {
            margin: 0;
            padding: 0; 
            height: 100%;
            background-color: #f0f0f0;
            display: flex;
            justify-content:center;
            align-items:center;
            height:100vh
        }

        
        .main-container {
            width: 1000px; height: 600px;
            background-color: #BEE9CC; 
            margin: auto; display: flex;
            position: relative; overflow: hidden;
            box-shadow: 0 0 20px rgba(0,0,0,0.2);
        }


        .sidebar {
            width: 150px;
            background-color: #5d8b76; 
            color: white;
            display: flex;
            flex-direction: column;
            padding: 20px 0;
            font-size: 13px;
        }

        .sidebar-item {
            padding: 15px 20px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }

        .sidebar-item.logout { margin-top: auto; border: none; }

        
        .content {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            padding-top: 50px;
        }

        .kandidat-title {
            font-weight: bold;
            font-size: 20px;
            letter-spacing: 2px;
            margin-bottom: 30px;
        }

        
        .logo-corner {
            position: absolute;
            top: 20px; right: 20px;
            width: 40px; height: 40px;
            background-color: #3d6b56;
            clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
            display: flex; justify-content: center; align-items: flex-end;
            padding-bottom: 5px;
        }
        .logo-corner::after {
            content: 'A'; color: #f1c40f; font-size: 12px; font-weight: bold;
        }

        
        .modal-overlay {
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background-color: rgba(0,0,0,0.1);
            display: flex; justify-content: center; align-items: center;
        }

        .modal-card {
            background-color: #fdfdfd;
            width: 500px;
            padding: 40px 20px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 8px 30px rgba(0,0,0,0.2);
        }

        .modal-card p {
            font-size: 18px;
            font-weight: 500;
            line-height: 1.4;
            color: #333;
            margin-bottom: 30px;
        }

        
        .button-wrapper {
            display: flex;
            justify-content: center;
            gap: 25px;
        }

        .btn {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            width: 160px;
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #d0d0d0;
            background: linear-gradient(to bottom, #ffffff, #e6e6e6);
            cursor: pointer;
            font-size: 16px;
            color: #333;
            font-weight: 600;
        }

        .btn:hover { background: #eeeeee; }

        
        .icon-box {
            width: 24px; height: 24px;
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            font-size: 14px;
            border: 2px solid;
        }
        .icon-check { border-color: #27ae60; color: #27ae60; }
        .icon-cross { border-color: #e74c3c; color: #e74c3c; }

    </style>
</head>
<body>

<div class="main-container">
    
    <div class="sidebar">
        <div class="sidebar-item">Sistem E-voting</div>
        <div class="sidebar-item" style="background: rgba(0,0,0,0.1)">Voting</div>
        <div class="sidebar-item">Hasil Voting</div>
        <div class="sidebar-item logout">Log Out -></div>
    </div>

    
    <div class="content">
        <div class="logo.png"></div>
        <div class="kandidat-title">KANDIDAT 1</div>

        
        <div class="modal-overlay">
            <div class="modal-card">
                <p>Yakin dengan pilihan anda?<br>Setelah klik "Simpan", pilihan<br>anda tidak dapat diubah.</p>
                
                <div class="button-wrapper">
                    <button class="btn" onclick="simpan()">
                        <div class="icon-box icon-check">✓</div> Simpan
                    </button>
                    <button class="btn" onclick="batal()">
                        <div class="icon-box icon-cross">✕</div> Batal
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function simpan() {
        alert("Pilihan Anda Berhasil Disimpan!");
    }
    function batal() {
        if(confirm("Batalkan pilihan?")) {
            alert("Pilihan dibatalkan.");
        }
    }
</script>

</body>
</html>