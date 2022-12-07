<?php

require 'function.php';

$id = $_GET["id_barang"];

if (hapus($id) > 0) {
    echo "<script>alert('Berhasil Menghapus Barang'); document.location.href = 'barang.php'; </script>";
} else {
}
