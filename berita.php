<?php
// file untuk manajemen berita

class Berita {

    public $judul;
    public $headLine;
    public $isi;
    public $tglPublish;
    public $komentar;
    public $foto;
    public $kategori;

    // fungsi untuk menampilkan isi tabel berita
    function viewContent() {
        // 1 buat sql select
        $sql = "select * from berita";

        // 2. panggil connection
        require 'connection.php';

        // 3. kirim sql ke database
        $result = $conn->query($sql);
        $json = '';
        if ($result->num_rows > 0) {
            
            // 4. ambil kiriman data dari database
            while($row = $result->fetch_assoc()) {

                // 5. ubah data dari database ke json
                if($json == '') {
                    $json .= '{
                        "id_berita": ' . $row["id_berita"].', 
                        "judul": "' . $row["judul"].'", 
                        "headline": "' . $row["headline"].'", 
                        "isi": "' . $row["isi"].'", 
                        "kategori": "' . $row["kategori"].'", 
                        "tgl_publish": "' . $row["tgl_publish"].'",  
                        "wkr_rekam": "' . $row["wk_rekam"].'", 
                        "nip_rekam": "' . $row["nip_rekam"].'", 
                        "komentar": "' . $row["komentar"].'"
                    }';
                } else {
                    $json .= ',{
                        "id_berita": ' . $row["id_berita"].', 
                        "judul": "' . $row["judul"].'", 
                        "headline": "' . $row["headline"].'", 
                        "isi": "' . $row["isi"].'", 
                        "kategori": "' . $row["kategori"].'", 
                        "tgl_publish": "' . $row["tgl_publish"].'",  
                        "wkr_rekam": "' . $row["wk_rekam"].'", 
                        "nip_rekam": "' . $row["nip_rekam"].'", 
                        "komentar": "' . $row["komentar"].'"
                    }';
                }
                
            }
        } else {
            $json .= '';
        }

        // 6. kirim json ke browser
        return $json;
    }

    function viewDetail($idBerita) {
        // 1 buat sql select
        $sql = "select * from berita where id_berita=".$idBerita;

        // 2. panggil connection
        require 'connection.php';

        // 3. kirim sql ke database
        $result = $conn->query($sql);
        $json = '';
        if ($result->num_rows > 0) {
            
            // 4. ambil kiriman data dari database
            while($row = $result->fetch_assoc()) {

                // 5. ubah data dari database ke json
                $json .= '{
                    "id_berita": ' . $row["id_berita"].', 
                    "judul": "' . $row["judul"].'", 
                    "headline": "' . $row["headline"].'", 
                    "isi": "' . $row["isi"].'", 
                    "kategori": "' . $row["kategori"].'", 
                    "tgl_publish": "' . $row["tgl_publish"].'",  
                    "wkr_rekam": "' . $row["wk_rekam"].'", 
                    "nip_rekam": "' . $row["nip_rekam"].'", 
                    "komentar": "' . $row["komentar"].'"
                }';
            }
        } else {
            $json .= '';
        }

        // 6. kirim json ke browser
        return $json;
    }

    function saveComment() {

    }

    function connectToDb() {
        
    }

    // fungsi untuk insert
    function saveToDb() {
        // 1 buat sql insert
        $sql = "insert into berita (id_berita,judul,headline,isi,kategori,tgl_publish,wk_rekam,nip_rekam,komentar) 
        values(null,
        '".$_POST['judul']."',
        '".$_POST['headline']."',
        '".$_POST['isi']."',
        '".$_POST['kategori']."',
        '".$_POST['tgl_publish']."',
        now(),
        '".$_POST['nip_rekam']."',
        '".$_POST['komentar']."')";

        // 2 panggil connection
        require 'connection.php';

        // 3 kirim perintah sql ke database
        if ($conn->query($sql) === TRUE) {
            return "New record created successfully";
        } else {
            return "Error: " . $conn->error;
        }
    }

    // fungsi untuk update
    function updateToDb() {
        
    }

    // fungsi untuk delete
    function deleteDb() {
        
    }

    // fungsi untuk ambil data 1 row
    function find() {
        
    }

    // fungsi untuk ambil data banyak row
    function findAll() {
        
    }
}