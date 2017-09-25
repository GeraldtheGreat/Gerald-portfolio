<?php
/**
* Template Name:Example of Template
*/
// why does template name know what to display
?>
<?php if ( have_posts() ): ?>
    <?php while ( have_posts() ): ?>
        <?php the_post(); ?>
            <<section class="banner-example">
                <?php the_title(); ?>
                <?php the_content (); ?>
                <?php if (has_post_thumbnail () ): ?>
                <?php the_post_thumbnail(); ?>
<?php endif; ?>
                <<h3>Gerald is amazing</h3>
            </section>
    <?php endwhile; ?>
<?php endif; ?>
<?php // if a while loop or if use a colon if not semi colon ?>