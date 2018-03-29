<?php
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="CSS/sidebar-css.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<!-- la partie au dessus sera à supprimer à la fin -->
<section class="sidebar">
  <ul>
    <li class="facebook"><p><a href="https://facebook.com/thefarmersdog"><i class="fab fa-facebook-f"> WE ARE ON FACEBOOK</i><span> LIKE</span></a></p></li>
    <li class="twitter"><p><a href="https://twitter.com/farmersdog"><i class="fab fa-twitter"> WE ARE ON TWITTER</i><span> FOLLOW</span></a></p></li>
    <li class="instagram"><p><a href="http://instagram.com/thefarmersdog"><i class="fab fa-instagram"> CHECKOUT OUR INSTAGRAM PAGE</i><span> FOLLOW</span></p></a></li>
    <li class="calendar"><?//php get_calendar($initial=true, $echo=true); ?></li>
    <li class="sidebar-picture"><p><a href="index.php"><img src="pictures/sidebar-pictures/sidebar.jpg" alt=""></a></p></li>
    <li class="calendar"><?//php get_calendar($initial=true, $echo=true); ?></li>
  </ul>
</section>
<!--La partie en dessous sera également à supprimer -->
  </body>
</html>
