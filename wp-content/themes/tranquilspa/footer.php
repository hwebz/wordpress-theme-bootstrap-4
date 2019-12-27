        <footer class="container-fluid py-5">
            <div class="row">
                <div class="col-sm-4">
                    <h5>Stay Connected:</h5>
                    <form action="">
                        <div class="form-row form-group">
                            <div class="col-sm-8">
                                <input type="email" class="form-control" placeholder="Email Address" />
                            </div>
                            <div class="col-sm-4">
                                <button class="btn btn-primary" type="submit">Sign up <i class="fas fa-angle-double-right"></i></button>
                            </div>
                        </div>
                    </form>

                    <i class="fab fa-facebook-square fa-2x"></i>
                    <i class="fab fa-twitter-square fa-2x"></i>
                    <i class="fab fa-pinterest-square fa-2x"></i>
                    <i class="fab fa-instagram fa-2x"></i>
                </div>
                <div class="col-sm-4">
                    <h5>Our setting:</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci cum delectus ducimus hic iusto! Aut dicta doloremque eius, eos error eveniet ex facilis ipsa itaque, nihil non quam repellendus, veniam.</p>
                </div>
                <div class="col-sm-4">
                    <h5>Navigation</h5>
                    <?php wp_nav_menu(array(
                        'theme_location'    => 'footer',
                        'depth'             => 1,
                        'container'         => false,
                        'menu_class'        => 'list-group',
                        'fallback'          => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker()
                    )); ?>
                </div>
            </div>
        </footer>

        <?php wp_footer(); ?>
    </body>
</html>
