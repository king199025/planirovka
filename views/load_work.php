<?php
/**
 * @var $my_query object WP_Query
 */
?>

<?php if ($my_query->have_posts()) : ?>
            <!--<div class="row">-->
            <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                <div class="col-lg-4 col-md-4 col-xs-6 p0">
                    <a class="" href="<?= wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ?>" rel="fancybox">
                        <div class="workInfoWr">
                            <div class="work--imagebox">
                                <img src="<?= wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ?>" alt="" style="height: 200px">
                            </div>
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
            <!--</div>-->
<?php endif ?>
<?php wp_reset_query(); ?>
