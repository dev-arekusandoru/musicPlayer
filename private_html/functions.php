<?php

function sortAlbumsByYear($albums) {
    //organize artists alphabetically
    for($i = 0; $i < count($albums); $i++) {
        for($j = 0; $j < $i; $j++) {
            if ($albums[$i]['Release_Year'] < $albums[$j]['Release_Year']) {
                $temp = $albums[$i];
                $albums[$i] = $albums[$j];
                $albums[$j] = $temp;
                break;
            }
        }
    }
    return $albums;
}
