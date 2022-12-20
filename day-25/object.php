<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    class Fruit{
        //properties
        public $name;
        public $color;

        // methods
        function get_fruit_name(){
           return $this->name ;
        }
        function set_fruit_name($x){
            $this->name = $x;
        }
        function get_fruit_color(){
            return $this->color;
        }
        function set_fruit_color($x){
            $this->color = $x;
    }
}
    $apple = new Fruit();
    $banana = new Fruit();
    $watermalon = new Fruit();
    $pineapple = new Fruit();
    $orange = new Fruit();

    $apple->set_fruit_name("apple");
    $apple->set_fruit_color("green");

    $banana->set_fruit_name("banana");
    $banana->set_fruit_color("yellow");

    $watermalon->set_fruit_name("watermalon");
    $watermalon->set_fruit_color("red");

    
    $pineapple->set_fruit_name("pineapple");
    $pineapple->set_fruit_color("yellow");

    $orange->set_fruit_name("orange");
    $orange->set_fruit_color("orange");

    echo $apple->get_fruit_name();
    echo "<br>";
    echo $apple->get_fruit_color();
    echo "<br>";

    echo $banana->get_fruit_name();
    echo "<br>";
    echo $banana->get_fruit_color();
    echo "<br>";

    echo $watermalon->get_fruit_name();
    echo "<br>";
    echo $watermalon->get_fruit_color();
    echo"<br>";

    echo $orange->get_fruit_name();
    echo "<br>";
    echo $orange->get_fruit_color();
    echo"<br>";

    echo $pineapple->get_fruit_name();
    echo "<br>";
    echo $pineapple->get_fruit_color();




   
  
    ?>
</body>
</html>