<?php

require './../config/db.php';

if(isset($_POST['submit'])) {
    global $db_connect;

    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['image']['name'];
    $tempImage = $_FILES['image']['tmp_name'];

    $randomFilename = time().'-'.md5(rand()).'-'. basename($image);

    // Path direktori upload
    $uploadDir = $_SERVER['DOCUMENT_ROOT'] . '/upload/';
    $uploadPath = $uploadDir . $randomFilename;

    // Periksa apakah direktori upload ada, jika tidak buat direktori
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true); // Buat direktori dengan izin 0755
    }

    // Pindahkan file
    if (move_uploaded_file($tempImage, $uploadPath)) {
        // Simpan informasi ke database
        $query = "INSERT INTO products (name, price, image) VALUES ('$name', '$price', '/upload/$randomFilename')";
        if (mysqli_query($db_connect, $query)) {
            echo "Berhasil upload dan simpan data!";
        } else {
            echo "Gagal menyimpan data ke database: " . mysqli_error($db_connect);
        }
    } else {
        echo "Gagal upload file. Periksa izin direktori.";
    }

}