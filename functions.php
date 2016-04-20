<?php
/**
 * Функции шаблона (function.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */


define('TM_DIR', get_template_directory(__FILE__));
define('TM_URL', get_template_directory_uri(__FILE__));

require_once TM_DIR . '/lib/Parser.php';
require_once TM_DIR . '/lib/bootstrap_menu.php';
require_once TM_DIR . '/lib/clean_comments_constructor.php';

function typical_title() { // функция вывода тайтла
	global $page, $paged; // переменные пагинации должны быть глобыльными
	wp_title('', true, 'right'); // вывод стандартного заголовка без разделителя
	$site_description = get_bloginfo('description', 'display'); // получаем описание сайта
	if ($site_description && (is_home() || is_front_page())) //если описание сайта есть и мы на главной
		echo " | $site_description"; // выводим описание сайта с "|" разделителем
	if ($paged >= 2 || $page >= 2) // если пагинация была использована
		echo ' | '.sprintf(__( 'Страница %s'), max($paged, $page)); // покажем номер страницы с "|" разделителем
}

register_nav_menus(array( // Регистрируем 2 меню
	'top' => 'Верхнее', // Верхнее
	'bottom' => 'Внизу' // Внизу
));

add_theme_support('post-thumbnails'); // включаем поддержку миниатюр
set_post_thumbnail_size(250, 150); // задаем размер миниатюрам 250x150
add_image_size('big-thumb', 400, 400, true); // добавляем еще один размер картинкам 400x400 с обрезкой

register_sidebar(array( // регистрируем левую колонку, этот кусок можно повторять для добавления новых областей для виджитов
	'name' => 'Сайдбар', // Название в админке
	'id' => "sidebar", // идентификатор для вызова в шаблонах
	'description' => 'Обычная колонка в сайдбаре', // Описалово в админке
	'before_widget' => '<div id="%1$s" class="widget %2$s">', // разметка до вывода каждого виджета
	'after_widget' => "</div>\n", // разметка после вывода каждого виджета
	'before_title' => '<span class="widgettitle">', //  разметка до вывода заголовка виджета
	'after_title' => "</span>\n", //  разметка после вывода заголовка виджета
));

function pagination() { // функция вывода пагинации
	global $wp_query; // текущая выборка должна быть глобальной
	$big = 999999999; // число для замены
	$links = paginate_links(array( // вывод пагинации с опциями ниже
		'base' => str_replace($big,'%#%',esc_url(get_pagenum_link($big))), // что заменяем в формате ниже
		'format' => '?paged=%#%', // формат, %#% будет заменено
		'current' => max(1, get_query_var('paged')), // текущая страница, 1, если $_GET['page'] не определено
		'type' => 'array', // нам надо получить массив
		'prev_text'    => 'Назад', // текст назад
    	'next_text'    => 'Вперед', // текст вперед
		'total' => $wp_query->max_num_pages, // общие кол-во страниц в пагинации
		'show_all'     => false, // не показывать ссылки на все страницы, иначе end_size и mid_size будут проигнорированны
		'end_size'     => 15, //  сколько страниц показать в начале и конце списка (12 ... 4 ... 89)
		'mid_size'     => 15, // сколько страниц показать вокруг текущей страницы (... 123 5 678 ...).
		'add_args'     => false, // массив GET параметров для добавления в ссылку страницы
		'add_fragment' => '',	// строка для добавления в конец ссылки на страницу
		'before_page_number' => '', // строка перед цифрой
		'after_page_number' => '' // строка после цифры
	));
 	if( is_array( $links ) ) { // если пагинация есть
	    echo '<ul class="pagination">';
	    foreach ( $links as $link ) {
	    	if ( strpos( $link, 'current' ) !== false ) echo "<li class='active'>$link</li>"; // если это активная страница
	        else echo "<li>$link</li>"; 
	    }
	   	echo '</ul>';
	 }
}

add_action('wp_footer', 'add_scripts'); // приклеем ф-ю на добавление скриптов в футер
function add_scripts() { // добавление скриптов
    if(is_admin()) return false; // если мы в админке - ничего не делаем
    wp_deregister_script('jquery'); // выключаем стандартный jquery
    wp_enqueue_script('jquery','//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js','','',true); // добавляем свой
	wp_enqueue_script('lightbox', get_template_directory_uri().'/js/jquery.lightbox-0.5.js','','',true);

    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js','','',true); // бутстрап



 	wp_enqueue_script( 'slick-js', '//cdn.jsdelivr.net/jquery.slick/1.5.7/slick.min.js', array(), '1');

	wp_enqueue_script('yndex-map', 'http://api-maps.yandex.ru/2.1/?lang=ru_RU', array(), '1');

	wp_enqueue_script('main', get_template_directory_uri().'/js/main.js','','',true); // и скрипты шаблона
    wp_enqueue_script('calculator', get_template_directory_uri().'/js/calculator.js','','',true); // и скрипты шаблона
	wp_localize_script('main', 'myajax',
		array(
			'url' => admin_url('admin-ajax.php'),
			'act' => admin_url('admin-ajax.php')
		)
	);
}

