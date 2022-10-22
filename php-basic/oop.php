<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Example</title>
</head>
<body>
        <?php
            class Fruit {
                
                public $name;
                public $color;
              
            
                function set_name($name) {
                  $this->name = $name;
                }
                function get_name() {
                  return $this->name;
                }
              }
              
              $banana = new Fruit();
              $orange = new Fruit();
              $banana->set_name('Banana');
              $orange->set_name('Orange');
              
              echo $Banana->get_name();
              echo "<br>";
              echo $orange->get_name();
        ?>
</body>
</html>