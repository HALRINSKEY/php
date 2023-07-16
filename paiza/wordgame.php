<?php

$info = explode(' ',trim(fgets(STDIN)));

$word_list = [];
for($k = 0; $k < $info[1]; $k++){
    $word_list[] = trim(fgets(STDIN));
}

$used_word = [];
$player = 1;
for($m = 0; $m < $info[2]; $m++){
    $word = trim(fgets(STDIN));
    if (in_array($word,$used_word)){
        
    }
    $used_word = $word;
}







?>