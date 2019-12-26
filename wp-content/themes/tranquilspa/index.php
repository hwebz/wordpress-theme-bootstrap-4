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
                <div>
                    <h2>New feature</h2>
                    <p>June 05, 2019 by <a href="#">admin</a></p>
                    <div class="pb-2">
                        <i class="fas fa-tags"></i>
                        <span>Tagged: news ~ offers</span>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus eveniet illum in labore nisi nobis omnis, temporibus ullam. Aliquam blanditiis culpa doloremque eveniet explicabo laudantium libero quas quod velit. Quidem!</p>
                </div>

                <nav>
                    <ul class="nav">
                        <li>Previous Page</li>
                        <li>Next Page</li>
                    </ul>
                </nav>
            </div>
            <aside class="col-sm-4">
                <div class="py-3">
                    <h4 class="font-italic">About</h4>
                    <p class="mb-0">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda beatae cupiditate deserunt
                        <hr>
                    </p>
                </div>
                <div class="py-3">
                    <h4 class="font-italic">Archives</h4>
                    <ol class="list-unstyled">
                        <li><a href="#">June 2019</a></li>
                        <li><a href="#">July 2019</a></li>
                        <li><a href="#">August 2019</a></li>
                    </ol>
                </div>
                <div class="py-3">
                    <h4 class="font-italic">Categories</h4>
                    <ol class="list-unstyled mb-0">
                        <li><a href="#">News</a></li>
                        <li><a href="#">Offers</a></li>
                    </ol>
                </div>
                <div class="py-3">
                    <h4 class="font-italic">Follow Us</h4>
                    <i class="fab fa-facebook-square fa-2x"></i>
                    <i class="fab fa-twitter-square fa-2x"></i>
                    <i class="fab fa-pinterest-square fa-2x"></i>
                    <i class="fab fa-instagram fa-2x"></i>
                </div>
            </aside>
        </div>
    </div>
<?php get_footer(); ?>
