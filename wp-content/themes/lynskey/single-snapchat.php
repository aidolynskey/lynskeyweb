<?php get_header(); ?>
<section class="snapchat">
    <div class="row">
        <div class="small-100 columns" role="main">
            <?php do_action('foundationPress_before_content'); ?>
            <h1><?php the_title(); ?></h1>
            <h2><i class="fi-social-snapchat"></i> <?php the_field('title'); ?> <i class="fi-social-snapchat"></i></h2>
            <h3><?php the_field('sub-title'); ?></h3>
            <p><?php the_field('opening_paragraph'); ?></p>
            <div class="featured-image">
                <?php the_post_thumbnail( ); ?>
            </div>
            <div class="clearing-assembled">
                <div class="">
                    <a href="#" class="clearing-close">×</a>
                    <div class="visible-img" style="display: none;">
                        <div class="clearing-touch-label" style="margin-left: 0px; margin-top: -340.5px;"></div>
                        <img src="../assets/img/examples/space.jpg" alt="" data-interchange="" style="visibility: visible;">
                        <p class="clearing-caption">caption 2 here...</p>
                        <a href="#" class="clearing-main-prev"><span></span></a>
                        <a href="#" class="clearing-main-next"><span></span></a>
                    </div>
                    <img class="clearing-preload-next" style="display: none" src="../assets/img/examples/earth.jpg" alt="" data-interchange="">
                    <img class="clearing-preload-prev" style="display: none" src="../assets/img/examples/comet.jpg" alt="" data-interchange="">
                    <div class="carousel">
                        <ul class="clearing-thumbs small-block-grid-4" data-clearing="" style="">
                            <?php

                            if( have_rows('images')):
                                while ( have_rows('images')) : the_row();
                                    $image = get_sub_field('image');
                                    if( !empty($image) ): ?>
                                        <li class="">
                                            <a class="th" href="<?php echo $image['url']; ?>">
                                                <img data-caption="<?php echo $image['title']; ?>" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a></li>
                                            </a>
                                        </li>
                                    <?php endif;
                                endwhile;
                            else :
                                // no rows
                            endif;
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="clearing-assembled">
                <div class="">
                    <a href="#" class="clearing-close">×</a>
                    <div class="visible-img" style="display: none;">
                        <div class="clearing-touch-label" style="margin-left: 0px; margin-top: -340.5px;"></div>
                        <img src="../assets/img/examples/space.jpg" alt="" data-interchange="" style="visibility: visible;">
                        <p class="clearing-caption">caption 2 here...</p>
                        <a href="#" class="clearing-main-prev"><span></span></a>
                        <a href="#" class="clearing-main-next"><span></span></a>
                    </div>
                    <img class="clearing-preload-next" style="display: none" src="../assets/img/examples/earth.jpg" alt="" data-interchange="">
                    <img class="clearing-preload-prev" style="display: none" src="../assets/img/examples/comet.jpg" alt="" data-interchange="">
                    <div class="carousel">
                        <ul class="clearing-thumbs small-block-grid-4" data-clearing="" style="">
                            <?php

                            if( have_rows('videos')):
                                while ( have_rows('videos')) : the_row();
                                    the_sub_field('video');
                                endwhile;
                            else :
                                // no rows
                            endif;
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="featured-video">
                <?php the_field('feature-video'); ?>
            </div>
            <p>
                <?php the_field('closing_paragraph'); ?>
            </p>

            <?php do_action('foundationPress_after_content'); ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>
