<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php

    $str = 'progate';

    // strlenを用いて$strの長さをechoしてください
    echo strlen($str);
    
    echo '<br>';
    
    $array = array('HTML', 'CSS', 'PHP');

    // countを用いて$arrayの要素数をechoしてください
    echo count($array);
    
    echo '<br>';
    
    // randを用いて10から15までのランダムな数字をechoしてください
    echo rand(10,15);
    
    // 関数helloを定義してください
    function hello(){
        echo "Hello, world!";
      }
      
      // 関数helloを呼び出してください
      hello();
      
      echo '<br>';
      // 関数printRectangleAreaを定義してください
      function printRectangleArea($height,$width){
        echo $height * $width;
      }
      
      // 引数を(5, 10)としてprintRectangleAreaを呼び出してください
      printRectangleArea(5,10);

    // 関数getCircleAreaを定義してください
    function getCircleArea($radius){
        return $radius * $radius * 3;
      }
      
      // 関数getCircleAreaを呼び出して、戻り値を変数$circleAreaに代入してください
      $circleArea = getCircleArea(5);
      echo $circleArea;
    
      // $circleAreaをechoしてください

  ?>

</body>
</html>