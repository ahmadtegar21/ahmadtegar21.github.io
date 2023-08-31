<?php
include 'Koneksi.php'; // Pastikan nama file sesuai dengan kasus file system Anda

$Kode = $_POST['Kode'];
$Nama = $_POST['Nama'];
$NamaFile = $_FILES['Berkas']['name'];
$X = explode('.', $NamaFile);
$EkstensiFile = strtolower(end($X));
$UkuranFile = $_FILES['Berkas']['size'];
$File_tmp = $_FILES['Berkas']['tmp_name'];

// Lokasi Penempatan File
$DirUpload = "File/";
$LinkBerkas = $DirUpload . $NamaFile;

// Menyimpan File
$Terupload = move_uploaded_file($File_tmp, $LinkBerkas);

$DataArr = array(
    'Kode_buku' => $Kode,
    'Nama_buku' => $Nama,
    'Title' => $NamaFile,
    'Size' => $UkuranFile,
    'Ekstensi' => $EkstensiFile,
    'Berkas' => $LinkBerkas,
);

if ($Terupload && (InsertData($DataArr) == 1)) {
    echo "Upload Berhasil!";
    header("Location: Index.php", true, 301);
    exit();
} else {
    echo "Upload Gagal!";
    header("Location: Halaman_upload.php", true, 301);
    exit();
}
?>