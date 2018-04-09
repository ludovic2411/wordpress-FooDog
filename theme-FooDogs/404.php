<?php

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
 <link rel="stylesheet" href="style.css">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
 <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Raleway" rel="stylesheet">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <section class="container-404">
       <div class="title-404">
     <h1>404</h1>
     <p>It looks like nothing was found at this location. Maybe try a search?</p>
      </div>
        <div class="form-404">
          <form class="search-form" action="index.php" method="post">
            <div class="inputs-404">
            <input class="text" type="text" name="search" value="" placeholder="Search and hit enter">
            <input class="submit" type="submit" name="submit" value="">
          </div>
          </form>
        </div>
   </section>
   <?php get_footer(); ?>
   </body>
 </html>
