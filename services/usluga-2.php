<?php
// Uključite konfiguracioni fajl
require_once('./../config.php');
?>
<!doctype html>
<html class="no-js" lang="en">
    <?php
    /* Including head */
    include './../head.php';
    ?>
    <body>
    <!-- start header -->
    <?php
    /* Including header */
    include './../header.php';
    ?>
    <!-- end header -->
        <!-- star page title section -->
        <section class="wow animate__fadeIn cover-background background-position-top top-space" style="background-image:url('images/img/usluge-baner.jpg');">
            <div class="opacity-medium bg-extra-dark-gray"></div>
            <div class="container position-relative">
                <div class="row">
                    <div class="col-12 page-title-large d-flex flex-column justify-content-center text-center">
                        <!-- start sub title -->
                        <span class="d-block text-white-2 opacity6 margin-10px-bottom alt-font"></span>
                        <!-- end sub title -->
                        <!-- start page title -->
                        <h1 class="alt-font text-white-2 font-weight-600 mb-0">
                            Tehnička zaštita
                        </h1>
                        <!-- end page title -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title section -->
        <!-- start services section -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12 margin-60px-bottom sm-margin-30px-bottom wow animate__fadeIn"><img src="images/img/usluga-2-baner.png" alt=""/></div>
                </div>
                <div class="row">
                    <!-- start service item -->
                    <div class="col-12 col-lg-6 col-md-6 col-sm-12 wow animate__fadeInUp">
                        <div class="sm-margin-30px-bottom wow animate__fadeIn margin-30px-left">
                            <p class="w-95 md-w-100 sm-w-95 sm-margin-15px-bottom">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </p>
                            <p class="w-95 md-w-100 sm-w-95 sm-margin-15px-bottom">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </p>
                            <div class="separator-line-horrizontal-medium-light margin-30px-top md-no-margin-top bg-deep-pink"></div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 col-sm-12 wow animate__fadeInUp">
                        <div class="sm-margin-30px-bottom wow animate__fadeIn margin-30px-left">
                            <img src="images/img/usluga-2-slika.png" alt=""/>
                        </div>
                    </div>
                    <!-- end service item -->
                </div>
                <div class="row margin-90px-top">
                    <div class="col-12 page-title-large d-flex flex-column justify-content-center text-center">
                        <!-- start sub title -->
                        <span class="d-block margin-10px-bottom alt-font text-extra-dark-gray">Naš tim stručnjaka na raspolaganju Vam je za sva dodatna pitanja i informacije.</span>
                        <!-- end sub title -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end services section -->
    <!-- end page title section -->
    <!-- start footer -->
    <?php
    /* Including footer */
    include './../footer.php';
    include './../scripts.php';
    ?>
    </body>
</html>