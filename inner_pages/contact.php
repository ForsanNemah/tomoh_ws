<!DOCTYPE html>
<html lang="en">

<?php

include('inc/header.php');

?>

<body class="home-st1 inner-page contact-page-st1 rtl">

    <!--  start cursor  -->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>
    <!--  end cursor  -->

    <!-- ====== Start Loading ====== -->

    <div class="loader-wrap">
        <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
            <path id="svg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
        </svg>

        <div class="loader-wrap-heading">
            <div class="load-text">
                <span>L</span>
                <span>o</span>
                <span>a</span>
                <span>d</span>
                <span>i</span>
                <span>n</span>
                <span>g</span>
            </div>
        </div>
    </div>


    <!--  start side_menu  -->
    <?php

    include('inc/side_menu.php');

    ?>
    <!--  End side_menu  -->


    <div id="scrollsmoother-container">


        <!--  Start navbar  -->
        <?php

        include('inc/navbar.php');

        ?>
        <!--  End navbar  -->


        <!--  Start header  -->
        <header class="tc-header-st13">
            <div class="container">
                <div class="title">
                    <div class="row">
                        <div class="col-lg-7">
                            <h1 class=""> Contact Artech </h1>
                        </div>
                        <div class="col-lg-5">
                            <div class="info mt-150">
                                <div class="text fsz-16 cr-777"> Nunc nec semper arcu, id malesuada est. Integer sodales, magna ac porta ultricies, tortor sapien malesuada dui, sit amet vestibulu magna dui et odio. Donec eu urna vitae orci lacinia malesuada. Duis convallis nunc mi, eu euismod velit cursus vitae. Cras egestas quis dui a dignissim. Nunc ultricies mi quis tristique dapibus. </div>
                                <ul class="check-list mb-30">
                                    <li> <a href="#"> <i class="fal fa-check me-2"></i> +55 (9900) 666 22 </a> </li>
                                    <li> <a href="#"> <i class="fal fa-check me-2"></i> info.mirpur@gmail.com </a> </li>
                                    <li> <a href="#"> <i class="fal fa-check me-2"></i> Mirpur 12, Block C, Dhaka, BD. </a> </li>
                                </ul>
                                <div class="social-links">
                                    <a href="#"> <i class="fab fa-facebook-f"></i> </a>
                                    <a href="#"> <i class="fab fa-x-twitter"></i> </a>
                                    <a href="#"> <i class="fab fa-linkedin-in"></i> </a>
                                    <a href="#"> <i class="fab fa-instagram"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <span class="lg-txt sub-font"> conta </span>
            <img src="assets/img/header_shaps.png" alt="" class="header-shaps">
        </header>
        <!--  End header  -->


        <!--Contents-->
        <main>



            <!--  Start services  -->
            <section class="tc-map-st13">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1093852.4451614053!2d-103.49375112849646!3d23.096391770431225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x49e275ede5cc45db%3A0x4c5c0bf5eeb0c8e0!2senvato!5e0!3m2!1sen!2seg!4v1710501535952!5m2!1sen!2seg" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <div class="contact-form col-lg-7">
                        <h5 class="fsz-30"> Contact Us </h5>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group mt-4">
                                    <input type="text" class="form-control" placeholder="Your first name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mt-4">
                                    <input type="text" class="form-control" placeholder="Your last name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mt-4">
                                    <input type="text" class="form-control" placeholder="Your email address*">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mt-4">
                                    <input type="text" class="form-control" placeholder="Your phone number*">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group mt-4">
                                    <textarea rows="5" class="form-control" placeholder="Your message"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <a href="#" class="butn bg-dark1 fsz-16 text-white py-3 mt-50 hover-bg-orange1"> <span> Submit Now <img class="ms-2 icon-6 w-auto" src="assets/img/arrow_wh.svg" alt=""> </span> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--  End services  -->



        </main>
        <!--End-Contents-->

        <!--  Start footer  -->
        <?php

        include('inc/footer_pages.php');

        ?>
        <!--  End footer  -->


    </div>


    <!--  Start to top button  -->
    <!-- <a href="#" class="to_top" id="to_top">
        <i class="fal fa-angle-up"></i>
    </a> -->
    <!--  End to top button  -->

    <!--  request  -->
    <?php

    include('inc/footer.php');

    ?>

</body>

</html>