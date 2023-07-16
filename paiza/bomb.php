<?php

//$map_size = explode(' ',fgets(STDIN));  explode()区切り文字を配列へ
$map_size = array(5,8);

//$bomb_maps = [];

//for($j = 0; $j < $map_size[0]; $j++){
//    for($i = 0; $i < $map_size[1]; $i++){
//        $input = trim((string) fgets(STDIN));  
//       $bomb_maps[] = str_split($input);  str_split() 文字列を配列へ
//    }
//}

$input = array('.#.#....','........','........','........','.....#..');
$bomb_maps = [];

for($j = 0; $j < $map_size[0]; $j++){
    $bomb_maps[$j] = str_split($input[$j]);
}



for($j = 0; $j < $map_size[0]; $j++){
    for($i = 0; $i < $map_size[1]; $i++){
        if($bomb_maps[$j][$i] == "#"){
             for($y = 0; $y < $map_size[0]; $y++){
                if($bomb_maps[$y][$i] == "."){
                    $bomb_maps[$y][$i] = "!";
                }
             }

             for($x = 0; $x < $map_size[1]; $x++){
                if($bomb_maps[$j][$x] == "."){
                    $bomb_maps[$j][$x] = "!";
                }
             }
        }
    }
}

$count = 0;

for($j = 0; $j < $map_size[0]; $j++){
    for($i = 0; $i < $map_size[1]; $i++){
        if($bomb_maps[$j][$i] == "#" || $bomb_maps[$j][$i] == "!"){
            $count += 1;
        }
        echo $bomb_maps[$j][$i];
    }
    echo "\n";
}

echo $count;
?>
