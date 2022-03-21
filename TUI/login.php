<?php
session_start();

$nik = @$_POST['nik'];
$nama = @$_POST['nama'];
$file = "file/" . $nik . "-" . $nama . ".txt";


if (isset($_POST['pengguna_baru'])) {
    if (empty(file_exists($file))) {
        $fh = fopen($file, "w");
        fwrite($fh, "");
        fclose($fh);
        $alert = "<div class='alert alert-success'>Data berhasil ditambah</div>";
        $_SESSION['nik']=$nik;
        $_SESSION['nama']=$nama;
        echo "<meta http-equiv='refresh', content='2; url=index.php'>";
    } else {
        $alert = "<div class='alert alert-danger'>Data sudah ada</div>";
    }
} elseif (isset($_POST['masuk'])){
    if (!empty(file_exists($file))) {
        $alert="<div class='alert alert-success'>Anda berhasil masuk</div>";
        $_SESSION['nik']=$nik;
        $_SESSION['nama']=$nama;
        echo "<meta http-equiv='refresh', content='2; url=index.php'>";
    }
    else{
        $alert="<div class='alert alert-danger'>Anda gagal masuk</div>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bs/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="card mt-5">
                    <div class="card-body py-5">
                        <h2 class="text-primary text-center">PEDULI DIRI</h2>
                        <P class="text-center text-secondary small mb-4">Catatan Perjalanan</P>
                        <?php echo @$alert ?>

                        <form action="" method="POST">
                            <input type="number" class="form-control mb-4" name="nik" placeholder="NIK" required>
                            <input type="text" name="nama" class="form-control mb-4" placeholder="Nama Lengkap" required>
                            <div class="form-inline">
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-primary" name="pengguna_baru">Saya Pengguna Baru</button>
                                    <button class="btn btn-primary" name="masuk">Masuk</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="bs/js/bootstrap.js"></script>
    <script src="jquery/jquery.js"></script>
</body>

</html>
