<?php
/**
 * Template Name: MON TEMPLATE 3
 */

get_header();

?>

<div class="pg">

    <section class="paire">
        <div class="col-1">
            <h1>SeaBoat</h1>
            <p>Location de Bateaux</p>
        </div>
        <div class="col-2">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>../assets/img/asset_seaboat.png" alt="illu"> 
        </div>
    </section>
        <h2>Présentation</h3>
    <section class="impaire">
    <div class="col-1">
        <h3>Nos Bateaux</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur hic inventore at assumenda neque delectus aut ratione sit nihil? Atque, unde excepturi accusantium sapiente accusamus modi beatae voluptatem quasi in?</p>
    </div>
    <div class="col-2">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>../assets/img/ph1.jpg" width="300" height="300"/>
    </div>
    </section>
    
    <section class="paire">
    <div class="col-1">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>../assets/img/ph2.jpg" width="300" height="300"/>
    </div>
    <div class="col-2">
        <h3>Nos Skippers</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur hic inventore at assumenda neque delectus aut ratione sit nihil? Atque, unde excepturi accusantium sapiente accusamus modi beatae voluptatem quasi in?</p>
    </div>
    </section>

    <section class="impaire">
        <div class="col-1">
            <h3>SeaBoat</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur hic inventore at assumenda neque delectus aut ratione sit nihil? Atque, unde excepturi accusantium sapiente accusamus modi beatae voluptatem quasi in?</p>
        </div>
        <div class="col-2">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>../assets/img/ph6.jpg" width="300" height="300"/>
        </div>
    </section>

    <section class="paire">
        <div class="col-1">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>../assets/img/ph2.jpg" width="300" height="300"/>
        </div>
        <div class="col-2">
            <h3>Francois Saccoman</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur hic inventore at assumenda neque delectus aut ratione sit nihil? Atque, unde excepturi accusantium sapiente accusamus modi beatae voluptatem quasi in?</p>
        </div>
    </section>
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