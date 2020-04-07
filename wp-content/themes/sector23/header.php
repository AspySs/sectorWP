<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo bloginfo('name'); ?></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" type="text/javascript"></script>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri()."/assets/images/favicon.png"; ?>" type="image/png">
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=b9e4d38e-4224-4bdd-b04a-8e04841d3e14" type="text/javascript"></script>
        <script type="text/javascript">


        ymaps.ready(function(){
                   
                var myMap = new ymaps.Map("map", {
                center: [43.914688, 39.335573],
                zoom: 14,
                controls: ['smallMapDefaultSet']
        }, {
            searchControlProvider: 'yandex#search'
        });
                myMap.geoObjects.add(new ymaps.Placemark([43.914688, 39.335573], {
                balloonContent: '<strong>Сектор 23</strong>'
                }, {
                    preset: 'islands#icon',
                    iconColor: '#0095b6'
                }));

                });
            
        
            </script>

         <?php wp_head(); // функция для запуска хука ?>       
</head>
<body>

        <div id="preloader">
            <div id="loader"></div>
        </div>

    <span class="topBtn"><img src="<?php echo get_template_directory_uri()."/assets/images/top.svg"; ?>"></span>
    <header>
        <img src="<?php echo get_template_directory_uri()."/assets/images/logo.svg"; ?>" id="logo">
        <div id="mobileHeaderName">Sector 23</div>
        <?php
            wp_nav_menu( array(
                                    'theme_location'  => 'top',
                                    'menu'            => '',
                                    'container'       => false,
                                    'container_class' => 'menu-{menu-slug}-container',
                                    'container_id'    => '',
                                    'menu_class'      => false,
                                    'menu_id'         => false,
                                    'echo'            => true,
                                    'fallback_cb'     => 'wp_page_menu',
                                    'before'          => '',
                                    'after'           => '',
                                    'link_before'     => '',
                                    'link_after'      => '',
                                    'items_wrap'      => '%3$s',
                                    'depth'           => 0,
                                    'walker'          => '',
            ) );
         ?>
        <span id="mobileMenuBtn">
            <span></span>
            <span></span>
            <span></span>
        </span>
    </header>
    
    <ul id="mobileMenu">
                <?php
            wp_nav_menu( array(
                                    'theme_location'  => 'top',
                                    'menu'            => '',
                                    'container'       => false,
                                    'container_class' => 'menu-{menu-slug}-container',
                                    'container_id'    => '',
                                    'menu_class'      => false,
                                    'menu_id'         => false,
                                    'echo'            => true,
                                    'fallback_cb'     => 'wp_page_menu',
                                    'before'          => '',
                                    'after'           => '',
                                    'link_before'     => '',
                                    'link_after'      => '',
                                    'items_wrap'      => '%3$s',
                                    'depth'           => 0,
                                    'walker'          => '',
            ) );
         ?>
    </ul>
