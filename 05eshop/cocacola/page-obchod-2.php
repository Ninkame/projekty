<?php
get_header();
?>


<div class="d-flex justify-content-center" style="position: relative ;top: 60px; background-color: #e7222c;">
    <div class="text-white pt-3 text-uppercase fw-bold text-center">
        <img src="<?= get_stylesheet_directory_uri()  ?>/images/christmas-lista.png" alt="" class="d-flex" style="position:relative;">
        <div class="position-absolute  mt-2 top-50 start-50 translate-middle w-100">
            <span class="me-2 ">BOGO 50% Off UGA Full Wrap Bottles |</span>
            <span class="">20% off 6+ Custom Bottles |</span>
            <span class="ms-2">Free Shipping on Orders $75+</span>
        </div>
    </div>
</div>
<!-- </div> -->
<!-- <video autoplay muted loop id="video">
        <source src="<?= get_stylesheet_directory_uri()  ?>/images/snow.mp4" type="video/mp4">
    </video> -->
<div class="container">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post() ?>
            <div class="mt-5 position-relative" style="top: 40px">
                <?php

                the_content();
                ?>

            </div>





        <?php endwhile ?>
    <?php else : ?>

    <?php endif ?>
</div>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="<?= get_stylesheet_directory_uri() ?>/js/snow.js"></script>
<?php get_footer() ?>