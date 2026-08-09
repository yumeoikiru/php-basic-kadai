<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // クラスを定義する
        class Food {
            // プロパティを定義する
            private $name;
            private $price;

            // コンストラクタを定義する
            public function __construct($name, $price) {
                $this->name = $name;
                $this->price = $price;
            }

            // priceプロパティを出力するメソッド
            public function show_price() {
                echo $this->price . '<br>';
            }
        }

        class Animal {
            // プロパティを定義する
            private $name;
            private $height;
            private $weight;

            // コンストラクタを定義する
            public function __construct($name, $height, $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            // heightプロパティを出力するメソッド
            public function show_height() {
                echo $this->height . '<br>';
            }
        }

        // Foodクラスのインスタンスを作成
        $food = new Food('potato', 250);
        print_r($food);
        echo '<br>';

        // Animalクラスのインスタンスを作成
        $animal = new Animal('dog', 60, 5000);
        print_r($animal);
        echo '<br>';

        // Food クラスのメソッドを呼び出して price の値を出力する
        $food->show_price();

        // Animal クラスのメソッドを呼び出して height の値を出力する
        $animal->show_height();
        ?>
    </p>
</body>

</html>