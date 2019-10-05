<?php
$mahasiswa =[
    [
        "nama"=> "Daniel Fajri",
        "nim"=>"11180930000023",
        "jurusan"=> "Biologi",
        "email"=>"dfajri@gmail.com"
    ],
    [
        "nama"=> "Tomioka Ginyu",
        "nim"=>"1180930000022",
        "jurusan"=> "Fisika",
        "email"=>"tomgin@gmail.com"
    ],
    [
        "nama"=> "Hashira Omoi",
        "nim"=>"11180930000014",
        "jurusan"=> "Kimia",
        "email"=>"hasomi@gmail.com"
    ],
    [
        "nama"=> "Tanjirou Yaiba",
        "nim"=>"11180930000007",
        "jurusan"=> "Matematika",
        "email"=>"Tanyaid@gmail.com"
    ],
    [
        "nama"=> "Nezuko Ichiro",
        "nim"=>"11180830000007",
        "jurusan"=> "Sastra Jepang",
        "email"=>"Neziro@gmail.com"
    ]
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan3</title>
    <style>
    body {
        background-color:lightseagreen;
        line-height : 1.5;
    }
    </style>
</head>
<body>
<h1><center>Daftar Mahasiswa <center></h1>
    <?php for($i=0;$i<=count($mahasiswa)-1;$i++) : ?>
        <ul>
            <li>Nama    : <?= $mahasiswa[$i]["nama"]; ?></li>
            <li>NIM     : <?= $mahasiswa[$i]["nim"]; ?></li>
            <li>Jurusan : <?= $mahasiswa[$i]["jurusan"]; ?></li>
            <li>Email   : <?= $mahasiswa[$i]["email"]; ?></li>
        </ul>
    <?php endfor; ?> 
</body>
</html>