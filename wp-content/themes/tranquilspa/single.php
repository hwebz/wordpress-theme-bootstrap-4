<?php get_header(); ?>
<div class="container-fluid py-5">
    <div class="row">
        <div class="col-sm-8">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div>
                        <p><?php the_time('F j, Y') ?> by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></p>
                        <?php if (has_tag()) : ?>
                            <div class="pb-2">
                                <i class="fas fa-tags"></i>
                                <span><?php the_tags('Tagged: ', ' ~ '); ?></span>
                            </div>
                        <?php endif; ?>
                        <div class="my-3 post-thumbnail">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail(); ?>
                            <?php endif; ?>
                        </div>
                        <div class="content">
                            <?php the_content(); ?>
                        </div>
                        <?php wp_link_pages(); ?>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <?php echo _e('Sorry, no posts found!'); ?>
            <?php endif; ?>

            <?php if (comments_open() || get_comments_number()) {
                comments_template();
            } ?>

            <nav>
                <ul class="nav">
                    <li>
                        <?php previous_post_link(); ?>
                    </li>
                    <li>
                        <?php next_post_link(); ?>
                    </li>
                </ul>
            </nav>
        </div>
        <aside class="col-sm-4">
            <?php get_sidebar(); ?>
        </aside>
    </div>
</div>
<?php get_footer(); ?>
