<?php
/**
* @var $smarty
* @var $pdo
*
*/
include "../private_html/config.php";
include_once PRIVATE_PATH . "dbConfig.php";
include PRIVATE_PATH . "functions.php";

$artists = array();

if (!isset($_SESSION['logged']) || $_SESSION['logged'] == 0) {
    $_SESSION['page_to_load'] = "browseArtists.php";
    $smarty->display("userLogin.tpl");
} else {

    $sql = "SELECT Artist_ID, Artist_Name, Image_URL FROM Artist";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();


    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $artists[$row['Artist_Name']] = $row;
    }

    ksort($artists);
    $smarty->assign('artists', $artists);

    $smarty->display("browseArtists.tpl");
}