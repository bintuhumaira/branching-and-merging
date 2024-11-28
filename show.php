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
        .container {
            margin-top: 50px;
        }
        table {
            background: #ffffff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mb-4 text-center">Data produk</h1>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Nama produk</th>
                        <th>harga</th>
                        <th>gambar produk</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        require './config/db.php';

                        $products = mysqli_query($db_connect,"SELECT * FROM products");
                        $no = 1;

                        while($row = mysqli_fetch_assoc($products)) {
                    ?>
                        <tr>
                            <td><?=$no++;?></td>
                            <td><?=$row['name'];?></td>
                            <td><?=$row['price'];?></td>
                            <!-- <td><img src="<?=$row['image'];?>" width="100"></td> -->
                            <td><a href="<?=$row['image'];?>" class="btn btn-info btn-sm" target="_blank">unduh</a></td>
                            <td>
                                <a href="edit.php?id=<?=$row['id'];?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="delete.php?id=<?=$row['id'];?>" class="btn btn-danger btn-sm">Hapus</a>

                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <a href="create.php" class="btn btn-secondary mt-3">Kembali</a>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>