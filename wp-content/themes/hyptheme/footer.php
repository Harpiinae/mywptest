<!-- ================== FOOTER ================ -->
<footer id="footer" itemscope="itemscope" itemtype="http://schema.org/WPFooter">

    <div class="row innerFooter">
        <div class="col-xs-12 col-sm-6 col-md-6 navFooter">
            <!-- ================== NAVBAR FOOTER ================ -->
            <div class="col-xs-12 col-md-12">
                <nav class="mynavbarBig navbar navbar-default" role="navigation" itemscope itemtype="http://www.schema.org/SiteNavigationElement">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynav">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <?php
                    wp_nav_menu( array(
                            'menu'              => 'primary',
                            'theme_location'    => 'primary',
                            'depth'             => 2,
                            'container'         => 'div',
                            'container_class'   => 'collapse navbar-collapse',
                            'container_id'      => 'mynav',
                            'menu_class'        => 'nav navbar-nav',
                            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                            'walker'            => new wp_bootstrap_navwalker())
                    );
                    ?>

                </nav>
            </div>
            <!-- ================== END NAVBAR FOOTER ================ -->

            <!-- ================== SOCIALS ================ -->
            <div class="col-xs-12 col-md-12">
                <div class="col-xs-12 col-md-12">
                    <img src="<?php echo get_bloginfo('template_url')?>/dist/img/facebook.png" alt="">
                    <img src="<?php echo get_bloginfo('template_url')?>/dist/img/twitter.png" alt="">
                    <img src="<?php echo get_bloginfo('template_url')?>/dist/img/vk.png" alt="">
                </div>
                <span>&copy; Sierra Group</span>
                <span>&copy; Design by Tamara Bazko</span>
            </div>
            <!-- ================== END SOCIALS ================ -->
        </div>
        <!-- ================== INFO BLOCK ================ -->
        <div class="col-xs-12 col-sm-6 col-md-6 footerInfo">
            <div class="col-xs-6 col-md-6">
                <div class="col-xs-12 col-md-12">
                    <p>Техническая поддержка</p>
                    <span><?php echo get_field('technicalphone1','option'); ?></span>
                    <span><?php echo get_field('phone1','option'); ?></span>
                </div>
                <div class="col-xs-12 col-md-12">
                    <p>Отдел по работе с клиентами</p>
                    <span><?php echo get_field('technicalphone2','option'); ?></span>
                    <span><?php echo get_field('phone2','option'); ?></span>
                </div>
            </div>
            <div class="col-xs-6 col-md-6">
                <p>Адрес:</p>
                <span><?php echo get_field('zipcode', 'option'); ?></span>
                <span><?php echo get_field('region', 'option'); ?>,</span>
                <span><?php echo get_field('area', 'option'); ?>,</span>
                <span><?php echo get_field('street', 'option'); ?>,</span>
                <span><?php echo get_field('officename', 'option'); ?></span>
            </div>
        </div>
        <!-- ================== END INFO BLOCK ================ -->
    </div>

    <script async src='https://www.google.com/recaptcha/api.js'></script>
	<?php wp_footer(); ?>

</footer>
<!-- ================== END FOOTER ================ -->


</body>

</html>
