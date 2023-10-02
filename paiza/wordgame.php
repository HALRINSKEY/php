<?php

$info = explode(' ',trim(fgets(STDIN))); #0:人数N　1:単語の数K　2:しりとりの回数M

$word_list = [];
for($k = 0; $k < $info[1]; $k++){
    $word_list[] = trim(fgets(STDIN));
}

$used_word = [];
$ban_list = [];
$before_word = 0;
$player = 1;
for($m = 0; $m < $info[2]; $m++){
    $word = trim(fgets(STDIN));

    
    if ($before_word == 0){#初回
        if ( in_array($word,$used_word) or !(in_array($word,$word_list)) ){#使用済みチェック #単語リストチェック
            $ban_list[] = $player;
            continue;
        }
    
    }else{
        if (substr($before_word, -1) != substr($word, -1)){#語尾チェック
            $ban_list[] = $player;
            $before_word = 0;
            continue;
        }

        if ( in_array($word,$used_word) or !(in_array($word,$word_list)) ){#使用済みチェック #単語リストチェック
            $ban_list[] = $player;
            $before_word = 0;
            continue;
        }
    }
    
    $before_word = $word;
    $used_word = $word;

}







?>