<?php
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

		<a href="#" class="calculate_cost">Расcчитать стоимость</a>

		<?= do_shortcode('[slider]') ?>

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

<?= do_shortcode('[work]'); ?>

<section class="value_work" id="value_work">
    <div class="row">
        <h2><span class="red">Стоимость разработки</span> дизайна вашего помещения</h2>
        <div class="col-lg12">
            <form action="<?= get_bloginfo('url'); ?>/wp-admin/admin-post.php?action=add_order" method="POST" id="sendForm" enctype="multipart/form-data">
                <div class="input--line">
                    <span class="title">Планировка</span>
                    <input type="radio" value="2" id="plan1" class="calculator plan" data-type="1" name="plan"/>
                    <label for="plan1">
                        <span>10-20 м<sup>2</sup> - 2 уе/м<sup>2</sup></span>
                    </label>

                    <input type="radio" value="1.75" id="plan2" class="calculator plan" data-type="2" name="plan"/>
                    <label for="plan2">
                        <span>21-55 м<sup>2</sup> - 1,75 уе/м<sup>2</sup></span>
                    </label>

                    <input type="radio" value="1.5" id="plan3" class="calculator plan" data-type="3" name="plan"/>
                    <label for="plan3">
                        <span>56-120 м<sup>2</sup> - 1,5 уе/м<sup>2</sup></span>
                    </label>

                    <input type="radio" value="1" id="plan4" class="calculator plan" data-type="4" name="plan"/>
                    <label for="plan4">
                        <span>свыше 120 м<sup>2</sup> - 1 уе/м<sup>2</sup></span>
                    </label>
                    <span class="value"></span>
                    <!--<input type="text" name="valuePlan" placeholder="Значение"/>-->
                </div>
                
                <div class="input--line">
                    <span>Электрические сети</span>
                    <input type="checkbox" id="roz" class="calculator kooff" data-kooff="0.5" name="electric_network[]" value="Розетки"/>
                        <label for="roz"><span>Розетки</span></label>
                    <input type="checkbox" id="osv" class="calculator kooff" data-kooff="0.6" name="electric_network[]" value="Освещение выключатели"/>
                        <label for="osv"><span>Освещение выключатели</span></label>
                    <input type="checkbox" id="pol" class="calculator kooff" data-kooff="0.7" name="electric_network[]" value="Теплый пол"/>
                    <label for="pol"><span>Теплый пол</span></label>
                </div>
                <div class="input--line">
                    <span>Ваная комната</span>
                    <input type="checkbox" id="oborud" class="calculator kooff" data-kooff="0.8" name="bathroom"/>
                        <label for="oborud"><span>Привязки оборудования</span></label>
                    <input type="checkbox" id="plitka" class="calculator kooff" data-kooff="0.9" name="bathroom"/>
                        <label for="plitka"><span>Раскладка плитки</span></label>
                </div>
                <input type="hidden" name="summa" id="summa">
                <div class="input--line">
                    <span>Советы дизайнера</span>
                    <input type="checkbox" name="tip" class="calculator plus" data-plus="100" id="otdmat"/><label for="otdmat"><span class="tipDiz">Спецификация отделочных <br>материалов</span></label>
                    <input type="checkbox" name="tip" class="calculator plus" data-plus="110" id="osvobor"/><label for="osvobor"><span class="tipDiz">Спецификация осветительного <br>оборудования</span></label>
                    <input type="checkbox" name="tip" class="calculator plus" data-plus="120" id="santex"/><label for="santex"><span>Спецификация сантехники</span></label>
                    <input type="checkbox" name="tip" class="calculator plus" data-plus="130" id="mebel"/><label for="mebel"><span>Спецификация мебели</span></label>
                </div>
                <div class="input--line custom_file_input_box">
                    <div class="custom_file_input_box_btn">
                        <input type="file" class="custom_file_input_box_input" name="file" accept="image/*, application/pdf">
                    </div>
                    <textarea name="text" id="text" placeholder="Описание и Ваши пожелания" cols="30" rows="10"></textarea>
                </div>

                <input type="hidden" name="name" id="sendname">
                <input type="hidden" name="phone" id="sendphone">
                <input type="hidden" name="email" id="sendemail">

                <div class="infoValue">
                    <span>Стоимость</span> <span class="sumValue">0</span>$
                    <input type="submit" class="send_request" data-toggle="modal" data-target="#myModal" value="Отправить заявку">
                </div>
            </form>
        </div>
    </div>
