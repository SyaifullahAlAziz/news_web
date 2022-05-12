<?php
session_start();
if (isset($_SESSION['id_admin'])) {

    echo "<script>alert('Anda Telah Login');
    window.location='index.php'
    </script>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Halaman Login</title>

    <!-- Custom fonts for this template-->
    <link href="../assets/backend/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../assets/backend/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-5 col-lg-6 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form class="user" action="" method="post">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                        </div>

                                        <button type="submit" name="login" class="btn btn-primary btn-user btn-block">Login</button>

                                        <hr>
                                        <a href="index.html" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.html">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <?php
    include "koneksi.php";

    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = sha1($_POST['password']);

        //cek data form ke database
        $admin = $koneksi->query("SELECT * FROM tb_admin WHERE email='$email' AND password='$password'");

        //cek jumlah data hasil query
        // var_dump($admin->num_rows);
        // die();
        if ($admin->num_rows > 0) {
            //pecah data admin
            $data = $admin->fetch_assoc();

            //simpan datanya ke session
            session_start();
            $_SESSION['id_admin'] = $data['id_admin'];
            $_SESSION['email'] = $data['email'];
            $_SESSION['username'] = $data['username'];
            $_SESSION['level'] = $data['level'];

            echo "<script>alert('Login Berhasil');
            window.location='index.php'
            </script>";
        } else {
            echo "<script>alert('Email Atau Password Salah');
            window.location='login.php'
            </script>";
        }
    }

    ?>

    <!-- Bootstrap core JavaScript-->
    <script src="../assets/backend/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/backend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../assets/backend/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../assets/backend/js/sb-admin-2.min.js"></script>

</body>

</html>