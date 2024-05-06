<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="<?= base_url('assets/images/favicon.svg') ?>" type="image/x-icon" />
    <title>Login Page</title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/main.css') ?>" />
</head>

<body>
    <!-- ======== Preloader =========== -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>
    <!-- ======== Preloader =========== -->

    <!-- ========== signin-section start ========== -->
    <section class="signin-section">
        <div class="container-fluid">
            <div class="row g-0 auth-row">
                <div class="col-lg-6">
                    <div class="auth-cover-wrapper bg-primary-100">
                        <div class="auth-cover">
                            <div class="title text-center">
                                <h1 class="text-primary mb-10">Welcome Back</h1>
                                <p class="text-medium">
                                    Sign in to your Existing account to continue
                                </p>
                            </div>
                            <div class="cover-image">
                                <img src="<?= base_url('') ?>assets/images/auth/signin-image.svg" alt="" />
                            </div>
                            <div class="shape-image">
                                <img src="<?= base_url('') ?>assets/images/auth/shape.svg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-6">
                    <div class="signin-wrapper">
                        <div class="form-wrapper">
                            <h6 class="mb-15">Sign In Form</h6>
                            <p class="text-sm mb-25">
                                Start creating the best possible user experience for you
                                customers.

                                <!-- <?= password_hash('12345', PASSWORD_DEFAULT); ?> -->
                            </p>

                            <?php if (!empty(session()->getFlashdata('message'))) : ?>

                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <?= session()->getFlashdata('message') ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>

                            <?php endif; ?>

                            <form method="POST" action="<?= base_url('login') ?>">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="input-style-1">
                                            <label>Username</label>
                                            <input type="text" name="username" class="<?= ($validation->hasError('username')) ? 'is-invalid' : '' ?> form-control" placeholder="Username" />
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('username') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-12">
                                        <div class="input-style-1">
                                            <label>Password</label>
                                            <input type="password" name="password" class="<?= ($validation->hasError('password')) ? 'is-invalid' : '' ?> form-control" placeholder="Password" autocomplete="off" />
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('username') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-12">
                                        <div class="button-group d-flex justify-content-center flex-wrap">
                                            <button type="submit" class="main-btn primary-btn btn-hover w-100 text-center">
                                                Login
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->
                            </form>

                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
    </section>
    <!-- ========== signin-section end ========== -->

    <!-- ========= All Javascript files linkup ======== -->
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/main.js') ?>"></script>
</body>

</html>