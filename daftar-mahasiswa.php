<?php

$mahasiswa = [
   [
        "Nama" => "Wendi Saputra",
        "email" => "Wendysyaputra99@gmail.com",
        "Gambar" => "wendi.jpeg",
        "Jurusan" => "Sistem informasi",
        "universitas" => "universitas Islam Negeri Sulthan Thaha Saifuddin Jambi"
    ],
    [
        "Nama" => "Muhammad Ridho",
        "email" => "muhammmadridho@gmail.com",
        "Gambar" => "ridho.jpeg",
        "Jurusan" => "Ekonomi",
        "universitas" => "Universitas Jambi"
    ],
    [
        "Nama" => "Rolan Seprian",
        "email" => "Rolan11@gmail.com",
        "Gambar" => "Rolan.jpeg",
        "Jurusan" => "Hukum Ekonomi syariah",
        "universitas" => "Iain Kerinci"
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #FAF8ED;
            text-align: center;
        }
        .box{
            width: 450px;
            height: 470px;
            background-color: #D2E3C8;
            margin: 10px auto;
            padding: 10px;
        }
        .card {
            width: 400px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 10px auto;
        }
        .profile-image {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            float: left;
            margin-bottom: 10px;
        }
        a{
           
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    
    <div class="box">
    <?php foreach ($mahasiswa as $mhs) : ?>
            <div class="card">
                <img class="profile-image" src="<?= $mhs["Gambar"];?>">
                <h2><a href="profil.mahasiswa.php?Nama=<?= $mhs ["Nama"];?>&Gambar=<?= $mhs ["Gambar"];?>&email=<?= $mhs ["email"];?>&Jurusan= <?= $mhs ["Jurusan"];?>&universitas= <?= $mhs ["universitas"]; ?>"><?= $mhs["Nama"];?></a></h2>  
                <p><?= $mhs["email"];?></p>
            </div>
            <?php endforeach; ?>
        </div>


</body>
</html>