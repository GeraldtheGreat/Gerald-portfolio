<?php
/**
 * Template Name: Home Template
 */
?>
<?php
    echo '<h1></h1>';
?>
<h1>Resume Portfolio Contact</h1>
<h1> Gerald Dortichon </h1>
<p> Hi, my name is Gerald Dortichon and I am a web developer and spoken word enthusiast. I am dedicated to bringing creativity and professionalism to website creation and design </p>
<section class="home-banner">
<?php // Always start your WP Loop ?>
<?php while (have_posts()) : ?>
    <?php the_post(); ?>
    <?php // can use this for my banner image ?>
    <?php // the featured image attached to all Posts / Pages are rendered using the_post_thumbnail function ?>
    <?php the_post_thumbnail(); ?>
    <?php // the content in the WYSIWYG Editor ?>
    <?php the_content(); ?>
<?php endwhile; ?>
</section>