<?php get_header(); ?>
<div class="row">
        <div class="small-100 columns" role="main">
            <?php do_action('foundationPress_before_content'); ?>
            <h1><?php the_title(); ?></h1>
            <p><?php the_field('title'); ?></p>
            <p><?php the_field('sub-title'); ?></p>
            <p><?php the_field('opening_paragraph'); ?></p>
            <ul>
            <?php
                if( have_rows('ingredients') ):
                    while ( have_rows('ingredients') ) : the_row();
                        ?><li><?php the_sub_field("ingredient")?></li>
                    <?php endwhile;
                else :
                    // no rows
                endif;
            ?>
            </ul>
            <p>
            <?php

            if( have_rows('preperation')):
                while ( have_rows('preperation')) : the_row();
                    ?><li><?php the_sub_field("step")?></li>
                <?php endwhile;
            else :
                // no rows
            endif;

            ?>
            </p>
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

                            if( have_rows('preperation_image')):
                                while ( have_rows('preperation_image')) : the_row();
                                    $image = get_sub_field('image_step');
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
            <p>
                <?php the_field('closing_paragraph'); ?>
            </p>

        <?php do_action('foundationPress_after_content'); ?>
    </div>
</div>
<?php get_footer(); ?>
