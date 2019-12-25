<?php defined('BASEPATH') or exit('No direct script access allowed');?><!DOCTYPE html>
<html lang="en" class="no-focus" ng-app="dpmsApp">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>Codebase - Bootstrap 4 Admin Template &amp; UI Framework</title>

        <meta name="description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
        <meta property="og:site_name" content="Codebase">
        <meta property="og:description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">

        <link rel="shortcut icon" href="<?php asset_url('media/favicons/favicon.png'); ?>">
        <link rel="icon" type="image/png" sizes="192x192" href="<?php asset_url('media/favicons/favicon-192x192.png'); ?>">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php asset_url('media/favicons/apple-touch-icon-180x180.png'); ?>">


        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
        <link rel="stylesheet" id="css-main" href="<?php asset_url('css/codebase.min.css'); ?>">

        <link rel="stylesheet" href="<?php asset_url('js/plugins/sweetalert2/sweetalert2.min.css'); ?>">
    </head>
    <body ng-controller="authCtrl">
        <div id="page-container" class="main-content-boxed">

            <main id="main-container">

                <div class="bg-image" style="background-image: url('<?php asset_url('media/photos/login_bg.jpg'); ?>');">
                    <div class="row mx-0 bg-black-op">
                        <div class="hero-static col-md-6 col-xl-8 d-none d-md-flex align-items-md-end">
                            <div class="p-30 invisible" data-toggle="appear">
                                <p class="font-size-h3 font-w600 text-white">
                                    Organized and Efficient
                                </p>
                                <p class="font-italic text-white-op">
                                    Copyright &copy; <span class="js-year-copy">2019</span>
                                </p>
                            </div>
                        </div>
                        <div class="hero-static col-md-6 col-xl-4 d-flex align-items-center bg-white invisible" data-toggle="appear" data-class="animated fadeInRight">
                            <div class="content content-full">
                                <div class="px-30 py-10">
                                    <a class="link-effect font-w700" href="index.html">
                                        <i class="icofont-tooth"></i>
                                        <span class="font-size-xl text-primary-dark">Dental Patient </span><span class="font-size-xl">Management System</span>
                                    </a>
                                    <h1 class="h3 font-w700 mt-30 mb-10">Welcome to Your Dashboard</h1>
                                    <h2 class="h5 font-w400 text-muted mb-0">Please sign in</h2>
                                </div>
                                <div class="px-30">
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-material">
                                                <input ng-enter="login();" type="text" class="form-control" ng-model="username">
                                                <label for="login-username">Username</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-material">
                                                <input ng-enter="login();" type="password" class="form-control" ng-model="password">
                                                <label for="login-password">Password</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-material">
                                                <input ng-enter="login();" type="password" class="form-control" ng-model="pin">
                                                <label for="login-pin">Pin</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button ng-click="login();" class="btn btn-sm btn-hero btn-alt-primary">
                                            <i class="si si-login mr-10"></i> Sign In
                                        </button>
                                        <div class="mt-30">
                                            <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="op_auth_signup2.html">
                                                <i class="fa fa-plus mr-5"></i> Create Account
                                            </a>
                                            <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="op_auth_reminder2.html">
                                                <i class="fa fa-warning mr-5"></i> Forgot Password
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </main>
        </div>
        <script src="<?php asset_url('js/custom/moment.min.js'); ?>"></script>
        <script src="<?php asset_url('js/codebase.core.min.js'); ?>"></script>
        <script src="<?php asset_url('js/codebase.app.min.js'); ?>"></script>
        <script src="<?php asset_url('js/plugins/sweetalert2/sweetalert2.min.js'); ?>"></script>
        <script src="<?php asset_url('js/plugins/jquery-validation/jquery.validate.min.js'); ?>"></script>
        <script src="<?php asset_url('js/pages/op_auth_signin.min.js'); ?>"></script>

        <script src="<?php asset_url('js/custom/init.js'); ?>"></script>

        <?php foreach ($scripts as $index => $script): ?>
            <script src="<?php asset_url($script); ?>"></script>
        <?php endforeach; ?>
    </body>
</html>