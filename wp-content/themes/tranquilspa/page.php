<?php get_header(); ?>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) :  the_post(); ?>
            <div class="container-fluid py-5 mb-5">
                <div class="row">
                    <div class="col-md-6 offset-md-3 text-center">
                        <h3><?php the_title(); ?></h3>
                        <img src="<?php bloginfo('template_directory'); ?>/images/devider.png" class="w-25">
                    </div>
                </div>
                <div class="row py-5">
                    <div class="col-sm-12">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer(); ?>
