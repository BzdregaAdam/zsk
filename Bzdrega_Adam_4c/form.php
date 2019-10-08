<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form method="post">
      <input type="text" name="name" placeholder="Podaj imię"><br><br>
      <input type="number" name="age" placeholder="Podaj wiek"><br><br>
      <input type="submit" name="button" value="Zatwierdź"><br><br>

      <?php

      if(!empty($_POST['name']) && !empty($_POST['age'])) {
        $name = $_POST['name'];
        $age = $_POST['age'];
        echo "Przed poprawą: " . $name . " " . $age."<hr><br>";
        $name = trim($name);
        if(strlen($name)>10) {
          $name = substr($name, 0, 10);
        }
          $name = strtolower($name);
          $name = ucfirst($name);
          echo "Po poprawie: " . $name . " " .  $age . "<hr><br>";
      }
      echo <<< TABELA
      <br>
     <table>
     <tr><th>IMIĘ</th><th>WIEK</th></tr>
     <tr><td>$name</td><td>$age</td></tr>
     </table>
     TABELA;
        /* Zabezpiecz formularz przed podaniem błednych danych takich
        a) jak białe znaki,
        b) ogranicz ilość znaków do 10 dla imienia,
        c) 1 litera w imieniu ma być duża, a pozostałe małe,
        d) wyświetl dane w formacie
          Przed poprawą: ....
          Po zmianie: ....
        e) Dane poprawione wyświetl w tabeli z nagłówkami o nazwach: imię oraz wiek.
        */

       ?>
    </form>

  </body>
</html>
