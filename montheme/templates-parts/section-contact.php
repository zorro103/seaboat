

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
            <h3>FORMULAIRE DE CONTACT</h3>
            <form action="">

            <input type="text" name="email" placeholder="email"><br>
            <input type="text" name="username" placeholder="username"><br>
            <textarea name="message" placeholder="message" id="" cols="30" rows="10"></textarea>
           <button type="submit">SE CONNECTER</button>
       
            </form>
        </section>

  