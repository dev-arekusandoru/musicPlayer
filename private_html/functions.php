<?php

function alphabetizeArtists($artists) {
    //organize artists alphabetically
    for($i = 0; $i < count($artists); $i++) {
        for($j = 0; $j < $i; $j++) {
            if (strtolower($artists[$i]['Artist_Name'][0]) < strtolower($artists[$j]['Artist_Name'][0])) {
                $temp = $artists[$i];
                $artists[$i] = $artists[$j];
                $artists[$j] = $temp;
                break;
            }
        }
    }
    return $artists;
}

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
