<?php get_header(); ?>
    <section class="container-fluid text-center py-5 welcome">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h3><?php the_field('welcome_section_title'); ?></h3>
                <img src="<?php the_field('section_title_image'); ?>" class="w-25">
            </div>
        </div>
        <div class="row mt-4 d-flex justify-content-around">
            <div class="col-sm-4">
                <img src="<?php the_field('welcome_section_1_image') ?>" alt="" class="card-img-top rounded-circle">
                <div class="card-body">
                    <h4 class="card-txt"><?php the_field('welcome_section_1_text') ?></h4>
                </div>
            </div>
            <div class="col-sm-4">
                <img src="<?php the_field('welcome_section_2_image') ?>" alt="" class="card-img-top rounded-circle">
                <div class="card-body">
                    <h4 class="card-txt"><?php the_field('welcome_section_2_text') ?></h4>
                </div>
            </div>
            <div class="col-sm-4">
                <img src="<?php the_field('welcome_section_3_image') ?>" alt="" class="card-img-top rounded-circle">
                <div class="card-body">
                    <h4 class="card-txt"><?php the_field('welcome_section_3_text') ?></h4>
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid text-center bg-dark py-5 feature">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h3 class="text-light">Latest Spa Offers</h3>
                <img src="<?php bloginfo('template_directory'); ?>/images/devider.png" class="pb-4 w-25" />
            </div>
        </div>

        <div class="row card-content">
            <div class="col-sm-4">
                <div class="card">
                    <h4 class="card-header py-5 position-relative">
                        <?php __('Family swim package', 'tranquilwp'); ?>
                        <span class="font-weight-bold position-absolute">$60</span>
                    </h4>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p>Our most popular swim package, great vale for families or groups up to 12 people</p>
                        </blockquote>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item font-italic">Up to 12 people</li>
                        <li class="list-group-item font-italic">Private sessions</li>
                        <li class="list-group-item font-italic">Swim lessons also available</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <h4 class="card-header py-5 position-relative">
                        Family swim package
                        <span class="font-weight-bold position-absolute">$60</span>
                    </h4>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p>Our most popular swim package, great vale for families or groups up to 12 people</p>
                        </blockquote>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item font-italic">Up to 12 people</li>
                        <li class="list-group-item font-italic">Private sessions</li>
                        <li class="list-group-item font-italic">Swim lessons also available</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <h4 class="card-header py-5 position-relative">
                        Family swim package
                        <span class="font-weight-bold position-absolute">$60</span>
                    </h4>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p>Our most popular swim package, great vale for families or groups up to 12 people</p>
                        </blockquote>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item font-italic">Up to 12 people</li>
                        <li class="list-group-item font-italic">Private sessions</li>
                        <li class="list-group-item font-italic">Swim lessons also available</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5 text-center bg-light">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h3>About Us</h3>
                <img src="<?php bloginfo('template_directory'); ?>/images/devider.png" class="pb-4 w-25" />
            </div>
        </div>
        <div class="row mt-2">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad autem beatae cupiditate dicta
                dignissimos eos, excepturi explicabo fugit illo in laudantium minus nam neque non nostrum officia
                repudiandae ullam, veritatis?
                Aliquam aliquid dolorem eos error et fugit molestiae, nesciunt repellendus ullam vel? Aspernatur
                consectetur debitis earum fuga iste laboriosam quo, quos tempore voluptatem! Id illum nihil omnis
                reiciendis velit veniam.
                Accusamus debitis eligendi ex ipsam itaque maiores nobis, omnis placeat sit velit. Alias autem,
                cupiditate enim fugiat ipsam labore laborum molestias praesentium quae, ratione sapiente similique
                unde vel, voluptas voluptatem?
                Ab assumenda at illo maxime perferendis praesentium quis ullam? Aliquam animi asperiores eius fuga
                ipsam iste, quam suscipit vitae. Debitis dicta dignissimos in laudantium, minima perspiciatis quidem
                quisquam rem voluptas!
                Ab harum illo laboriosam quam suscipit voluptas. Aperiam aspernatur assumenda aut culpa ex nam quas
                qui quibusdam quis tenetur. Amet beatae cumque dolore dolores eius odit quod quos voluptates!
                Reprehenderit.
            </p>
        </div>
    </div>

    <div class="container-fluid py-5 bg-dark">
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center">
                <h3 class="text-light">Price List</h3>
                <img src="<?php bloginfo('template_directory'); ?>/images/devider.png" class="pb-4 w-25" />
            </div>
        </div>

        <div class="row">
            <div class="col-sm-8">
                <img src="<?php bloginfo('template_directory'); ?>/images/pic1.jpg" class="side_img">
            </div>
            <div class="col-sm-4">
                <h4 class="title text-center">Messages</h4>
                <ul class="list-group list-group-flush text-light">
                    <li class="list-group-item">Massage 1 <em>-$10</em></li>
                    <li class="list-group-item">Massage 1 <em>-$10</em></li>
                    <li class="list-group-item">Massage 1 <em>-$10</em></li>
                    <li class="list-group-item">Massage 1 <em>-$10</em></li>
                </ul>
            </div>
        </div>

        <div class="row my-4">
            <div class="col-sm-4">
                <h4 class="title text-center">Messages</h4>
                <ul class="list-group list-group-flush text-light">
                    <li class="list-group-item">Massage 1 <em>-$10</em></li>
                    <li class="list-group-item">Massage 1 <em>-$10</em></li>
                    <li class="list-group-item">Massage 1 <em>-$10</em></li>
                    <li class="list-group-item">Massage 1 <em>-$10</em></li>
                </ul>
            </div>
            <div class="col-sm-8">
                <img src="<?php bloginfo('template_directory'); ?>/images/pic1.jpg" class="side_img">
            </div>
        </div>

        <div class="row">
            <div class="col-sm-8">
                <img src="<?php bloginfo('template_directory'); ?>/images/pic1.jpg" class="side_img">
            </div>
            <div class="col-sm-4">
                <h4 class="title text-center">Messages</h4>
                <ul class="list-group list-group-flush text-light">
                    <li class="list-group-item">Massage 1 <em>-$10</em></li>
                    <li class="list-group-item">Massage 1 <em>-$10</em></li>
                    <li class="list-group-item">Massage 1 <em>-$10</em></li>
                    <li class="list-group-item">Massage 1 <em>-$10</em></li>
                </ul>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
