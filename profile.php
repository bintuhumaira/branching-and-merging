<?php 

session_start();
if($_SESSION['role'] != 'user') {
    echo "anda bukan role user";
    header('Location:index.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .profile-container {
            margin-top: 50px;
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        .profile-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .profile-header h1 {
            font-size: 28px;
            font-weight: bold;
        }
        .profile-links {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container profile-container">
    <div class="profile-header">
        <h1>Selamat datang <?php echo $_SESSION['name']?></h1>
    </div>
    <div class="profile-links">
        <a href="show.php" class="btn btn-primary btn-lg mb-3">Lihat Data Produk</a><br>
        <a href="./backend/logout.php" class="btn btn-danger btn-lg">Logout</a>
    </div>
</body>
</html>
