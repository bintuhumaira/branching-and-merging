<?php 

session_start();
if($_SESSION['role'] != 'admin') {
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
        .admin-container {
            margin-top: 50px;
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        .admin-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .admin-header h1 {
            font-size: 28px;
            font-weight: bold;
        }
        .admin-links {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container admin-container">
    <div class="admin-header">
        <h1>Selamat datang Administrator: 
            <p><?php echo $_SESSION['name']?></p></h1>
    </div>
    <div class="admin-links">
        <a href="create.php" class="btn btn-primary btn-lg mb-3">Tambahkan Produk</a><br>
        <a href="./backend/logout.php" class="btn btn-danger btn-lg">Logout</a>
    </div>
</body>
</html>