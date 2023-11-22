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
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
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
                                        </div>
                                        <div class="form-group mb-4 has-feedback">
                                            <input type="text" name="username" class="form-control"
                                                placeholder="Username" required>
                                            <span class="form-control-feedback"></span>
                                        </div>
                                        <div class="form-group mb-4 has-feedback">
                                            <input type="password" name="password" class="form-control"
                                                placeholder="Password" required>
                                            <span class="form-control-feedback"></span>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-4">
                                            </div>
                                            <div class="col-xs-4">
                                                <button type="submit" name="login"
                                                    class="btn btn-primary btn-block btn-flat">Masuk</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    </form>
    <?php
    if (!empty($error)) {
        echo '<div class="alert bg-danger text-center" role="alert">' . $error . '</div>';
    }
    ?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="assets/js/jQuery-2.1.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>
