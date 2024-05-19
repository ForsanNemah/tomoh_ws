<!DOCTYPE html>
<html lang="en">

<?php

include('inc/header.php');

?>

<body class="home-st1 inner-page faq-page-st1 rtl">

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
                    <h1 class="fsz-50 text-capitalize"> We are a digital agency for visually frequency and questions artech. </h1>
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
            <span class="lg-txt sub-font"> Faq’s </span>
            <img src="assets/img/header_shaps.png" alt="" class="header-shaps">
        </header>
        <!--  End innerHeader  -->


        <!--Contents-->
        <main>


            <!--  Start faq  -->
            <section class="tc-faq-st5">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-lg-6">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            What can we do for you with Figma?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="text fsz-16 cr-777"> Morbi tempor pharetra dui vitae condimentum. Morbi mattis cursus dignissim. Curabitur mauris massa, efficitur vitae nisl nec, fringilla commodo nisl. Quisque eu tellus tincidunt, vehicula arcu in, feugiat velit. </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Do you create one single full home page?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="text fsz-16 cr-777"> Morbi tempor pharetra dui vitae condimentum. Morbi mattis cursus dignissim. Curabitur mauris massa, efficitur vitae nisl nec, fringilla commodo nisl. Quisque eu tellus tincidunt, vehicula arcu in, feugiat velit. </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            What is the standard size of business cards?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="text fsz-16 cr-777"> Morbi tempor pharetra dui vitae condimentum. Morbi mattis cursus dignissim. Curabitur mauris massa, efficitur vitae nisl nec, fringilla commodo nisl. Quisque eu tellus tincidunt, vehicula arcu in, feugiat velit. </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            What things are required for freelancing?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="text fsz-16 cr-777"> Morbi tempor pharetra dui vitae condimentum. Morbi mattis cursus dignissim. Curabitur mauris massa, efficitur vitae nisl nec, fringilla commodo nisl. Quisque eu tellus tincidunt, vehicula arcu in, feugiat velit. </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            Are they everything to everyone?
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="text fsz-16 cr-777"> Morbi tempor pharetra dui vitae condimentum. Morbi mattis cursus dignissim. Curabitur mauris massa, efficitur vitae nisl nec, fringilla commodo nisl. Quisque eu tellus tincidunt, vehicula arcu in, feugiat velit. </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 wow fadeIn slow" data-wow-delay="0.2s">
                            <div class="img th-550 overflow-hidden mb-50">
                                <img src="assets/img/faq.jpg" alt="" class="img-cover">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--  End faq  -->


            <!--  Start subscribe  -->
            <section class="tc-subscribe-st4">
                <div class="container">
                    <div class="subscribe-card wow fadeIn slow" data-wow-delay="0.2s">
                        <div class="row">
                            <div class="col-lg-7">
                                <h3> <a href="#"> +555 4422 111 00 </a> </h3>
                                <h3> <a href="#"> info.artech@gmail.com </a> </h3>
                            </div>
                            <div class="col-lg-5">
                                <form class="form mt-5 mt-lg-0">
                                    <h3> Subscribe Now. </h3>
                                    <div class="form-group">
                                        <label for="" class="fsz-18 fw-600 mb-10"> Your Mail </label>
                                        <input type="text" class="form-control" placeholder="infoflex@info.com">
                                        <button> <img src="assets/img/arrow.svg" alt=""> </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <img src="assets/img/subs_shapes1.png" alt="" class="shapes">
                    </div>
                </div>
            </section>
            <!--  End subscribe  -->


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