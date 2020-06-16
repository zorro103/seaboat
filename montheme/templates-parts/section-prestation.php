
<section>
    <?php

//BOUCLE PRINCIPAL 
//PROGRAMMATION FONCTIONNELLE 

//ON FAIT APPEL A DES FONCTION have_posts

//FAIT REQUETE SUR LA BASE DE DONNE SQL 

 if ( have_posts() ) : ?>

    <?php while ( have_posts() ) : the_post();// FAIT LE CODE PHP FETCHALL  ?>

        <article>
            <h2><?php the_title()?> </h2>

            <?php the_post_thumbnail();?> <!-- pour rajouter une photo -->
            
            <div><?php the_content() ?></div>
            
        </article>

    <?php endwhile; ?> 
<?php endif; ?>

</section>


<section>
<h1>BOUCLE MULTIPLE POUR AFFICHER SEULEMENT LES ARTICLES DANS LA CATEGORIE  SPORT</h1>
<div class="listarticle">


<?php

$args = [ 
    "posts_per_page"     => 4,
    "category_name"      => "",
 ]; 

 $the_query = new WP_Query( $args ); 

// ON APPELLE DES METHODES AVEC L'OBJET have_posts
if ( $the_query->have_posts() ) : 
    // Start the Loop 
    while ( $the_query->have_posts() ) : $the_query->the_post(); 
?>    
      <article>
         <?php the_post_thumbnail() ?>
        <h3><?php the_title() ?></h3>
        <h4>DATE DU MATCH:<?php echo post_custom("date-match") ?></h4>
       <h3><?php echo post_custom("prix")?></h3>
       <?php echo the_field("prix")?>
        <div><?php the_content() ?></div>
</article>
<?php        
    // End the Loop d
    endwhile; 
else: 
// If no posts match this query, output this text. 
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); 
endif; 
 
wp_reset_postdata(); 
?>
           </div>
        </section>