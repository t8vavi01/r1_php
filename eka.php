<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP esimerkki</title>
  </head>
  <body>
    <h1>PHP esimerkkejä</h1>
    <p>
      PHP-koodia voidaan kirjoittaa html-koodien sisään.
      php lohko alkaa merkeillä "pienempi kuin ja kysymysmerkki ja php".
    </p>
    <p>
      <?php
      $name="Jim";
      echo 'nimi ='.$name;
      echo '<br>';
      echo "nimi = $name";
      ?>
    </p>
    <h2>Array</h2>
    <?php
      $fnames=array('Jussi', 'Liisa', 'Mauno');
      $names=array(
        array('Jussi', 'Virta'),
        array('Liisa', 'Järvi'),
        array('Mauno', 'Joki')
      );
     ?>
     <h3>Arrayn tulostaminen</h3>
     <p>
       print_r-funktiolla voidaan tulostaa kaikki taulukon alkiot.
     </p>
     <p>
       taulukon fnames-alkiot ovat : <br>
       <?php print_r($fnames); ?>
     </p>
     <p>
       taulukon names-alkoit ovat : <br>
       <?php print_r($names); ?>
     </p>
     <p>
       Alkio (0,0) = <?php echo $names[0][0]; ?>
     </p>
     <h2>Associative array</h2>
     <p>
       Assosiatiivinen array tarkoittaa, että sarakkeet on nimetty.
     </p>
     <?php
        $a_names=array(
          array("fn"=>'Jussi', "ln"=>'Virta'),
          array("fn"=>'Liisa', "ln"=>'Joki'),
          array("fn"=>'Mauno', "ln"=>'Järvi')
        );
      ?>
      <p>
        tulostus print_r-funktiolla <br>
        <?php print_r($a_names); ?>
      </p>
      <p>
        Siistimpi tulostaminen voidaan tehdä foreach-silmukalla. <br>
        <ul>
          <?php
          foreach ($a_names as $row) {
            echo '<li>'.$row['fn'].' '.$row['ln'].'</li>';
          }
           ?>
        </ul>
      </p>
      <p>
        Tai sitten taulukkona: <br>
        <table border="1">
          <thead>
            <tr>
              <th>Etunimi</th><th>Sukunimi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Teppo</td><td>Testi</td>
            </tr>
            <?php
            foreach ($a_names as $row) {
              echo '<tr>';
              echo '<td>'.$row['fn'].'</td> <td>'.$row['ln'].'</td>';
              echo '</tr>';
            }
             ?>
          </tbody>
        </table>
      </p>
  </body>
</html>
