<!DOCTYPE html>
<html lang="en">

<?php

include('inc/header.php');

?>

<body class="home-st1 inner-page portfolio-page-st1 rtl">

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
        <!--  Start innerHeader  -->
        <header class="tc-innerHeader-st1">
            <div class="container">
                <div class="title col-lg-7">
                    <h1 class="fsz-50 text-capitalize"> We are a digital agency for visually compelling about stories artech. </h1>
                </div>
                <div class="info mt-30">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="shap">
                                <img src="assets/img/vec6.svg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="text fsz-16 cr-777 mt-50"> Nunc nec semper arcu, id malesuada est. Integer sodales, magna ac porta ultricies, tortor sapien malesuada dui, sit amet vestibulum magna dui et odio. Donec eu urna vitae orci lacinia malesuada. Duis convallis nunc mi, eu euismod velit cursus vitae. Cras egestas quis dui a dignissim. Nunc ultricies mi quis tristique dapibus. </div>
                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-work1-tab" data-bs-toggle="pill" data-bs-target="#pills-work1"> All </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-work2-tab" data-bs-toggle="pill" data-bs-target="#pills-work2"> Modern </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-work3-tab" data-bs-toggle="pill" data-bs-target="#pills-work1"> Branding </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-work4-tab" data-bs-toggle="pill" data-bs-target="#pills-work2"> UX/UI </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-work5-tab" data-bs-toggle="pill" data-bs-target="#pills-work1"> Web Design </button>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <a href="https://www.youtube.com/watch?v=qYgdnM3BC3g" data-lity="video" class="rotate-box mb-2 mt-5 mt-lg-0" data-speed="1" data-lag="0.4">
                                <div class="rotate-circle fsz-30 rotate-text d-inline-block text-uppercase">
                                    <svg class="textcircle" viewBox="0 0 500 500">
                                        <defs>
                                            <path id="textcircle" d="M250,400 a150,150 0 0,1 0,-300a150,150 0 0,1 0,300Z">
                                            </path>
                                        </defs>
                                        <text>
                                            <textPath xlink:href="#textcircle" textLength="900"> the creative proccess artechwatch </textPath>
                                        </text>
                                    </svg>
                                </div>
                                <span class="icon"> <i class="fas fa-play"></i> </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <span class="lg-txt sub-font"> Portf </span>
            <img src="assets/img/header_shaps.png" alt="" class="header-shaps">
        </header>
        <!--  End innerHeader  -->
        <!--  End header  -->


        <!--Contents-->
        <main>

            <!--  Start section  -->
            <section class="tc-projects-st17">
                <div class="container">
                    <div class="tab-content wow fadeIn slow" data-wow-delay="0.2s" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-work1">
                            <div class="projects">
                                <div class="row align-items-center">
                                    <div class="col-lg-5">
                                        <a href="../inner_pages/project.html" class="project-card">
                                            <div class="img th-500">
                                                <img src="assets/img/portfolio/2.jpg" alt="" class="img-cover">
                                                <div class="play-btn"><img src="assets/img/arrow_wh.svg" alt="" class="ico"></div>
                                            </div>
                                            <div class="info">
                                                <h6 class="project-title"> Branding Website </h6>
                                                <div class="date fsz-16 cr-777"> December 12, 2024 </div>
                                                <span class="num"> 01 </span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-5 offset-lg-1">
                                        <a href="../inner_pages/project.html" class="project-card">
                                            <div class="img th-800">
                                                <img src="assets/img/portfolio/1.jpg" alt="" class="img-cover">
                                                <div class="play-btn"><img src="assets/img/arrow_wh.svg" alt="" class="ico"></div>
                                            </div>
                                            <div class="info">
                                                <h6 class="project-title"> Branding Website </h6>
                                                <div class="date fsz-16 cr-777"> December 12, 2024 </div>
                                                <span class="num"> 02 </span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-12">
                                        <a href="../inner_pages/project.html" class="project-card">
                                            <div class="img th-600">
                                                <img src="assets/img/portfolio/3.jpg" alt="" class="img-cover">
                                                <div class="play-btn"><img src="assets/img/arrow_wh.svg" alt="" class="ico"></div>
                                            </div>
                                            <div class="info">
                                                <h6 class="project-title"> Branding Website </h6>
                                                <div class="date fsz-16 cr-777"> December 12, 2024 </div>
                                                <span class="num"> 03 </span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-5 offset-lg-1">
                                        <a href="../inner_pages/project.html" class="project-card">
                                            <div class="img th-800">
                                                <img src="assets/img/portfolio/4.jpg" alt="" class="img-cover">
                                                <div class="play-btn"><img src="assets/img/arrow_wh.svg" alt="" class="ico"></div>
                                            </div>
                                            <div class="info">
                                                <h6 class="project-title"> Branding Website </h6>
                                                <div class="date fsz-16 cr-777"> December 12, 2024 </div>
                                                <span class="num"> 04 </span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-5 offset-lg-1">
                                        <a href="../inner_pages/project.html" class="project-card">
                                            <div class="img th-500">
                                                <img src="assets/img/portfolio/5.jpg" alt="" class="img-cover">
                                                <div class="play-btn"><img src="assets/img/arrow_wh.svg" alt="" class="ico"></div>
                                            </div>
                                            <div class="info">
                                                <h6 class="project-title"> Branding Website </h6>
                                                <div class="date fsz-16 cr-777"> December 12, 2024 </div>
                                                <span class="num"> 05 </span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-9">
                                        <a href="../inner_pages/project.html" class="project-card">
                                            <div class="img th-600">
                                                <img src="assets/img/portfolio/6.jpg" alt="" class="img-cover">
                                                <div class="play-btn"><img src="assets/img/arrow_wh.svg" alt="" class="ico"></div>
                                            </div>
                                            <div class="info">
                                                <h6 class="project-title"> Branding Website </h6>
                                                <div class="date fsz-16 cr-777"> December 12, 2024 </div>
                                                <span class="num"> 06 </span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-work2">
                            <div class="projects">
                                <div class="row align-items-center">
                                    <div class="col-lg-5">
                                        <a href="../inner_pages/project.html" class="project-card">
                                            <div class="img th-500">
                                                <img src="assets/img/portfolio/2.jpg" alt="" class="img-cover">
                                                <div class="play-btn"><img src="assets/img/arrow_wh.svg" alt="" class="ico"></div>
                                            </div>
                                            <div class="info">
                                                <h6 class="project-title"> Branding Website </h6>
                                                <div class="date fsz-16 cr-777"> December 12, 2024 </div>
                                                <span class="num"> 01 </span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-5 offset-lg-1">
                                        <a href="../inner_pages/project.html" class="project-card">
                                            <div class="img th-800">
                                                <img src="assets/img/portfolio/1.jpg" alt="" class="img-cover">
                                                <div class="play-btn"><img src="assets/img/arrow_wh.svg" alt="" class="ico"></div>
                                            </div>
                                            <div class="info">
                                                <h6 class="project-title"> Branding Website </h6>
                                                <div class="date fsz-16 cr-777"> December 12, 2024 </div>
                                                <span class="num"> 02 </span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-12">
                                        <a href="../inner_pages/project.html" class="project-card">
                                            <div class="img th-600">
                                                <img src="assets/img/portfolio/3.jpg" alt="" class="img-cover">
                                                <div class="play-btn"><img src="assets/img/arrow_wh.svg" alt="" class="ico"></div>
                                            </div>
                                            <div class="info">
                                                <h6 class="project-title"> Branding Website </h6>
                                                <div class="date fsz-16 cr-777"> December 12, 2024 </div>
                                                <span class="num"> 03 </span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-5 offset-lg-1">
                                        <a href="../inner_pages/project.html" class="project-card">
                                            <div class="img th-800">
                                                <img src="assets/img/portfolio/4.jpg" alt="" class="img-cover">
                                                <div class="play-btn"><img src="assets/img/arrow_wh.svg" alt="" class="ico"></div>
                                            </div>
                                            <div class="info">
                                                <h6 class="project-title"> Branding Website </h6>
                                                <div class="date fsz-16 cr-777"> December 12, 2024 </div>
                                                <span class="num"> 04 </span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-5 offset-lg-1">
                                        <a href="../inner_pages/project.html" class="project-card">
                                            <div class="img th-500">
                                                <img src="assets/img/portfolio/5.jpg" alt="" class="img-cover">
                                                <div class="play-btn"><img src="assets/img/arrow_wh.svg" alt="" class="ico"></div>
                                            </div>
                                            <div class="info">
                                                <h6 class="project-title"> Branding Website </h6>
                                                <div class="date fsz-16 cr-777"> December 12, 2024 </div>
                                                <span class="num"> 05 </span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-9">
                                        <a href="../inner_pages/project.html" class="project-card">
                                            <div class="img th-600">
                                                <img src="assets/img/portfolio/6.jpg" alt="" class="img-cover">
                                                <div class="play-btn"><img src="assets/img/arrow_wh.svg" alt="" class="ico"></div>
                                            </div>
                                            <div class="info">
                                                <h6 class="project-title"> Branding Website </h6>
                                                <div class="date fsz-16 cr-777"> December 12, 2024 </div>
                                                <span class="num"> 06 </span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="#" class="cir-butn line-butn">
                            <div class="cont"> <span class="txt fsz-20 fw-bold"> Load More </span> <img src="assets/img/arrow.svg" alt="" class="arrow"> </div>
                        </a>
                    </div>
                </div>
            </section>
            <!--  End section  -->


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