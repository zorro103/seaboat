<?php
/**
 * Template Name: MON TEMPLATE 1
 */

// DANS CE TEMPLATE
// JE VAIS UTILISER LE header ET LE footer DU THEME PARENT
// ET AU MILIEU, JE PEUX CODER CE QUE JE VEUX... 


get_header();

?>


  <div class="container1">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>../assets/img/ph5.jpg"/>
  <h3 class="centered">
    Location de bateau avec ou sans Skipper Cannes
  07 61 61 78 81
  francois@seaboat.fr</h3>
</div>


<section class="container">
    
    <article>
    <h3>PRESENTATION</h3>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>../assets/img/ph1.jpg" width="300" height="300"/>
 

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur hic inventore at assumenda neque delectus aut ratione sit nihil? Atque, unde excepturi accusantium sapiente accusamus modi beatae voluptatem quasi in?</p>
</article>



<article>

    <h3>Nos Bateaux</h3>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>../assets/img/ph1.jpg" width="300" height="300"/>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur hic inventore at assumenda neque delectus aut ratione sit nihil? Atque, unde excepturi accusantium sapiente accusamus modi beatae voluptatem quasi in?</p>
</article>
 
<article>

    <h3>Nos Skippers</h3>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>../assets/img/ph2.jpg" width="300" height="300"/>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur hic inventore at assumenda neque delectus aut ratione sit nihil? Atque, unde excepturi accusantium sapiente accusamus modi beatae voluptatem quasi in?</p>
</article>


      <article>
    <h3>Sea Boad</h3>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>../assets/img/ph6.jpg" width="300" height="300"/>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur hic inventore at assumenda neque delectus aut ratione sit nihil? Atque, unde excepturi accusantium sapiente accusamus modi beatae voluptatem quasi in?</p>
      </article>


<article>

    <h3>Francois Saccoman</h3>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>../assets/img/ph2.jpg" width="300" height="300"/>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur hic inventore at assumenda neque delectus aut ratione sit nihil? Atque, unde excepturi accusantium sapiente accusamus modi beatae voluptatem quasi in?</p>
</article>
</section>

<div class="gallery">
      
      <div class="words photo1"><img src="<?php echo get_stylesheet_directory_uri(); ?>../assets/img/ph5.jpg" /></div>
      <div class="words photo2"><img src="<?php echo get_stylesheet_directory_uri(); ?>../assets/img/ph8.jpg" /></div>
     
      <div class="words photo4"><img src="<?php echo get_stylesheet_directory_uri(); ?>../assets/img/ph5.jpg" /></div>
      <div class="words photo5"><img src="<?php echo get_stylesheet_directory_uri(); ?>../assets/img/ph4.jpg" /></div>
      </div>
      


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
const gallery = document.querySelectorAll('.words');

function toggleOpen() {
  console.log('Hello');
  this.classList.toggle('open');
}

function toggleActive(e) {
  console.log(e.propertyName);
  if (e.propertyName.includes('flex'))
   //WE MADE CONDICTION BECAUSE OF BROWSER CHROME {
    this.classList.toggle('open-active');
  }


gallery.forEach(photo => photo.addEventListener('click', toggleOpen));
gallery.forEach(photo => photo.addEventListener('transitionend', toggleActive));

</script>
<?php
get_footer();
?>
  
</body>
</html>