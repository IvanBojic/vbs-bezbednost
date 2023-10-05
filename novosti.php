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
        <section class="wow animate__fadeIn parallax" data-parallax-background-ratio="0.5" style="background-image:url('images/img/news_baner.jpg');">
            <div class="opacity-medium bg-extra-dark-gray"></div>
            <div class="container position-relative">
                <div class="row align-items-center">
                    <div class="col-12 d-flex flex-column justify-content-center text-center extra-small-screen page-title-large">
                        <!-- start page title -->
                        <h1 class="text-white-2 alt-font font-weight-600 letter-spacing-minus-1 margin-10px-bottom">NOVOSTI</h1>
                        <span class="text-white-2 opacity6 alt-font"></span>
                        <!-- end page title --> 
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title section --> 
        <!-- start post content section --> 
        <section class="wow animate__fadeIn">
            <div class="container"> 
                <div class="row">
                    <div class="col-12 blog-content">
                        <ul class="blog-grid blog-wrapper grid grid-loading grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col hover-option4 blog-post-style3 gutter-extra-large">
                            <li class="grid-sizer"></li>
                            <!-- start post item -->
                            <li class="grid-item last-paragraph-no-margin text-center text-sm-start wow animate__fadeInUp">
                                <div class="blog-post bg-light-gray">
                                    <div class="blog-post-images overflow-hidden position-relative">
                                        <a href="news/vest-1.php" target="_blank">
                                            <img src="https://via.placeholder.com/900x650" alt="">
                                            <div class="blog-hover-icon"><span class="text-extra-large font-weight-300">+</span></div>
                                        </a>
                                    </div>
                                    <div class="post-details padding-40px-all md-padding-20px-all">
                                        <a href="news/vest-1.php" target="_blank" class="alt-font post-title text-medium text-extra-dark-gray w-100 d-block lg-w-100 margin-15px-bottom">I find modernist design boring, but it so much faster!</a>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy...</p>
                                        <div class="separator-line-horrizontal-full bg-medium-gray margin-20px-tb"></div>
                                    </div>
                                </div>
                            </li>
                            <!-- end post item -->
                            <!-- start post item -->
                            <li class="grid-item last-paragraph-no-margin text-center text-sm-start wow animate__fadeInUp" data-wow-delay="0.2s">
                                <div class="blog-post bg-light-gray">
                                    <div class="blog-post-images overflow-hidden position-relative">
                                        <a href="news/vest-1.php">
                                            <img src="https://via.placeholder.com/900x650" alt="">
                                            <div class="blog-hover-icon"><span class="text-extra-large font-weight-300">+</span></div>
                                        </a>
                                    </div>
                                    <div class="post-details padding-40px-all md-padding-20px-all">
                                        <a href="news/vest-1.php" class="alt-font post-title text-medium text-extra-dark-gray w-100 d-block lg-w-100 margin-15px-bottom">Being a famous designer is like being a famous dentist.</a>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy...</p>
                                        <div class="separator-line-horrizontal-full bg-medium-gray margin-20px-tb"></div>
                                    </div>
                                </div>
                            </li>
                            <!-- end post item -->
                            <!-- start post item -->
                            <li class="grid-item last-paragraph-no-margin text-center text-sm-start wow animate__fadeInUp" data-wow-delay="0.4s">
                                <div class="blog-post bg-light-gray">
                                    <div class="blog-post-images overflow-hidden position-relative">
                                        <a href="">
                                            <img src="https://via.placeholder.com/900x650" alt="">
                                            <div class="blog-hover-icon"><span class="text-extra-large font-weight-300">+</span></div>
                                        </a>
                                    </div>
                                    <div class="post-details padding-40px-all md-padding-20px-all">
                                        <a href="" class="alt-font post-title text-medium text-extra-dark-gray w-100 d-block lg-w-100 margin-15px-bottom">Designers are meant to be loved, not to be understood.</a>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy....</p>
                                        <div class="separator-line-horrizontal-full bg-medium-gray margin-20px-tb"></div>
                                    </div>
                                </div>
                            </li>
                            <!-- end post item -->
                        </ul>
                    </div>
                </div>
                <!-- start pagination -->
                <div class=" text-center margin-100px-top md-margin-50px-top wow animate__fadeInUp">
                    <div class="pagination text-small text-uppercase text-extra-dark-gray">
                        <ul class="mx-auto">
                            <li><a href="#"><i class="fas fa-long-arrow-alt-left margin-5px-right d-none d-md-inline-block"></i> Prethodna</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">Sledeća <i class="fas fa-long-arrow-alt-right margin-5px-left d-none d-md-inline-block"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- end pagination -->
            </div>
        </section>
        <!-- end blog content section -->
        <!-- start footer -->
        <?php
        /* Including footer */
        include 'footer.php';
        include 'scripts.php';
        ?>
    </body>
</html>