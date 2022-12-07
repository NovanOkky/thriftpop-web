<?php

require 'function.php';

$iduser = $_GET["id"];

if (hapususer($iduser) > 0) {
    echo "<script>alert('Berhasil Menghapus User'); document.location.href = 'manageuser.php'; </script>";
} else {
}
