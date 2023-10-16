<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>kadai_016</title>
</head>

<body>
  <p>
    <?php
    //インスタンスを作成し出力する

    //クラスFoodを定義する
    class Food {
    //プロパティを定義する
     private $name;
     private $price;
  
//＄priceのプロパティの値を出力するshow_priceメソッドを定義する
public function set_price(int $price) {
  $this->price = $price;
}
public function show_price(){
  echo $this->price . '<br>';
}
  //コンストラクタを定義する
  public function __construct(string $name, int $price) {
    $this->name = $name;
    $this->price = $price;
  }  
}
   //インスタンス化する
  $food = new Food('potato', 250);

  
  //インスタンス$userの各プロパティの値を出力する
  print_r($food);
  //改行
  echo '<br>';
  
  //クラスAnimalを定義する
  class Animal {
    //プロパティを定義する
    private $name;
    private $height;
    private $weight;
 //$heightプロパティの値を出力するshow_heightメソッドを定義する
   public function set_height(int $height){
   $this->height = $height;
 }
 public function show_height() {
  echo $this->height . '<br>';
 }
   //コンストラクタを定義する
    public function __construct(string $name, int $height, int $weight){
      $this->name = $name;
      $this->weight = $weight;
      $this->height = $height;
    }
  }
  //インスタンス化する
  $animal = new Animal('dog',60, 5000);
  //インスタンス＄animalの各プロパティの値を出力
  print_r($animal);
  echo '<br>';

  //show_priceメソッドにアクセスし、値を出力する
  $food->set_price(250);
  $food->show_price();
  //show_heightメソッドにアクセスし、値を出力する
  $animal->set_height(60);
  $animal->show_height();
  ?>
  </p>

</body>
</html>