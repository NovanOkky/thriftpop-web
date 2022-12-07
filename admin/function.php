<?php

$conn = mysqli_connect("localhost", "root", "", "thrift_pop");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data)
{
    global $conn;
    $nama_barang = htmlspecialchars($data["nama_barang"]);
    $harga = htmlspecialchars($data["harga"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);

    //upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }


    $query = "INSERT INTO tbl_barang VALUES ('', '$nama_barang', '$harga', '$deskripsi', '$gambar')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload()
{
    $namafile = $_FILES['gambar']['name'];
    $ukuranfile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    if ($error === 4) {
        echo "<script>alert('Pilih Gambar Terlebih Dahulu')</script>";
        return false;
    }

    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namafile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>alert('Yang Anda Upload Bukan Gambar')</script>";
        return false;
    }

    if ($ukuranfile > 1000000) {
        echo "<script>alert('Yang Anda Upload Bukan Gambar')</script>";
        return false;
    }

    $namafilebaru = uniqid();
    $namafilebaru .= '.';
    $namafilebaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'img/' . $namafilebaru);

    return $namafilebaru;
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM tbl_barang WHERE id_barang = '$id'");
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;
    $id = $data["id_barang"];
    $nama_barang = htmlspecialchars($data["nama_barang"]);
    $harga = htmlspecialchars($data["harga"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $gambarlama = htmlspecialchars($data["gambarlama"]);

    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarlama;
    } else {
        $gambar = upload();
    }


    $query = "UPDATE tbl_barang SET nama_barang = '$nama_barang', harga = '$harga', deskripsi = '$deskripsi', gambar = '$gambar' WHERE id_barang = '$id' ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $query = "SELECT * FROM tbl_barang WHERE nama_barang LIKE '%$keyword%'";
    return query($query);
}

function user($user)
{
    global $conn;
    $result = mysqli_query($conn, $user);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function hapususer($iduser)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM tbl_user WHERE id = '$iduser'");
    return mysqli_affected_rows($conn);
}

function cariuser($keyword)
{
    $query = "SELECT * FROM tbl_user WHERE username LIKE '%$keyword%'";
    return query($query);
}

function kategori($kategori)
{
    global $conn;
    $result = mysqli_query($conn, $kategori);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambahkategori($data)
{
    global $conn;
    $nama_kategori = htmlspecialchars($data["nama_kategori"]);


    $kategori = "INSERT INTO tbl_kategori VALUES ('', '$nama_kategori')";
    mysqli_query($conn, $kategori);

    return mysqli_affected_rows($conn);
}

function ubahkategori($data)
{
    global $conn;
    $id = $data["id_kategori"];
    $nama_kategori = htmlspecialchars($data["nama_kategori"]);

    $kategori = "UPDATE tbl_kategori SET nama_kategori = '$nama_kategori' WHERE id_kategori = '$id' ";
    mysqli_query($conn, $kategori);

    return mysqli_affected_rows($conn);
}

function hapuskategori($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM tbl_kategori WHERE id_kategori = '$id'");
    return mysqli_affected_rows($conn);
}
