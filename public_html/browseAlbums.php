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
        $albums[$row['Album_Name']] = $row;
    }

//print("<pre>".print_r($albums,true)."</pre>");
//organize albums alphabetically
    ksort($albums);

//print("<pre>".print_r($albums,true)."</pre>");
    $smarty->assign('albums', $albums);

    $smarty->display("browseAlbums.tpl");
}