<?php
session_start(); // Start session nya

// Kita cek apakah user sudah login atau belum
// Cek nya dengan cara cek apakah terdapat session username atau tidak
if(isset($_SESSION['username'])){ // Jika session username ada berarti dia sudah login
	header('location: home.php'); // Kita Redirect ke halaman welcome.php
}
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="libraries/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Aplikasi Oauth</title>
</head>

<body>
    <div class="container">
        <div class="card login-form">
            <div class="card-body">
                <h2 class="card-title">Login</h2>
                <h6 class="card-subtitle text-muted mb-5">Please login to use this site!</h6>
                <!-- <?php
					if(isset($_COOKIE["message"])){
						?>
						<div class="alert alert-danger">
							<?php
							echo $_COOKIE["message"];
							?>
						</div>
						<?php
					}
					?> -->
                <form action="login.php" method="POST">
                    <div class="mb-4">
                        <label class="form-label">username</label>
                        <input type="text" name="username" class="form-control" placeholder="Your Username..." required>
                    </div>
                    <label for="password-field" class="form-label">Password</label>
                    <div class="input-group mb-3">
                        <input id="password-field" type="password" name="password" class="form-control" placeholder="Your password">
                        <div class="input-group-prepend">
                            <button class="btn rounded-end btn-outline-success" type="button">
                                <h6 toggle="#password-field" class="fa fa-eye fa-lg show-hide"></h6>
                            </button>
                        </div>
                    </div>
                    <div class="d-grid mt-5">
                    <button type="submit" class="btn btn-lg btn-success btn-block">LOGIN</button>
                    </div>

                    <div class="mt-4 text-center">
                        <label>Or Login With </label>
                    </div>
                    <div class="d-grid mt-3 text-center">
                            <a href="google.php" class="btn btn-light btn-login"><i class="fa fa-google"></i> Gmail</a>
                            <!-- <a href="facebook.php" class="btn btn-light btn-login"><i class="fa fa-facebook"></i> Facebook</a> -->
                    </div>
                    <div class="mt-4 text-center">
                        <label>@2021 Putu Eka Purnama Sari</label>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
    <script>
        $(".show-hide").click(function() {

            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    </script>
</body>

</html>