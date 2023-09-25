<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Profil</title>
    <style>
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        
        .profile-image {
            width: 200px;
            height: 200px;
            border-radius: 50%;
        }

        .custom-container {
            text-align: center;
        }

        .custom-container.Nama,
        .custom-container.Kelas,
        .custom-container.Npm {
            border: 2px solid gray;
            background: gray;
            padding: 5px;
            margin: 10px;
        }

        .custom-container .btn {
            width: 200px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <center>
        <br>
        <img src="http://localhost/prak-web-lanjut1/public/assets/image/11.jpg" alt="..." style="width: 200px; border-radius: 50%;"><br>

        <div class="badge bg-primary text-wrap" style="width: 6rem;">
            <?= $nama ?>
        </div>
        <br>

        <div class="badge bg-primary text-wrap" style="width: 6rem;">
            <?= $kelas ?>
        </div>
        <br>

        <div class="badge bg-primary text-wrap" style="width: 6rem;">
            <?= $npm ?>
        </div>
        <br>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    </center>
</body>
</html>
