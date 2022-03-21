<?php 
session_start();

if(!empty($_SESSION['nik'])) {
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

    <div class="container">
        <div class="row">
            <div class="col-lg-3">

            </div>

            <div class="col-lg-9">
                <?php include"navigasi.php"; ?>
            </div>
        </div>
    </div>

</body>
</html>
<?php 
}
else {
    header("location:login.php");
}
?>