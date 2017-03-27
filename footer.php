    <!-- Footer -->
    <footer id="footer" class="footer p-0 bg-true-black">
        <div class="container-fluid pt-0">
            <div id="footer-bg" class="row" data-bg-img="<?php echo trailingslashit(get_template_directory_uri());?>images/footer_bg.jpg">
                <div class="container pt-30">
                    <?php dynamic_sidebar('sidebar-footer');?>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <ul class="social-icons list-inline mt-20 mp-20 text-left">
                        <li>
                            <p class="footer-content text-center letter-space-2 text-left">&copy; <?php bloginfo('name');?> - All Rights Reserved</p>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="social-icons list-inline mt-20 mp-20 text-right">
                        <?php if (get_option('facebook_url')) :?>
                            <li>
                                <a href="<?php echo get_option('facebook_url');?>" class="icon icon-cube facebook"><i class="fa fa-facebook font-24"></i></a>
                            </li>
                        <?php endif;?>
                        <?php if (get_option('twitter_url')) :?>
                            <li>
                                <a href="<?php echo get_option('twitter_url');?>" class="icon icon-cube twitter"><i class="fa fa-twitter font-24 "></i></a>
                            </li>
                        <?php endif;?>
                        <?php if (get_option('youtube_url')) :?>
                            <li>
                                <a href="<?php echo get_option('youtube_url');?>" class="icon icon-cube youtube"><i class="fa fa-youtube font-24 "></i></a>
                            </li>
                        <?php endif;?>
                        <?php if (get_option('linkedin_url')) :?>
                            <li>
                                <a href="<?php echo get_option('linkedin_url');?>" class="icon icon-cube linkedin"><i class="fa fa-linkedin font-24 "></i></a>
                            </li>
                        <?php endif;?>
                        <?php if (get_option('google_url')) :?>
                            <li>
                                <a href="<?php echo get_option('google_url');?>" class="icon icon-cube facebook"><i class="fa fa-google-plus font-24"></i></a>
                            </li>
                        <?php endif;?>
                        <?php if (get_option('pinterest_url')) :?>
                            <li>
                                <a href="<?php echo get_option('pinterest_url');?>" class="icon icon-cube pinterest"><i class="fa fa-pinterest font-24"></i></a>
                            </li>
                        <?php endif;?>
                        <?php if (get_option('instagram_url')) :?>
                            <li>
                                <a href="<?php echo get_option('instagram_url');?>" class="icon icon-cube instagram"><i class="fa fa-instagram font-24"></i></a>
                            </li>
                        <?php endif;?>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
    </div>

    <?php wp_footer();?>
</body>
</html>