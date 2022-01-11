<!DOCTYPE html>
<html style="margin: 0 !important">

<head>
    <?php wp_head(); ?>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
    </style>
</head>

<body <?php body_class(); ?>>

    <header>
        <div class="top_header">
            <div class="container-fluid content-top-header">
                <div col-sm-4 class="social-medias">
                    <ul>
                        <li>
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/call.svg" alt="tel">
                            <span>(16) 3362-5044</span>
                        </li>
                        <li>|</li>
                        <li>
                            <a href="https://www.facebook.com/colsaocarlos" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/facebook.svg" alt="facebook-icon">
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/colegiosaocarlos/" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/insta.svg" alt="instagram-icon">
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/c/Col%C3%A9gioS%C3%A3oCarlosAulas" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/youtube.svg" alt="youtube-icon">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="text-matriculas">Matrículas Abertas!</div>
            </div>
        </div>
        <div class="header_primary">
            <!-- <nav class="navbar navbar-expand-lg">
                <div class="main_header">
                    <div class="">
                        <div class="logo collapse navbar-collapse">
                            <?php
                            if (has_custom_logo()) {
                                the_custom_logo();
                            }
                            ?>
                        </div>
                    </div>

                    <div class="">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <?php
                            if (has_nav_menu('primary')) {
                                wp_nav_menu(array(
                                    'theme_location' => 'primary',
                                    'container' => false,
                                    'fallback_cb' => false,
                                    'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0'
                                ));
                            }
                            ?>

                        </div>

                    </div>
                    <div class="">
                        <div class="collapse navbar-collapse button-login">
                            <a class="btn btn-primary " href="#" role="button">
                                <img class="icon-login" src="<?php echo get_template_directory_uri() ?>/assets/images/icons/person.svg" alt="UserIcon">
                                LOGIN
                            </a>
                        </div>
                    </div>
                </div>

            </nav> -->

            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="main_header">

                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="">
                        <div class="logo navbar-brand">
                            <?php
                            if (has_custom_logo()) {
                                the_custom_logo();
                            }
                            ?>
                        </div>
                    </div>
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Colégio São Carlos</h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <?php
                            if (has_nav_menu('primary')) {
                                wp_nav_menu(array(
                                    'theme_location' => 'primary',
                                    'container' => false,
                                    'fallback_cb' => false,
                                    'menu_class' => 'navbar-nav align-items-center justify-content-center flex-grow-1 pe-3'
                                ));
                            }
                            ?>
                            <div class="">
                                <div class="button-login">
                                    <a class="btn btn-primary " href="https://colegiosaocarlos.eorbit.com.br/" role="button" target="_blank">
                                        <img class="icon-login" src="<?php echo get_template_directory_uri() ?>/assets/images/icons/person.svg" alt="UserIcon">
                                        LOGIN
                                    </a>
                                </div>
                            </div>
                            <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button> -->
                            <!-- </form> -->
                            <!-- <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Dropdown
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul> -->

                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
