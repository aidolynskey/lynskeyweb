<?php get_header(); ?>
<div class="row">
    <div class="small-100 large-75 columns" role="main">
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
        <p>
        <?php

        if( have_rows('preperation_image')):
            while ( have_rows('preperation_image')) : the_row();
                ?><li><?php the_sub_field("image_step")?></li>
            <?php
                $image = get_sub_field('image_step');
                echo $image;
            endwhile;
        else :
            // no rows
        endif;

        if( have_rows('preperation_image')):
            while ( have_rows('preperation_image')) : the_row();
            $image = get_sub_field('image_step');
                if( !empty($image) ): ?>
                    <li><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></li>
                <?php endif;
            endwhile;
            else :
                // no rows
            endif;
        ?>
        </p>
        <p>
            <?php the_field('closing_paragraph'); ?>
        </p>

        <?php do_action('foundationPress_after_content'); ?>
    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
