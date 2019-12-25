<?php defined('BASEPATH') or exit('No direct script access allowed');?><!DOCTYPE html>
<html lang="en" class="no-focus" ng-app="dpmsApp">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title><?php echo $site_title ?? 'Codebase'; ?></title>

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
        <link rel="stylesheet" href="<?php asset_url('icofont/icofont.min.css'); ?>">
        <link rel="stylesheet" href="<?php asset_url('css/codebase.min.css'); ?>">
        <link rel="stylesheet" href="<?php asset_url('js/plugins/sweetalert2/sweetalert2.min.css'); ?>">
    </head>
    <body ng-controller="mainCtrl">
        <div id="page-container" class="sidebar-o side-scroll page-header-modern main-content-boxed enable-page-overlay" ng-class="theme == 'dark' ? 'sidebar-inverse' : ''">
        
            <aside id="side-overlay">
                <div class="content-header content-header-fullrow">
                    <div class="content-header-section align-parent">
                        <button type="button" class="btn btn-circle btn-dual-secondary align-v-r" data-toggle="layout" data-action="side_overlay_close">
                            <i class="fa fa-times text-danger"></i>
                        </button>
                        <div class="content-header-item">
                            <a class="img-link mr-5" href="">
                                <img class="img-avatar img-avatar32" src="<?php asset_url('media/avatars/avatar0.jpg'); ?>" alt="">
                            </a>
                            <a class="align-middle link-effect text-primary-dark font-w600" href="">Admin</a>
                        </div>
                    </div>
                </div>

                <div class="content-side">
                    <div class="block pull-t pull-r-l">
                        <div class="block-content block-content-full block-content-sm bg-body-light">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="side-overlay-search" name="side-overlay-search" placeholder="Search..">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-secondary px-10">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="block pull-r-l">
                        <div class="block-content block-content-full block-content-sm bg-body-light">
                            <div class="row">
                                <div class="col-4">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Stat</div>
                                    <div class="font-size-h4">100</div>
                                </div>
                                <div class="col-4">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Stat</div>
                                    <div class="font-size-h4">200</div>
                                </div>
                                <div class="col-4">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Stat</div>
                                    <div class="font-size-h4">300</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block pull-r-l">
                        <div class="block-header bg-body-light">
                            <h3 class="block-title">Title</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                            </div>
                        </div>
                        <div class="block-content">
                            <p>Content...</p>
                        </div>
                    </div>
                </div>
            </aside>

            <nav id="sidebar">
                <div class="sidebar-content">
                    <div class="content-header content-header-fullrow px-15">
                        <div class="content-header-section sidebar-mini-visible-b">
                            <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                                <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                            </span>
                        </div>

                        <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                            <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                                <i class="fa fa-times text-danger"></i>
                            </button>

                            <div class="content-header-item">
                                <a class="link-effect font-w700" href="">
                                    <i class="icofont-tooth text-primary"></i>
                                    <span class="font-size-xl text-dual-primary-dark">DP</span><span class="font-size-xl text-primary">MS</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="content-side content-side-full content-side-user px-10 align-parent">
                        <div class="sidebar-mini-visible-b align-v animated fadeIn">
                            <img class="img-avatar img-avatar32" src="<?php asset_url('media/avatars/avatar0.jpg'); ?>" alt="">
                        </div>

                        <div class="sidebar-mini-hidden-b text-center">
                            <a class="img-link" href="">
                                <img class="img-avatar" src="<?php asset_url('media/avatars/avatar0.jpg'); ?>" alt="">
                            </a>
                            <ul class="list-inline mt-10">
                                <li class="list-inline-item">
                                    <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" href=""><span ng-bind="profile_info.nickname"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <!-- <a class="link-effect text-dual-primary-dark" data-toggle="layout" data-action="sidebar_style_inverse_toggle" href="javascript:void(0)"> -->
                                    <a ng-click="changeTheme();" class="link-effect text-dual-primary-dark" data-toggle="layout" href="javascript:void(0)">
                                        <i class="si si-drop"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="link-effect text-dual-primary-dark" href="" ng-click="logout();">
                                        <i class="si si-logout"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="content-side content-side-full">
                        <?php $this->load->view('includes/nav'); ?>
                    </div>
                </div>
            </nav>

            <header id="page-header">
                <div class="content-header">
                    <div class="content-header-section">
                        <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="sidebar_toggle">
                            <i class="fa fa-navicon"></i>
                        </button>

                        <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="header_search_on">
                            <i class="fa fa-search"></i>
                        </button>

                        <!-- <div class="btn-group" role="group">
                            <button type="button" class="btn btn-circle btn-dual-secondary" id="page-header-themes-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-paint-brush"></i>
                            </button>
                            <div class="dropdown-menu min-width-150" aria-labelledby="page-header-themes-dropdown">
                                <h6 class="dropdown-header text-center">Color Themes</h6>
                                <div class="row no-gutters text-center mb-5">
                                    <div class="col-4 mb-5">
                                        <a class="text-default" data-toggle="theme" data-theme="default" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                    <div class="col-4 mb-5">
                                        <a class="text-elegance" data-toggle="theme" data-theme="assets/css/themes/elegance.min.css" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                    <div class="col-4 mb-5">
                                        <a class="text-pulse" data-toggle="theme" data-theme="assets/css/themes/pulse.min.css" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                    <div class="col-4 mb-5">
                                        <a class="text-flat" data-toggle="theme" data-theme="assets/css/themes/flat.min.css" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                    <div class="col-4 mb-5">
                                        <a class="text-corporate" data-toggle="theme" data-theme="assets/css/themes/corporate.min.css" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                    <div class="col-4 mb-5">
                                        <a class="text-earth" data-toggle="theme" data-theme="assets/css/themes/earth.min.css" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="dropdown-divider"></div>
                                <button ng-click="changeTheme();" type="button" class="btn btn-sm btn-block btn-alt-secondary mb-10" data-toggle="layout">Sidebar Style</button>
                            </div>
                        </div> -->
                    </div>

                    <div class="content-header-section">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span ng-bind="profile_info.nickname"></span><i class="fa fa-angle-down ml-5"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right min-width-150" aria-labelledby="page-header-user-dropdown">
                                <a class="dropdown-item" href="">
                                    <i class="si si-user mr-5"></i> Profile
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="">
                                    <span><i class="si si-envelope-open mr-5"></i> Inbox</span>
                                    <span class="badge badge-primary">3</span>
                                </a>
                                <a class="dropdown-item" href="">
                                    <i class="si si-note mr-5"></i> Invoices
                                </a>
                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_toggle">
                                    <i class="si si-wrench mr-5"></i> Settings
                                </a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="" ng-click="logout();">
                                    <i class="si si-logout mr-5"></i> Sign Out
                                </a>
                            </div>
                        </div>

                        <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="side_overlay_toggle">
                            <i class="fa fa-tasks"></i>
                        </button>
                    </div>
                </div>

                <div id="page-header-search" class="overlay-header">
                    <div class="content-header content-header-fullrow">
                        <form>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button type="button" class="btn btn-secondary px-15" data-toggle="layout" data-action="header_search_off">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control" placeholder="Search or hit ESC.." ng-model="keyword" id="page-header-search-input" name="page-header-search-input">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-secondary px-15" ng-click="searchData(1, keyword);">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div id="page-header-loader" class="overlay-header bg-primary">
                    <div class="content-header content-header-fullrow text-center">
                        <div class="content-header-item">
                            <i class="fa fa-sun-o fa-spin text-white"></i>
                        </div>
                    </div>
                </div>
            </header>

            <main id="main-container">
                <?php $this->load->view($content); ?>
            </main>

            <footer id="page-footer" class="opacity-0">
                <div class="content py-20 font-size-xs clearfix">
                    <!-- <div class="float-right">
                        Crafted with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600" href="" target="_blank">mindblendr</a>
                    </div> -->
                    <div class="float-right">
                        <small ng-bind="time"></small>
                    </div>
                    <div class="float-left">
                        <a class="font-w600" href="" target="_blank"><?php echo $site_title ?? 'Codebase'; ?></a> &copy; <span class="js-year-copy"></span>
                    </div>
                </div>
            </footer>
        </div>

        <script src="<?php asset_url('js/custom/moment.min.js'); ?>"></script>
        <script src="<?php asset_url('js/codebase.core.min.js'); ?>"></script>
        <script src="<?php asset_url('js/codebase.app.min.js'); ?>"></script>
        <script src="<?php asset_url('js/plugins/sweetalert2/sweetalert2.min.js'); ?>"></script>

        <script src="<?php asset_url('js/custom/init.js'); ?>"></script>

        <?php foreach ($scripts as $index => $script): ?>
            <script src="<?php asset_url($script); ?>"></script>
        <?php endforeach; ?>

        <?php 
            if (isset($modals)) {
                foreach ($modals as $index => $modal) { 
                    $this->load->view($modal);
                }
            }
        ?>
        
    </body>
</html>
