<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


    <link rel="stylesheet" href="<?= get_stylesheet_uri() ?>">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/circling.css">
    <title><?php bloginfo() ?></title>
</head>

<body <?= body_class() ?>>
    <nav class="navbar navbar-expand-lg fixed-top bg-white shadow">
        <div class="container-fluid position-relative ">
            <a class="navbar-brand" href="<?= get_home_url() ?>">
                <?php
                // if (function_exists('the_custom_logo')) {
                //     the_custom_logo();
                // }
                ?>
                <img src="<?php bloginfo('template_url'); ?>/images/coca-logo-2.png" class="logo" alt="" style="">
            </a>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                       <!-- <a href="#" class="nav-link active">OUR PRODUCTS</a></li> -->
                    <?php
                    wp_nav_menu(array(
                        'menu' => 'primary',
                        'container' => '',
                        'items_wrap' => '%3$s'
                    ));
                    ?>
                </ul>
                <ul class="navbar-nav mb-2 mb-lg-0 secondary-nav">
                    <li>
                        <a href="login/" class="nav-link active">
                            <i class="fa-solid fa-user-large fa-xl"></i>
                            
                        </a>
                    </li>
                    <li>
                        <a href="kosik/" class="nav-link active">
                            <i class="fa-solid fa-cart-plus fa-xl"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="lighting">
                <span class="red"></span>
                <span class="red"></span>
                <span class="red"></span>
                <span class="red"></span>
                <span class="red"></span>
                <span class="red"></span>
                <span class="red"></span>
                <span class="red"></span>
                <span class="red"></span>
                <span class="red"></span>
                <span class="red"></span>
                <span class="red"></span>
                <span class="red"></span>
                <span class="red"></span>
                <span class="green"></span>
                <span class="green"></span>
                <span class="green"></span>
                <span class="green"></span>
                <span class="green"></span>
                <span class="green"></span>
                <span class="green"></span>
                <span class="green"></span>
                <span class="green"></span>
                <span class="green"></span>
                <span class="green"></span>
                <span class="green"></span>
                <span class="green"></span>
                <span class="green"></span>
                <span class="green"></span>
                <span class="green"></span>
                <span class="yellow"></span>
                <span class="yellow"></span>
                <span class="yellow hide"></span>
                <span class="yellow"></span>
                <span class="yellow"></span>
                <span class="yellow"></span>
                <span class="yellow"></span>
                <span class="yellow"></span>
                <span class="yellow"></span>
                <span class="yellow"></span>
                <span class="yellow"></span>
                <span class="yellow"></span>
                <img src="<?php bloginfo('template_url'); ?>/images/christmas-lights.png" alt="christmas-lights" class="nav-christmas-lights">
            </div>
        </div>
    </nav>