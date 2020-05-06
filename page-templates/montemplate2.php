<?php
/**
 * Template Name: MON TEMPLATE 2
 */

// DANS CE TEMPLATE
// JE VAIS UTILISER LE header ET LE footer DU THEME PARENT
// ET AU MILIEU, JE PEUX CODER CE QUE JE VEUX... 

get_header();

?>

<section>
    <h3>TITRE DE MA SECTION</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur hic inventore at assumenda neque delectus aut ratione sit nihil? Atque, unde excepturi accusantium sapiente accusamus modi beatae voluptatem quasi in?</p>
    <?php echo date("H:i:s") ?>
</section>

<section>
    <h3>TITRE DE MA SECTION</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur hic inventore at assumenda neque delectus aut ratione sit nihil? Atque, unde excepturi accusantium sapiente accusamus modi beatae voluptatem quasi in?</p>
    <?php echo date("H:i:s") ?>
</section>

<section>
    <h3>TITRE DE MA SECTION</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur hic inventore at assumenda neque delectus aut ratione sit nihil? Atque, unde excepturi accusantium sapiente accusamus modi beatae voluptatem quasi in?</p>
    <?php echo date("H:i:s") ?>
</section>

<section>
    <h3>TITRE DE MA SECTION</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur hic inventore at assumenda neque delectus aut ratione sit nihil? Atque, unde excepturi accusantium sapiente accusamus modi beatae voluptatem quasi in?</p>
    <?php echo date("H:i:s") ?>
</section>

<section>
    <h3>TITRE DE MA SECTION</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur hic inventore at assumenda neque delectus aut ratione sit nihil? Atque, unde excepturi accusantium sapiente accusamus modi beatae voluptatem quasi in?</p>
    <?php echo date("H:i:s") ?>
</section>

<div id="app">
  {{ message }}
</div>

<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script>
    var app = new Vue({
  el: '#app',
  data: {
    message: 'Hello Vue!'
  }
})
</script>
<?php
get_footer();