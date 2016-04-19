<?php
/**
 * @var $my_query object WP_Query
 */
?>

<?php if ($my_query->have_posts()) : ?>
<section class="work_examples">
    <div class="row">
        <h2>Примеры работ</h2>
        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
        <div class="col-lg-4 col-md-4 col-xs-6 p0">
            <div class="workInfoWr">
                <!-- open .work--imagebox -->
                <div class="work--imagebox">
                    <?php the_post_thumbnail('full'); ?>
                </div>
                <!-- close .work--imagebox -->
                
                <div class="workInfo">
                    <div class="workTitle"><?php the_title(); ?></div>
                    <div class="workDate"><?= get_the_date('Y-m-d'); ?></div>
                    <div class="workLine"></div>
                    <div class="workView"><img src="<?php bloginfo('template_directory'); ?>/img/view.png" alt=""></div>
                </div>
            </div>
        </div>
        <?php endwhile ;  ?>

        <div class="load_more" data-step="2">
            <img src="<?php bloginfo('template_directory'); ?>/img/load_more.png" alt=""/>
        </div>

    </div>
</section>
<?php endif ?>
<?php wp_reset_query(); ?>