
    

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MON PROJET WORDPRESS </title>
     <h1>
    <?php wp_head() ?>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/monstyle.css">

</head>
<body>
<div class="container">
    <header>
 
    
    <nav class="menu">
    <img id="logo" style="width:100px; height:100px"; src="<?php echo get_template_directory_uri() ?> /assets/img/logo.png">
           <a href="http://localhost/dev/coder/seaboat/">Accueil</a>
           <a href="reservation.php">Reservation</a>
           <a href="prestation.php">Prestation</a>
           <a href="new-contact">Contact</a>
           <a href="location.php">Location</a>
           <a id="A" href="#">Carte</a>
        </nav>

    </header>

  


  </div>
