<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
       
    </head>
        <style>

            body{
                background-image: url('./assets/img/13.jpg') ;
            }

            .search-container {
                display: flex;
                justify-content: center;
                margin-top: 20px;
            }

            .search {
                display: flex;
                align-items: center;
            }

            #search-input {
                margin-right: 10px;
            }
            .table {
                border-collapse: collapse;
                width: 50%;
                border: 2px solid;
                justify-content: center;
                align-items: center;
                margin :auto;
                margin-top: 10px;
            }

            tr, td{
                border: 1px solid;
                text-align: center;
            }

            th{
                text-align: center;
            }

            .bglist {
                width: 100%;
                max-width: 800px; 
                height: 400px;
                margin: 0 auto;
                padding: 20px;
                border: 2px solid #005BFF; 
                border-radius: 10px; 
                background-color: #f0f0f0; 
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                text-align: center; 
                font-size: 18px; 
            }

            .bglist:hover {
                transform: scale(1.05); 
                transition: transform 0.2s;
            }


            .navbar {
                background-image: url('./assets/img/14.jpeg');
                background-size: cover; 
                background-repeat: no-repeat; 
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 10px 20px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
                border-radius: 5px;
                color: #fff;
                font-family: 'Arial', sans-serif;       
                }


            .navbar a {
                text-decoration: none;
                color: #fff;
                margin: 0 15px;
                font-weight: bold; 
                transition: color 0.3s;
            }

            .navbar a:hover {
                color: #ff9900; /* Warna saat tautan ditemukan */
            }

            .tombol1 {
                background-color: #007BFF;
                color: #fff;
                border: none;
                border-radius: 5px;
                padding: 10px 20px;
                cursor: pointer;
                font-weight: bold;
                transition: background-color 0.3s;
            }

            .nav-links {
                list-style: none;
                padding: 0;
                display: flex;
            }

            .nav-links li {
                margin-right: 20px;
            }

            .nav-links li a {
                text-decoration: none;
                color: #fff;
                font-weight: bold;
            }

            .text-cantik {
                background: linear-gradient(70deg, #0072ff, #00c6ff);
                -webkit-background-clip: text;
                color: transparent;
                font-size: 30px;
                font-weight: bold;
                text-align: center;
            }

            

        </style>

    
        <?= $this->renderSection('content') ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> 
</html>