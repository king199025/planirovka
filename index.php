﻿<?php
/**
 * Главная страница (index.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?> 
<!--<section>
	<div class="container">
		<div class="row">
			<div class="<?php /*content_class_by_sidebar(); // функция подставит класс в зависимости от того есть ли сайдбар, лежит в functions.php */?>">
				<h1><?php /*// заголовок архивов
					if (is_day()) : printf('Daily Archives: %s', get_the_date()); // если по дням
					elseif (is_month()) : printf('Monthly Archives: %s', get_the_date('F Y')); // если по месяцам
					elseif (is_year()) : printf('Yearly Archives: %s', get_the_date('Y')); // если по годам
					else : 'Archives';
				endif; */?></h1>
				<?php /*if (have_posts()) : while (have_posts()) : the_post(); // если посты есть - запускаем цикл wp */?>
					<?php /*get_template_part('loop'); // для отображения каждой записи берем шаблон loop.php */?>
				<?php /*endwhile; // конец цикла
				else: echo '<p>Нет записей.</p>'; endif; // если записей нет, напишим "простите" */?>
				<?php /*pagination(); // пагинация, функция нах-ся в function.php */?>
			</div>
			<?php /*get_sidebar(); // подключаем sidebar.php */?>
		</div>
	</div>
</section>-->

<section>
	<div class="row">
		<h1 class="topic"><span class="red">Идеальный проект</span> вашей квартиры за реальную стоимость</h1>

		<a href="#" class="calculate_cost">Расчитать стоимость</a>

		<div class="fotorama" data-navposition="top">
			<img src="<?php bloginfo('template_directory'); ?>/img/img2.jpg" data-caption="One">
			<img src="<?php bloginfo('template_directory'); ?>/img/img1.jpg" data-caption="Two">
		</div>

		<p class="decision">Дизайн-студии <span>не берутся за разработку</span> вашей квартиры из-за того
			что у нее маленькие <span>размеры/маленький бюджет</span>? А вы сами
			не можете разместить все, что Вам хотелось бы?<br>
			<span class="red">Решение есть!</span>
		</p>

		<img class="imgDesc" src="<?php bloginfo('template_directory'); ?>/img/img1.jpg" alt="">
		<span class="caption_photo">Однокомнатная квартира, студия, 87 м2, стиль Лофт, светлая гамма</span>
	</div>
</section>

<section class="how_works">
	<div class="row">
		<div class="col-lg-5">
			<h2 class="name_how_works"><span class="red">Как</span> это работает</h2>
			<div class="how_worksText">
				<p>1. Вы присылаете нам план Вашей квартиры с реальными размерами.</p>
				<p>2. Оплачиваете разработку.</p>
				<p>3. В течении 10 дней получаете 3 варианта
				планировки с расстановкой мебели.</p>
				<p>4. Если Вам необходимы дополнительные чертежи:электрика, сантехника, разверстки
					стен - Вы всегда можете дозаказать.</p>
				<p><span class="textbold">5.</span> <span>Получите в подарок</span> спецификацию отделочных материалов и мебели.</p>
			</div>
		</div>
		<div class="col-lg-7">
			<img src="<?php bloginfo('template_directory'); ?>/img/how_works.png" alt="">
		</div>
	</div>
</section>

