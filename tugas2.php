<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nilai_siswa = 50;

    if($nilai_siswa > 90){
        echo "<h1>Luar Biasa</h1>";
    }
    else if($nilai_siswa >= 80) {
        echo "<h1>Baik</h1>";
    }
    else if($nilai_siswa >= 70) {
        echo "<h1>Cukup</h1>";
    }
    else if($nilai_siswa >= 60) {
        echo "<h1>Kurang</h1>";
    }
    else {
        echo "<h1> kamu tidak lulus<h1>";
    }
    ?>

    <?php
    $hari = "senin";

    switch($hari) {
        case"senin":
            echo "<h2>Tidak ada diskon</h2>";
        break;
        case"selasa":
            echo "<h2>Tidak ada diskon</h2>";
        break;
        case"rabu":
            echo "<h2>Tidak ada diskon</h2>";
        break;   
        case"kamis":
            echo "<h2>Tidak ada diskon</h2>";
        break; 
        case"jumat":
            echo "<h2>Diskon 15% untuk semua produk</h2>";
        break;
        case"sabtu":
            echo "<h2>Nikmati promo beli 1 gratis 1</h2>";
        break;
        case"minggu":
            echo "<h2>Nikmati promo beli 1 gratis 1</h2>";
        break;
    }
    ?>

</body>
</html>