<?php
include_once 'components/php_composer.php';

$slike = clsFunctions::procitajSlikeIzJSON($fajl = null);

?>

<!doctype html>
<html class="no-js" lang="en">
    <?php
        /* Including head */
        include 'head.php';
    ?>
    <body>
        <?php
            /* Including header */
            include 'header.php';
        ?>
        <!-- start references content section -->
        <section class="wow animate__fadeIn top-space">
            <div class="container position-relative padding-50px-bottom padding-50px-top">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-9 col-lg-10 text-center wow animate__fadeIn last-paragraph-no-margin">
                        <h4 class="alt-font font-weight-700 text-uppercase text-extra-dark-gray">REFERENCE</h4>
                        <p class="w-75 mx-auto text-medium-gray lg-w-90 sm-w-100 sm-margin-30px-bottom">Zaposleni u Valjaonici - Bezbednost d.o.o. svojim znanjem, iskustvom i profesionalnim pristupom doprinose da se kompanija razvija. Tokom godina rada, uspeli smo da prevaziđemo mnoge izazove i ostvarimo uspešnu poslovnu saradnju sa velikim brojem privatnih kompanija i državnih organa, a između ostalih poverenje su nam ukazali:</p>
                    </div>
                </div>
            </div>
            <div class="container"> 
                <div class="row">
                    <div class="col-12 blog-content">
                        <ul class="blog-grid blog-wrapper grid grid-loading grid-4col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col hover-option4 blog-post-style3 gutter-extra-large">
                            <li class="grid-sizer"></li>
                            <!-- start post item -->
                            <?php foreach ($slike as $slika) { ?>
                                <li class="grid-item last-paragraph-no-margin text-center text-sm-start wow animate__fadeInUp">
                                    <div class="blog-post">
                                        <div class="blog-post-images overflow-hidden position-relative">
                                                <img src="<?= $slika['path']; ?>" alt="">
                                                <div class="references-hover-icon-hover-icon title-reference bg-light-gray text-center"><span class="text-medium font-weight-400 notranslate"><?= $slika['title']; ?></span></div>
                                        </div>
                                    </div>
                                </li>
                            <?php } ?>
                            <!-- end post item -->
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- end references content section -->
        <!-- start footer -->
        <?php
        /* Including footer */
        include 'footer.php';
        include 'scripts.php';
        ?>
    </body>
</html>