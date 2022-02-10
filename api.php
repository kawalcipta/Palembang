<?php 

$web = "Selamat Datang di API Website BC Palembang";

// ambil request get dari browser
if(isset($_GET['request'])) {
    $request = $_GET['request'];

    if($request == "") {
        // alamat akses
        // http://localhost/iht/palembang/api.php
        echo json_encode($web);
    } else if($request == "berita") {
        require 'berita.php';
        $berita = new Berita();
        echo $berita->viewContent();

    } else if($request == "detail_berita") {
        require 'berita.php';
        $berita = new Berita();
        echo $berita->viewDetail($_GET['id_berita']);

    } else if($request == "video") {
        echo json_encode("berikut daftar video");
    }
}

// ambil request post dari browser
if(isset($_POST['data'])) {
    $data = $_POST['data'];
    echo json_encode($data);
}