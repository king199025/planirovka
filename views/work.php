<?php
/**
 * @var $my_query object WP_Query
 * @var $my_query2 object WP_Query
 */
?>

<?php if ($my_query->have_posts()) :


    ?>
<section class="work_examples" id="work_examples">
    <div class="row">
        <h2>Примеры работ</h2>
        <?php while ($my_query->have_posts()) : $my_query->the_post();
            //$size = getimagesize(wp_get_attachment_url( get_post_thumbnail_id($post->ID)));

            ?>
        <div class="col-lg-4 col-md-4 col-xs-6 p0">
            <a class="" href="<?= wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ?>">
                <div class="workInfoWr">
                    <!-- open .work--imagebox -->
                    <div class="work--imagebox">
                        <img src="<?= wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ?>" alt="" style="height: 200px">
                        <?php /*the_post_thumbnail(array('500px','500px')); */?>
                    </div>
                    <!-- close .work--imagebox -->

                    <div class="workInfo">

                            <div class="workTitle"><?php the_title(); ?></div>
                            <div class="workDate"><?= get_the_date('Y-m-d'); ?></div>
                            <div class="workLine"></div>
                            <div class="workView"><img src="<?php bloginfo('template_directory'); ?>/img/view.png" alt=""></div>

                    </div>
                </div>
            </a>
        </div>
        <?php endwhile ;  ?>
        <div class="allWork">
        <?php while ($my_query2->have_posts()) : $my_query2->the_post();
            //$size = getimagesize(wp_get_attachment_url( get_post_thumbnail_id($post->ID)));

            ?>
        <div class="col-lg-4 col-md-4 col-xs-6 p0">
            <a class="" href="<?= wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ?>">
                <div class="workInfoWr">
                    <!-- open .work--imagebox -->
                    <div class="work--imagebox">
                        <img src="<?= wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ?>" alt="" style="height: 200px">
                        <?php /*the_post_thumbnail(array('500px','500px')); */?>
                    </div>
                    <!-- close .work--imagebox -->

                    <div class="workInfo">

                            <div class="workTitle"><?php the_title(); ?></div>
                            <div class="workDate"><?= get_the_date('Y-m-d'); ?></div>
                            <div class="workLine"></div>
                            <div class="workView"><img src="<?php bloginfo('template_directory'); ?>/img/view.png" alt=""></div>

                    </div>
                </div>
            </a>
        </div>
        <?php endwhile ;  ?>
        </div>
        <div class="load_more" data-step="2">
            <img src="<?php bloginfo('template_directory'); ?>/img/load_more.png" alt=""/>
        </div>

    </div>
</section>
<?php endif ?>
<?php wp_reset_query(); ?>