<?php include 'inc/header.php'; ?>
<!-- Inner Banner Section -->
<section class="inner-banner">
    <div class="image-layer" style="background-image: url(images/background/banner-image-5.jpg);"></div>
    <div class="auto-container">
        <div class="inner">
            <div class="subtitle"><span>Our Gallery</span></div>
            <div class="pattern-image"><img src="images/icons/separator.svg" alt="" title=""></div>
            <h1><span>Our Gallery</span></h1>
        </div>
    </div>
</section>
<!--End Banner Section -->

<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" /> -->

<!--Story Section-->
<section class="story-section">

    <div class="auto-container">
        <div class="row clearfix">


            <?php
            for ($i = 16; $i >= 1; $i--) {
                echo '<div class="col-md-3 mb-3">
            <a data-fancybox="gallery" href="img/gallery/' . $i . '.jpg">
                <img src="img/gallery/' . $i . '.jpg" class="gallery w-100">
            </a>
          </div>';
            }
            ?>
        </div>
    </div>
</section>


<?php include 'inc/footer.php'; ?>