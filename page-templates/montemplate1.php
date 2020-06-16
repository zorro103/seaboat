<?php
/**
 * Template Name: MON TEMPLATE 1
 */

// DANS CE TEMPLATE
// JE VAIS UTILISER LE header ET LE footer DU THEME PARENT
// ET AU MILIEU, JE PEUX CODER CE QUE JE VEUX... 


   

?>
<?php

get_header();
?>
   


   <?php
 if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>

        <article>
            <h2><?php the_title()?> </h2>

            <?php the_post_thumbnail();?>
            
            <div><?php the_content() ?></div>
            
        </article>

    <?php endwhile; ?> 
<?php endif; ?>
<?php 