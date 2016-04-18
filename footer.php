<?php
/**
 * Шаблон подвала (footer.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
	<!--<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php /*$args = array( // опции для вывода нижнего меню, чтобы они работали, меню должно быть создано в админке
						'theme_location' => 'bottom', // идентификатор меню, определен в register_nav_menus() в function.php
						'container'=> false, // обертка списка, false - это ничего
						'menu_class' => 'nav nav-pills bottom-menu', // класс для ul
				  		'menu_id' => 'bottom-nav', // id для ul
				  		'fallback_cb' => false
				  	);
					wp_nav_menu($args); // выводим нижние меню
					*/?>
				</div>
			</div>
		</div>
	</footer>-->

</div>

<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h3>Контакты</h3>
				<div class="workLine"></div>

				<div class="col-md-12 pl0 border">
					<div class="col-md-4 pl0">
						<span>Адрес: </span>
					</div>
					<div class="col-md-8">
						795 South Park Avenue, Door 6 Wonderland, CA 94107, Australia
					</div>
				</div>

				<div class="col-md-12 pl0 border">
					<div class="col-md-4 pl0">
						<span>Телефон:</span>
					</div>
					<div class="col-md-8">
						+440 875369208 - Office
						+440 353363114 - Fax
					</div>
				</div>

				<div class="col-md-12 pl0 border">
					<div class="col-md-4 pl0">
						<span>Email:</span>
					</div>
					<div class="col-md-8">
						support@sitename.com
						info@sitename.com
					</div>
				</div>

				<div class="col-md-12 pl0 socseti">
					<div class="col-md-4 pl0">
						<span>Мы в соц.сетях:</span>
					</div>
					<div class="col-md-8">
						<a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-tumblr-square" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-vimeo-square" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-vk" aria-hidden="true"></i></a>
					</div>
				</div>

			</div>
			<div class="col-md-8"></div>
		</div>
	</div>
</footer>

<?php wp_footer(); // необходимо для работы плагинов и функционала  ?>
</body>
</html>