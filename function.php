<?php 

$conn = mysqli_connect("localhost", "root", "", "db_sekolah");
function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $conn;

    $nama = $data["nama"];
    $umur = $data["umur"];
    $alamat = $data["alamat"];
    $foto = $data["foto"];

    $query = "INSERT INTO tb_siswa
            VALUES ('','$nama', '$umur', '$alamat', '$foto')";

            mysqli_query($conn, $query);

            return  mysqli_affected_rows($conn);
}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM tb_siswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}


function edit($data) {
    global $conn;

    // ambil data dari tiap elemen
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $umur = htmlspecialchars($data["umur"]);
    $alamat = htmlspecialchars($data["alamat"]);
    

    // query insert data
    $query = "UPDATE tb_siswa SET nama = '$nama', umur = '$umur', alamat = '$alamat' WHERE id = '$id'";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}