<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    //operatory
    $potega = 2**10;
    echo $potega,'<br>';

    //operatory bitowe: and &, or |, not ~, xor ^, przesuniecie bitowe w lewo >>, przesuniecie bitowe w prawo <<
    $dziesiec=0b1010;
    echo $dziesiec,'<br>'; //10(1010)
    $dziesiec = $dziesiec >> 1;
    echo $dziesiec,'<br>';//5(101)

    $dziesiec = $dziesiec << 2;
    echo $dziesiec,'<br>';//20(10100)

    //operatory logiczne
    //and, &&, or, ||, xor, negacja - !

    //sprawdź czy w sklepie kupisz rower, lub hulajnoge
    //otwarty, pieniadze, rower lub hulajnoga

    $sklep = 'otwarty';
    $pieniadze = 1800;
    $romet = true;
    $hulajnoga = false;

    if($sklep == 'otwarty' && $pieniadze > 1500 && ($romet || $hulajnoga)) {
      if ($romet) {
      echo "Kupiłeś rower!";
    }else if ($hulajnoga==true){
      echo "Kupiłeś hulajnogę!";
    }
    else {
      echo "Nic nie kupiles";
    }
  }

$a = 1.0;
$b = 1;

if($a===$b) {
  echo "<br>Identyczne";
}else {
  echo "<br>Rozne<br>";
}

$u = 1;
$i = 2.0;
$wynik = $u <=> $i;
echo $wynik;

echo '<br>'.gettype($u).'<br>'; //integer
echo '<br>'.gettype($i).'<br>'; //double

$x = 2;
echo $x++; //post inkrementacja 2
echo ++$x; //pre inkrementacja 4
echo $x; // 4
$y = $x++; //y=4 x=5
echo $y; //y=4
$y = ++$x; // y=5 x=6
echo $y; //6
echo ++$y; //7
     ?>


  </body>
</html>
