<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

    <?php

    // この下にfor文を書いてください
    for ($i = 51; $i <=100; $i++){
      echo $i;
      echo "<br>";
    }
    
    // while文を書いてください
    $i = 2;
    while($i <= 100){
      if($i % 2 == 0){
        echo $i;
      }
      
      $i += 2;
      echo"<br>";
    }
    // この下にfor文を書いてください
    for($i = 1; $i <= 1000; $i++){
      if($i % 3 == 0){
        continue;
      }
      echo $i;
      echo "<br>";
    }

    // この下にfor文を書いてください
    for($i = 1; $i <= 1000; $i++){
        if($i % 3 == 0){
            continue;
        }
        echo $i;
        echo "<br>";
    }
  
    $scores = array('数学' => 70, '英語' => 90, '国語' => 80);

    // この下にforeach文を書いてください
    foreach($scores as $key => $value){
      echo $key."は".$value."点です。";
    }
    
    ?>  

</body>
</html>