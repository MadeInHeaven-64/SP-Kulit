<?php
include 'ceklogin.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login - Sistem Pakar Covid-19</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link href="assets/css/styles.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/AdminLTE.min.css" rel="stylesheet">
    <link href="assets/images/Group 60 (1).png" type="image/x-icon" rel="shortcut icon">
</head>

<body class="hold-transition login-page">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Login</h3>
                                </div>
                                <div class="card-body">
                                    <form action="" method="post" id="form">
                                        <div class="heading">
                                            <h6>Not registered yet?</h6>
                                            <a href="formregister.php" class="toggle">Sign up</a>
                                        </div>
                                        <div class="form-group has-feedback">
                                            <input type="text" name="username" class="form-control"
                                                placeholder="Username" required>
                                            <span class="fa fa-user form-control-feedback"></span>
                                        </div>
                                        <div class="form-group has-feedback">
                                            <input type="password" name="password" class="form-control"
                                                placeholder="Password" required>
                                            <span class="fa fa-lock form-control-feedback"></span>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <button type="submit" name="login" class="btn btn-primary btn-block btn-flat">Masuk</button>
                                            </div>
                                            
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2023</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    </form>
    <?php
    if (!empty($error)) {
        echo '<div class="alert bg-danger text-center" role="alert">' . $error . '</div>';
    }
    ?>
    </div>

    <script src="assets/js/jQuery-2.1.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>
