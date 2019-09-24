<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
//OPERATORY RZUTOWANIA
  //bool, int, flooat, string, array, object, unset
  $text = '123ssd';
  $x = (int)$text;
  echo $x."<br>"; //123
  $text1 = -1;
  $x1 = (bool)$text1;
  echo $x1."<br>"; //1

  $text2 = 10;
  $x2 = (unset)$text2;
  echo $x2."<br>"; //pusta
  echo gettype($x2)."<br>"; //NULL

  //rozmiar typu integer
  echo PHP_INT_SIZE."<br>"; //8 bajtow

  //kontrola typu zmiennych
$x = 10;
echo is_int($x)."<br>"; //TRUE (1)
echo is_string($x); //FALSE nic nie zwraca
echo is_bool($x); //jak wyzej
echo is_float($x); //false jw.
echo is_null($x),"<hr>"; //false

$w;
echo @$w; //notice
echo @gettype($w),"<hr>"; //NULL


//zmienne superglobalne
//$_GET, $_POST, $_COOKIE, $_FILES, $_SESSION, $_SERVER
echo $_SERVER['SERVER_PORT'],"<br>"; //:80
echo $_SERVER['SERVER_NAME'],"<br>"; //127.0.0.1
echo $_SERVER['SCRIPT_NAME'],"<br>"; //sciezka do plizku
echo $_SERVER['SERVER_PROTOCOL'],"<br>"; //protokol serwera
echo $_SERVER['DOCUMENT_ROOT'],"<br>"; //lokalizacja httdocs

$lokalPliku = $_SERVER['DOCUMENT_ROOT'];
$lokalPliku .= $_SERVER['SCRIPT_NAME'];
echo $lokalPliku,"<br><hr><br>"; //lokalizacja pliku

//stale
//stale z duzysz liter!!!!

define('NAZWISKO', 'Kowal');
echo NAZWISKO,"<br>";

define('imie', 'janusz');
echo imie,"<br>";

define('WIEK', 18, true); //dziala tylko do 8 wersji php
echo wiek;

//stale predefiniowane
echo "<br>",PHP_VERSION,"<br>"; //7.3.9
echo gettype(PHP_VERSION),"<br>"; // string
$ver = PHP_VERSION;
if($ver > 5.6) {
  echo "Nowy PHP<br>";
}else {
  echo "Stara wersja PHP<br>";
}






     ?>

  </body>
</html>
