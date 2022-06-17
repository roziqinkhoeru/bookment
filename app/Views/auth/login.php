<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?>
    </title>
    <!-- bootstrap styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- bootstrap icon -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css"
        integrity="sha512-xnP2tOaCJnzp2d2IqKFcxuOiVCbuessxM6wuiolT9eeEJCyy0Vhcwa4zQvdrZNVqlqaxXhHqsSV1Ww7T2jSCUQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- style -->
    <?= $css; ?>
</head>

<body>
    <div class="container-fluid ps-md-0">
        <a href="/" class="btn__close">
            <i class="bi bi-x-circle"></i>
        </a> <!-- end btn close -->

        <div class="row g-0">
            <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"
                style="background-image: url(/assets/img/book-bg-orange.jpg);"></div>
            <div class="col-md-8 col-lg-6">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto">
                                <h3 class="login-heading mb-4 fw-bold">Welcome back!</h3>
                                <!-- Sign In Form -->
                                <form class="form__login">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control shadow-none" id="floatingInput"
                                            placeholder="name@example.com">
                                        <label for="floatingInput">Email</label>
                                    </div> <!-- end input email -->

                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control shadow-none" id="floatingPassword"
                                            placeholder="Password">
                                        <label for="floatingPassword">Password</label>
                                    </div> <!-- end input password -->

                                    <div class="d-grid mb-3">
                                        <button class="btn btn-lg btn-login fw-bold mb-2 btn__orange text-white"
                                            type="submit">Sign in</button>
                                    </div> <!-- end button sign in -->

                                    <p>Belum punya akun? <a href="/register">Daftar sekarang!</a></p>
                                </form> <!-- end form login -->
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div> <!-- end container -->
                </div> <!-- end login -->
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div> <!-- end container fluid -->

    <!-- scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script> <!-- jquery -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script> <!-- bootstrap js -->
</body>

</html>