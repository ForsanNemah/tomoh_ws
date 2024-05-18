<!DOCTYPE html>
<html lang="en">


<?php

include('includes/header.php');

?>

<body class="home-st6" dir="rtl">


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
    include('content/side_menu.php');
    ?>


    <!--  End side_menu  -->


    <div id="scrollsmoother-container">

        <!--  Start navbar  -->
        <?php
        include('content/navbar.php');
        ?>
        <!--  End navbar  -->

        <!--  Start header  -->
        <?php
        include('content/header.php');
        ?>
        <!--  End header  -->

        <!--Contents-->
        <main>


            <!--  Start about  -->

            <?php
            include('content/about.php');


            // <!--  End about  -->


            // <!--  Start portfolio  -->

            include('content/portfolio.php');


            // <!--  End portfolio  -->


            // <!--  Start clients  -->


            include('content/clients.php');




            // <!--  End clients  -->


            // <!--  Start faq  -->


            include('content/faq.php');


            // <!--  End faq  -->


            // <!--  Start testimonials  -->


            include('content/testimonials.php');

            // <!--  End testimonials  -->


            // <!--  Start subscribe  -->

            include('content/subscribe.php');


            // <!--  End subscribe  -->


            // <!--  Start blog  -->


            include('content/blog.php');
            ?>


            <!--  End blog  -->


        </main>
        <!--End-Contents-->


        <!--  Start footer  -->

        <?php
        include('content/footer.php');
        ?>

        <!--  End footer  -->


    </div>



    <!-- استدعاء التذييل "المكاتب" -->
    <?php

    include('includes/footer.php');

    ?>


</body>

</html>