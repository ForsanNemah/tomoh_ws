<!DOCTYPE html>
<html lang="en">

<?php

include('inc/header.php');

?>

<body class="home-st1 inner-page pricing-page-st1 rtl">

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


        <!--  Start innerHeader  -->
        <header class="tc-innerHeader-st1">
            <div class="container">
                <div class="title col-lg-7">
                    <h1 class="fsz-50 text-capitalize"> We are a digital agency for visually compelling Pricing Plan artech. </h1>
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
            <span class="lg-txt sub-font"> Pricin </span>
            <img src="assets/img/header_shaps.png" alt="" class="header-shaps">
        </header>
        <!--  End innerHeader  -->


        <!--Contents-->
        <main>

            <!--  Start pricing  -->
            <section class="tc-pricing-st21">
                <div class="container">
                    <div class="cards wow fadeIn slow" data-wow-delay="0.2s">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="pricing-card">
                                    <h6 class="fsz-24 mb-10"> Regular Plan </h6>
                                    <p class="fsz-16 cr-777 mb-20"> Monthly Package </p>
                                    <h5 class="price fsz-30"> $0.96 <small class="fsz-14 text-decoration-line-through"> / $1.96 </small> </h5>
                                    <ul>
                                        <li> <span class="icon"> <i class="fal fa-check"></i> </span> <span class="txt"> 12 Hours Access </span> </li>
                                        <li> <span class="icon"> <i class="fal fa-check"></i> </span> <span class="txt"> Meeting Room $2/Per hour </span> </li>
                                        <li> <span class="icon"> <i class="fal fa-check"></i> </span> <span class="txt"> Marketing Consultations </span> </li>
                                    </ul>
                                    <a href="#" class="butn border border-dark1 fsz-16 py-3 mt-40 hover-bg-green1"> <span> Get Started <img class="ms-2 icon-6 w-auto" src="assets/img/arrow.svg" alt=""> </span> </a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="pricing-card">
                                    <h6 class="fsz-24 mb-10"> Regular Plan </h6>
                                    <p class="fsz-16 cr-777 mb-20"> Monthly Package </p>
                                    <h5 class="price fsz-30"> $0.96 <small class="fsz-14 text-decoration-line-through"> / $1.96 </small> </h5>
                                    <ul>
                                        <li> <span class="icon"> <i class="fal fa-check"></i> </span> <span class="txt"> 12 Hours Access </span> </li>
                                        <li> <span class="icon"> <i class="fal fa-check"></i> </span> <span class="txt"> Meeting Room $2/Per hour </span> </li>
                                        <li> <span class="icon"> <i class="fal fa-check"></i> </span> <span class="txt"> Marketing Consultations </span> </li>
                                    </ul>
                                    <a href="#" class="butn border border-dark1 bg-dark1 fsz-16 text-white py-3 mt-40"> <span> Get Started <img class="ms-2 icon-6 w-auto" src="assets/img/arrow_wh.svg" alt=""> </span> </a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="pricing-card">
                                    <h6 class="fsz-24 mb-10"> Regular Plan </h6>
                                    <p class="fsz-16 cr-777 mb-20"> Monthly Package </p>
                                    <h5 class="price fsz-30"> $0.96 <small class="fsz-14 text-decoration-line-through"> / $1.96 </small> </h5>
                                    <ul>
                                        <li> <span class="icon"> <i class="fal fa-check"></i> </span> <span class="txt"> 12 Hours Access </span> </li>
                                        <li> <span class="icon"> <i class="fal fa-check"></i> </span> <span class="txt"> Meeting Room $2/Per hour </span> </li>
                                        <li> <span class="icon"> <i class="fal fa-check"></i> </span> <span class="txt"> Marketing Consultations </span> </li>
                                    </ul>
                                    <a href="#" class="butn border border-dark1 fsz-16 py-3 mt-40 hover-bg-green1"> <span> Get Started <img class="ms-2 icon-6 w-auto" src="assets/img/arrow.svg" alt=""> </span> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--  End pricing  -->


            <!--  Start about  -->
            <section class="tc-about-st21 wow fadeIn slow" data-wow-delay="0.2s">
                <div class="container">
                    <div class="title mb-50">
                        <div class="row">
                            <div class="col-lg-7">
                                <h6 class="fsz-16 fw-200 mb-20"> <img src="assets/img/icons/tit_ico.svg" alt="" class="icon"> <span class="txt mx-2"> About Our History </span> <img src="assets/img/icons/tit_ico2.svg" alt="" class="icon"> </h6>
                                <h2 class="fsz-50"> We proudly offer our <br> services as branding agency <br> to enhance growth your <br> business </h2>
                            </div>
                            <div class="col-lg-5">
                                <div class="btns text-lg-end">
                                    <a href="#" class="butn-1 rounded-pill border-2 border border-black hover-bg-black"> <span> Content Marketing </span> </a>
                                    <a href="#" class="butn-1 rounded-pill border-2 border border-black hover-bg-black ms-lg-4"> <span> Email Marketing </span> </a>
                                </div>
                            </div>
                        </div>
                        <div class="float-txt d-none d-lg-block"> about </div>
                    </div>
                    <div class="content">
                        <div class="row">
                            <div class="col-lg-3 d-none d-lg-block">
                                <div class="sm-img">
                                    <img src="assets/img/ab1.png" alt="">
                                </div>
                                <a href="#" class="rotate-box" data-speed="1" data-lag="0.4">
                                    <div class="rotate-circle rotate-text">
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
                                    <img src="assets/img/fav.png" alt="" class="icon">
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <div class="text-content">
                                    <div class="text fsz-16 cr-777 mb-30"> Mauris tincidunt purus nulla, eget lacinia dui lacinia et. Duis mattis elit at mollis facilisis. In efficitur nisl quam, in consectetur ex egestas vel. Sed cursus enim vel finibus lobortis. Suspendisse scelerisque turpis ac ligula. </div>
                                    <div class="text fsz-16 cr-777 mb-30"> Mauris auctor nulla ut nisl rutrum fermentum. Suspendse consectetur turpis nec ligula iaculis dapibus. Pellentesue iaculis purus at nibh gravida condimentum. Suspendisse faucibus eros congue turpis vulputate interdum. Donec pellentesque lacus et erat posuere pharetra. Tfaucibus, odio nec condimentum egestas, sem ipsum sagittis ligula, eget cursus lorem mauris quis nisi. </div>
                                    <a href="#" class="butn bg-dark1 fsz-16 text-white py-3 mt-20"> <span> Read More <img class="ms-2 icon-6 w-auto" src="assets/img/arrow_wh.svg" alt=""> </span> </a>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="main-img mt-5 mt-lg-0 ms-lg-auto">
                                    <img src="assets/img/about.png" alt="" class="img-cover">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--  End about  -->


            <!--  Start capabilities  -->
            <section class="tc-capabilities-st5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="capabilities-title">
                                <h6 class="fsz-24 mb-15"> Our Capabilities </h6>
                                <div class="text fsz-16 cr-777"> Nullam elit ligula, faucibus ut seer lobortis, consectetur sed ex. Integer nec erat sapien aliquam. Donec justo erat, fermentum. </div>
                                <div class="number-card">
                                    <div class="cont">
                                        <p class="fsz-16 cr-222 mb-15 fw-bold"> Total Awards </p>
                                        <div class="num"> 13+ </div>
                                    </div>
                                    <svg width="100%" height="100%" viewBox="0 0 166 172" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M136.418 0H30C13.4315 0 0 13.4315 0 30V142C0 158.569 13.4315 172 30 172H136C152.569 172 166 158.569 166 142V33.0471C166 27.5243 161.168 23.3823 156.464 20.4882C152.198 17.863 149.502 13.5683 147.905 9.28702C146.041 4.28821 141.753 0 136.418 0Z" fill="#CAF31F" />
                                        <path d="M125 131H132V138H125V131Z" fill="#151515" />
                                        <path d="M132 138H139V145H132V138Z" fill="#151515" />
                                        <path d="M139 131H146V138H139V131Z" fill="#151515" />
                                        <path d="M139 145H146V152H139V145Z" fill="#151515" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="capabilities-slider wow fadeIn slow" data-wow-delay="0.2s">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="capabilities-card">
                                            <div class="icon">
                                                <img src="assets/img/icons/c1.svg" alt="">
                                            </div>
                                            <h6> <a href="#" class="title fsz-24 mb-15 hover-underline"> Innovative <br> Environment </a> </h6>
                                            <div class="text fsz-16"> Proin consequat, velit sit amet laoreet phar lorem ex mattis purusid tincidunt metus . </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="capabilities-card">
                                            <div class="icon">
                                                <img src="assets/img/icons/c2.svg" alt="">
                                            </div>
                                            <h6> <a href="#" class="title fsz-24 mb-15 hover-underline"> Collaborative <br> Culture </a> </h6>
                                            <div class="text fsz-16"> Proin consequat, velit sit amet laoreet phar lorem ex mattis purusid tincidunt metus . </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="capabilities-card">
                                            <div class="icon">
                                                <img src="assets/img/icons/c3.svg" alt="">
                                            </div>
                                            <h6> <a href="#" class="title fsz-24 mb-15 hover-underline"> Continuous <br> Growth </a> </h6>
                                            <div class="text fsz-16"> Proin consequat, velit sit amet laoreet phar lorem ex mattis purusid tincidunt metus . </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--  End capabilities  -->


            <!--  Start video  -->
            <section class="tc-video-st5">
                <div class="video-card">
                    <img src="assets/img/vid_bg.jpg" alt="" class="img-cover">
                    <a href="https://www.youtube.com/watch?v=qYgdnM3BC3g" class="play-btn" data-lity="video"> play </a>
                </div>
            </section>
            <!--  End video  -->


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