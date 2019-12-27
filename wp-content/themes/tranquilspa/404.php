<?php get_header(); ?>
    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-sm-3"><?php the_widget('WP_Widget_Pages'); ?></div>
            <div class="col-sm-3"><?php the_widget('WP_Widget_Categories'); ?></div>
            <div class="col-sm-3"><?php the_widget('WP_Widget_Recent_Posts'); ?></div>
            <div class="col-sm-3"><?php the_widget('WP_Widget_Tag_Cloud'); ?></div>
        </div>
    </div>
<?php get_footer(); ?>

