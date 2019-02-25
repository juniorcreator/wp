<?php

require_once __DIR__ . '/customizer.php';

function f5_setup() {
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'wp_generator');
	show_admin_bar(false);
	add_theme_support( 'custom-logo' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support('menus');
	add_filter( 'wpcf7_validate_configuration', '__return_false' );

}

function f5_scripts() {

	/*Styles */
	wp_enqueue_style( 'f5-carousel', get_template_directory_uri().'/assets/libs/Owl/owl.carousel.min.css');
	wp_enqueue_style( 'f5-owl.theme', get_template_directory_uri().'/assets/libs/Owl/owl.theme.green.min.css');
	wp_enqueue_style( 'f5-materialiseIcons', 'https://fonts.googleapis.com/icon?family=Material+Icons');
	wp_enqueue_style( 'build', get_template_directory_uri().'/assets/css/style.css' );

	/*Scripts */
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri().'/assets/libs/jquery-3.3.1.min.js');
	wp_enqueue_script( 'f5-olw', get_template_directory_uri().'/assets/libs/Owl/owl.carousel.min.js', array('jquery'), null, true);
	wp_enqueue_script( 'f5-owlsetup', get_template_directory_uri().'/assets/js/owlsetup.js', array('jquery', 'f5-olw'), null, true);
	wp_enqueue_script( 'f5-script', get_template_directory_uri().'/assets/js/script.js', array('jquery', 'f5-olw'), null, true);
}


function f5_register_post_types(){


	register_post_type('L-D', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'L-D Блок', // основное название для типа записи
			'singular_name'      => 'L-D', // название для одной записи этого типа
			'add_new'            => 'Додати', // для добавления новой записи
			'add_new_item'       => 'Редагувати', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование', // для редактирования типа записи
			'new_item'           => 'Новое', // текст новой запис
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
		),
		'public'              => false,
		'show_ui'             => true, // зависит от publi
		'menu_icon'           => 'dashicons-format-status', 
		'supports' 						=>array('title', 'editor', 'thumbnail'),
	));

	register_post_type('review', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Відгуки', // основное название для типа записи
			'singular_name'      => 'Відгуки', // название для одной записи этого типа
			'add_new'            => 'Додати', // для добавления новой записи
			'add_new_item'       => 'Редагувати', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование', // для редактирования типа записи
			'new_item'           => 'Новое', // текст новой запис
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
		),
		'public'              => false,
		'show_ui'             => true, // зависит от publi
		'menu_icon'           => 'dashicons-format-chat', 
		'supports' 						=>array('title', 'editor'),
	));

	register_post_type('lean', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'lean Блок', // основное название для типа записи
			'singular_name'      => 'lean', // название для одной записи этого типа
			'add_new'            => 'Додати', // для добавления новой записи
			'add_new_item'       => 'Редагувати', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование', // для редактирования типа записи
			'new_item'           => 'Новое', // текст новой запис
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
		),
		'public'              => false,
		'show_ui'             => true, // зависит от publi
		'menu_icon'           => 'dashicons-visibility', 
		'supports' 						=>array('title', 'editor', 'thumbnail'),
	));

	register_post_type('choose_us', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Choose us Блок', // основное название для типа записи
			'singular_name'      => 'choose us', // название для одной записи этого типа
			'add_new'            => 'Додати', // для добавления новой записи
			'add_new_item'       => 'Редагувати', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование', // для редактирования типа записи
			'new_item'           => 'Новое', // текст новой запис
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
		),
		'public'              => false,
		'show_ui'             => true, // зависит от publi
		'menu_icon'           => 'dashicons-thumbs-up', 
		'supports' 						=>array('title', 'editor','thumbnail'),
	));
}

function getChoose_us() {
	$args = array(
		'orderby' => 'date',
		'order' => 'ASC',
		'post_type' => 'choose_us',
	);

	return get_posts($args);
}

function getLean() {
	$args = array(
		'orderby' => 'date',
		'order' => 'ASC',
		'post_type' => 'lean',
	);

	return get_posts($args);
}


function getReview() {
	$args = array(
		'orderby' => 'date',
		'order' => 'ASC',
		'post_type' => 'review',
	);

	return get_posts($args);
}


function getLD() {
	$args = array(
		'orderby' => 'date',
		'order' => 'ASC',
		'post_type' => 'L-D',
	);
	$reviews = [];
	foreach (get_posts($args) as $post) {
		$review = get_fields($post->ID);
		$review['heading'] = $post->post_title;
		$review['content'] = $post->post_content;
		$reviews[] = $review;
	}
	return $reviews;
}

add_action( 'init', 'f5_register_post_types' );
add_action( 'wp_enqueue_scripts', 'f5_scripts' );
add_action( 'after_setup_theme', 'f5_setup' );

