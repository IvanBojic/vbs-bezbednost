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
                            Tehnička zaštita -<br>
                            Kontrola pristupa i ERV
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
                                <strong>Kontrola pristupa</strong> je sistem za kontrolu ulaska i izlaska iz nekog objekta ili prostora. Koristi
                                se u objektima različite namene, radi dozvoljavanja ili sprečavanja pristupa ovlašćenim,
                                odnosno, neovlašćenim licima. U te svrhe se koristi autorizovana beskontaktna PVC kartica, ili
                                RFID TAG (privezak), RFID narukvica i sl.
                            </p>
                            <p class="w-95 md-w-100 sm-w-95 sm-margin-15px-bottom">
                                U velikom broju slučajeva sa kontrolom pristupa se kombinuju sistemi za evidenciju radnog
                                vremena kao osnov za obračun zarada i praćenje radnih aktivnosti zaposlenih.
                            </p>
                            <p class="w-95 md-w-100 sm-w-95 sm-margin-15px-bottom">
                                <strong>Sistemi evidencije radnog vremena</strong> zaposlenima i poslodavcima obezbeđuju precizne
                                podatke o radnom angažovanju zaposlenih, povećavaju efikasnost poslovanja i unapređuju
                                sigurnost objekata. Menadžmentu su preko različitih tipova izveštaja obezbeđeni precizni
                                podaci o angažovanju radnika na poslu. Pored radnog vremena evidentiraju se i kašnjenja na
                                posao, prekovremeni rad, rad na terenu, korišćenje pauze za topli obrok i mnoge druge
                                aktivnosti zaposlenih.
                            </p>
                            <p class="w-95 md-w-100 sm-w-95 sm-margin-15px-bottom">
                                Hardverska komponenta ovih sistema koja se sastoji od beskontaktnih čitača i kartica,
                                omogućava brzo i jednostavno i jednostavno beleženje dolaska i odlaska zaposlenih. Pomoću
                                softverske komponente koja je izrađena u vidu jednostavne aplikacije, obezbeđeno je tačno
                                obračunavanje radnog angažovanja zaposlenih.
                            </p>
                            <div class="separator-line-horrizontal-medium-light margin-10px-top margin-30px-bottom md-no-margin-top bg-deep-pink "></div>
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