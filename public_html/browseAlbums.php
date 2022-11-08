<?php
/**
 * @var $smarty
 * @var $pdo
 */
include "../private_html/config.php";
include_once PRIVATE_PATH . "dbConfig.php";

if (!isset($_SESSION['logged']) || $_SESSION['logged'] == 0) {
    $_SESSION['page_to_load'] = "browseAlbums.php";
    $smarty->display("userLogin.tpl");
} else {
    $albums = array();

    $sql = "SELECT Album_ID, Album_Name, Album.Image_URL, Release_Year, Artist_Name FROM Album JOIN Artist ON Artist_FK=Artist.Artist_ID";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    foreach ($stmt as $row) {
        $albums[] = $row;
    }

//print("<pre>".print_r($albums,true)."</pre>");
//organize albums alphabetically
    for ($i = 0; $i < count($albums); $i++) {
        for ($j = 0; $j < $i; $j++) {
            if (strtolower($albums[$i]['Album_Name'][0]) < strtolower($albums[$j]['Album_Name'][0])) {
                $temp = $albums[$i];
                $albums[$i] = $albums[$j];
                $albums[$j] = $temp;
                break;
            }
        }
    }

//print("<pre>".print_r($albums,true)."</pre>");
    $smarty->assign('albums', $albums);

    $smarty->display("browseAlbums.tpl");
}