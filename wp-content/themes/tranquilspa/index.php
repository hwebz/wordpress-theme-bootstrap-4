<?php get_header(); ?>
    <section class="container-fluid">
        <div class="row position-relative d-flex justify-content-center align-items-center">
            <img src="<?php bloginfo('template_directory'); ?>/images/pic1.jpg" class="header_img" />
            <div class="position-absolute feature-bg">
                <p class="feature-text">TRANQUIL SPA <br> OFFICIAL BLOG</p>
            </div>
        </div>
    </section>
    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-sm-8">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <div>
                            <h2>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                            <p><?php the_time('F j, Y') ?> by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></p>
                            <div class="pb-2">
                                <i class="fas fa-tags"></i>
                                <span><?php the_tags('Tagged: ', ' ~ '); ?></span>
                            </div>
                            <div class="content">
                                <?php the_excerpt(); ?>
                                <p>
                                    <a href="<?php the_permalink(); ?>">
                                        Read more...
                                    </a>
                                </p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php else : ?>
                    <?php echo _e('Sorry, no posts found!'); ?>
                <?php endif; ?>
                <nav>
                    <ul class="nav">
                        <li><?php previous_posts_link(); ?></li>
                        <li><?php next_posts_link(); ?></li>
                    </ul>
                </nav>
            </div>
            <aside class="col-sm-4">
                <?php get_sidebar(); ?>
            </aside>
        </div>
    </div>
<?php get_footer(); ?>
