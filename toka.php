<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Luokka ja olio</title>
  </head>
  <body>
    <h1>Luokka ja olio</h1>
    <?php
    class Cat {
      private $name;
      public function setName($value) {
        $this->name=$value;
      }
      public function getName(){
        return $this->name;
      }
    }
     ?>
     <p>
       Edellä luotiin luokka nimeltä Cat. Luodaan siitä olio
       nimeltä myCat.
       <?php
       $myCat = new Cat();
       $myCat->setName('Karvinen');
       echo 'Kissan nimi on '.$myCat->getName();
        ?>
     </p>
  </body>
</html>
