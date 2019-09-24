 <!DOCTYPE html>
 <html lang="pl">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
<?php
$number=1;
$_number=1;
$imię=1;
$Imię=1;
  echo '$number';
  echo "$number";


  //typy danych

  //boolean
  $prawda = true;
  $falsz = false;

  //integer
  $calkowita = 100;
  $szesnastkowa = 0xA;
  echo "<br>$szesnastkowa";
  $osemkowa = 010;
  echo '<br>'.$osemkowa;
  $binarna = 0b1010;
  echo '<br>',$binarna;

//skladnia heredoc
  $imie = 'Janusz';
  $wiek = 18;
  $napis = <<< TEKST
  <hr>
  Masz na imię: $imie<br>
  Twój wiek: $wiek
  <hr>
  TEKST;
  echo $napis;

  echo <<< T
  Janusz<br>
  T;

  //skladnia novadock
  $x = 'Anna';
  echo <<< K
  <hr>Imię: $x<hr>
  K;


  echo "Zmienna o nazwie \$x ma wartosc $x"
?>
   </body>
 </html>
