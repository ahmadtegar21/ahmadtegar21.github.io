<?php

function KoneksiDB() {
    $Host = "localhost";
    $Username = "root";
    $Password = "";
    $db = "crud";

    $Conn = mysqli_connect($Host, $Username, $Password, $db);

    if (!$Conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    return $Conn;
}

function SelectAllData() {
    $Query = "SELECT * FROM tb_buku";
    $Result = mysqli_query(KoneksiDB(), $Query);
    return $Result;
}

function InsertData($Data) {
    $Query = "INSERT INTO tb_buku (Kode_buku, Nama_buku, Title, Size, Ekstensi, Berkas) VALUES ('" . $Data['Kode_buku'] . "','" . $Data['Nama_buku'] . "','" . $Data['Title'] . "','" . $Data['Size'] . "','" . $Data['Ekstensi'] . "','" . $Data['Berkas'] . "')";

    $Result = mysqli_query(KoneksiDB(), $Query);

    if (!$Result) {
        return 0;
    } else {
        return 1;
    }
}

?>
