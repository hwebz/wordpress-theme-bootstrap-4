<?php get_header(); ?>
<div class="container-fluid text-center py-5 mb-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h3><?php the_title(); ?></h3>
            <img src="<?php bloginfo('template_directory'); ?>/images/devider.png" class="w-25">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <?php echo do_shortcode('[contact-form-7 html_class="text-left" id="56" title="Contact Us"]') ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
