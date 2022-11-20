<?php
get_header();
?>


<div class="d-flex justify-content-center" style="position: relative ;top: 60px; background-color: #e7222c;">
    <div class="text-white pt-3 text-uppercase fw-bold text-center">
        <img src="<?= get_stylesheet_directory_uri()  ?>/images/christmas-lista.png" alt="" class="d-flex " style="position:relative; width: 100%;">
        <div class="position-absolute  mt-2 top-50 start-50 translate-middle w-100 ">
            <span class="me-2 sell-text" ">BOGO 50% Off UGA Full Wrap Bottles |</span>
            <span class=" sell-text">20% off 6+ Custom Bottles |</span>
            <span class="ms-2  sell-text">Free Shipping on Orders $75+</span>
        </div>
    </div>
</div>
<!-- </div> -->
<?php if (is_shop()) : ?>

    <video autoplay muted loop id="video">
        <source src="<?= get_stylesheet_directory_uri()  ?>/images/snow.mp4" type="video/mp4">
    </video>
<?php endif; ?>

<!-- <div class="container nowrap bg-white shadow"> -->
<div class="container nowrap ">
    <div style="height: 60px;"></div>
    <!-- <div class="row">
            <div class="col-auto nowrap"> -->
    <?php woocommerce_content(); ?>

    <!-- </div>
        </div> -->
</div>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="<?= get_stylesheet_directory_uri() ?>/js/snow.js"></script>
<?php get_footer() ?>