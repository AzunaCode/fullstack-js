<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location: index.php");
}
?>

<html>

<head>
    <title>Welcome <?php echo $_SESSION['nama']; ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="libraries/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <div class="card text-center">
            <div class="card-header">
                HOME
            </div>
            <div class="card-body">
                <h4 class="card-title">Selamat Datang <?php echo $_SESSION['nama']; ?></h4>
                <p class="card-text">Terimakasih, Anda Sudah Login! Berikut Data Diri Anda:</p>
                <table style="margin-bottom: 15px;">
                    <tr>
                        <td>Username</td>
                        <td>:</td>
                        <td><?php echo $_SESSION['username'] ?></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?php echo $_SESSION['nama'] ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><?php echo $_SESSION['email'] ?></td>
                    </tr>
                </table>
                <a href="logout.php" type="button" class="btn btn-danger">Logout</a>
            </div>
        </div>
    </div>
</body>

</html>