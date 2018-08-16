<!-- ================== BLOG ================ -->
<div class="blogWrap">
    <div class="postInner">
        <div class="topTitle">
            <img src="<?php echo get_bloginfo('template_url')?>/dist/img/circlesBlog.png" alt="">
            <span style="font-size: 1.8rem;">Наш блог</span>
        </div>
        <!-- ================== BLOG POSTS ================ -->
        <!-- ================== POST #1 ================ -->
        <div class="row">
            <div class="col-xs-12 col-md-12 postContainer">
                <?php $args = array(
                    'numberposts' => 1,
                    'category_name' => 'HTML/CSS'
                ); ?>
                <?php $lastpost = get_posts($args); ?>
                <?php if($lastpost) {
                    foreach ($lastpost as $post) :
                        setup_postdata($post); ?>

                    <div class="row">
                        <div class="col-xs-12 col-md-8 col-lg-8">
                            <div class="myImgBig img-responsive" style="background: url('<?php echo the_post_thumbnail_url(); ?>');background-repeat: no-repeat;background-size: cover;background-position: center center; border-bottom-left-radius: 5px; border-top-left-radius: 5px;"></div>
                        </div>
                        <div class="col-xs-12 col-md-4 col-lg-4">
                            <div class="innerInfo" style="border-top-right-radius: 5px; border-bottom-right-radius: 5px;">
                                <span class="title"><?php echo the_title(); ?></span>
                                <span class="info"><?php echo the_excerpt(); ?></span>
                                <button class="postbtn like"><i class="far fa-thumbs-up"></i></button>
                                <button class="postbtn twitter"><i class="fab fa-twitter"></i></button>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;
                    wp_reset_postdata();
                } ?>
            </div>
        </div>
        <!-- ================== END POST #1 ================ -->

        <!-- ================== POST #2 ================ -->
        <div class="row">
            <div class="col-xs-12 col-md-8 postContainer postMiddle">
                <?php $args = array(
                    'numberposts' => 1,
                    'category_name' => 'blog'
                ); ?>
                <?php $lastpost = get_posts($args); ?>
                <?php if($lastpost) {
                    foreach ($lastpost as $post) :
                        setup_postdata($post); ?>
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                                <div class="myImgBig img-responsive" style="background: url('<?php echo the_post_thumbnail_url(); ?>');background-repeat: no-repeat;background-size: cover;background-position: center center; border-bottom-left-radius: 5px; border-top-left-radius: 5px;"></div>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <div class="innerInfo" style="border-top-right-radius: 5px; border-bottom-right-radius: 5px;">
                                    <span class="title"><?php echo the_title(); ?></span>
                                    <span class="info"><?php echo the_excerpt(); ?></span>
                                    <button class="postbtn like"><i class="far fa-thumbs-up"></i></button>
                                    <button class="postbtn twitter"><i class="fab fa-twitter"></i></button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;
                    wp_reset_postdata();
                } ?>
            </div>
            <!-- ================== END POST #2 ================ -->

            <!-- ================== POST #3 ================ -->
            <div class="col-xs-12 col-md-4 postContainer">
                <?php $args = array(
                    'numberposts' => 1,
                    'category_name' => 'php'
                ); ?>
                <?php $lastpost = get_posts($args); ?>
                <?php if($lastpost) {
                    foreach ($lastpost as $post) :
                        setup_postdata($post); ?>
                        <div class="row withoutImg">
                            <div class="col-xs-12 col-md-12">
                                <div class="innerInfo" style="border-radius: 5px;">
                                    <span class="title"><?php echo the_title(); ?></span>
                                    <span class="info"><?php echo the_excerpt(); ?></span>
                                    <button class="postbtn like"><i class="far fa-thumbs-up"></i></button>
                                    <button class="postbtn twitter"><i class="fab fa-twitter"></i></button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;
                    wp_reset_postdata();
                } ?>
            </div>
        </div>
        <!-- ================== END POST #3 ================ -->

        <!-- ================== POST #4 ================ -->
        <div class="row">
            <div class="col-xs-12 col-md-12 postContainer reverseContainer">
                <?php $args = array(
                    'numberposts' => 1,
                    'category_name' => 'wordpress'
                ); ?>
                <?php $lastpost = get_posts($args); ?>
                <?php if($lastpost) {
                    foreach ($lastpost as $post) :
                        setup_postdata($post); ?>
                        <div class="row">
                            <div class="col-xs-12 col-md-6 col-lg-8">
                                <div class="innerInfo" style="border-top-left-radius: 5px; border-bottom-left-radius: 5px;">
                                    <span class="title"><?php echo the_title(); ?></span>
                                    <span class="info doucol"><?php echo the_excerpt(); ?></span>
                                    <button class="postbtn like"><i class="far fa-thumbs-up"></i></button>
                                    <button class="postbtn twitter"><i class="fab fa-twitter"></i></button>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-6 col-lg-4">
                                <div class="myImgBig img-responsive" style="background: url('<?php echo the_post_thumbnail_url(); ?>');background-repeat: no-repeat;background-size: cover;background-position: center center; border-bottom-right-radius: 5px; border-top-right-radius: 5px;"></div>
                            </div>
                        </div>
                    <?php endforeach;
                    wp_reset_postdata();
                } ?>
            </div>
        </div>
        <!-- ================== END POST #4 ================ -->
        <!-- ================== END BLOG POSTS ================ -->

        <a href="#" class="allPosts">Все статьи</a>
    </div>
</div>
<!-- ================== END BLOG ================ -->