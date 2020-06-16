
        <!-- BOUCLE -->
        <section>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>

        <article>
            <h2><?php the_title() ?></h2>
            <?php the_post_thumbnail();?>
            <div><?php the_content() ?></div>
        </article>

    <?php endwhile; ?> 
<?php endif; ?>
</div>
        </section>
        <section>
            
      <h1>SEA  BOAT</h1>
        </section>
    </main>
  