<?php get_header(); ?>
    <section class="container-fluid">
        <div class="row position-relative d-flex justify-content-center align-items-center">
            <img src="<?php bloginfo('template_directory'); ?>/images/pic1.jpg" class="header_img" />
            <div class="position-absolute feature-bg">
                <p class="feature-text">TRANQUIL SPA <br> OFFICIAL BLOG</p>
            </div>
        </div>
    </section>

    <div class="container-fluid text-center py-5 mb-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h3>Contact Us</h3>
                <img src="<?php bloginfo('template_directory'); ?>/images/devider.png" class="w-25">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <form class="text-left">
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter your name...">
                    </div>
                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="text" class="form-control" id="email" placeholder="Enter your email...">
                    </div>
                    <div class="form-group">
                        <label for="message">Your Message</label>
                        <textarea id="message" rows="3" class="form-control"></textarea>
                    </div>
                    <button class="btn btn-primary" type="submit">Send Message...</button>
                </form>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
