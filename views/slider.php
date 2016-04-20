<?php
/**
 * @var $my_query object WP_Query
 */
?>

<?php if ($my_query->have_posts()) : ?>
    <div class="main-carousel">
    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

            <div class="sliderWr">
                <?php the_post_thumbnail('full'); ?>
                <span class="caption_photo"><?php echo get_post_meta(get_the_ID(), 'size', 1); ?></span>
            </div>

    <?php endwhile ;  ?>
</div>
<?php endif ?>
<?php wp_reset_query(); ?>
