<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Tambah Data Kendaraan</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Parkir</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../kendaraan/index.php">Kendaraan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1>Tambah Data Kendaraan</h1>
        <form action="proses_tambah.php" method="POST">
            <div class="mb-3">
                <label for="plat_nomor" class="form-label">plat nomor</label>
                <input type="text" class="form-control" name="plat_nomor" id="plat_nomor" required>
            </div>
            <div class="mb-3">
                <label for="merek" class="form-label">merek</label>
                <input type="text" class="form-control" name="merek" id="merek" required>
            </div>
            <div class="mb-3">
                <label for="jenis_kendaraan" class="form-label">Jenis kendaraan</label>
                <input type="text" class="form-control" name="jenis_kendaraan" id="jenis_kendaraan" required>
            </div>
            <div class="mb-3">
                <label for="Tahun" class="form-label">Tahun</label>
                <input type="text" class="form-control" name="tahun" id="tahun" required>
            </div>
            <div class="mb-3">
                <label for="no_parkir" class="form-label">No parkir</label>
                <input type="text" class="form-control" name="no_parkir" id="no_parkir" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>