<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP課題015</title>
</head>
<body>
  <?php
  class Food{
    private $name;
    public $price;

    public function __construct(string $name, int $price){
      $this->name = $name;
      $this->price = $price;
    }
  }
  $food = new Food('バナナ','250') ;

  print_r($food) .'<br>';
  echo '<br>';

  class Animal{
    private $name;
    private $height;
    public $weight;

    public function __construct(string $name, int $height, int $weight ){
      $this->name = $name;
      $this->height = $height;
      $this->weight = $weight;
    }
  }

  $animal = new Animal('cat','50','5000');

  print_r($animal) ;
  echo '<br>';


  echo $food->price .'<br>';
  echo $animal->weight;

  
  ?>
</body>
</html>