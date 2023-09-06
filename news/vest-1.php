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
        <!-- start page title section -->
        <section class="wow animate__fadeIn bg-light-gray padding-35px-tb page-title-small top-space">
            <div class="container position-relative">
                <div class="row align-items-center">
                    <div class="col-xl-8 col-md-6 d-flex flex-column justify-content-center text-center text-md-start">
                        <!-- start page title -->
                        <h1 class="alt-font text-extra-dark-gray font-weight-600 mb-0 text-uppercase">This is a standard post with a preview image</h1>
                        <!-- end page title -->
                    </div>
                    <div class="col-xl-4 col-md-6 alt-font breadcrumb justify-content-center justify-content-md-end text-small sm-margin-10px-top">
                        <!-- breadcrumb -->
                        <ul class="text-center text-md-start text-uppercase">
                            <li><a href="#" class="text-dark-gray">25 April 2017</a></li>
                            <li><span class="text-dark-gray">by <a href="blog-masonry.html">Jay Benjamin</a></span></li>
                            <li class="text-dark-gray"><a href="blog-masonry.html">Design</a></li>
                        </ul>
                        <!-- end breadcrumb -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title section -->
        <!-- start post content section --> 
        <section>
            <div class="container">
                <div class="row justify-content-center">
                    <main class="col-12 col-xl-9 col-lg-8 right-sidebar md-margin-60px-bottom sm-margin-40px-bottom">
                        <div class="col-12 blog-details-text last-paragraph-no-margin">
                            <img src="https://via.placeholder.com/900x600" alt="" class="w-100 margin-45px-bottom">
                            <!-- dropcaps -->
                            <p><span class="first-letter first-letter-block bg-extra-dark-gray text-white-2">M</span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries. Simply dummy text of the printing and typesetting industry. It has survived not only five centuries. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <!-- end dropcaps -->
                            <figure class="wp-caption alignleft"><img alt="" src="https://via.placeholder.com/350x255"><figcaption class="wp-caption-text">There is no sincerer love than the love of food.</figcaption></figure>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the lorem ipsum generators on the internet tend to repeat predefined chunks as necessary, making this the first true generator on the internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour.</p>
                            <span class="text-extra-dark-gray font-weight-500 margin-15px-bottom d-block text-medium">You can never quit. Winners never quit, and quitters never win</span>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the lorem ipsum generators on the internet tend to repeat predefined chunks as necessary, making this the first true generator on the internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour.</p>
                        </div>
                        <div class="col-12 margin-seven-bottom margin-eight-top">
                            <div class="divider-full bg-medium-light-gray"></div>
                        </div>
                    </main>
                </div>
            </div>
        </section>
        <!-- end blog content section -->  
        <!-- start footer -->
        <?php
            /* Including footer */
            include './../footer.php';
            include './../scripts.php';
        ?>
    </body>
</html>