<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarnav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="../parkir/index.php">parkir</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="">kendaraan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
    <h1>daftar mobil</h1>
    <a class="btn btn-primary" href="view_tambah.php">tambah mobil</a>
    <br><br>
    <table class="table table-bordered table-striprd">
        <thead class="table-dark">
        <tr>
            <th>no</th>
            <th>plat nomor</th>
            <th>merek</th>
            <th>jenis kendaraan</th>
            <th>tahun</th>
            <th>no parkir</th>
            <th>Aksi</th>
        </tr>
        </thead>
       
        <?php
        include "../../config/koneksi.php";
        $query = mysqli_query($conn, "SELECT * FROM kendaraan");
        $no = 1;
        if(mysqli_num_rows($query)){
            echo "Data mobil";
            while($result = mysqli_fetch_assoc($query)){
        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $result['plat_nomor'] ?></td>
            <td><?php echo $result['merek'] ?></td>
            <td><?php echo $result['jenis_kendaraan'] ?></td>
            <td><?php echo $result['tahun'] ?></td>
            <td><?php echo $result['no_parkir'] ?></td>
            <td>
                <a class="btn btn-warning">Edit</a>
            </td>
        </tr>
        <?php
            $no++;
            }
        } else {
            echo "Data mobil tidak ditemukan";
        }
        ?>
    </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>