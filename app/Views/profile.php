<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
    <div class="container">
        <img src="http://localhost/prak-web-lanjut/public/assets/image/11.jpg" alt="" class="img-fluid rounded-circle profile-image">      
        <div class="custom-container Nama">
            <button type="button" class="btn btn-grey">Nama : <?= $nama?></button>
        </div>
        <div class="custom-container Kelas">
            <button type="button" class="btn btn-grey">Kelas : <?= $kelas?></button>
        </div>
        <div class="custom-container Npm">
            <button type="button" class="btn btn-grey">Npm : <?= $npm?></button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
