<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <?php
  if(!empty($_GET['country'])) {
    echo "ok";

  }else{

  ?>
<form method="get">
  <input type="text" name="country" placeholder="Podaj kraj">
  <input type="submit" name="" value="Zatwierdz">
</form>

<?php  } ?>
  </body>
</html>