add_action('wp_print_styles', 'add_styles'); // приклеем ф-ю на добавление стилей в хедер
function add_styles() { // добавление стилей
    if(is_admin()) return false; // если мы в админке - ничего не делаем
    wp_enqueue_style( 'bs', get_template_directory_uri().'/css/bootstrap.min.css' ); // бутстрап
	wp_enqueue_style( 'main', get_template_directory_uri().'/sass/style.css' ); // основные стили шаблона
	wp_enqueue_style( 'fotorama', get_template_directory_uri() . '/css/fotorama.css', array('bs'), '1');
	wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css', array('bs'), '1');
	wp_enqueue_style( 'slick-css', '//cdn.jsdelivr.net/jquery.slick/1.5.7/slick.css', array(), '1');
    wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/css/slick-theme.css', array(), '1');
    wp_enqueue_style( 'lightbox-css', get_template_directory_uri() . '/css/jquery.lightbox-0.5', array(), '1');

}

function prn($content) {
	echo '<pre style="background: lightgray; border: 1px solid black; padding: 2px">';
	print_r ( $content );
	echo '</pre>';
}

function content_class_by_sidebar() { // функция для вывода класса в зависимости от существования виджетов в сайдбаре
	if (is_active_sidebar( 'sidebar' )) { // если есть
		echo 'col-sm-9'; // пишем класс на 80% ширины
	} else { // если нет
		echo 'col-sm-12'; // контент на всю ширину
	}
}


/*--------------------------------------------- СЛАЙДЕР -------------------------------------------------------------*/
add_action('init', 'customSlider');

function customSlider()
{
	$labels = array(
		'name' => 'Слайдер', // Основное название типа записи
		'singular_name' => 'Слайдер', // отдельное название записи типа Book
		'add_new' => 'Добавить слайд',
		'add_new_item' => 'Добавить новый слайд',
		'edit_item' => 'Редактировать слайд',
		'new_item' => 'Новый слайд',
		'view_item' => 'Посмотреть слайд',
		'search_items' => 'Найти слайд',
		'not_found' => 'Слайдов не найдено',
		'not_found_in_trash' => 'В корзине слайдов не найдено',
		'parent_item_colon' => '',
		'menu_name' => 'Слайдер'

	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','thumbnail')
	);
	register_post_type('slider', $args);
}

function sliderShortcode()
{
	$args = array(
		'post_type' => 'slider',
		'post_status' => 'publish',
		'posts_per_page' => -1);

	$my_query = null;
	$my_query = new WP_Query($args);

	$parser = new Parser();
	$parser->render(TM_DIR . '/views/slider.php', ['my_query' => $my_query]);
}

add_shortcode('slider', 'sliderShortcode');
/*------------------------------------------ КОНЕЦ СЛАЙДЕР ---------------------------------------------------------*/

/*--------------------------------------------- РАБОТЫ -------------------------------------------------------------*/
add_action('init', 'customWork');

function customWork()
{
	$labels = array(
		'name' => 'Работы', // Основное название типа записи
		'singular_name' => 'Работы', // отдельное название записи типа Book
		'add_new' => 'Добавить работу',
		'add_new_item' => 'Добавить новую работу',
		'edit_item' => 'Редактировать работу',
		'new_item' => 'Новая работа',
		'view_item' => 'Посмотреть работы',
		'search_items' => 'Найти работу',
		'not_found' => 'Работ не найдено',
		'not_found_in_trash' => 'В корзине работ не найдено',
		'parent_item_colon' => '',
		'menu_name' => 'Работы'

	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','thumbnail')
	);
	register_post_type('work', $args);
}

function workShortcode()
{
	$args = array(
		'post_type' => 'work',
		'post_status' => 'publish',
		'posts_per_page' => 6);

	$my_query = null;
	$my_query = new WP_Query($args);

	$parser = new Parser();
	$parser->render(TM_DIR . '/views/work.php', ['my_query' => $my_query]);
}

add_shortcode('work', 'workShortcode');

// AJAX ACTION
add_action('wp_ajax_load_work', 'load_work');
add_action('wp_ajax_nopriv_load_work', 'load_work');

function load_work()
{
	$args = array(
		'post_type' => 'work',
		'paged' => $_POST['step'],
		'post_status' => 'publish',
		'posts_per_page' => 6);

	$my_query = null;
	$my_query = new WP_Query($args);

	$parser = new Parser();
	$parser->render(TM_DIR . '/views/load_work.php', ['my_query' => $my_query]);
	wp_die();
}
/*------------------------------------------ КОНЕЦ РАБОТЫ ---------------------------------------------------------*/



add_action( 'admin_post_add_order', 'admin_add_order' );
add_action( 'admin_post_nopriv_add_order', 'admin_add_order' );

function admin_add_order() {
	$parser = new Parser();
	$mailadmin = get_option('admin_email');
	$text = $parser->render(TM_DIR . '/views/mail_text.php', ['post' => $_POST], false);
	//prn($mailadmin);

	$headers = "Content-type: text/html;";


	mail($mailadmin, "Заявка с вашего сайта", $text,$headers);
if(isset($_FILES['uploadfile']['name'])){
	$uploaddir = TM_DIR . '/files/';
	$uploadfile = $uploaddir.basename($_FILES['uploadfile']['name']);

// Копируем файл из каталога для временного хранения файлов:
	if (copy($_FILES['uploadfile']['tmp_name'], $uploadfile))
	{
		wp_mail( $mailadmin, "Заявка с вашего сайта", $text, $headers, $uploadfile );
	}
}
	else{
		wp_mail( $mailadmin, "Заявка с вашего сайта", $text, $headers );
	}




	//prn($text);

// Handle request then generate response using echo or leaving PHP and using HTML
		header("HTTP/1.1 301 Moved Permanently");
		header("Location: ".get_bloginfo('url'));
		exit();

}