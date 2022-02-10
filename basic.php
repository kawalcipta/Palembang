<?php

// print ke browser tulisan selamat datang
echo "Selamat Datang ...";
echo "<hr/>";

// print ke browser tanggal hari ini:
echo new Date();
echo "<hr/>";

// BASIC PHP
// 1 variable
echo "VARIABLE";
echo "<hr/>";

// alokasikan di memory sesuatu bernama: nama
// dan isi dengan Ahsan
$nama = "Ahsan";

// alokasikan di memory sesuatu bernama: umur
// dan isi dengan angka 30
$umur = 30;

$nilai = 7.5;

// print ke browser
echo $nama . "umurnya: ". $umur .", nilainya: " . $nilai;
echo "<hr/>";

// 2 function
echo "FUNCTION";
echo "<hr/>";

// siapkan sebuah fungsi bernama hitungRating
// dengan data akan di proses jmlBerita dan jmlKomentar
// hasilnya adalah rating, 
// dengan rumus jmlKomentar dibagi jmlBerita
function hitungRating($jmlBerita, $jmlKomentar) {
    $rating = $jmlKomentar / $jmlBerita;
    return $rating;
}

$rating1 = hitungRating(100, 5);
$rating2 = hitungRating(100, 10);

echo "Rating berita 1: ". $rating1 . ", rating berita 2: ". $rating2;

// 3 Looping  / iterasi / perulangan
$jumlah = 100;

// ulangi sebanyak 100x : saya pegawai rajin
for($i=0; $i < jumlah; $i++) {
    echo "saya pegawai rajin";
}

// tulis: bea cukai makin baik sebanyak jumlah huruf pada namamu
$nama = "Ahsan";
for($i=0; $i < strlen($nama); $i++) {
    echo "bea cukai makin baik";
}

