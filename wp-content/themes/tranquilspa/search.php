<?php get_header(); ?>
<div class="container-fluid py-5">
    <div class="row">
        <div class="col-sm-8">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="post row">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="col-sm-3">
                                <div class="my-3 post-thumbnail">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                            </div>
                            <div class="col-sm-9">
                        <?php else : ?>
                            <div class="col-sm-12">
                        <?php endif; ?>
                            <h2>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                            <p><?php the_time('F j, Y') ?> by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></p>
                            <?php if (has_tag()) : ?>
                                <div class="pb-2">
                                    <i class="fas fa-tags"></i>
                                    <span><?php the_tags('Tagged: ', ' ~ '); ?></span>
                                </div>
                            <?php endif; ?>
                            <div class="content">
                                <?php the_excerpt(); ?>
                                <p>
                                    <a href="<?php the_permalink(); ?>">
                                        Read more...
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <?php echo _e('Sorry, no matches for:<em>'.get_search_query().'</em>, please search again!'); ?>
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
