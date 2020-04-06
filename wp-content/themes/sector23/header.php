<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo bloginfo('name'); ?></title>
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
        <a href="#">Блог</a>
        <a href="#">Цены</a>
        <a href="#">О нас</a>
        <span id="mobileMenuBtn">
            <span></span>
            <span></span>
            <span></span>
        </span>
    </header>
    
    <ul id="mobileMenu">
        <span><a href="#">О нас</a></span>
        <span><a href="#">Цены</a></span>
        <span><a href="#">Блог</a></span>
    </ul>
