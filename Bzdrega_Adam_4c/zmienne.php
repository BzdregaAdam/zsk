<!DOCTYPE html>
<html lang=pl dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Zmienne</title>
  </head>
  <body>
    <?php
      $dec = 11;
      $hex = 0x11;
      $oct = 011;
      $bin = 0b11;
      echo "$dec<br>$hex<br>$oct<br>$bin<br>";
      $imie = "Jan";
      $nazwisko = "Kowalski";
      echo <<< E
      $imie $nazwisko<br>
      E;
      echo <<< 'E'
      $imie $nazwisko<br>
      E;
      echo "nazwa zmiennej: \$imie, wartość zmiennej imie: $imie.<br>";
      $potega = 2**10;
      echo "$potega<br>";
      $x = 01010;
      $x = $x >> 1;
      echo "$x<br>";
      $x = $x << 2;
      echo "$x<br>";
      $a = 1;
      $b = 1.0;
      if($a == $b){
        echo "Identyczne<br>";
      }
      else{
        echo "Różne<br>";
      }
      if($a === $b){
        echo "Identyczne<br>";
      }
      else{
        echo "Różne<br>";
      }
      echo gettype($a),"<br>";
      echo gettype($b),"<br>";
      //////////////////////////////
      $x = 2;
      echo $x++;//2
      echo ++$x;//4
      echo $x;//4
      $y = $x++;
      echo $y;//4
      $y = ++$x;
      echo $y;//6
      echo ++$y;//7
      echo "<br>";
      //////////////////////////////
      $tekst1 = "4ssd";
      $tekst2 = "Drugi tekst";
      $tekst3 = "7";
      $num = 15;
      $j = -1;
      $c = 100;
      $x = (int)$tekst1;
      echo "$x<br>";
      $x = (bool)$j;
      echo "$x<br>";
      $c = (unset)$c;
      echo "$c<br>";
      echo gettype($c)."<br>";
      echo PHP_INT_SIZE;
    ?>
  </body>
</html>
