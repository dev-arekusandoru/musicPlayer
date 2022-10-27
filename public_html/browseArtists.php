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

$stmt = $pdo->query("SELECT Artist_ID, Artist_Name, Image_URL FROM Artist");
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $artists[] = $row;
}

$artists = alphabetizeArtists($artists);



//print("<pre>".print_r($artists,true)."</pre>");
$smarty->assign('artists', $artists);

$smarty->display("browseArtists.tpl");
