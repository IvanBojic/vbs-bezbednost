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

    <!-- start page title section -->
    <section class="wow animate__fadeIn bg-light-gray padding-35px-tb page-title-small top-space">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12 text-md-center text-center">
                    <!-- start page title -->
                    <h4 class="alt-font text-extra-dark-gray font-weight-700 mb-0 text-uppercase">Kontakt</h4>
                    <!-- end page title -->
                </div>
                <div class="col-lg-4 col-md-6 breadcrumb text-small alt-font justify-content-center justify-content-md-end sm-margin-15px-top">

                </div>
            </div>
        </div>
    </section>
    <!-- end page title section -->
    <!-- start page title section -->
    <section class="wow animate__fadeIn bg-light-gray padding-35px-tb">
        <div class="row m-0 row-cols-2 row-cols-sm-4">
            <!-- start contact item -->
            <div class="col border-all d-flex flex-column justify-content-center align-items-center text-center h-300px lg-h-300px sm-h-250px last-paragraph-no-margin">
                <i class="icon-map text-main-color icon-medium margin-25px-bottom"></i>
                <div class="text-uppercase alt-font font-weight-600 margin-5px-bottom">Adresa</div>
                <p class="w-60 lg-w-80 mx-auto text-medium">Prvomajska bb,<br> 31205 Sevojno</p>
            </div>
            <!-- end contact item -->
            <!-- start contact item -->
            <div class="col border-all phone-contact-square d-flex flex-column justify-content-center align-items-center text-center h-300px lg-h-300px sm-h-250px last-paragraph-no-margin">
                <i class="icon-chat text-main-color icon-medium margin-25px-bottom"></i>
                <div class="text-uppercase alt-font font-weight-600 margin-5px-bottom">Pozovite nas</div>
                <p class="mx-auto text-medium mb-0">Tel: <a href="tel:+38131532203">+381 31 532 203</a></p>
                <p class="mx-auto text-medium mb-0">Mob: <a href="tel:+381668684435">+381 66 868 4435</a></p>
            </div>
            <!-- end contact item -->
            <!-- start contact item -->
            <div class="col border-all phone-contact-square d-flex flex-column justify-content-center align-items-center text-center h-300px lg-h-300px sm-h-250px last-paragraph-no-margin">
                <i class="icon-envelope text-main-color icon-medium margin-25px-bottom"></i>
                <div class="text-uppercase alt-font font-weight-600 margin-5px-bottom">Email</div>
                <p class="mx-auto text-medium mb-0"><a href="mailto:valjaonicabezbednost@vbs.co.rs">valjaonicabezbednost@vbs.co.rs</a></p>
                <p class="mx-auto text-medium"><a href="mailto:pmilutinovic@vbs.co.rs">pmilutinovic@vbs.co.rs</a></p>
            </div>
            <!-- end contact item -->
            <!-- start contact item -->
            <div class="col border-all d-flex flex-column justify-content-center align-items-center text-center h-300px lg-h-300px sm-h-250px last-paragraph-no-margin">
                <i class="icon-clock text-main-color icon-medium margin-25px-bottom"></i>
                <div class="text-uppercase alt-font font-weight-600 margin-5px-bottom">Matični podaci</div>
                <p class="mx-auto text-medium mb-0">PIB: 104704014</p>
                <p class="mx-auto text-medium">Matični broj: 20214473</p>
            </div>
            <!-- end contact item -->
        </div>
    </section>
    <!-- end page title section -->
    <!-- start contact section -->
    <section class="padding-35px-tb bg-very-light-gray">
        <div class="container-fluid">
            <div class="row row-cols-1 row-cols-lg-2">
                <?php /* <div class="col p-0 cover-background md-h-450px sm-h-350px wow animate__fadeInLeft" style="background: url('images/img/contact_form1.jpg')"></div> */ ?>
                <div class="border-del col text-center padding-six-lr padding-five-half-tb lg-padding-four-lr md-padding-ten-half-tb md-padding-twelve-half-lr sm-padding-15px-lr wow animate__fadeIn">
                    <h5 class="margin-55px-bottom text-extra-dark-gray alt-font font-weight-600 text-uppercase sm-margin-ten-bottom">Kontaktirajte nas!</h5>
                    <form id="project-contact-form-4" action="email-templates/contact-form.php" method="post">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-results d-none"></div>
                            </div>
                            <div class="col-12 col-md-6">
                                <input type="text" name="name" id="name" placeholder="Ime *" class="bg-transparent border-color-medium-dark-gray medium-input required">
                            </div>
                            <div class="col-12 col-md-6">
                                <input type="tel" name="phone" id="phone" placeholder="Kontakt telefon" class="bg-transparent border-color-medium-dark-gray medium-input">
                            </div>
                            <div class="col-12 col-md-6">
                                <input type="email" name="email" id="email" placeholder="E-mail *" class="bg-transparent border-color-medium-dark-gray medium-input required">
                            </div>
                            <div class="col-12">
                                <textarea name="comment" id="comment" placeholder="Unesite Vašu poruku!" rows="7" class="bg-transparent border-color-medium-dark-gray medium-textarea"></textarea>
                            </div>
                            <div class="col-12 text-center">
                                <button id="project-contact-us-4-button" type="submit" class="btn btn-main-color btn-medium margin-15px-top submit">Pošalji</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="border-del col p-0 wow animate__fadeInRight">
                    <iframe class="w-100 h-100" src="https://maps.google.com/?ie=UTF8&t=m&q=43.842068,19.890956&spn=0.007738,0.017123&z=15&output=embed" title="Valjaonica - Bezbednost d.o.o."></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact section -->
      <?php /*  <section class="wow animate__fadeIn bg-light-gray">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center social-style-4">
                        <span class="text-medium font-weight-600 text-uppercase d-block alt-font text-extra-dark-gray margin-30px-bottom">On social networks</span>
                        <div class="social-icon-style-4">
                            <ul class="margin-30px-top large-icon">
                                <li><a class="facebook" href="http://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i><span></span></a></li>
                                <li><a class="twitter" href="http://twitter.com" target="_blank"><i class="fab fa-twitter"></i><span></span></a></li>
                                <li><a class="google" href="http://google.com" target="_blank"><i class="fab fa-google-plus-g"></i><span></span></a></li>
                                <li><a class="dribbble" href="http://dribbble.com" target="_blank"><i class="fab fa-dribbble"></i><span></span></a></li>
                                <li><a class="linkedin" href="http://linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i><span></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section> */ ?>
        <?php
        /* Including footer */
        include 'footer.php';
        include 'scripts.php';
        ?>
    </body>
</html>