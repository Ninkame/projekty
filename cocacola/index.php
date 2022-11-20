
    <?php
get_header();
?>


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
    <?php get_footer() ?>