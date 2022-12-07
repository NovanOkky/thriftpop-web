<?php

use JetBrains\PhpStorm\Internal\ReturnTypeContract;

$conn = mysqli_connect("localhost", "root", "", "thrift_pop");

function register($data)
{
    global $conn;
    $username = strtolower(stripslashes($data["username"]));
    $email = $data['email'];
    $password = mysqli_real_escape_string($conn, $data["password"]);

    $result = mysqli_query($conn, "SELECT username FROM tbl_user WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username sudah tersedia!')
            </script>";
        return false;
    }


    //enkripsi password
    $rpassword = password_hash($password, PASSWORD_DEFAULT);

    //tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO tbl_user VALUES('', '$username', '$email', '$rpassword')");

    return mysqli_affected_rows($conn);
}

function profil($profil)
{
    global $conn;
    $result = mysqli_query($conn, $profil);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function ubahprofil($data)
{
    global $conn;
    $idprofil = $data["id"];
    $username = htmlspecialchars($data["username"]);
    $email = htmlspecialchars($data["email"]);

    $profil = "UPDATE tbl_user SET username = '$username', email = '$email' WHERE id = '$idprofil' ";
    mysqli_query($conn, $profil);

    return mysqli_affected_rows($conn);
}
