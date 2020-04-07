<?php

add_action('wp_enqueue_scripts', 'functionNAME'); // хук срабатывает при подключении стандартных стилей, срабатывает при запуске функции wp_head(); в любом другом файле, обычно ставят в хеадер перед закрытием </head> на вход принимает 1) название операции на которую вешают хук 2) название исполняемой функции
add_action('wp_footer', 'footer_scripts');// та же тема но для футера ХУК
add_action('after_setup_theme', 'mymenu'); // хук на регистрацию темы, регистрируем туда и свое меню тоже










function functionNAME(){
	wp_enqueue_style('style', get_stylesheet_uri()); // обязательная функция для подключения главного файла стилей style.css
wp_enqueue_style('owl.carousel.min', get_template_directory_uri()."/assets/css/owl.carousel.min.css");
wp_enqueue_style('owl.theme.default.min', get_template_directory_uri()."/assets/css/owl.theme.default.min.css");// подключает стили, 1) хз зачем тут имя 2)путь до файла
}
function footer_scripts(){

	 // подключаем скрипты (в футер)
	wp_enqueue_script('owl.carousel.min', get_template_directory_uri()."/assets/js/owl.carousel.min.js");
	wp_enqueue_script('script', get_template_directory_uri()."/assets/js/script.js");
}
function mymenu(){
	register_nav_menu( 'top', 'Меню в шапке' );//регистрирует наше меню
	add_theme_support('title-tag'); //  делаем автоматическуб генерацию титлов на всех страницах
	add_theme_support( 'post-thumbnails', array( 'post' ) ); // дает возможность пихать превью пики к постам!!
	add_image_size( 'post_thumb', 1300, 500, true); // регистрирует новый размер картинок!
	add_image_size( 'post_full', 1920, 1080, true); // регистрирует новый размер картинок!
	add_filter( 'excerpt_more', 'new_excerpt_more' );////  регистрируем фильтр для красивого отображения в постах кнопки читать дальше
	add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 ); // фильтр, убирающий слово НАВИГАЦИЯ ПО САЙТУ перед вкладками
	add_filter( 'document_title_separator', 'filter_title' );//регаю фильтр для изменения вывода тайтла на страницах
	
add_filter( 'wp_check_filetype_and_ext', 'filter_function_name_497', 10, 4 );
add_filter( 'upload_mimes', 'upload_allow_types' );
}
	function new_excerpt_more( $more ){
	global $post;
	return '<a href="'. get_permalink($post) . '">  Читать дальше...</a>'; // фильтр для красивого отображения в постах кнопки читать дальше
}
function upload_allow_types( $mimes ) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
function filter_function_name_497( $type_and_ext, $file, $filename, $mimes ){

	// загружается файл с расширением .svg
	if( '.svg' === strtolower( substr($filename, -4) ) ){

		$filesize = filesize( $file ) / 1024; // КБ

		// разрешим
		if( $filesize < 50 && current_user_can('manage_options') ){
			$type_and_ext['ext']  = 'svg';
			$type_and_ext['type'] = 'image/svg+xml';
		}
		// запретим
		else {
			$type_and_ext['ext'] = $type_and_ext['type'] = false;
		}

	}

	return $type_and_ext;
}

function my_navigation_template( $template, $class ){
	/*
	Вид базового шаблона:
	<nav class="navigation %1$s" role="navigation">
		<h2 class="screen-reader-text">%2$s</h2>
		<div class="nav-links">%3$s</div>
	</nav>
	*/

	return '
	<nav class="navigation %1$s" role="navigation">
		<div class="nav-links">%3$s</div>
	</nav>    
	';
}

function filter_title( $sep ){
	// filter...
	$sep = ' -> ';
	return $sep;
}
?>