<section class="work_examples">
	<div class="row">
		<h2>Примеры работ</h2>
		<div class="col-lg-4 col-md-4 p0">
			<div class="workInfoWr">
				<img src="<?php bloginfo('template_directory'); ?>/img/work1.jpg" alt="">
				<div class="workInfo">
					<div class="workTitle">Квартира25</div>
					<div class="workDate">25 апреля, 2016 </div>
					<div class="workLine"></div>
					<div class="workView"><img src="<?php bloginfo('template_directory'); ?>/img/view.png" alt=""></div>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 p0">
            <div class="workInfoWr">
                <img src="<?php bloginfo('template_directory'); ?>/img/work2.jpg" alt="">
                <div class="workInfo">
                    <div class="workTitle">Квартира25</div>
                    <div class="workDate">25 апреля, 2016 </div>
                    <div class="workLine"></div>
                    <div class="workView"><img src="<?php bloginfo('template_directory'); ?>/img/view.png" alt=""></div>
                </div>
            </div>
		</div>
		<div class="col-lg-4 col-md-4 p0">
            <div class="workInfoWr">
                <img src="<?php bloginfo('template_directory'); ?>/img/work3.jpg" alt="">
                <div class="workInfo">
                    <div class="workTitle">Квартира25</div>
                    <div class="workDate">25 апреля, 2016 </div>
                    <div class="workLine"></div>
                    <div class="workView"><img src="<?php bloginfo('template_directory'); ?>/img/view.png" alt=""></div>
                </div>
            </div>
		</div>
		<div class="col-lg-4 col-md-4 p0">
            <div class="workInfoWr">
                <img src="<?php bloginfo('template_directory'); ?>/img/work4.jpg" alt="">
                <div class="workInfo">
                    <div class="workTitle">Квартира25</div>
                    <div class="workDate">25 апреля, 2016 </div>
                    <div class="workLine"></div>
                    <div class="workView"><img src="<?php bloginfo('template_directory'); ?>/img/view.png" alt=""></div>
                </div>
            </div></div>
		<div class="col-lg-4 col-md-4 p0">
            <div class="workInfoWr">
                <img src="<?php bloginfo('template_directory'); ?>/img/work5.jpg" alt="">
                <div class="workInfo">
                    <div class="workTitle">Квартира25</div>
                    <div class="workDate">25 апреля, 2016 </div>
                    <div class="workLine"></div>
                    <div class="workView"><img src="<?php bloginfo('template_directory'); ?>/img/view.png" alt=""></div>
                </div>
            </div></div>
		<div class="col-lg-4 col-md-4 p0">
            <div class="workInfoWr">
                <img src="<?php bloginfo('template_directory'); ?>/img/work1.jpg" alt="">
                <div class="workInfo">
                    <div class="workTitle">Квартира25</div>
                    <div class="workDate">25 апреля, 2016 </div>
                    <div class="workLine"></div>
                    <div class="workView"><img src="<?php bloginfo('template_directory'); ?>/img/view.png" alt=""></div>
                </div>
            </div>
		</div>
        
        <div class="load_more">
            <img src="<?php bloginfo('template_directory'); ?>/img/load_more.png" alt=""/>
        </div>
        
	</div>
</section>

<section class="value_work">
    <div class="row">
        <h2><span class="red">Стоимость разработки</span> дизайна вашего помещения</h2>
        <div class="col-lg12">
            <form action="">
                <span>Планировка</span>
                <input type="radio" name="plan" value=""/> 10-20 м<sup>2</sup> - 2 уе/м<sup>2</sup>
                <input type="radio" name="plan" value=""/> 21-55 м<sup>2</sup> - 1,75 уе/м<sup>2</sup>
                <input type="radio" name="plan" value=""/> 56-120 м<sup>2</sup> - 1,5 уе/м<sup>2</sup>
                <input type="radio" name="plan" value=""/> свыше 120 м<sup>2</sup> - 1 уе/м<sup>2</sup>
                <input type="text" placeholder="Значение"/>
                <span>Электрические сети</span>
                <input type="checkbox" name="electric_network"/>Розетки
                <input type="checkbox" name="electric_network"/>Освещение выключатели
                <input type="checkbox" name="electric_network"/>Теплый пол
                <span>Ваная комната</span>
                <input type="checkbox" name="bathroom"/>Привязки оборудования
                <input type="checkbox" name="bathroom"/>Раскладка плитки
                <span>Советы дизайнера</span>
                
            </form>
        </div>
    </div>
</section>

<?php get_footer(); // подключаем footer.php ?>