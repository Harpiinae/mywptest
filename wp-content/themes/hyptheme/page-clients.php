<?php
/**
 *   Template Name: gallery of clients
 **/


?>
<div class="clientWrap">
    <div class="clientInner">
        <div class="topTitle">
            <img src="<?php echo get_bloginfo('template_url')?>/dist/img/circlesClient.png" alt="">
            <span style="font-size: 2rem;">Наши клиенты</span>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <?php
                    $count = 0;
                    $images = get_field('client_gallery');

                    if( $images ):
                        foreach( $images as $image ):
//                            if ($count % 6 == 0) {
//                            ?>
<!--                            <div class="row">-->
<!--                                --><?php
//                            }?>
                                <div class="col-xs-4 col-sm-2 col-md-2">
                                    <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="">
                                </div>

<!--                            --><?php
//                                $count++;
//                                if ($count % 6 == 0) {
//                            ?>
<!--                            </div>-->
<!--                            --><?php
//                                }
                        endforeach;
                    endif;
                ?>
            </div>
        </div>
    </div>
</div>