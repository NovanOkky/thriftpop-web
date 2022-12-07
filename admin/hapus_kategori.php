<?php

require 'function.php';

$id = $_GET["id_kategori"];

if (hapuskategori($id) > 0) {
    echo "<script>alert('Berhasil Menghapus Kategori'); document.location.href = 'kategori.php'; </script>";
} else {
}
