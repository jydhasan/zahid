<?php
/**
 *
 * @package Botega_Scratch_Theme
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>
<body>
         <?php
    if ( have_posts() ) : 
        while ( have_posts() ): 
            the_post(); ?>

    <div id="post-<?php the_ID(); ?>">
        <h2><?php the_title(); ?></h2>
        <div class="post-excerpt"><?php the_excerpt(); ?></div>
    </div>

    <?php endwhile;
    endif;
    ?>

</body>