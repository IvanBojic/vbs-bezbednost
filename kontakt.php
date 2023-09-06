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
        <!-- start contact info -->
        <section class="wow animate__fadeIn">
            <div class="container px-0">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-6 col-md-8 margin-eight-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center last-paragraph-no-margin">

                    </div>
                </div>
                <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2">
                    <!-- start contact info item -->
                    <div class="col text-center md-margin-eight-bottom sm-margin-30px-bottom wow animate__fadeInUp last-paragraph-no-margin">
                        <div class="d-inline-block margin-20px-bottom">
                            <div class="bg-extra-dark-gray icon-round-medium"><i class="icon-map-pin icon-medium main-color"></i></div>
                        </div>
                        <div class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">Posetite nas</div>
                        <p class="mx-auto">
                            Prvomajska bb<br>
                            31205 Sevojno.
                        </p>
                    </div>
                    <!-- end contact info item -->
                    <!-- start contact info item -->
                    <div class="col text-center md-margin-eight-bottom sm-margin-30px-bottom wow animate__fadeInUp last-paragraph-no-margin" data-wow-delay="0.2s">
                        <div class="d-inline-block margin-20px-bottom">
                            <div class="bg-extra-dark-gray icon-round-medium"><i class="icon-chat icon-medium main-color"></i></div>
                        </div>
                        <div class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">Pozovite nas</div>
                        <p class="mx-auto">
                            <a href="tel:+38131594110">Tel: 031/594-110</a>; <a href="tel:+38131594189">594-189</a><br>
                            <a>Fax: 031/532-203</a>
                        </p>
                    </div>
                    <!-- end contact info item -->
                    <!-- start contact info item -->
                    <div class="col text-center xs-margin-30px-bottom wow animate__fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s">
                        <div class="d-inline-block margin-20px-bottom">
                            <div class="bg-extra-dark-gray icon-round-medium"><i class="icon-envelope icon-medium main-color"></i></div>
                        </div>
                        <div class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">PIB i MB</div>
                        <p class="mx-auto">
                            PIB: 104704014<br>
                            Matični broj: 20214473</p>
                    </div>
                    <!-- end contact info item -->
                    <!-- start contact info item -->
                    <div class="col text-center wow animate__fadeInUp last-paragraph-no-margin" data-wow-delay="0.6s">
                        <div class="d-inline-block margin-20px-bottom">
                            <div class="bg-extra-dark-gray icon-round-medium"><i class="fas fa-wallet icon-medium main-color"></i></div>
                        </div>
                        <div class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">Podaci</div>
                        <p class="mx-auto">
                            Tekući račun: 205-112758-53<br>
                            Šifra delatnosti: 8010
                        </p>
                    </div>
                    <!-- end contact info item -->
                </div>
            </div>
        </section>
        <!-- end contact info section -->
        <!-- start contact form -->
        <section id="contact" class="wow animate__fadeIn p-0 bg-extra-dark-gray">
            <div class="container-fluid">
                <div class="row row-cols-1 row-cols-lg-2">
                    <div class="col cover-background md-h-450px sm-h-350px wow animate__fadeIn" style="background: url(https://via.placeholder.com/1200x854)"></div>
                    <div class="col text-center padding-six-lr padding-five-half-tb lg-padding-four-lr md-padding-ten-half-tb md-padding-twelve-half-lr sm-padding-15px-lr wow animate__fadeIn">
                        <h5 class="margin-55px-bottom main-color alt-font font-weight-700 text-uppercase sm-margin-ten-bottom">Kontaktirajte nas!</h5>
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
                            <button id="project-contact-us-4-button" type="submit" class="btn btn-deep-pink btn-medium margin-15px-top submit">Pošalji</button>
                        </div>
                    </div>
                </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- end contact form -->
        <!-- start map section -->
        <section class="p-0 one-second-screen md-h-400px sm-h-300px wow animate__fadeIn">
            <iframe class="w-100 h-100" src="https://maps.google.com/?ie=UTF8&t=m&ll=43.843039,19.895253&spn=0.007738,0.017123&z=15&output=embed"></iframe>
        </section>
        <!-- end map section -->
    <?php
    /* Including footer */
    include 'footer.php';
    include 'scripts.php';
    ?>
    </body>
</html>