<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <style>
        body {
            background-image: url(https://cdn.pixabay.com/photo/2016/03/18/15/02/ufo-1265186_1280.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            text-align: center;
            font-family: Arial, sans-serif;
            align-items: center;
        }

        .card {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            border-radius: 1rem;
            padding: 20px;
            border: 1px solid #ccc;
            width: 600px;
            margin: 0 auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        h1 {
            color: #ffffff;
            font-size: 36px;
            margin-top: 20px;
        }

        h3 {
            color: #ffffff;
            font-size: 20px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1 style="font-family:'Times New Roman', Times, serif;">SELAMAT DATANG! <?php echo $_GET["fname"];?> <?php echo $_GET["lname"];?></h1>
        <h3 style="font-family: 'Poppins';">Jenis Kelamin kamu adalah<?php echo " " . $_GET["gender"];?></h3>
        <h3 style="font-family: 'Poppins';">Dengan Kewarganegaraan<?php echo " " . $_GET["nationality"];?></h3>
        <h3 style="font-family: 'Poppins';">Dan <?php
        if(isset($_GET['language'])) {
            $languages = $_GET['language'];
            echo "menggunakan bahasa ";
            foreach($languages as $language) {
                echo $language . " ";
            }
            echo "<br>";
        } else {
            echo "Anda belum memilih bahasa<br>";
        }
    ?></h3>
        <h3 style="font-family: 'Poppins';">Bio mu : <?php echo $_GET["bio"];?></h3>
        <h3 style="font-family: 'Poppins';">Terimakasih telah bergabung di Website Kami, Media Belajar Kita Bersama</h3>
    </div>
</body>
</html>