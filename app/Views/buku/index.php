<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <style>
    body {
        background-color: #f8f9fa;
    }

    .container {
        max-width: 900px;
        margin: 0 auto;
        padding: 50px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        margin-top: 50px;
    }

    h1 {
        font-size: 28px;
        font-weight: bold;
        margin-bottom: 20px;
        color: #333;

    }

    p {
        font-size: 16px;
        color: #555;
        margin-bottom: 30px;
    }

    .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
    }

    .btn-danger:hover {
        background-color: #c82333;
        border-color: #bd2130;
    }

    .btn-info {
        background-color: #17a2b8;
        border-color: #17a2b8;
    }

    .btn-info:hover {
        background-color: #138496;
        border-color: #117a8b;
    }

    .btn-success {
        background-color: #28a745;
        border-color: #28a745;
    }

    .btn-success:hover {
        background-color: #218838;
        border-color: #1e7e34;
    }

    .btn-warning {
        background-color: #ffc107;
        border-color: #ffc107;
    }

    .btn-warning:hover {
        background-color: #e0a800;
        border-color: #d39e00;
    }

    .btn-danger,
    .btn-info,
    .btn-success,
    .btn-warning {
        color: #fff;
        font-size: 14px;
    }

    .table {
        margin-bottom: 30px;
        background-color: #fff;
    }

    .table th {
        background-color: #f8f9fa;
        color: #333;
        font-weight: bold;
        text-align: left;
        border-top: none;
    }

    .table td {
        vertical-align: middle;
    }

    .table .btn {
        font-size: 12px;
        padding: 5px 10px;
        margin-right: 5px;
    }

    .right-align {
        text-align: right;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Selamat Datang di Perpustakaan</h1>
                <p>Ini adalah halaman home</p>
            </div>
            <div class="col right-align">
                <a href="<?= base_url('logout') ?>" class="btn btn-danger">Logout</a>
            </div>
        </div>

        <!-- create list of books -->
        <div class="row">
            <div class="col-12">
                <h2>Daftar Buku</h2>
                <a class="btn btn-info" href="<?= base_url('/buku/create') ?>">Tambah Data</a>
            </div>

            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th>Tahun Terbit</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($buku as $key => $value): ?>
                        <tr>
                            <td>
                                <?= $value['judul'] ?>
                            </td>
                            <td>
                                <?= $value['penulis'] ?>
                            </td>
                            <td>
                                <?= $value['penerbit'] ?>
                            </td>
                            <td>
                                <?= $value['tahun_terbit'] ?>
                            </td>
                            <td>
                                <a href="<?= base_url('/buku/' . $value['id']) ?>"
                                    class="btn btn-sm btn-success">Detail</a>
                                <a href="<?= base_url('/buku/' . $value['id'] . '/edit') ?>"
                                    class="btn btn-sm btn-warning">Edit</a>
                                <form action="<?= base_url('/buku/' . $value['id'] . '/delete') ?>" method="POST"
                                    style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit"
                                        onclick="return confirm('Are you sure you want to delete this item?')"
                                        class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>