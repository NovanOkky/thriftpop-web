<?php

require 'function.php';

$idprofil = $_GET["id"];

$row = profil("SELECT * FROM tbl_user WHERE id = '$idprofil'")[0];

if (isset($_POST["submit"])) {

    if (ubahprofil($_POST) > 0) {
        echo "<script>alert('Berhasil Mengupdate Barang'); document.location.href = 'profil.php'; </script>";
    } else {
        echo "<script>alert('Gagal Mengupdate Barang'); document.location.href = 'profil.php'; </script>";
    }
    // if (mysqli_affected_rows($conn) > 0) {
    //     echo "<script>alert('Berhasil Menambahkan Barang'); document.location.href = 'barang.php'; </script>";
    // } else {
    //     "<script>alert('gagal')</script>";
    // };
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Profil</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

</head>

<body>
    <div class="container">
        <div class="main-body mt-3  ">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body" style="margin-bottom: 97px ;">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
                                <div class="mt-3">
                                    <h4>Novanokky</h4>
                                    <p class="text-secondary mb-1">Christopher Novan Okky</p>
                                    <br>
                                    <button class="btn btn-primary">Edit Photo</button>
                                    <button class="btn btn-outline-primary">Delete Photo</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body" style="margin-bottom: 40px;">
                            <form action="" method="POST">
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Full Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Username</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="submit" name="submit" class="btn btn-primary px-4" value="Save Changes">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>