<?php  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="CSS/sidebar-article-css.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Raleway" rel="stylesheet">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- la partie au dessus sera à supprimer à la fin -->
    <section class="sidebar">
      <h3>FOLLOW US</h3>
      <ul class="social">
        <a href="https://facebook.com/thefarmersdog"><li class="facebook"><span><i class="fab fa-facebook-f"></i></span></li></a>
        <a href="https://twitter.com/farmersdog"><li class="twitter"><span><i class="fab fa-twitter"></i></span></li></a>
        <a href="http://instagram.com/thefarmersdog"><li class="instagram"><span><i class="fab fa-instagram"></i></span></li></a>
        <a href="https://pinterest.com/thefarmersdog"><li class="pinterest"><span><i class="fab fa-pinterest-p"></i></span></li></a>
      </ul>
      <ul>
        <li class="calendar"><?//php get_calendar($initial=true, $echo=true); ?></li>
        <li class="sidebar-picture"><p><a href="index.php"><img src="pictures/sidebar-pictures/sidebar.jpg" alt=""></a></p></li>
        <li class="calendar"><?//php get_calendar($initial=true, $echo=true); ?></li>
      </ul>
    </section>
    <!--La partie en dessous sera également à supprimer -->
  </body>
</html>