</section>

<section class="reply" id="reply">
    <div class="row">
        <h2><span class="red">Ответы</span>  на частозадаваемые вопросы</h2>
        <div class="col-md-6">
            <div class="titleReply">
                Можно ли жить в квартире во время ремонта?
            </div>
            <div class="textReply">
                К сожалению, нет. Мы делаем ремонт сразу во всех помещениях, чтобы выдерживать обещанные нами сроки. Поэтому находиться в квартире во время ремонта будет невозможно (даже вашему коту).
            </div>
        </div>
        <div class="col-md-6">
            <div class="titleReply">
                Можно ли жить в квартире во время ремонта?
            </div>
            <div class="textReply">
                К сожалению, нет. Мы делаем ремонт сразу во всех помещениях, чтобы выдерживать обещанные нами сроки. Поэтому находиться в квартире во время ремонта будет невозможно (даже вашему коту).
            </div>
        </div>
        <div class="col-md-6">
            <div class="titleReply">
                Можно ли в жилых пространствах сделать дополнительные светильники?
            </div>
            <div class="textReply">
                К сожалению, нет. Светильник, находящийся по центру потолка, является оптимальным решением для освещения небольших пространств. Для устройства дополнительных светильников придется опускать потолок, что дорого и неэффективно для небольших помещений типовых домов.
            </div>
        </div>
        <div class="col-md-6">
            <div class="titleReply">
                Можно ли в жилых пространствах сделать дополнительные светильники?
            </div>
            <div class="textReply">
                К сожалению, нет. Светильник, находящийся по центру потолка, является оптимальным решением для освещения небольших пространств. Для устройства дополнительных светильников придется опускать потолок, что дорого и неэффективно для небольших помещений типовых домов.
            </div>
        </div>
        <div class="col-md-6">
            <div class="titleReply">
                Можно ли разбить оплату на несколько частей?
            </div>
            <div class="textReply">
                К сожалению, нет. Мы работаем только по 100% предоплате, так как для отлаженной работы нашего сервиса нам необходимо заранее заказывать материалы и оплачивать работу специалистов.

            </div>
        </div>
        <div class="col-md-6">
            <div class="titleReply">
                Можно ли разбить оплату на несколько частей?
            </div>
            <div class="textReply">
                К сожалению, нет. Мы работаем только по 100% предоплате, так как для отлаженной работы нашего сервиса нам необходимо заранее заказывать материалы и оплачивать работу специалистов.

            </div>
        </div>
        <div class="col-md-6">
            <div class="titleReply">
                Делаете ли вы ремонт в других городах?
            </div>
            <div class="textReply">
                Пока что мы работаем только в Москве и ближайшем Подмосковье.
            </div>
        </div>
        <div class="col-md-6">
            <div class="titleReply">
                Делаете ли вы ремонт в других городах?
            </div>
            <div class="textReply">
                Пока что мы работаем только в Москве и ближайшем Подмосковье.
            </div>
        </div>
        <div class="col-md-6">
            <div class="titleReply">
                Когда будет расширен список серий домов, находящихся в работе?
            </div>
            <div class="textReply">
                Вы можете оставить заявку на сайте, и мы сообщим вам, когда начнем работать с домами вашей серии.
            </div>
        </div>
        <div class="col-md-6">
            <div class="titleReply">
                Когда будет расширен список серий домов, находящихся в работе?
            </div>
            <div class="textReply">
                Вы можете оставить заявку на сайте, и мы сообщим вам, когда начнем работать с домами вашей серии.
            </div>
        </div>
    </div>
</section>

<?php get_footer(); // подключаем footer.php ?>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <form action="">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Укажите контактные данные</h4>
                </div>
                <div class="modal-body">
                    <div class="control-group">
                        <label class="control-label" for="name">Ваше имя</label>
                        <div class="controls">
                            <input type="text" name="name" id="name" class="formInput" placeholder="Ваше имя" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="email">Ваш email</label>
                        <div class="controls">
                            <input type="text" name="email" id="email" class="formInput" placeholder="Ваш email" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="phone">Ваш телефон</label>
                        <div class="controls">
                            <input type="text" name="phone" id="phone" class="formInput" placeholder="Ваш телефон" required>
                        </div>
                    </div>



                </div>
                <div class="modal-footer">
                    <input type="submit" class="sendMail" value="Отправить заявку">
                </div>
            </div>
        </form>
    </div>
</div>