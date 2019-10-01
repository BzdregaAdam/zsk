<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    $tekst = <<< TEKST
    zsk - Zespół
    szkół
    komunikacji
    TEKST;

    echo "Przed wywołaniem funkcji nl2br: <br> $tekst";
    echo "Po wywołaniu funkcji nl2br: <br>";

    echo nl2br($tekst),"<hr><br>";

    //zamiana na male literki
    echo strtolower($tekst),"<br>";
    //zamiana na wielkie literki
    echo strtoupper($tekst),"<br><br>";
    //zamiana pierwszej litery na dużą
    $imiona = "anna agnieSZka tomasz";
    echo ucfirst($imiona),"<br>";
    //zamiana wszystkich pierwszych liter na duze
    echo ucwords($imiona),"<br>";

    $lorem = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
    $kolumna = wordwrap($lorem, 40, '<br>');
    echo $kolumna,"<br>";


    //czyscimy zawartosc bufora (to co bylo na gorze)
    ob_clean();

    //usuwanie bialych znakow (do pobierania danych z formularzy)
    $name = "Kasia";
    $name1 = "  Kasia ";

    echo "Długość zmiennej \$name: ",strlen($name),"<br>";
    echo "Długość zmiennej \$name1: ",strlen($name1),"<br>";
    //czyscimy znaki biale z lewej strony
    echo strlen(ltrim($name1)),"<br>"; //6
    echo strlen(rtrim($name1)),"<br>" ; //7
    echo strlen(trim($name1)),"<br>" ; //5

    //przeszukiwanie ciagu znakow
    $address = 'Poznań, ul. Fredry 13, tel. (61) 445-44-58';
    $search = strstr($address, 'tel'); //tel. (61) 445-44-58
    echo $search,'<hr>';

    $address1 = 'Poznań, ul. Fredry 13, tel. (61) 445-44-58';
    $search1 = strstr($address1, 'tel', true ); //jakby reverse wyswietla do momentu znalezienia tel (jak jest true) Poznań, ul. Fredry 13,
    echo $search1,'<hr>';
    //nie rozroznia znakow (tel a Tel)
    $address3 = 'Poznań, ul. Fredry 13, tel. (61) 445-44-58';
    $search3 = stristr($address3, 'Tel'); //tel. (61) 445-44-58
    echo $search3,'<hr>';

    //mozna przeszukiwac tez po znakach z kodu ASCII
    $mail = strstr('zsk@gmail.com', '@');
    echo $mail,'<br>'; //@gmail.com
    $mail2 = strstr('zsk@gmail.com', 64); //@==64 (ascii)
    echo $mail2,'<br>'; //@gmail.com

    $ciag1 = 'a';
    $ciag2 = 'aa';

    echo strcmp($ciag1, $ciag2),"<br>"; //-1
    echo strcmp('zzz', 'zzz'),"<br>"; //0
    echo strcmp('zza', 'zzz'),"<br>"; //-1
    echo strcmp('zzz', 'zza'),"<br>"; //1
    echo strcmp('zzza', 'zzz'),"<br>"; //1

    //pozycja
    $poz = strpos('abcdefg', 'cde');
    echo $poz,"<br>";//2
    $poz2 = strpos('abcdabc', 'abc');
    echo $poz2,"<br>";//0

    //zad1.
    $text1 = 'abcdabcd';
    $text2 = 'ab';
    $wynik = strpos($text1, $text2);
    echo $wynik,'<br>';
    if($wynik===null)  { //if(strpos($text1, $text2) === false)
      echo "String 2 nie zostal znaleziony w string 1";
    }else echo "String 2 zostal znaleziony w string 1","<br>";

      //przetwarzanie ciagow znakow
      $replace = str_replace('%name%', 'Janusz', 'Mam na imie: %name%');
      echo $replace,'<br>';

      //substr
      $surname = substr('Janusz Kowalski', 2);
      echo $surname,"<br>"; //nusz Kowalski

      $surname1 = substr('Janusz Kowalski', 7, 5);
      echo $surname1,'<br>'; //Kowal

      //zamiana polskich znakow
      $login = "bączek";
      $censure = array('ą', 'ę', 'ś', 'ć', 'ż', 'ź', 'ń', 'ó', 'ł');
      $replace2 = array('a', 'e', 's', 'c', 'z', 'z', 'n', 'o', 'l');
      $newLogin = str_replace($censure, $replace2, $login);
      echo $newLogin,'<br>'; //baczek

      //czyszczenie bufora
      ob_clean();
      //napisz aplikacje cenzurujaca zdanie podane przez uzytkownika.
      //Uzytkownik podaje dane w formularzu.
      echo <<< FORM
      <form method="post">
        <input type="text" name="dane" placeholder="Wpisz zdanie"><br><br>
        <input type="submit" name="" value="Zatwierdź">
      </form>
      FORM;

      if(isset($_POST['dane'])) {
          $data = $_POST['dane'];
          //echo $data;

          $niedozwolona = array('czarny', 'biały');
          $zamiana = ' ##### ';
          $correct = str_ireplace($niedozwolona, $zamiana, $data);
          echo "<h6>Błędne dane: $data<h6>";
          echo "<h2>Poprawne dane: $correct<h2>";
      }



     ?>

  </body>
</html>
