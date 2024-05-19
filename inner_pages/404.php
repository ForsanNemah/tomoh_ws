<!DOCTYPE html>
<html lang="en">


<?php

include('inc/header.php');

?>

<body class="home-st1 inner-page error-page-st1 rtl">

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


        <!--Contents-->
        <main>


            <!--  Start section  -->
            <section class="tc-404-st22">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="info">
                            <div class="top-info d-flex justify-content-between">
                                <img src="assets/img/vec3.svg" alt="" class="icon icon-50">
                                <div class="inf fsz-16 text-end">
                                    <p> Oops! <br> Page Not Found </p>
                                </div>
                            </div>
                            <div class="img my-5">
                                <img src="assets/img/404.png" alt="">
                            </div>
                            <div class="btm-info">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <a href="https://www.youtube.com/watch?v=qYgdnM3BC3g" data-lity="video" class="rotate-box mb-2 mt-5 mt-lg-0" data-speed="1" data-lag="0.4">
                                            <div class="rotate-circle fsz-30 rotate-text d-inline-block text-uppercase">
                                                <svg class="textcircle" viewBox="0 0 500 500">
                                                    <defs>
                                                        <path id="textcircle" d="M250,400 a150,150 0 0,1 0,-300a150,150 0 0,1 0,300Z">
                                                        </path>
                                                    </defs>
                                                    <text>
                                                        <textPath xlink:href="#textcircle" textLength="900"> the
                                                            creative proccess artechwatch </textPath>
                                                    </text>
                                                </svg>
                                            </div>
                                            <span class="icon"> <i class="fas fa-play"></i> </span>
                                        </a>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="inf text-lg-end mt-5 mt-lg-0">
                                            <a href="../home1_creativeAgency/index.html" class="fsz-16 fw-bold"> <i class="fal fa-arrow-up-right me-1"></i> Go To Home Page </a>
                                            <p class="fsz-16 cr-777 mt-3"> The page you are looking for was never
                                                existed. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="img mt-5">
                            <img src="assets/img/404_2.png" alt="" class="img-cover">
                        </div>
                    </div>
                </div>
            </section>
            <!--  End section  -->


        </main>
        <!--End-Contents-->

        <!--  Start footer  -->
        <footer class="tc-footer-st22">
            <div class="foot">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <p class="fsz-16"> Copyright: © 2024 by <a href="#"> ThemesCamp </a> All Rights Reserved.
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <div class="foot-links text-lg-end mt-5 mt-lg-0">
                                <a href="#"> FAQ </a>
                                <a href="#"> Careers </a>
                                <a href="#"> Contact Us </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--  End footer  -->


    </div>


    <!--  Start to top button  -->
    <!-- <a href="#" class="to_top" id="to_top">
        <i class="fal fa-angle-up"></i>
    </a> -->
    <!--  End to top button  -->

    <?php

    include('inc/footer.php');

    ?>

</body>

</html>